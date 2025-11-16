<?php
	
	
	// Добавляем возможность использовать миниатюры записей
	add_theme_support('post-thumbnails');
	
	
	// Изменяем количество символов в превью the_excerpt()
	add_filter( 'excerpt_length', function(){
		return 18;
	} );
	
	
	// Меняем окончание превью the_excerpt()
	add_filter('excerpt_more', function($more) {
		return '...';
	});
	
	
	
	
	// REGISTER POST TYPE
	add_action( 'init', 'register_post_types' );
	function register_post_types() {
		
		// Add thumbnails
		add_theme_support('post-thumbnails');
		
		// Тип записи - наши работы (портфолио)
		register_post_type( 'uslugi', [
			'label'  => null,
			'labels' => [
				'name'               => 'Услуги', // основное название для типа записи
				'singular_name'      => 'Услуга', // название для одной записи этого типа
				'add_new'            => 'Добавить услугу', // для добавления новой записи
				'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
				'new_item'           => 'Новая услуга', // текст новой записи
				'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
				'search_items'       => 'Искать услугу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Услуги', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','trackbacks','comments', 'thumbnail', 'custom-fields','revisions','page-attributes','post-formats', 'excerpt'
			'taxonomies'          => [],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}
	// END REGISTER POST TYPE
	
	
	
	
	/*** ОБНОВЛЕНИЕ THEME ***/
	add_filter('pre_set_site_transient_update_themes', 'check_custom_theme_updates');

	function check_custom_theme_updates($transient) {
		// Проверка, что это Multisite и пользователь — супер-админ
		if (!is_multisite() || !is_super_admin()) {
			return $transient;
		}
		
		$theme_slug = 'furniture'; // Имя папки темы
		$current_version = wp_get_theme()->get('Version');
		$update_server = 'https://site100.ru/wp-themes/site100/site100-updates.json';

		// Запрос к вашему серверу
		$response = wp_remote_get($update_server);

		if (!is_wp_error($response)) {
			$update_data = json_decode(wp_remote_retrieve_body($response));

			if (
				$update_data &&
				version_compare($current_version, $update_data->version, '<') &&
				!empty($update_data->download_url)
			) {
				$transient->response[$theme_slug] = array(
					'theme'       => $theme_slug,
					'new_version' => $update_data->version,
					'package'     => $update_data->download_url,
					'url'         => 'https://site100.ru/wp-themes/site100/changelog' // Опционально
				);
			}
		}
		
		return $transient;
	}
	/*** END ОБНОВЛЕНИЕ THEME ***/
	
	require_once get_template_directory() . '/inc/transliteration.php';


	// Запуск сессий для WordPress
	function start_session() {
			if (!session_id()) {
					session_start();
			}
	}
	add_action('init', 'start_session', 1);




/*** ДОБАВЛЯЕМ ВОЗМОЖНОСТЬ В НАСТРОЙКАХ ТЕМЫ ДОБАВИТЬ КОНТАКТЫ И КОД СЧЕТЧИКА ***/
function mytheme_customize_register($wp_customize)
{
    // Добавляем секцию
    $wp_customize->add_section('mytheme_analytics', array(
        'title' => 'Аналитика и счетчики',
        'priority' => 200,
    ));

    // Поле для кода счетчика (head)
    $wp_customize->add_setting('mytheme_counter_head', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_counter_head', array(
        'label' => 'Код счетчика (в <head>)',
        'description' => 'Вставьте код, который должен быть в <head> (например, Google Analytics, Meta Pixel)',
        'section' => 'mytheme_analytics',
        'type' => 'textarea',
    ));

    // Поле для кода счетчика (body)
    $wp_customize->add_setting('mytheme_counter_body', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_counter_body', array(
        'label' => 'Код счетчика (перед </body>)',
        'description' => 'Вставьте код, который должен быть перед закрывающим тегом </body> (например, Яндекс.Метрика)',
        'section' => 'mytheme_analytics',
        'type' => 'textarea',
    ));



    
    /** ИСПОЛЬЗУЕМ ВЛОЖЕННЫЕ КОНТЕЙНЕРЫ **/
    /* КОНТАКТЫ */
    // Создаем панель (родительский контейнер)
    $wp_customize->add_panel('contact_panel', array(
        'title' => 'Контакты',
        'description' => 'Описание контактов',
        'priority' => 205, // Чем меньше, тем выше в списке
    ));

    // Добавляем первую вложенную секцию (Основной номер телефона)
    $wp_customize->add_section('mytheme_contacts', array(
        'title' => 'Основной номер телефона',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода КОДА СТРАНЫ основного номера телефона
    $wp_customize->add_setting('mytheme_main_phone_country_code', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_main_phone_country_code', array(
        'label' => 'Код страны',
        'description' => 'Например: 8 или +7',
        'section' => 'mytheme_contacts',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style' => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    // Добавляем поле для ввода КОДА РЕГИОНА основного номера телефона
    $wp_customize->add_setting('mytheme_main_phone_region_code', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_main_phone_region_code', array(
        'label' => 'Код региона',
        'description' => 'Например: 800, без скобок',
        'section' => 'mytheme_contacts',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style' => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    // Добавляем поле для ввода основного НОМЕРА ТЕЛЕФОНА
    $wp_customize->add_setting('mytheme_main_phone_number', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_main_phone_number', array(
        'label' => 'Номер телефона',
        'description' => 'Например: 880-80-88',
        'section' => 'mytheme_contacts',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style' => 'width: 100px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем вложенную секцию ДОПОЛНИТЕЛЬНОГО НОМЕРА ТЕЛЕФОНА
    $wp_customize->add_section('additional_phone_number', array(
        'title' => 'Дополнительный номер телефона',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    /* Добавляем поле для ввода КОДА СТРАНЫ дополнительного номера телефона */
    $wp_customize->add_setting('additional_phone_country_code', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('additional_phone_country_code', array(
        'label' => 'Код страны',
        'description' => 'Например: 8 или +7',
        'section' => 'additional_phone_number',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style' => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    /* Добавляем поле для ввода КОДА РЕГИОНА дополнительного номера телефона */
    $wp_customize->add_setting('additional_phone_region_code', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('additional_phone_region_code', array(
        'label' => 'Код региона',
        'description' => 'Например: 800, без скобок',
        'section' => 'additional_phone_number',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style' => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));

    // Добавляем поле для ввода дополнительного НОМЕРА ТЕЛЕФОНА
    $wp_customize->add_setting('additional_phone_number', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('additional_phone_number', array(
        'label' => 'Номер телефона',
        'description' => 'Например: 880-80-88',
        'section' => 'additional_phone_number',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            'style' => 'width: 100px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем вторую вложенную секцию (Email)
    $wp_customize->add_section('mytheme_contacts_email', array(
        'title' => 'Email',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода email
    $wp_customize->add_setting('mytheme_email', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_email', array(
        'label' => 'Email',
        //'description' => 'Например: 8 или +7',
        'section' => 'mytheme_contacts_email',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            //'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем вложенную секцию для Telegram
    $wp_customize->add_section('mytheme_contacts_telegram', array(
        'title' => 'Telegram',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Telegram
    $wp_customize->add_setting('mytheme_telegram', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_telegram', array(
        'label' => 'Telegram',
        'description' => 'Укажите ссылку на Telegram',
        'section' => 'mytheme_contacts_telegram',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            //'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем третью вложенную секцию (Whatsapp)
    $wp_customize->add_section('mytheme_contacts_whatsapp', array(
        'title' => 'Whatsapp',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода whatsapp
    $wp_customize->add_setting('mytheme_whatsapp', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_whatsapp', array(
        'label' => 'Whatsapp',
        'description' => 'Укажите ссылку на Whatsapp',
        'section' => 'mytheme_contacts_whatsapp',
        'type' => 'input',
        'input_attrs' => array(
            'placeholder' => '',
            //'style'      => 'width: 60px; display: inline-block;', // Уменьшаем ширину и делаем в одну строку
        )
    ));


    // Добавляем секцию Вконтакте
    $wp_customize->add_section('mytheme_contacts_vk', array(
        'title' => 'Вконтакте',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Вконтакте
    $wp_customize->add_setting('mytheme_vk', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_vk', array(
        'label' => 'Вконтакте',
        'description' => 'Укажите ссылку на Вконтакте',
        'section' => 'mytheme_contacts_vk',
        'type' => 'input'
    ));

	
	/* Address */
    // Добавляем секцию адрес
    $wp_customize->add_section('mytheme_contacts_address', array(
        'title' => 'Адрес',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

	
	// Добавляем поле для ввода адреса
    $wp_customize->add_setting('mytheme_address', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_address', array(
        'label' => 'Адрес',
        'description' => 'Укажите адрес организации',
        'section' => 'mytheme_contacts_address',
        'type' => 'input'
    ));
	/* End address */
	
	
	/* MAX */
	// Добавляем секцию МАХ
    $wp_customize->add_section('mytheme_contacts_max', array(
        'title' => 'МАХ',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));
	
	 // Добавляем поле для ввода МАХ
    $wp_customize->add_setting('mytheme_max', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_max', array(
        'label' => 'Адрес',
        'description' => 'Укажите ссылку на МАХ',
        'section' => 'mytheme_contacts_max',
        'type' => 'input'
    ));
	/* END MAX */


    // Добавляем секцию «Время работы»
    $wp_customize->add_section('mytheme_contacts_job_time', array(
        'title' => 'Время работы',
        'panel' => 'contact_panel', // Указываем родительскую панель
        'priority' => 5
    ));

    // Добавляем поле для ввода Вконтакте
    $wp_customize->add_setting('mytheme_job_time', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('mytheme_job_time', array(
        'label' => 'Время работы',
        'description' => 'Укажите время работы',
        'section' => 'mytheme_contacts_job_time',
        'type' => 'input'
    ));
    /** ИСПОЛЬЗУЕМ ВЛОЖЕННЫЕ КОНТЕЙНЕРЫ **/
}
add_action('customize_register', 'mytheme_customize_register');
/*** END ДОБАВЛЯЕМ ВОЗМОЖНОСТЬ В НАСТРОЙКАХ ТЕМЫ ДОБАВИТЬ КОНТАКТЫ И КОД СЧЕТЧИКА ***/




/*** ДЕЛАЕМ ФАЙЛ ROBOTS.TXT ***/
/* Работает только для основного сайта на домене */
add_filter('robots_txt', 'custom_robots_txt');
function custom_robots_txt($output) {
    $output = "User-agent: *\n";
    $output .= "Disallow: https://site100.ru/furniture*\n"
    return $output;
}
/*** END ДЕЛАЕМ ФАЙЛ ROBOTS.TXT ***/



/*** ДЕЛАЕМ ВОЗМОЖНЫМ ЗАГРУЗИТЬ FAVICON IN SVG ***/
// Полное отключение обрезки для SVG файлов
add_filter('wp_handle_upload_prefilter', 'disable_crop_for_svg');

function disable_crop_for_svg($file) {
    if ($file['type'] === 'image/svg+xml') {
        // Убираем параметры обрезки из запроса
        add_filter('wp_doing_ajax', '__return_false');
        add_filter('wp_redirect', '__return_false');
    }
    return $file;
}

// Отключаем редактор изображений для SVG
add_filter('image_downsize', 'disable_svg_resize', 10, 3);

function disable_svg_resize($out, $id, $size) {
    $mime = get_post_mime_type($id);
    if ($mime === 'image/svg+xml') {
        return false;
    }
    return $out;
}

// Запрещаем создание миниатюр для SVG
add_filter('intermediate_image_sizes_advanced', 'disable_svg_thumbnails');

function disable_svg_thumbnails($sizes) {
    if (isset($_POST['post_id'])) {
        $mime = get_post_mime_type($_POST['post_id']);
        if ($mime === 'image/svg+xml') {
            return array();
        }
    }
    return $sizes;
}

// Дополнительно: перехватываем выбор файла в медиатеке
add_filter('attachment_fields_to_edit', 'modify_svg_attachment_fields', 10, 2);

function modify_svg_attachment_fields($form_fields, $post) {
    if ($post->post_mime_type === 'image/svg+xml') {
        // Скрываем кнопку обрезки через JS
        add_action('admin_footer', 'hide_crop_button_for_svg');
    }
    return $form_fields;
}

function hide_crop_button_for_svg() {
    echo '<script>
    jQuery(document).ready(function($) {
        if ($("select.attachment-filters").length) {
            $(".media-toolbar-primary .button").hide();
            $(".media-toolbar-primary").append("<button type=\"button\" class=\"button button-primary media-button-select\">Выбрать</button>");
        }
    });
    </script>';
}
/*** END ДЕЛАЕМ ВОЗМОЖНЫМ ЗАГРУЗИТЬ FAVICON IN SVG ***/
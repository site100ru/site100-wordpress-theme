<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */

?>

<?php

if (isset($_SESSION['win'])) {
	unset($_SESSION['win']);
	$display = "block";
} else {
	$display = "none";
}

?>

<!doctype html>
<html lang="ru">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Разработаю продающий сайт. Настрою контекстную рекламу. Подключу CRM, онлайн оплату, сервис доставки. Создам систему привлечения клиентов в Ваш бизнес." />
	<meta name="keywords" content="Создание сайтов, разработка сайтов, продвижение сайтов, сео продвижение сайтов, seo продвижение сайтов, контекстная реклама, реклама в Яндексе, реклама в Яндекс Директ, настройка Яндекс Директ, поддержка сайтов, администрирование сайтов" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Создание, продвижение и поддержка сайтов в Москве и МО" />
	<meta property="og:title" content="Создание, продвижение и поддержка сайтов в Москве и МО" />
	<meta property="og:description" content="Создание сайтов, продвижение сайтов, контекстная реклама, сео-продвижение, поддержка сайтов" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.svg" type="image/x-icon" id="favicon">
	
	<!-- Bootstrap CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme-2.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">

	<!-- Quiz CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/quiz.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Glory:wght@600&display=swap" rel="stylesheet">

	<title>Создание, продвижение и поддержка сайтов в Москве и МО | site100.ru | 8 (930) 787-80-68</title>
	
	<?php if ($counter_head = get_theme_mod('mytheme_counter_head')): ?>
        <!-- Код счетчика в (head) -->
        <?php echo $counter_head; ?>
    <?php endif; ?>

</head>

<body> <!-- data-spy="scroll" data-target="nav" style="position: relative;" add in body -->
	<header class="header align-items-center justify-content-end">

		<!-- Menu -->
		<div class="container">
			<div class="lists w-100 d-flex flex-column align-items-end">
				<div class="f-menu justify-content-center text-start d-none d-lg-block ms-auto me-0">
					<div class="d-flex list-inline align-items-center ms-lg-auto justify-content-end mt-2"
						style="width: fit-content;">
						<div class="navbar-brand fw-normal me-5 d-none d-lg-flex align-items-center">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M13.1109 23.4607C15.5156 20.4435 21 13.1309 21 9.02335C21 4.04171 16.9688 0 12 0C7.03125 0 3 4.04171 3 9.02335C3 13.1309 8.48438 20.4435 10.8891 23.4607C11.4656 24.1798 12.5344 24.1798 13.1109 23.4607ZM12 6.01557C12.7956 6.01557 13.5587 6.33246 14.1213 6.89653C14.6839 7.4606 15 8.22564 15 9.02335C15 9.82106 14.6839 10.5861 14.1213 11.1502C13.5587 11.7142 12.7956 12.0311 12 12.0311C11.2044 12.0311 10.4413 11.7142 9.87868 11.1502C9.31607 10.5861 9 9.82106 9 9.02335C9 8.22564 9.31607 7.4606 9.87868 6.89653C10.4413 6.33246 11.2044 6.01557 12 6.01557Z"
									fill="#DC3545" />
							</svg>
							<a class="link-item d-inline-block ps-2" href="">гор. Москва,<br>ул Митинская, д. 43</a>
						</div>
						<div class="d-none d-lg-flex navbar-brand fw-normal me-5 align-items-center">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M21.75 12C21.75 14.5859 20.7228 17.0658 18.8943 18.8943C17.0658 20.7228 14.5859 21.75 12 21.75C9.41414 21.75 6.93419 20.7228 5.10571 18.8943C3.27723 17.0658 2.25 14.5859 2.25 12C2.25 9.41414 3.27723 6.93419 5.10571 5.10571C6.93419 3.27723 9.41414 2.25 12 2.25C14.5859 2.25 17.0658 3.27723 18.8943 5.10571C20.7228 6.93419 21.75 9.41414 21.75 12ZM0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12ZM10.875 5.625V12C10.875 12.375 11.0625 12.7266 11.3766 12.9375L15.8766 15.9375C16.3922 16.2844 17.0906 16.1437 17.4375 15.6234C17.7844 15.1031 17.6437 14.4094 17.1234 14.0625L13.125 11.4V5.625C13.125 5.00156 12.6234 4.5 12 4.5C11.3766 4.5 10.875 5.00156 10.875 5.625Z"
									fill="#DC3545" />
							</svg>
							<span class="f-menu ms-3">Без выходных<br>с 9:00 до 21:00</span>
						</div>
						<div class="navbar-brand fw-normal mx-3 mx-xl-5 gap-3 d-flex align-items-center">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_2001_193)">
									<path opacity="0.998" fill-rule="evenodd" clip-rule="evenodd"
										d="M3.70973 1.99135C4.05742 1.94684 4.35366 2.04705 4.5985 2.29194C5.64307 3.88346 6.68189 5.47893 7.71496 7.07835C7.81736 7.47692 7.7789 7.8623 7.59953 8.23449C7.034 9.19806 6.44534 10.1461 5.83354 11.0786C6.09013 11.7546 6.42486 12.3866 6.83773 12.9747C7.93364 14.5194 9.24562 15.8489 10.7737 16.9633C11.4332 17.4382 12.145 17.8197 12.909 18.1079C13.7609 17.5554 14.6188 17.012 15.483 16.4777C15.7427 16.3243 16.0198 16.2163 16.3141 16.154C16.4603 16.1386 16.6065 16.1386 16.7527 16.154C16.8247 16.1785 16.8939 16.2093 16.9604 16.2465C18.5518 17.278 20.137 18.3185 21.7159 19.3681C21.8798 19.5556 21.9643 19.7753 21.9698 20.0271C21.9532 20.3091 21.8724 20.5712 21.7275 20.8133C21.0762 21.7046 20.3491 22.5334 19.5459 23.299C19.2692 23.5531 18.9614 23.7612 18.6225 23.9233C18.4693 23.9482 18.3154 23.9674 18.1608 23.9811C17.053 23.9526 15.9834 23.733 14.9521 23.3221C13.4013 22.6885 11.9624 21.8714 10.6352 20.8711C7.60267 18.5812 4.96714 15.9028 2.72863 12.8359C1.91336 11.681 1.22851 10.4478 0.674077 9.13627C0.229647 8.05885 -0.00505893 6.93739 -0.0300113 5.77192C-0.0333887 5.54314 0.0243304 5.3312 0.143125 5.13604C0.378383 4.78467 0.640003 4.45325 0.92801 4.14176C1.65786 3.37161 2.46198 2.69721 3.34038 2.11852C3.46379 2.06835 3.5869 2.02596 3.70973 1.99135Z"
										fill="#DC3545" />
									<path opacity="0.999" fill-rule="evenodd" clip-rule="evenodd"
										d="M15.3334 0.98999C15.3778 1.56069 15.3927 2.13964 15.378 2.72683C16.8658 2.7159 18.3531 2.72748 19.8399 2.76157C21.2102 3.06468 22.1063 3.90995 22.5282 5.29736C22.5695 5.46504 22.5991 5.63486 22.6174 5.80683C22.6286 7.86786 22.6324 9.92891 22.6286 11.99C21.8849 11.99 21.1413 11.99 20.3976 11.99C20.4014 10.0602 20.3976 8.13033 20.3865 6.20052C20.347 5.61147 20.0533 5.23708 19.5053 5.07736C18.13 5.0435 16.7542 5.03192 15.378 5.04262C15.3854 5.62178 15.378 6.20073 15.3557 6.77946C14.1089 5.81992 12.8671 4.855 11.63 3.88473C12.8651 2.9196 14.0996 1.9547 15.3334 0.98999Z"
										fill="#DC3545" />
								</g>
								<defs>
									<clipPath id="clip0_2001_193">
										<rect width="24" height="24" fill="white" />
									</clipPath>
								</defs>
							</svg>
							<a class="link-item" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
						</div>
						<div class="navbar-brand d-flex align-items-center me-3  me-xl-5 gap-3">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M4 3C4 1.34531 5.30455 0 6.90909 0H17.0909C18.6955 0 20 1.34531 20 3V21C20 22.6547 18.6955 24 17.0909 24H6.90909C5.30455 24 4 22.6547 4 21V3ZM9.81818 21C9.81818 21.4125 10.1455 21.75 10.5455 21.75H13.4545C13.8545 21.75 14.1818 21.4125 14.1818 21C14.1818 20.5875 13.8545 20.25 13.4545 20.25H10.5455C10.1455 20.25 9.81818 20.5875 9.81818 21ZM17.0909 3H6.90909V18H17.0909V3Z"
									fill="#DC3545" />
							</svg>
							<a class="phone-link fw-bold" href="tel: +79307878068">+7 (930) 787-80-68</a>
						</div>
						<div class="d-none d-lg-flex ms-3 justify-content-end">
							<a class="nav-link ico-button me-3" href="https://t.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
							<a class="nav-link ico-button " href="https://wa.me/79307878068?web=1&amp;app_absent=1&amp;" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
                            <!-- <a class="nav-link ico-button px-2" href="https://wa.me/79307878068?web=1&amp;app_absent=1&amp;" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/max.svg">
							</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="position-relative my-2 d-none d-lg-block"
			style="border: none; background-color: #7D7D7D; height: 1px; width: 100%; ">
		<nav
			class="d-none d-lg-flex burger-menu header-nav-bottom navbar navbar-expand-lg navbar-light start-0 align-items-center justify-content-lg-between justify-content-around mt-0"
			style="z-index: 100;">
			<div class="container container-lg d-flex">
					<a class="navbar-brand logo me-1" href="https://site100.ru">site<span class="text-danger">100</span>.ru</a>
					<div class="add-info-block d-flex flex-column align-items-center d-lg-none py-1 me-2 me-sm-5">
						<a class="link-item fw-bold phone-link" href="tel: +79307878068">+7 (930) 78-78-0-68</a>
						<div class="d-flex navbar-brand fw-normal me-1 align-items-center py-1">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M21.75 12C21.75 14.5859 20.7228 17.0658 18.8943 18.8943C17.0658 20.7228 14.5859 21.75 12 21.75C9.41414 21.75 6.93419 20.7228 5.10571 18.8943C3.27723 17.0658 2.25 14.5859 2.25 12C2.25 9.41414 3.27723 6.93419 5.10571 5.10571C6.93419 3.27723 9.41414 2.25 12 2.25C14.5859 2.25 17.0658 3.27723 18.8943 5.10571C20.7228 6.93419 21.75 9.41414 21.75 12ZM0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12ZM10.875 5.625V12C10.875 12.375 11.0625 12.7266 11.3766 12.9375L15.8766 15.9375C16.3922 16.2844 17.0906 16.1437 17.4375 15.6234C17.7844 15.1031 17.6437 14.4094 17.1234 14.0625L13.125 11.4V5.625C13.125 5.00156 12.6234 4.5 12 4.5C11.3766 4.5 10.875 5.00156 10.875 5.625Z"
									fill="#DC3545" />
							</svg>
							<span class="f-menu ms-1">Пн-Вс c 9:00 до 21:00</span>
						</div>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adapt-menu-collapse"
						aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse w-100 justify-content-end" id="adapt-menu-collapse">
					<div class="adapt-menu d-flex pb-3 px-3 px-sm-5 pb-lg-0 px-lg-0 justify-content-lg-end">
						<div class="navbar-nav">
							<ul class="header-menu nav justify-content-center">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="<?php echo site_url('/'); ?>"
										data-target="main-page">Главная</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle arrow-element" href="#" role="button" data-bs-toggle="dropdown"
										aria-expanded="false" data-target="services-dropdown">
										Услуги
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#sp-create" data-target="service-web">создание сайтов</a></li>
										<li><a class="dropdown-item" href="#sp-promotion" data-target="service-promotion">продвижение
												сайтов</a></li>
										<li><a class="dropdown-item" href="#sp-support" data-target="service-support">поддержка сайтов</a>
										</li>
										<li><a class="dropdown-item" href="https://site100.ru/uslugi/zayavki-i-klienty-na-kukhni-i-shkafy-kupe-na-zakaz/" data-target="service-kitchen">клиенты на корпусную
												мебель</a></li>
									</ul>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/blog/'); ?>" data-target="blog-page">Блог</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
								</li>

                                <li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/jobs/'); ?>" data-target="blog-page">Вакансии</a>
								</li>

								<li class="nav-item d-none d-lg-inline">
									<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
								</li>

								<li class="nav-item">
									<a class="nav-link last" href="#contacts-sp" data-target="contacts-page">Контакты</a>
								</li>
							</ul>
							<div class="navbar-brand d-lg-none me-5 d-flex align-items-center">
								<svg width="10" height="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M13.1109 23.4607C15.5156 20.4435 21 13.1309 21 9.02335C21 4.04171 16.9688 0 12 0C7.03125 0 3 4.04171 3 9.02335C3 13.1309 8.48438 20.4435 10.8891 23.4607C11.4656 24.1798 12.5344 24.1798 13.1109 23.4607ZM12 6.01557C12.7956 6.01557 13.5587 6.33246 14.1213 6.89653C14.6839 7.4606 15 8.22564 15 9.02335C15 9.82106 14.6839 10.5861 14.1213 11.1502C13.5587 11.7142 12.7956 12.0311 12 12.0311C11.2044 12.0311 10.4413 11.7142 9.87868 11.1502C9.31607 10.5861 9 9.82106 9 9.02335C9 8.22564 9.31607 7.4606 9.87868 6.89653C10.4413 6.33246 11.2044 6.01557 12 6.01557Z"
										fill="#DC3545" />
								</svg>
								<a class="link-item d-inline-block ms-1" href="">гор. Москва, ул. Митинская, д. 43</a>
							</div>
							<div class="navbar-brand fw-bold me-0 me-lg-5 d-lg-none">
								<svg class="d-none d-lg-block" width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M4 3C4 1.34531 5.30455 0 6.90909 0H17.0909C18.6955 0 20 1.34531 20 3V21C20 22.6547 18.6955 24 17.0909 24H6.90909C5.30455 24 4 22.6547 4 21V3ZM9.81818 21C9.81818 21.4125 10.1455 21.75 10.5455 21.75H13.4545C13.8545 21.75 14.1818 21.4125 14.1818 21C14.1818 20.5875 13.8545 20.25 13.4545 20.25H10.5455C10.1455 20.25 9.81818 20.5875 9.81818 21ZM17.0909 3H6.90909V18H17.0909V3Z"
										fill="#DC3545" />
								</svg>
								<a class="link-item fw-bold d-none d-lg-inline" href="tel: +79307878068">+7 (930) 787-80-68</a>
								<a class="link-item fw-bold d-lg-none" href="tel: +79307878068">8 (930) 787-80-68</a>
							</div>
							<div class="navbar-brand d-flex d-lg-none  fw-normal me-1 align-items-center py-1 mb-2">
								<svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M21.75 12C21.75 14.5859 20.7228 17.0658 18.8943 18.8943C17.0658 20.7228 14.5859 21.75 12 21.75C9.41414 21.75 6.93419 20.7228 5.10571 18.8943C3.27723 17.0658 2.25 14.5859 2.25 12C2.25 9.41414 3.27723 6.93419 5.10571 5.10571C6.93419 3.27723 9.41414 2.25 12 2.25C14.5859 2.25 17.0658 3.27723 18.8943 5.10571C20.7228 6.93419 21.75 9.41414 21.75 12ZM0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12ZM10.875 5.625V12C10.875 12.375 11.0625 12.7266 11.3766 12.9375L15.8766 15.9375C16.3922 16.2844 17.0906 16.1437 17.4375 15.6234C17.7844 15.1031 17.6437 14.4094 17.1234 14.0625L13.125 11.4V5.625C13.125 5.00156 12.6234 4.5 12 4.5C11.3766 4.5 10.875 5.00156 10.875 5.625Z"
										fill="#DC3545" />
								</svg>
								<span class="f-menu ms-1">Ежедневно c 9:00 до 21:00</span>
							</div>
							<div class="d-flex d-lg-none justify-content-start">
								<a class="nav-link ico-button px-2" href="https://wa.me/79307878068?web=1&amp;app_absent=1&amp;" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
								</a>
								<a class="nav-link ico-button" href="https://t.me/79307878068" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
								</a>
                                <!-- <a class="nav-link ico-button" href="https://t.me/79307878068" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/max.svg">
								</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<nav
			class="fixed-menu header-nav-bottom navbar navbar-expand-lg navbar-light start-0 d-flex align-items-center justify-content-lg-between justify-content-around mt-0">
			<div class="container-fluid container-lg d-flex bg-white">
                <div class="container d-flex bg-white w-100 justify-content-between align-items-center pb-2 pb-lg-0">
					<a class="navbar-brand logo me-1" href="https://site100.ru">site<span class="text-danger">100</span>.ru</a>
					<div class="add-info-block d-flex flex-column align-items-center d-lg-none py-1 me-2 me-sm-5">
						<a class="link-item phone-link-mobile" href="tel: +79307878068">+7 (930) 78-78-0-68</a>
						<div class="d-flex navbar-brand fw-normal me-1 align-items-center py-1">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M21.75 12C21.75 14.5859 20.7228 17.0658 18.8943 18.8943C17.0658 20.7228 14.5859 21.75 12 21.75C9.41414 21.75 6.93419 20.7228 5.10571 18.8943C3.27723 17.0658 2.25 14.5859 2.25 12C2.25 9.41414 3.27723 6.93419 5.10571 5.10571C6.93419 3.27723 9.41414 2.25 12 2.25C14.5859 2.25 17.0658 3.27723 18.8943 5.10571C20.7228 6.93419 21.75 9.41414 21.75 12ZM0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12ZM10.875 5.625V12C10.875 12.375 11.0625 12.7266 11.3766 12.9375L15.8766 15.9375C16.3922 16.2844 17.0906 16.1437 17.4375 15.6234C17.7844 15.1031 17.6437 14.4094 17.1234 14.0625L13.125 11.4V5.625C13.125 5.00156 12.6234 4.5 12 4.5C11.3766 4.5 10.875 5.00156 10.875 5.625Z"
									fill="#DC3545" />
							</svg>
							<span class="f-menu ms-1">Пн-Вс c 9:00 до 21:00</span>
						</div>
					</div>
					<button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#adapt-menu-collapse"
						aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
                </div>
				<div class="navbar-collapse justify-content-end w-100 bg-white container collapse" id="adapt-menu-collapse">
					<div class="adapt-menu d-flex pb-3 5 pb-lg-0 px-lg-0 justify-content-lg-end">
						<div class="navbar-nav">
							<div class="nav-item dropdown">
								<ul class="header-menu nav flex-column flex-lg-row justify-content-center">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="<?php echo site_url('/'); ?>"
											data-target="main-page">Главная</a>
									</li>

									<li class="nav-item d-none d-lg-inline">
										<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle arrow-element" href="#" role="button" data-bs-toggle="dropdown"
											aria-expanded="false" data-target="services-dropdown">
											Услуги
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#sp-create" data-target="service-web">Создание сайтов</a></li>
											<li><a class="dropdown-item" href="#sp-promotion" data-target="service-promotion">Продвижение
													сайтов</a></li>
											<li><a class="dropdown-item" href="#sp-support" data-target="service-support">Поддержка сайтов</a>
											</li>
											<li><a class="dropdown-item" href="https://site100.ru/uslugi/zayavki-i-klienty-na-kukhni-i-shkafy-kupe-na-zakaz/" data-target="service-kitchen">Клиенты на корпусную мебель</a></li>
										</ul>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('/blog/'); ?>" data-target="blog-page">Блог</a>
									</li>

									<li class="nav-item d-none d-lg-inline">
										<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
									</li>

                                    <li class="nav-item">
										<a class="nav-link" href="<?php echo site_url('/jobs/'); ?>" data-target="blog-page">Вакансии</a>
									</li>

									<li class="nav-item d-none d-lg-inline">
										<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
									</li>

									<li class="nav-item">
										<a class="nav-link last" href="#contacts-sp" data-target="contacts-page">Контакты</a>
									</li>
								</ul>
								<div class="navbar-brand d-lg-none me-5 d-flex align-items-center">
									<svg width="10" height="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M13.1109 23.4607C15.5156 20.4435 21 13.1309 21 9.02335C21 4.04171 16.9688 0 12 0C7.03125 0 3 4.04171 3 9.02335C3 13.1309 8.48438 20.4435 10.8891 23.4607C11.4656 24.1798 12.5344 24.1798 13.1109 23.4607ZM12 6.01557C12.7956 6.01557 13.5587 6.33246 14.1213 6.89653C14.6839 7.4606 15 8.22564 15 9.02335C15 9.82106 14.6839 10.5861 14.1213 11.1502C13.5587 11.7142 12.7956 12.0311 12 12.0311C11.2044 12.0311 10.4413 11.7142 9.87868 11.1502C9.31607 10.5861 9 9.82106 9 9.02335C9 8.22564 9.31607 7.4606 9.87868 6.89653C10.4413 6.33246 11.2044 6.01557 12 6.01557Z"
											fill="#DC3545" />
									</svg>
									<a class="link-item d-inline-block ms-1" href="">гор. Москва, ул. Митинская, д. 43</a>
								</div>
								<div class="fw-bold me-0 me-lg-5 d-lg-none text-start" style="height: 28px;">
									<a class="link-item fw-bold d-lg-none text-start" href="tel: +79307878068">8 (930) 787-80-68</a>
								</div>
								<div class="d-flex d-lg-none navbar-brand fw-normal me-1 align-items-center py-1 mb-2">
									<svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M21.75 12C21.75 14.5859 20.7228 17.0658 18.8943 18.8943C17.0658 20.7228 14.5859 21.75 12 21.75C9.41414 21.75 6.93419 20.7228 5.10571 18.8943C3.27723 17.0658 2.25 14.5859 2.25 12C2.25 9.41414 3.27723 6.93419 5.10571 5.10571C6.93419 3.27723 9.41414 2.25 12 2.25C14.5859 2.25 17.0658 3.27723 18.8943 5.10571C20.7228 6.93419 21.75 9.41414 21.75 12ZM0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12ZM10.875 5.625V12C10.875 12.375 11.0625 12.7266 11.3766 12.9375L15.8766 15.9375C16.3922 16.2844 17.0906 16.1437 17.4375 15.6234C17.7844 15.1031 17.6437 14.4094 17.1234 14.0625L13.125 11.4V5.625C13.125 5.00156 12.6234 4.5 12 4.5C11.3766 4.5 10.875 5.00156 10.875 5.625Z"
											fill="#DC3545" />
									</svg>
									<span class="f-menu ms-1">Ежедневно c 9:00 до 21:00</span>
								</div>
								<div class="d-flex d-lg-none justify-content-start">
									<a class="nav-link ico-button px-2" href="https://wa.me/79307878068?web=1&amp;app_absent=1&amp;" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
									</a>
									<a class="nav-link ico-button ms-3" href="https://t.me/79307878068" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
									</a>
                                    <!-- <a class="nav-link ico-button ms-3" href="https://t.me/79307878068" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/max.svg">
                                    </a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
                
		</nav>
	</header>


	<main>
		<div id="sp-home"></div>
		<section id="main-section">
			<!-- Title container -->
			<div id="title-container" class="container">
				<div class="row">
					<div class="col-xl-10 col-lg-10 col-md-10"
						style="position: relative; padding-top: 30px; padding-bottom: 25px;">
						<h1 class="ps-0">Создание, продвижение<br class="d-none d-sm-block"> и поддержка сайтов</h1>
						<h5 class="mt-2 mt-sm-3">Частный веб-мастер. Опыт работы с 2016 года.</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-8 w-100">
						<!--div id="description">Разработаю продающий сайт. Настрою контекстную рекламу. Подключу CRM, онлайн оплату, сервис доставки. Создам систему привлечения клиентов в Ваш бизнес.</div-->
						<!--div id="description">Выявлю потребности Ваших клиентов, проанализирую конкурентов, создам продающий контент и уникальный дизайн, настрою контекстную рекламу, продвину в поиске, приведу новых клиентов в Ваш бизнес, буду поддерживать и улучшать Ваш проект.</div-->
						<div id="description">Выявлю потребности Ваших клиентов. Создам продающий сайт или улучшу имеющийся. Настрою
							контекстную рекламу. Продвину в поиске. Приведу больше клиентов в Ваш бизнес. Буду поддерживать и улучшать
							Ваш сайт или интернет-магазин.</div>
						<a href="#" class="d-inline-block home-btn" data-bs-toggle="modal" data-bs-target="#callbackModal">Оставить
							заявку</a>
					</div>
				</div>
			</div>
		</section>

		
		<!-- Site create section -->
		<div id="sp-create"></div>
		<section id="site-create-section" class="py-5">
			<div class="container-fluid pt-5" style="overflow: hidden;">
				<div class="row">
					<div class="col offset-md-2">
						<div class="title-line mb-3"></div>
						<h2>Создание сайтов</h2>
					</div>
				</div>
			</div>
			<div class="container-fluid pb-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="60000">
							<div class="container">
								<div class="row justify-content-end">
									<div class="col-lg-8 col-xl-6" style="height: 100px; position: relative;">
										<button id="carousel-sites-create-control-prev" class="carousel-control-prev" type="button"
											data-bs-target="#carouselExampleControls" data-bs-slide="prev" onclick="setPrevService();">
											<!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text"><!--Вариант дешевеле--><img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left.svg"
													class="me-3">Предыдущий</span>
										</button>
										<button id="carousel-sites-create-control-next" class="carousel-control-next" type="button"
											data-bs-target="#carouselExampleControls" data-bs-slide="next" onclick="setNextService();">
											<!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text">Следующий<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right.svg"
													class="ms-3"><!--Вариант с лучшей конверсией--></span>
										</button>
									</div>
								</div>
							</div>
							<div class="carousel-inner">

								<!-- Одностраничный сайт или сайт визитка -->
								<div id="carousel-item-1" class="carousel-item active">
									<div class="row justify-content-end">

										<div class="col-md-10 col-lg-8">
											<div class="row">
												<div class="col-md-5 col-lg-5 mb-2">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-1.jpg); height: 100%; min-height: 175px; background-size: cover;">
													</div>
												</div>
												<div class="col-md-7 col-lg-7" style="height: 100%; min-height: 175px;">
													<h3>Одностраничный сайт или сайт визитка</h3>
													<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или
														протестировать новую нишу.</p>
													<p>Стоимость создания от <span class="price">5 000</span> руб.</p>
													<p>В минимальную стоимость входит:</p>
													<ul>
														<li>уникальный и адаптивный дизайн;</li>
														<li>6 тематических блоков или страниц на выбор (например: главная, товары/услуги, обо мне/о
															компании, преимущества, как заказать, контакты и др.);</li>
														<li>нужное количество форм заказа и обратной связи;</li>
														<li>доменное имя на год, хостинг на 3 мес.</li>
													</ul>
													<p>Сроки разработки: 3-5 дней.</p>
													<!--
													<div class="row">
														<div class="col-md-6">
															<h5 class="mb-3">Шаблонный дизайн</h5>
															<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или протестировать новую нишу.</p>
															<p>Стоимость создания от <strong>5 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>3-5 шаблонов дизайна на выбор;</li>
																<li>изменение имеющейся текстовой и графической информации в шаблоне на Вашу (тексты, картинки, контакты) без внесения изменения в стили сайта;</li>
																<li>подключение форм заказа и обратной связи;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 3 мес.</li>
															</ul>
															<p>Сроки разработки: 3-5 дней.</p>
														</div>
														<div class="col-md-6">
															<h5 class="mb-3">Уникальный дизайн</h5>
															<p>Подойдет тем, кто хочет подчеркнуть особую индивидуальность своего бизнеса, что бы получить максимальную отдачу на вложенные средства.</p>
															<p>Стоимость создания от <strong>10 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>маркетинговый анализ;</li>
																<li>подготовка технического задания;</li>
																<li>создание уникального и адаптивного дизайна;</li>
																<li>верстка и запуск сайта в работу;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 5-7 дней.</p>
														</div>
													</div>
													-->
												</div>
											</div>
										</div>
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-2.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Одностраничный сайт или сайт визитка -->

								<!-- Многостраничный сайт, сайт компании, промо сайт -->
								<div id="carousel-item-2" class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-1.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-8">
											<div class="row">
												<div class="col-md-5 col-lg-5 mb-2">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-2.jpg); height: 100%; min-height: 175px; background-size: cover;">
													</div>
												</div>
												<div class="col-md-7 col-lg-7" style="height: 100%; min-height: 175px;">
													<h3>Многостраничный сайт, сайт компании, промо сайт</h3>
													<p>Подойдет тем, кто хочет сделать более сложный и интересный проект, чтобы получить
														максимальную отдачу от вложенных средств.</p>
													<p>Стоимость создания от <span class="price">7 000</span> руб.</p>
													<p>В минимальную стоимость входит:</p>
													<ul>
														<li>уникальный и адаптивный дизайн;</li>
														<li>9 тематических блоков или страниц на выбор (например: главная, товары/услуги, подробное
															описание товара/услуги, акции, портфолио, обо мне/о компании, преимущества, как заказать,
															контакты и др.);</li>
														<li>нужное количество форм заказа и обратной связи;</li>
														<li>доменное имя на год, хостинг на 6 мес.</li>
													</ul>
													<p>Сроки разработки: 5-7 дней.</p>
													<!--
													<div class="row">
														<div class="col-md-6">
															<h5 class="mb-3">Шаблонный дизайн</h5>
															<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или протестировать новую нишу.</p>
															<p>Стоимость создания от <strong>7 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>3-5 шаблонов дизайна на выбор;</li>
																<li>изменение имеющейся текстовой и графической информации в шаблоне на Вашу (тексты, картинки, контакты) без внесения изменения в стили сайта;</li>
																<li>подключение форм заказа и обратной связи;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 5-7 дней.</p>
														</div>
														<div class="col-md-6">
															<h5 class="mb-3">Уникальный дизайн</h5>
															<p>Подойдет тем, кто хочет подчеркнуть особую индивидуальность своего бизнеса, что бы получить максимальную отдачу на вложенные средства.</p>
															<p>Стоимость создания от <strong>14 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>маркетинговый анализ;</li>
																<li>подготовка технического задания;</li>
																<li>создание уникального и адаптивного дизайна;</li>
																<li>верстка и запуск сайта в работу;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 7-10 дней.</p>
														</div>
													</div>
													-->
												</div>
											</div>
										</div>
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-3.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Многостраничный сайт, сайт компании, промо сайт -->

								<!-- Интернет магазин или каталог -->
								<div id="carousel-item-3" class="carousel-item">
									<div class="row justify-content-start">
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-2.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-8">
											<div class="row">
												<div class="col-md-5 col-lg-5 mb-2">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-3.jpg); height: 100%; min-height: 175px; background-size: cover;">
													</div>
												</div>
												<div class="col-md-7 col-lg-7">
													<h3>Интернет магазин или каталог</h3>
													<p>Подойдет тем, кто хочет продавать много различных товаров через интернет.</p>
													<p>Стоимость создания от <span class="price">10 000</span> руб.</p>
													<p>В минимальную стоимость входит:</p>
													<ul>
														<li>уникальный и адаптивный дизайн;</li>
														<li>главная страница, страница магазина, страница товаров, страница корзины, страница
															оформления заказа и др;</li>
														<li>система управления контентом;</li>
														<li>доменное имя и хостинг на год.</li>
													</ul>
													<p>Сроки разработки: 7-10 дней.</p>
													<!--
													<div class="row">
														<div class="col-md-6">
															<h5 class="mb-3">Шаблонный дизайн</h5>
															<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или протестировать новую нишу.</p>
															<p>Стоимость создания от <strong>10 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>3-5 шаблонов дизайна на выбор;</li>
																<li>изменение имеющейся текстовой и графической информации в шаблоне на Вашу (тексты, картинки, контакты) без внесения изменения в стили сайта;</li>
																<li>подключение форм заказа и обратной связи;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 7-10 дней.</p>
														</div>
														<div class="col-md-6">
															<h5 class="mb-3">Уникальный дизайн</h5>
															<p>Подойдет тем, кто хочет подчеркнуть особую индивидуальность своего бизнеса, что бы получить максимальную отдачу на вложенные средства.</p>
															<p>Стоимость создания от <strong>20 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>маркетинговый анализ;</li>
																<li>подготовка технического задания;</li>
																<li>создание уникального и адаптивного дизайна;</li>
																<li>верстка и запуск сайта в работу;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 12 мес.</li>
															</ul>
															<p>Сроки разработки: 10-14 дней.</p>
														</div>
													</div>
													-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Интернет магазин или каталог -->
							</div>
						</div> <!-- #carouselExampleControls -->
					</div>
				</div>
			</div>
		</section>


		<!-- SITE CREATE PORTFOLIO -->
		<section id="site-create-portfolio" class="text-light pt-5 pb-4">
			<div class="container">
				<div class="row">
					<div class="col pt-5">
						<div class="title-line mb-3"></div>
						<h2 class="text-light mb-0">Несколько моих последних работ</h2>
					</div>
				</div>
				<div class="row">
					<div class="col ">
						<div class="nav-scroller">
							<ul class="nav d-flex" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link ps-0 me-4 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
										role="tab" aria-controls="home" aria-selected="true">Одностраничые</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link ps-0 me-4" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
										role="tab" aria-controls="profile" aria-selected="false">Многостраничные</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link ps-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab"
										aria-controls="contact" aria-selected="false">Интернет магазины</a>
								</li>
							</ul>
						</div>
						<div class="d-md-none text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;">
						</div>
						<div class="tab-content pt-5" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row pt-3">
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/портфолио/2022/himmel/PHP"
											target="_blank">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-himmel-2.jpg"
												class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Потолочные системы</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://хорошийдом.москва" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-26.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Ремонт квартир</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="http://interflat-spb.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-19.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство мебели 1
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://гарантшкаф.рф" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-15.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство мебели 2
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/портфолио/2019/glyanets-potolki"
											target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-23.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Натяжные потолки</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/портфолио/2020/himmelaero"
											target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-24.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Реечные потолки</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="http://асгард62.рф" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-16.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Сайт бани, сауны</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="http://site100.ru/wp-content/themes/site100theme/портфолио/2019/auto-ryazan"
											target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-21.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Купля/продажа авто</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-18.png"
											class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Сайт бара, бильярдной
										</h5>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row pt-3">
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/furniture/" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-furniture.webp" class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Готовое решение для мебельных компаний</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://stock-line.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-stock-line.webp" class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Компания по продаже пиломатериалов «Стоклайн»</h5>
									</div>
									
									<div class="col-md-4 mb-5">
										<a href="https://esenin-group.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-esenine-group.webp" class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Строительная компания «Есенин-групп»</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://gyard.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-11.png" class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Строительная компания «Грин ярд»</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://pokrov-petrovichi.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-12.png" class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Сайт храма</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://unistyle-spb.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-13.png" class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство и продажа жалюзи</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/portfolio/kvartet" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-17.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство мебели</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://marusya62.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-20.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Строительство деревянных
											домов</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://трудовой-резерв.рф" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-22.png" class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Автошкола на спецтехнику
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://naers.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-25.png" class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Клининговая компания</h5>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div class="row pt-3">
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/site100-lumber/" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-stock-line.webp"
												class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Продажа пиломатериалов
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://galaxyderm.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-14.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Косметологическая
											компания</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END SITE CREATE PORTFOLIO -->


		<!-- Site create oreder -->
		<section id="site-create-order">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-5 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/site-create-order-img.jpg"
							class="w-100 mb-5 mb-md-0">
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-10 col-md-5" style="position: relative;">
						<div class="order-line"></div>
						<p>Если Вы не совсем разобрались, какой сайт подойдет именно Вам, свяжитесь со мной любым удобным для Вас
							способом и я все подробно Вам расскажу.</p>
						<p id="order-button-1" class="mb-0" onmouseover="hovOrderButtonMouseover('order-arrow-1');"
							onmouseout="hovOrderButtonMouseout('order-arrow-1');" style="cursor: pointer; font-weight: 400;"
							data-bs-toggle="modal" data-bs-target="#modalOrder">Оставить заявку на консультацию<img
								src="<?php echo get_template_directory_uri(); ?>/img/ico/long-arrow-right.svg" id="order-arrow-1"
								class="ms-2" style="position: relative; left: 0; transition: .35s;"></p>
					</div>
				</div>
			</div>
		</section>


		<!-- SITE PROMOTION SECTION -->
		<div id="sp-promotion"></div>
		<section id="site-promotion-section" class="py-5">
			<div class="container py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2 class="mb-5">Продвижение сайтов</h2>
						<div class="row">
							<div class="col-md-10">
								<p class="mb-0" style="font-size: 18px;">Занимаюсь продвижением сайтов с 2016 года. Помогаю своим
									клиентам увеличивать продажи, всегда работаю на результат! Создаю и поддерживаю рекламные кампании на
									Вашем аккаунте или регистрирую новый. У Вас будет полный доступ ко всем рекламным кампаниям и
									используемым сервисам.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container pb-5">
				<div class="row">
					<div class="col-md-4">
						<div class="card mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">01</div>
								<h3 class="card-title mb-3">Настройка контекстной рекламы в&#160;Яндекс.Директ
									от&#160;20&#160;000&#160;руб.</h3>
								<p>Подойдет тем, кто только запускает свой бизнес в интернете или хочет протестировать новую нишу.</p>
								<p><strong>В минимальную стоимость входит:</strong></p>
								<ul>
									<li
										title="Один из основных и важных этапов настройки контекстной рекламы в Яндекс.Директ. От количества и точности соответствия ключевых фраз Вашей ниши зависит эффективность рекламных кампаний.">
										подбор максимально подходящих для Вашей ниши ключевых запросов;
									</li>
									<li
										title="Минус-слова еще больше уточняют ключевые фразы и еще больше увеличивают эффективность рекламных кампаний.">
										тщательная проработка и уточнение ключевых запросов минус-словами;
									</li>
									<li
										title="Чем точнее ключевые фразы распределены по группам тем точнее рекламное объявление может ответить на запрос пользователя, а значит и выше вероятность что пользователя заинтересует Ваше объявление.">
										разбиение всех ключевых запросов на максимально релевантные (схожие по смыслу) группы;
									</li>
									<li
										title="Разные объявления повышают вероятность, что разных пользователей заинтересуют Ваши объявления">
										составление до 18 разных продающих объявлений для каждой группы ключевых запросов;
									</li>
									<li title="">настройка нескольких рекламных кампаний в Яндекс.Директ: для поиска, для РСЯ, ретаргетинг
										объявлений;</li>
									<li title="">корректировки ставок по полу, возрасту, устройствам, регионам показа и другой, именно
										Вашей, целевой аудитории;</li>
									<li
										title="Настройка временного и географического таргетинга позваляет показываться Вашей рекламе только там и только тогда, когда Ваши потенциальные клиенты смогут ее увидеть. Тем самым это позволяет сэкономить рекламный бюджет.">
										настройка географического и временного таргетинга выхода объявлений;
									</li>
									<li title="">добавление быстрых и отображаемых ссылок, уточнений, цен, каталога товаров или услуг и
										всех других опций объявления;</li>
									<li title="Позволяет получить статистику для оценки эффективности и окупаемости рекламной компании.">
										подключение счетчика Яндекс.Метрики и создание целей;
									</li>
									<li title="">создание виртуальной визитки или организации в Яндекс.Справочнике;</li>
									<li title="">2-4 недели сопровождения для контроля и повышения эффективности.</li>
								</ul>
								<p><strong>Сроки настройки: 3-4 дня.</strong></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">02</div>
								<h3 class="card-title mb-3">Ведение контекстной рекламы от&#160;10&#160;000&#160;руб/мес.</h3>
								<p class="card-text">
									<!--Подойдет тем, кто хочет получить максимальную отдачу от вложенных средств.-->Подойдет тем, кто не
									хочет останавливаться на достигнутом, а стремится развиваться и увеличивать отдачу от вложенных
									средств.
								</p>
								<p class="fw-normal">В минимальную стоимость входит:</p>
								<ul>
									<li title="">анализ трафика по показателю отказов;</li>
									<li title="">«чистка» трафика добавлением минус слов;</li>
									<li title="">анализ эффективности ключевых запросов/групп по стоимости заявки;</li>
									<li title="">отключение ключевых фраз/групп или корректировки ставок в зависимости от эффективности;
									</li>
									<li title="">корректировка ставок по полу, возрасту, мобильным устройствам, времени, целевой
										аудитории;</li>
									<li title="">настройка автоматической корректировки ставок;</li>
									<li title="">добавление новых кампаний, групп ключевых фраз, новых объявлений и др;</li>
									<li title="">мониторинг выхода и позиций объявлений;</li>
									<li title="">А/Б тестирование рекламных кампаний, групп объявлений, ключевых фраз.</li>
								</ul>
								<p>Сроки проведения: от 1 дня.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">03</div>
								<h3 class="card-title mb-3">SEO оптимизация от&#160;10&#160;000&#160;руб/мес.</h3>
								<p class="card-text">Подойдет тем, кто хочет привлечь на свой сайт дополнительный, более дешевый в долгосрочной перспективе, трафик.</p>
								<p>В минимальную стоимость входит:</p>
								<ul>
									<li>сбор семантического ядра (ключевых запросов по которым сайт нужно показывать в поиске);</li>
									<li>добавление ключевых фраз в основные теги h1, h2, h3, title, a, i, strong и др;</li>
									<li>добавление основных метатегов (title, description, property и др.);</li>
									<li>оптимизация (улучшение) кода;</li>
									<li>повышение скорости загрузки сайта;</li>
									<li>добавление сайта в Яндекс.Бизнес, Яндекс.Справочник, Google Business и выполнение рекомендаций этих сервисов;</li>
									<li>размещение информации о компании и ссылки на сайт в других справочниках и каталогах, подходящих по смыслу;</li>
									<li>написание SEO текстов, подготовка и размещение на сайте другого SEO контента;</li>
									<li>ведение блога;</li>
									<li>другие работы.</li>
								</ul>
							</div>
						</div>
					</div>

					<!--
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">02</div>
								
								
								
								<ul>
									
									
									<li>добавление основных метатегов (title, description, property и др.);</li>
									<li>повышение скорости загрузки сайта;</li>
									<li>добавление сайта в Яндекс.Справочник, Google Business;</li>
									<li>размещение информации о компании и ссылки на сайт в других справочниках и каталогах подходящих по смыслу;</li>
									<li>написание сео текстов, подготовка и размещение на сайте другого сео контента;</li>
									<li>ведение блога;</li>
									<li>другие работы.</li>
								</ul>
								<p>Время работ: 2-3 дня в течении месяца.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">03</div>
								<h3 class="card-title mb-3">Комплексное продвижение от 9 000 руб/мес.</h3>
								<p class="card-text">Подойдет тем, кто хочет получить максимальную отдачу на вложенные средства.</p>
								<p>В минимальную стоимость входит:</p>
								<ul>
									<li>маркетинговый анализ для улучшения конверсионных показателей сайта;</li>
									<li>настройка контекстной рекламы;</li>
									<li>сео-оптимизация сайта;</li>
									<li>работы необходимые для поддержки сайта в рабочем состоянии;</li>
									<li>разработка дополнительных блоков, разделов, страниц сайта;</li>
									<li>другие работы по верстке и программированию необходимые для увеличения конверсии сайта;</li>
									<li>подключение CMS (системы управления сайтом), CRM (системы учета и взаимоотношений с клиентами);</li>
									<li>подключение сервисов сквозной аналитики.</li>
								</ul>
								<p>Время работ: 2-3 дня в течении месяца.</p>
							</div>
						</div>
					</div>
					-->

				</div>
			</div>
		</section>
		<!-- END SITE PROMOTION SECTION -->


		<!-- SITE PROMOTION PORTFOLIO -->
		<section id="site-promotion-portfolio" class="text-light py-5">
			<div class="container-fluid py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col offset-md-2">
						<div class="title-line mb-3"></div>
						<h2 class="text-light">Результаты по продвижению и контекстной рекламе</h2>
					</div>
				</div>
			</div>
			<div class="container-fluid " style="overflow: hidden;">
				<div class="row">
					<div class="col">

						<div id="site-promotion-portfolio-carousel" class="carousel slide" data-bs-ride="carousel"
							data-bs-interval="60000">
							<div class="carousel-inner">

								<!-- Portfolo 1 -->
								<div id="promotion-portfolio-carousel-item-1" class="carousel-item active">
									<div class="row justify-content-end">
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Сайт компании провайдера</h5>
														<a href="https://site100.ru/portfolio/vybor/" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-1.jpg);">
											</div>
										</div>
										<div class="col-md-1 col-lg-2 offset-lg-1">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-2.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
									</div>
								</div>

								<!-- Portfolo 2 -->
								<div id="portfolio-carousel-item-2" class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-1 col-lg-2">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-1.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Сайт храма</h5>
														<a href="https://pokrov-petrovichi.ru" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-2.jpg);">
											</div>
										</div>
										<div class="col-md-1 col-lg-2 offset-lg-1">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-3.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
									</div>
								</div>

								<!-- Portfolo 3 -->
								<div id="portfolio-carousel-item-2" class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-1 col-lg-2">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-2.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Сайт храма</h5>
														<a href="https://pokrov-petrovichi.ru" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-3.jpg);">
											</div>
										</div>
										<div class="col-md-1 col-lg-2 offset-lg-1">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-4.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio 3 -->

								<!-- Portfolo 4 -->
								<div id="portfolio-carousel-item-5" class="carousel-item">
									<div class="row justify-content-start">
										<div class="col-md-1 col-lg-2">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-3.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Интернет каталог магазина автозапчастей</h5>
														<a href="http://logan-shop62.ru/" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-4.jpg);">
											</div>
										</div>
									</div>
								</div>

							</div> <!-- carousel-inner -->
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-6" style="height: 100px; position: relative;">
										<button id="carousel-sites-create-portfolio-control-prev" class="carousel-control-prev"
											type="button" data-bs-target="#site-promotion-portfolio-carousel" data-bs-slide="prev">
											<!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text"><img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left-light.svg"
													class="ms-3"></span>
										</button>
										<button id="carousel-sites-create-portfolio-control-next" class="carousel-control-next"
											data-bs-target="#site-promotion-portfolio-carousel" type="button" data-bs-slide="next">
											<!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text"><img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right-light.svg"
													class="me-3"></span>
										</button>
									</div>
								</div>
							</div>
						</div> <!-- #site-promotion-portfolio-carousel -->
					</div>
				</div>
			</div>
		</section>
		<!-- END SITE PROMOTION PORTFOLIO -->


		<!-- SITE SUPPORT PORTFOLIO -->
		<div id="sp-support"></div>
		<section id="site-support-section" class="pt-5">
			<div class="container pt-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2 class="mb-5">Поддержка сайтов</h2>
						<div class="row">
							<div class="col-md-10">
								<p class="mb-5" style="font-size: 18px;">Если у Вас уже есть сайт, но нет технического специалиста,
									который его обслуживает или этот специалист чем-то Вас не устраивает (низкое качество, высокая
									стоимость, нарушение сроков и т.п.), то я предлагаю Вам воспользоваться моими услугами по поддержке
									сайта.</p>
								<h3 class="mb-3" style="font-size: 1.125rem;">Чем я могу быть Вам полезен:</h3>
								<p class="mb-5" style="font-size: 18px;">Внедрю на сайт новые блоки и функционал по мере его развития,
									помогу с обновлением контента в активных разделах, разберусь с техническими проблемами, подключу
									необходимые сервисы и др. Со мной Ваш сайт всегда будет в отличной форме!</p>
							</div>
						</div>
						<h3 class="mb-5" style="font-size: 1.125rem;">Некоторые популярные работы по поддержке сайта, которые я
							делаю:</h3>
						<div class="row">
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">01</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">сбор (создание) и наполнение сайта контентом - от&#160;500&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">02</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">создание дополнительных блоков, страниц, функций сайта -
											от&#160;1&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">03</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">наполнение товарами интернет магазина - от&#160;500&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">04</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">подключение системы управления сайтом (CMS) - от&#160;1&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">05</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">исправление ошибок, увеличение скорости загрузки - от&#160;1&#160;000&#160;руб;
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">06</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">программирование скриптов, добавление анимации - от&#160;1&#160;000&#160;руб;
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">07</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">подключение онлайн оплаты (эквайринг) - от&#160;4&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">08</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">интеграция с CRM (Битрикс24, amoCRM) - от&#160;4&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">09</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">интеграция с Яндекс.Маркет и другими маркетплейсами -
											от&#160;8&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">10</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">интеграция с сервисами доставки (Деловые линии, Почта России, СДЭК и др.) -
											от&#160;4&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">11</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">создание дизайна, редизайна - от&#160;1&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">12</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">верстка дизайна по макету - от&#160;1&#160;000&#160;руб.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">13</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">заполнение данных организации в сервисе Яндекс.Бизнес -
											от&#160;4&#160;000&#160;руб.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">14</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">аудит сайта - <strong>бесплатно!</strong></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">15</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">аудит рекламной компании в Яндекс.Директ - <strong>бесплатно!</strong></p>
									</div>
								</div>
							</div>
						</div>
						<p class="mb-3" style="font-size: 1.125rem; font-weight: normal;">Стоимость других работ по поддержке сайта:
						</p>
						<ul class="mb-5">
							<li><span style="font-weight: bold;">600</span> руб./час. (если общая сумма работ
								от&#160;15&#160;000&#160;руб);</li>
							<li><span style="font-weight: bold;">700</span> руб./час. (если общая сумма работ
								от&#160;5&#160;000&#160;руб);</li>
							<li><span style="font-weight: bold;">800</span> руб./час. (если общая сумма работ
								до&#160;5&#160;000&#160;руб).</li>
						</ul>

						<h3 class="mb-5" style="font-size: 1.125rem;">Технологии, необходимые для технической поддержки сайта, в
							которых я хорошо разбираюсь:</h3>
						<div class="row">
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">01</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">HTML5;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">02</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">CSS3;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">03</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">SASS;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">04</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">BEM (методология);</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">05</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">Bootstrap 5;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">06</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">JavaScript;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">07</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">jQuery;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">08</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">PHP 7;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">09</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">ООП;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">10</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">MySQL;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row pb-3">
									<div class="col-3 col-md-3">
										<div class="support-service-number">11</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">WordPress;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row pb-3">
									<div class="col-3 col-md-3">
										<div class="support-service-number">12</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">WooCommerce.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Site support oreder -->
		<section id="site-support-order">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-5 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/site-support-order-img.jpg"
							class="w-100 mb-5 mb-md-0">
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-10 col-md-5" style="position: relative;">
						<div class="order-line"></div>
						<p>Не нашли нужную услугу? Свяжитесь со мной любым удобным для Вас способом. Я обязательно Вам отвечу на
							Ваши вопросы.</p>
						<p id="order-button-3" class="mb-0" onmouseover="hovOrderButtonMouseover('order-arrow-3');"
							onmouseout="hovOrderButtonMouseout('order-arrow-3');" style="cursor: pointer; font-weight: 400;"
							data-bs-toggle="modal" data-bs-target="#modalOrder">Оставить заявку на консультацию<img
								src="<?php echo get_template_directory_uri(); ?>/img/ico/long-arrow-right.svg" id="order-arrow-3"
								class="ml-2" style="position: relative; left: 0; transition: .35s;"></p>
					</div>
				</div>
			</div>
		</section>
		<!-- END SITE SUPPORT PORTFOLIO -->


		<!-- ABOUT ME -->
		<div id="sp-about"></div>
		<section id="about-section" class="pb-5">
			<div class="container py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2>Обо мне</h2>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row align-items-center">
					<div class="col-6 offset-3 col-md-4 offset-md-1 pb-5 pb-md-0 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img.jpg" class="w-100">
					</div>
					<div class="col-md-5 offset-md-1">
						<p style="font-size: 18px; line-height: 28px;">Всем привет! Меня зовут Роман. С 2016 года я занимаюсь
							созданием, продвижением и поддержкой сайтов. Мои клиенты - это небольшие компании и индивидуальные
							предприниматели с ограниченными рекламными бюджетами, поэтому я делаю не дорогие, но качественных сайты и
							интернет магазины, а также занимаюсь их поддержкой и продвижением. Все мои сайты сделаны с адаптивным
							дизайном, который удобно смотреть с любого устройства, а средняя стоимость их создания варьируется от 5
							000 до 15 000 рублей.</p>
						<p style="font-size: 18px; line-height: 28px;">Если Вас интересует создание недорогого, качественного сайта
							в кратчайшие сроки или продвижение такого сайта — свяжитесь со мной любым удобным для Вас способом.
							Уверен, что я могу принести пользу Вашему бизнесу!
						<p>
					</div>
				</div>
			</div>
		</section>
		<!-- END ABOUT ME -->


		<!-- ADVANTAGES -->
		<div id="sp-advantages"></div>
		<section id="advantages-section" class="py-5">
			<div class="container py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2 class="text-light">Мои преимущества</h2>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row">
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">01</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">У меня одни из самых низких цен на создание сайтов в Москве и Московской области —
									от 5 000 рублей за сайт с уникальным и адаптивным дизайном.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">02</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Я всегда на связи. Очень часто даже вне рабочее время. Я готов встретиться с Вами
									лично в любом районе Москвы или подъехать к Вам в офис.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">03</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Опыт работы в сфере создания и продвижения сайтов с 2016 года. В моем опыте есть
									решения сложных, нестандартных и объемных задач, например таких, как интеграция сайта с 1С, CRM,
									сервисами оплаты (Сбербанк, Альфа банк) и доставки (СДЭК, Почта России, Деловые линии), подключение
									интернет магазина к Яндекс.Маркету.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">04</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Вам не придется обращаться к нескольким специалистам, потому что я знаю все
									необходимые технологии для качественного создания, поддержки и продвижения сайтов и интернет магазинов
									(HTML 5, CSS 3, Sass, Bootstrap 5, JavaScript, jQuery, PHP 7, WordPress, WooCommerce, Yandex Direct,
									Google Ads, SEO и др).</p>
							</div>
						</div>
					</div>

					<!--
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">01</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Опыт работы в сфере создания сайтов с 2016 года. Опыт работы в сфере маркетинга и продаж с 2008 года.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">02</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Я всегда на связи. Очень часто даже вне рабочее время. Даже если я не успеваю что-то сделать по срокам, я не пропадаю, а беру трубку и честно объясняю, как обстоят дела на текущий момент.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">03</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Знание полного стека технологий для быстрого и качественного создания и успешного продвижения сайта (HTML 5, CSS 3, Sass, Bootstrap 5, JavaScript, jQuery, PHP 7, WordPress, Woocommerce, Yandex Direct, Google Ads, SEO и др.). Опыт в интеграции онлайн оплаты, с сервисами доставки, с CRM.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">04</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Имею возможность решения сложных, не стандартных и объемных задач. Если у меня нет возможности решить поставленную задачу, я всегда могу перепоручить задачу или часть задачи своим коллегам из любых сфер веб разработки</p>
							</div>
						</div>
					</div>
					-->

				</div>
			</div>
		</section>
		<!-- END ADVANTAGES -->


		<!-- PROCESS -->
		<div id="sp-process"></div>
		<section id="site-process-section" class="py-5">
			<div class="container py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2>Как я работаю</h2>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row justify-content-center">
					<div class="col-md-4 pb-5">
						<div class="card mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">01</div>
								<p class="card-text mt-2">Вы связываетесь со мной любым удобным для Вас способом. Объясняете, какой сайт
									Вы хотите. Договариваемся по цене и срокам. При необходимости возможно встретиться лично.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">02</div>
								<p class="card-text mt-2">Я изучаю сферу Вашего бизнеса. Смотрю сайты Ваших коллег и конкурентов. Создаю
									новый уникальный дизайн, подчеркивая все преимущества Вашего бизнеса.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">03</div>
								<p class="card-text mt-2">Верстаю страницы сайта. Добавляю эффекты. Устанавливаю систему управления
									сайтом. Переношу на хостинг. Запускаю и проверяю работу сайта.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">04</div>
								<p class="card-text mt-2">Настраиваю контекстную рекламу. Добавляю в справочники, каталоги по смыслу, в
									другие источники. Оптимизирую код. Исследую результаты. Веду работу по улучшению результатов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">05</div>
								<p class="card-text mt-2">При необходимости настраиваю интеграцию с CRM, c сервисами доставки,
									настраиваю онлайн оплату.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END PROCESS -->
	</main>




	<!-- ORDER-->
	<!-- <div id="contacts-sp"></div>
	<section class="orderLeftMenSection bg-white">
		<div class="container">
			<div class="row">
				<div class="d-none d-md-block col-md-6" style="position: relative;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-men.png" class="order-section-men">
				</div>
				<div class="col-md-6">
					<h2>Хотите узнать стоимость?<br>
						Или есть вопросы?</h2>
					<p class="order-description mb-2" style="max-width: 570px;">Оставьте Ваши контакты и я перезвоню Вам в течение
						10 минут или напишите мне в мессенджер и я подробно отвечу на Ваши вопросы.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-decoration.svg" class="mb-5">
					<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php">
						<div class="row">
							<div class="col-8 col-lg-5">
								<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
								<input type="text" name="name" class="form-control mb-3 mb-md-0" id="exampleFormControlInput1" required>
							</div>
							<div class="col-8 col-lg-5">
								<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
								<input placeholder="Ваш телефон"type="tel" class="form-control mb-3 mb-md-0 telMask"
									id="exampleFormControlInput2" required>
							</div>
						</div>
						<div class="row">
							<div class="col-8 col-lg-5">
								<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
								<button type="submit" class="btn btn-lg btn-corporate-color-1 w-100 mt-3">Хорошо, жду звонка</button>
							</div>
						</div>
					</form>
					<div class="col pt-5">
						<ul class="nav justify-content-start">
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="https://wa.me/79307878068?web=1&app_absent=1&"
									target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-3" href="https://t.me/79307878068" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="https://viber.me/79307878068" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/viber-ico.svg">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
	</section> -->
	<!-- ORDER-->


	<!-- FOOTER -->
	<footer class="footer" id="contacts-sp">
		<div class="container pt-5 pb-3 d-none d-xl-block">
			<div class="row align-items-center">
				<div class="col-xl-3">
					<a href="#">
						<a class="navbar-brand" href="https://site100.ru">site<span class="text-danger">100</span>.ru</a>
					</a>
				</div>
				<div class="col-xl-6">
					<ul class="footer-menu nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo site_url('/'); ?>" data-target="main-page">Главная</a>
						</li>

						<li class="nav-item d-none d-lg-inline">
							<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle arrow-element" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false" data-target="services-dropdown">
								Услуги
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#sp-create" data-target="service-web">создание сайтов</a></li>
								<li><a class="dropdown-item" href="#sp-promotion" data-target="service-promotion">продвижение сайтов</a>
								</li>
								<li><a class="dropdown-item" href="#sp-support" data-target="service-support">поддержка сайтов</a></li>
								<li><a class="dropdown-item" href="https://site100.ru/uslugi/zayavki-i-klienty-na-kukhni-i-shkafy-kupe-na-zakaz/" data-target="service-kitchen">клиенты на корпусную
										мебель</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/blog/'); ?>" data-target="blog-page">Блог</a>
						</li>

						<li class="nav-item d-none d-lg-inline">
							<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
						</li>

                        <li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/jobs/'); ?>" data-target="blog-page">Вакансии</a>
						</li>

						<li class="nav-item d-none d-lg-inline">
							<img class="nav-link" src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.svg" />
						</li>

						<li class="nav-item">
							<a class="nav-link last" href="#contacts-sp" data-target="contacts-page">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="col-xl-3 text-end">
					<a href="tel:‪89307878068" class="contacts-phone fw-semibold">‪
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2"
							style="position: relative; bottom: 1px;">+7 <span class="color-red">(930)</span> 78-78-0-68‬
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col py-5">
					<ul class="nav justify-content-center align-items-center">
						<li class="nav-item me-1 me-lg-2">
							<a class="nav-link" href="#">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>гор. Москва,<br>ул. Митинская, д. 43</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-2">
							<a class="nav-link" href="#">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Без выходных<br>с 9:00 до 21:00</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-2">
							<a href="mailto:vasilyev-r@mail.ru" class="nav-link">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>vasilyev-r@mail.ru</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-2">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Обратный звонок</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link ico-button px-2" href="https://wa.me/79307878068?web=1&app_absent=1&" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button px-3" href="https://t.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
						</li>
                        <!-- <li class="nav-item">
                            <a class="nav-link ico-button px-3" href="https://t.me/79307878068" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/max.svg">
                            </a>
                        </li> -->
					</ul>
				</div>
			</div>
		</div>


		<div class="container d-xl-none">
			<div class="row">
				<div class="col pt-5 pb-0 pb-xl-5">
					<a href="#">
						<a class="navbar-brand" href="https://site100.ru">site<span class="text-danger">100</span>.ru</a>
					</a>
					<ul class="ps-0 pt-3 pb-2 list-unstyled">
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 pb-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>гор. Москва, ул. Митинская, д. 43</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 py-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Пн-Вс, с 9:00 до 21:00</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="mailto:vasilyev-r@mail.ru" class="nav-link ps-0 py-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>vasilyev-r@mail.ru</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 pt-1" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Обратный звонок</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
					</ul>
					<a href="tel:+79307878068" class="contacts-phone">
						<div style="display: flex;" class="align-items-center">
							<div class="nav-li-float-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
									style="position: relative; bottom: 1px;">
							</div>
							<div class="nav-li-float-right phone-link">
								+7 <span>(930)</span> 78-78-0-68
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
					<ul class="nav pt-4 pb-3">
						<li class="nav-item">
							<a class="nav-link ico-button ps-0 pe-2" href="https://wa.me/79307878068?web=1&app_absent=1&"
								target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button px-2" href="https://t.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
						</li>

                        <!-- <li class="nav-item">
                            <a class="nav-link ico-button px-2" href="https://t.me/79307878068" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/max.svg">
                            </a>
                        </li> -->
					</ul>
					<div class="row">
						<div class="col-6">
							<ul class="nav flex-column">
								<li class="nav-item dropdown">
									<a class="nav-link ps-0 active" aria-current="page" href="<?php echo site_url('/'); ?>">Главная</a>
								</li>
								<li class="nav-item">
									<a class="nav-link ps-0" href="<?php echo site_url('/blog/'); ?>">Блог</a>
								</li>
							</ul>
						</div>
						<div class="col-6">
							<ul class="nav flex-column">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle arrow-element" href="#" role="button" data-bs-toggle="dropdown"
										aria-expanded="false">
										Услуги
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#sp-create">создание сайтов</a></li>
										<li><a class="dropdown-item" href="#sp-promotion">продвижение сайтов</a></li>
										<li><a class="dropdown-item" href="#sp-support">поддержка сайтов</a></li>
										<li><a class="dropdown-item"
												href="https://site100.ru/wp-content/themes/site100-theme/%D0%BF%D0%BE%D1%80%D1%82%D1%84%D0%BE%D0%BB%D0%B8%D0%BE/2024/gaziza/2-g/kitchen">клиенты
												на корпусную мебель</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link last" href="#contacts-sp">Контакты</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr class="footer-hr" style="border: none; background-color: #7D7D7D; height: 1px">
		<div class="footer-bottom-block container">
			<p class="footer-bottom-text text-start text-md-center mb-0">Создание и продвижение сайтов: <a
					href="https://site100.ru">site100.ru</a></p>
			<div class="policy-in-footer">
				<a class="links-one" href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf"
					target="_blank">Политика конфиденциальности</a><span class="d-block d-md-none"></span><span
					class="d-none d-md-inline-block">&nbsp;|&nbsp;</span><a
					href="<?php echo get_template_directory_uri(); ?>/docs/Consent-to-the-processing-of-personal-data.pdf"
					target="_blank">Согласие на обработку персональных данных</a>
			</div>
		</div>
	</footer>



	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const menuItems = document.querySelectorAll('.nav-link[data-target]');


			function setActiveMenuItem() {
				// Получаем путь к текущей странице
				const currentPath = window.location.pathname;

				// Удаляем класс active у всех элементов меню
				//   menuItems.forEach(el => {
				//     el.classList.remove('active');
				//     if (el.parentElement.classList.contains('dropdown')) {
				//         el.classList.remove('active');
				//     }
				//   });

				// Ищем пункт меню, data-target которого соответствует текущему пути
				menuItems.forEach(item => {
					const target = item.getAttribute('data-target');
					if (currentPath.startsWith(target)) {
						document.querySelectorAll(`[data-target="${target}"]`).forEach(el => {
							el.classList.add('active');
							if (el.parentElement.classList.contains('dropdown')) {
								el.classList.add('active');
							}
						});
					}
				});
			}

			// Изначально устанавливаем активный пункт
			setActiveMenuItem();

			// Слушаем событие popstate (для кнопок назад/вперед)
			window.addEventListener('popstate', setActiveMenuItem);


		});
	</script>

	<script>
		let prev = document.getElementById('carousel-sites-create-control-prev');
		let next = document.getElementById('carousel-sites-create-control-next');
		let item_1 = document.getElementById('carousel-item-1');
		let item_2 = document.getElementById('carousel-item-2');
		let item_3 = document.getElementById('carousel-item-3');

		if (item_1.classList.contains('active') == true) {
			prev.classList.add("disabled");
		}

		function setNextService() {

			if (item_1.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");

			} else if (item_2.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.add("disabled");

			} else if (item_3.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");
			}
		}

		function setPrevService() {

			if (item_1.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");

			} else if (item_2.classList.contains('active') == true) {
				prev.classList.add("disabled");
				next.classList.remove("disabled");

			} else if (item_3.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");
			}
		}
	</script>

	<!--
		<div class="row justify-content-center">
			<div class="col my-3">
				<form method="post" action="mails/mail_2.php">
					<div class="input-group">
						<input id="phone_mask_2" name="tel" type="text" class="form-control phone_mask_2" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" required>
						<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		-->


	<!-- Callback Modal -->
	<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="callbackModalLabel">Заказать звонок</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php">
						<p><input type="text" name="name" class="form-control" placeholder="Имя"></p>
						<p><input placeholder="Ваш телефон"type="tel" name="tel" class="form-control mb-3 mb-md-0 telMask"
								id="exampleFormControlInput2" required></p>

						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck-3" checked>
								<label class="form-check-label" for="gridCheck-3">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке
											персональных данных в <a
												href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf"
												target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>

						<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
						<button type="submit" class="btn btn-danger" style="width: 100%;">Заказать</button>
					</form>
				</div>
			</div>
		</div>
	</div> <!-- /Modal callback -->


	<!-- Modal order -->
	<div class="modal fade" id="modalOrder" tabindex="-1" aria-labelledby="modalOrderLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalOrderLabel">Заявка на консультацию</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php">
						<p><input type="text" class="form-control" name="name" placeholder="Имя"></p>
						<p><input placeholder="Ваш телефон"type="tel" name="tel" class="form-control mb-3 mb-md-0 telMask"
								id="exampleFormControlInput2" required></p>

						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck-3" checked>
								<label class="form-check-label" for="gridCheck-3">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке
											персональных данных в <a
												href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf"
												target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>

						<input type="hidden" id="g-recaptcha-response-order-modal" name="g-recaptcha-response">
						<button type="submit" class="btn btn-danger" style="width: 100%;">Заказать</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Messengers 2 --
		<div class="messengers-2" style="position: fixed; width: 70px; height: 70px; bottom: 80px; right: 0;">
			<div id="messengers-2-button" class="rounded-start" onclick="clickMessengers2Button();">
			
			</div>
			<div id="messenger-1" class="rounded-circle">
				<a href="whatsapp://send?phone=+79307878068"><img src="https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.png"></a>
			</div>
			<div id="messenger-2" class="rounded-circle">
				<a href="tg://resolve?domain=vasilyevr"><img src="https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/telegram.png"></a>
			</div>
		</div>
		
		<script>
			function clickMessengers2Button() {
				var mes1Right = document.getElementById('messenger-1').style.right;
				var mes2Right = document.getElementById('messenger-2').style.right;
				if ( mes1Right == "0px" || mes1Right == 0 ) {
					document.getElementById('messenger-1').style.right = "80px";
					document.getElementById('messenger-2').style.right = "160px";
					document.getElementById('messengers-2-button').style.background = "url(https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/close-icon.png) center";
					document.getElementById('messengers-2-button').style.backgroundSize = "contain";
				} else {
					document.getElementById('messenger-1').style.right = "0px";
					document.getElementById('messenger-2').style.right = "0px";
					document.getElementById('messengers-2-button').style.background = "url(https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/messenger.png) center";
					document.getElementById('messengers-2-button').style.backgroundSize = "contain";
				}
			}
		</script>
		

		<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

	<!-- For phone mask -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js"
		type="text/javascript"></script>


	<script>
		window.addEventListener('scroll', function () {
			const menu = document.querySelector('.fixed-menu');
			const trigger = document.getElementById('site-create-section');
			const toAppear = trigger.getBoundingClientRect().top;
			const windowWidth = window.innerWidth;

			if (windowWidth >= 992) {
				if (toAppear <= 0) {
					menu.classList.add('show');
					menu.style.zIndex = 1000;
				} else {
					menu.classList.remove('show');
					menu.classList.add('menu-z')
				}
			}
		});

	</script>


	<!-- Показываем сообщение об успешной отправки -->
	<div style="display: <?php echo $display; ?>;" onclick="f1();">
		<!-- Присваиваем свойству display значение переменной $display -->
		<div id="background-msg" style="display: <?php echo $display; ?>;"></div> <!-- Показываем background -->
		<!-- Показываем сообщение об успешной отправке данных -->
		<div id="message">
			<?php echo $_SESSION['recaptcha'];
			unset($_SESSION['recaptcha']); ?>
		</div>
	</div>

	<script>
		/* Убираем сообщение об успешной отправки */
		function f1() {
			document.getElementById("background-msg").style.display = "none";
			document.getElementById("message").style.display = "none";
		}
	</script>

	<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
	<script>
		grecaptcha.ready(function () {
			grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', { action: 'action_name' }).then(function (token) {
				if (document.getElementById('g-recaptcha-response-order-1-home')) {
					document.getElementById('g-recaptcha-response-order-1-home').value = token;
				}
				if (document.getElementById('g-recaptcha-response-order-2')) {
					document.getElementById('g-recaptcha-response-order-2').value = token;
				}
				if (document.getElementById('g-recaptcha-response-order-3-with-mail')) {
					document.getElementById('g-recaptcha-response-order-3-with-mail').value = token;
				}
				if (document.getElementById('g-recaptcha-response-callback')) {
					document.getElementById('g-recaptcha-response-callback').value = token;
				}
				if (document.getElementById('g-recaptcha-response-order-modal')) {
					document.getElementById('g-recaptcha-response-order-modal').value = token;
				}
				if (document.getElementById('g-recaptcha-response-calculate')) {
					document.getElementById('g-recaptcha-response-calculate').value = token;
				}
			});
		});
	</script>


	<!-- Site create portfolio carousel -->
	<!--script>
			let port_prev = document.getElementById('carousel-sites-create-portfolio-control-prev');
			let port_next = document.getElementById('carousel-sites-create-portfolio-control-next');
			let port_item_1 = document.getElementById('portfolio-carousel-item-1');
			let port_item_2 = document.getElementById('portfolio-carousel-item-2');
			let port_item_3 = document.getElementById('portfolio-carousel-item-3');
			let port_item_4 = document.getElementById('portfolio-carousel-item-4');
			let port_item_5 = document.getElementById('portfolio-carousel-item-5');
			let port_item_6 = document.getElementById('portfolio-carousel-item-6');
			let port_item_7 = document.getElementById('portfolio-carousel-item-7');
			let port_item_8 = document.getElementById('portfolio-carousel-item-8');
			let port_item_9 = document.getElementById('portfolio-carousel-item-9');
			let port_item_10 = document.getElementById('portfolio-carousel-item-10');
			
			if ( item_1.classList.contains('active') == true ) {
				port_prev.classList.add("disabled");
			}
			
			function setNextPortfolio() {
				
				if ( port_item_1.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_2.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_3.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_4.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_5.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_6.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_7.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_8.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_9.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.add("disabled");
				
				} else if ( port_item_10.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				}
			}
			
			function setPrevPortfolio() {
				
				if ( port_item_1.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_2.classList.contains('active') == true ) {
					port_prev.classList.add("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_3.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_4.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_5.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_6.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_7.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_8.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
					
				} else if ( port_item_9.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_10.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				}
			}
		</script-->

	<!-- Order button response -->
	<script>
		function hovOrderButtonMouseover(paramOrderArrow) {
			let orderArrow = paramOrderArrow;
			document.getElementById(orderArrow).style.left = '15px';
		}

		function hovOrderButtonMouseout(paramOrderArrow) {
			let orderArrow = paramOrderArrow;
			document.getElementById(orderArrow).style.left = '0';
		}
	</script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
	<script>
		var telMask = document.getElementsByClassName("telMask");
		var im = new Inputmask("+7(999)999-99-99");
		im.mask(telMask);
	</script>

	<?php get_template_part('template-parts/privacy/privacy'); ?>

</body>

</html>
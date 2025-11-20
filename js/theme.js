/* Функция "Прилипало" */
function prilipalo() {
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        
        // Закрываем подменю при скролле на мобильных
        if (window.innerWidth < 992) {
            const scrollDifference = Math.abs(prokrutka - lastScrollTop);
            if (scrollDifference > 5) {
                const openNavbar = document.querySelector('.navbar-collapse.show');
                if (openNavbar) {
                    const collapseInstance = bootstrap.Collapse.getOrCreateInstance(openNavbar);
                    collapseInstance.hide();
                }
                
                const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                openDropdowns.forEach(dropdown => {
                    const dropdownToggle = dropdown.previousElementSibling;
                    if (dropdownToggle) {
                        const dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(dropdownToggle);
                        dropdownInstance.hide();
                    }
                });
            }
        }
        
        lastScrollTop = prokrutka;

        // Логика прилипания
        if (window.innerWidth >= 992) {
            const topMenu = document.getElementById('top-menu-2');
            const mainSection = document.getElementById('main-section');

            if (prokrutka > 60) {
                // Добавляем fixed-top только если еще не добавлен
                if (!topMenu.classList.contains('fixed-top')) {
                    topMenu.classList.add('fixed-top');
                    topMenu.style.position = 'fixed';
                    topMenu.style.top = '0';


                }
            } else {
                // Убираем fixed-top, если прокрутка меньше 50px
                topMenu.classList.remove('fixed-top');
                topMenu.style.position = 'absolute';
                topMenu.style.top = '65px';

                mainSection.style.marginTop = '84px';

                // Не убираем padding-top, он останется
            }
        } else {
            // Для мобильных устройств
            const topMenu = document.getElementById('top-menu-2');
            const mainSection = document.getElementById('main-section');

            topMenu.style.position = '';
            topMenu.style.top = 0;
            topMenu.classList.add('fixed-top');
        }
    });
}




/* Убираем сообщение об успешной отправки */
function modalClose() {
    document.getElementById('background-msg').style.display = 'none';
    document.getElementById('message').style.display = 'none';
    document.getElementById('btn-close').style.display = 'none';
}
document.addEventListener('DOMContentLoaded', () => {
    // Burger menu
    let openBurger = document.querySelector('.header__burger'),
        sideMenu = document.querySelector('.sidemenu'),
        closeBurger = document.querySelector('.sidemenu__close');


    if (openBurger) {
        openBurger.addEventListener('click', () => {
            sideMenu.classList.add('active');
        })
    }

    if (closeBurger) {
        closeBurger.addEventListener('click', () => {
            sideMenu.classList.remove('active');
        })
    }

    // Acc for sidemenu
    let sideMenuItemsParent = document.querySelectorAll('.sidemenu .menu-item-has-children');

    if (sideMenuItemsParent) {
        sideMenuItemsParent.forEach(el => {
            el.addEventListener('click', ev => {
                ev.stopPropagation();
                el.classList.toggle('active');
            })
        });
    }

    // openSearch
    let openSearch = document.querySelector('.header__search'),
        searchModal = document.querySelector('.search-modal'),
        closeSearch = document.querySelector('.search-modal__close');


    if (openSearch) {
        openSearch.addEventListener('click', () => {
            searchModal.classList.add('active');
        })
    }

    if (closeSearch) {
        closeSearch.addEventListener('click', () => {
            searchModal.classList.remove('active');
        })
    }

    const promoElements = document.querySelectorAll('.promocode');

    if (promoElements) {
        promoElements.forEach(function (element) {
            element.addEventListener('click', function () {
                const promoText = this.querySelector('.promo-text').innerText;

                // Створюємо тимчасовий елемент textarea для копіювання тексту
                const textarea = document.createElement('textarea');
                textarea.value = promoText;
                document.body.appendChild(textarea);

                // Виділяємо текст та копіюємо його до буферу обміну
                textarea.select();
                document.execCommand('copy');

                // Видаляємо тимчасовий елемент textarea
                document.body.removeChild(textarea);

                // Додатково, можна показати повідомлення про успішне копіювання
                alert('Промокод скопійовано: ' + promoText);
            });
        });
    }

    // Scroll top
    document.querySelector('.top-button').addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });


    // Show btn
    window.addEventListener('scroll', function () {
        var scrollPosition = window.scrollY;
        var topButton = document.querySelector('.top-button');

        if (scrollPosition > 200) {
            topButton.classList.add('show');
        } else {
            topButton.classList.remove('show');
        }
    });


    // Swiper 
    var swiper = new Swiper(".reviews-swiper", {
        slidesPerView: 3,
        spaceBetween: 40,
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {

            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        }
    });



    // Added class to big tables
    const tablesDef = document.querySelectorAll('.wp-block-table');

    tablesDef.forEach(table => {
        const rows = table.querySelectorAll('tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            if (cells.length >= 6) {
                table.classList.add('has-six-or-more-cells');
            } else if (cells.length >= 3) {
                table.classList.add('has-three-or-more-cells');
            }
        });
    });

});
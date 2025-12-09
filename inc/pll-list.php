<?php
add_action('init', function () {
    pll_register_string('casinos', 'Обзор');
    pll_register_string('casinos', 'Грати');
    pll_register_string('casinos', 'Платежные методы');
    pll_register_string('casinos', 'Переваги');
    pll_register_string('casinos', 'Недоліки');
    pll_register_string('casinos', 'Пошук');
    pll_register_string('casinos', 'Новини');

    pll_register_string('404', 'Сторінка не знайдена');
    pll_register_string('404', 'Вибачте, але сторінку, яку ви шукаєте, не вдалося знайти. Можливо, вона була видалена або ніколи не існувала.');
    pll_register_string('404', 'На головну');

    pll_register_string('dn', 'Опубліковано');
});

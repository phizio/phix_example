<?php require_once 'config.php';
/* ----------------------- ПАРАМЕТРЫ СТРАНИЦЫ ----------------------- */
$page['title'] = 'Ошибка 404';
$page['desc'] = 'Ошибка 404 - страница не найдена';

/* ---------------------- КОНТРОЛЛЕР СТРАНИЦЫ ----------------------- */

/* -------------------------- ОТОБРАЖЕНИЕ ------------ */ ob_start(); ?>

    <h2>Ошибка 404</h2>
    <p>страница не найдена</p>

<? require MC_ROOT . '/scripts/render_view.php';
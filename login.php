<?php require_once 'config.php';
/* ----------------------- ПАРАМЕТРЫ СТРАНИЦЫ ----------------------- */
$page['title'] = 'Логин';
$page['desc'] = 'Вход на сайт';


/* ---------------------- КОНТРОЛЛЕР СТРАНИЦЫ ----------------------- */

if ( auth() ) {header("Location: /profile"); exit;}

/* -------------------------- ОТОБРАЖЕНИЕ ------------ */ ob_start(); ?>

<h2>Вход на сайт</h2>
<hr />
<div class="row">
    <div class="col-sm-4">
        <form action="login.php" method="post">

            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="Логин" value="<? echo $login; ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="pass" placeholder="Пароль">
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember"> &nbsp; Запомнить меня
                </label>
            </div>

            <button type="submit" class="btn btn-success">ВОЙТИ</button>
            <a class="pull-right" href="/register">регистрация</a>
        </form>
    </div>
</div>

<?php require PHIX_CORE . '/render_view.php';
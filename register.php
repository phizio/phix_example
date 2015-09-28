<?php require_once 'config.php';
/* ----------------------- ПАРАМЕТРЫ СТРАНИЦЫ ----------------------- */
$page['title'] = 'Регистрация';
$page['desc'] = 'Регистрация на сайте';


/* ---------------------- КОНТРОЛЛЕР СТРАНИЦЫ ----------------------- */



/* -------------------------- ОТОБРАЖЕНИЕ ------------ */ ob_start(); ?>

<h2>Регистрация на сайте</h2>
<hr />
<div class="row">
    <div class="col-sm-4">
        <form action="register.php?act=register" method="post">

            <div class="form-group">
                <label>Ваше имя</label>
                <input type="text" name="user_name" class="form-control" placeholder="Имя" value="<?= $user_name ?>" autofocus>
            </div>

            <div class="form-group">
                <label>Адрес электронной почты</label>
                <input type="text" name="user_email" class="form-control" placeholder="E-mail" value="<?= $user_email ?>">
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="agree"> &nbsp; Согласен с правилами Сайта
                </label>
            </div>

            <button type="submit" class="btn btn-success">РЕГИСТРАЦИЯ</button>
            <a class="pull-right" href="/login">уже зарегистрирован</a>
        </form>
    </div>
</div>


<?php require PHIX_CORE . '/render_view.php';
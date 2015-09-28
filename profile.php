<?php require_once 'config.php';
/* ----------------------- ПАРАМЕТРЫ СТРАНИЦЫ ----------------------- */
$page['title'] = 'Профиль';
$page['desc'] = 'Профиль пользователя';


/* ---------------------- КОНТРОЛЛЕР СТРАНИЦЫ ----------------------- */

if ( ! auth() ) {header("Location: /login"); exit;}

/* -------------------------- ОТОБРАЖЕНИЕ ------------ */ ob_start(); ?>

<h2>Профиль</h2>
<hr />
    <div class="row">
        <div class="col-sm-4">
            <form action="/profile?act=edit" method="post">

                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" name="user_name" placeholder="Имя" value="<?= $user['name'] ?>">
                </div>

                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" class="form-control" name="user_login" placeholder="Логин" value="<?= $user['login'] ?>">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="user_email" placeholder="E-mail" value="<?= $user['email'] ?>">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fa fa-floppy-o"></i>
                    Сохранить
                </button>
                <a class="pull-right" href="?act=quit">Выйти из аккаунта</a>
            </form>
        </div>

        <div class="col-sm-4">
            <form action="/profile?act=edit" method="post">
                <input type="hidden" name="passchange" value="1" />

                <div class="form-group">
                    <label>Введите новый пароль</label>
                    <input type="password" class="form-control" name="user_pass" placeholder="Пароль">
                </div>

                <div class="form-group">
                    <label>Повторите пароль</label>
                    <input type="password" class="form-control" name="user_pass2" placeholder="Повтор пароля">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fa fa-exchange"></i>
                    Сменить пароль
                </button>

            </form>
        </div>
    </div>


<?php require PHIX_CORE . '/render_view.php';
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <i class="fa fa-star"></i> Phix
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?= ($self == 'index.php') ? 'active' : '' ?>"><a href="/">Главная</a></li>
                <li class="<?= ($self == 'log.php') ? 'active' : '' ?>"><a href="/log">Лог</a></li>
                <li class="<?= ($self == 'crud.php') ? 'active' : '' ?>"><a href="/crud">CRUD</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<header>
	<nav class="navbar navbar-dark" style="background-color: #0275d8;">
  <ul class="nav navbar-nav navbar-full">
    <li class="nav-item active">
      <a class="nav-link" href="#">Домой <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target = "#AuthModal">Войти</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Блог</a>
    </li>
  </ul>
<?php include("AuthModal.php");?>
  <form class="form-inline pull-xs-right hidden-xs-down">
    <input class="form-control" type="text" placeholder="Поиск...">
    <button class="btn btn-secondary" type="submit">Найти</button>
  </form>
</nav>
</header>
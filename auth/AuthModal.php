  <div id="AuthModal" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Авторизация</h4>
    </div>
    <div class="modal-body">
        <div class="form-group row">
            <form method="post" action="">
            <label for="example-text-input" class="col-xs-2 col-form-label">Логин</label>
            <div class="col-xs-10">
            <input class="form-control" name = "login"type="text"id="example-text-input" autofocus required oninvalid="this.setCustomValidity('Введите, пожалуйста, логин')" oninput="setCustomValidity(")">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-password-input" class="col-xs-2 col-form-label">Пароль</label>
            <div class="col-xs-10">
            <input class="form-control" name = "password" type="password" id="example-password-input">
            </div>
        </div>
    </div>
    <div class="modal-footer pull-left">
        <button type="button" class="btn btn-secondary">Регистрация</button>
        <button type="submit" class="btn btn-primary">Войти</button>
        <button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button>
        </form>
    </div>
    </div>
    </div>
  </div>
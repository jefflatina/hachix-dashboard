<div id="back"></div>
   

<div class="login-box">

  <div class="login-logo">

    <img class="img-responsive" src="views/img/template/loginlogo.png" style="padding: 5px 100px 0 100px">

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Please Log In to enter Ha'Chix Dashboard</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Username" name="loginUser" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="loginPass" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-success btn-block btn-flat">Log In</button>

        </div>
       
      </div>

      <?php

        $login = new ControllerUsers();
        $login -> ctrUserLogin();

      ?>

    </form>

  </div>

</div>
   

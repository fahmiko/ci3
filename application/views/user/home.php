<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	  body {
    padding-top: 15px;
    font-size: 12px
  }
  .main {
    max-width: 500px;
    margin: 0 auto;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
            margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h3 {
    text-align: center;
    line-height: 300%;
  }
</style>

<div class="container">
  <div class="row">

    <div class="main">

      <h3>Please Log In, or Sign Up</h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block" id="login">Login</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-default btn-block" id="sign_up">Sign Up</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <div id="frm_login">
      	<?php echo form_open('user/login') ?>
        <div class="form-group">
          <label for="inputUsernameEmail">Username</label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
        <?php echo form_close() ?>
      </div>

      <div id="frm_sign_up">
      	<?php echo form_open('user/register') ?>
        <div class="form-group">
          <label for="inputUsernameEmail">Username</label>
          <input type="text" class="form-control" name="username" value="<?=set_value('username')?>">
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" name="email" value="<?=set_value('email')?>">
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
          <label for="inputCPassword">Confirm Password</label>
          <input type="password" class="form-control" name="passconf">
        </div>
        <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" name="name" value="<?=set_value('name')?>">
        </div>
        <div class="form-group">
          <label for="inputPostal">Zip Code</label>
          <input type="text" class="form-control" name="zip_code" value="<?=set_value('zip_code')?>">
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-success">
          Register
        </button>
        <?php echo form_close() ?>
      </div>
    
    <?php
	if(validation_errors()){
		echo "<div class='alert alert-danger'>
 			  <strong>Danger!</strong><br>".validation_errors()."
			  </div>"
			  ;
		}
	if($this->session->flashdata('login_false')){
		echo "
		<div class='alert alert-danger'>
 			<strong>Danger!</strong><br>".$this->session->flashdata('login_false')."
		</div>";
		}
	if($this->session->flashdata('register')){
		echo "
		<div class='alert alert-info'>
 			<strong>Danger!</strong><br>".$this->session->flashdata('register')."
		</div>";
		}
	if($this->session->flashdata('include_login')){
		echo "
		<div class='alert alert-warning'>
 			<strong>Danger!</strong><br>".$this->session->flashdata('include_login')."
		</div>";
		}
	?>
    </div>
    
  </div>

<script type="text/javascript">
  	$('document').ready(function(){
  		$('#frm_sign_up').hide();
  	});

  	$('#sign_up').click(function(){
  		$('#sign_up').removeClass();
  		$('#login').removeClass();
  		$('#sign_up').addClass('btn btn-lg btn-primary btn-block');
  		$('#login').addClass('btn btn-lg btn-default btn-block');

  		$('#frm_login').hide();
  		$('#frm_sign_up').fadeIn(500);
  	});

  	$('#login').click(function(){
  		$('#sign_up').removeClass();
  		$('#login').removeClass();
  		$('#sign_up').addClass('btn btn-lg btn-default btn-block');
  		$('#login').addClass('btn btn-lg btn-primary btn-block');

  		$('#frm_sign_up').hide();
  		$('#frm_login').fadeIn(500);
  	});

</script>
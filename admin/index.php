<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background-image: url(bg.jpg);">
<div class="login-box">
  	<div class="login-logo">
  		<!-- <b>Хөдөлмөр халамжийн үйлчилгээний вэб програм</b> -->
  	</div>
  
  	<div class="login-box-body">
      <h3 style="text-align: center;"><b>Хөдөлмөр халамжийн үйлчилгээний вэб програм</b></h3>
      <img src="1.png" style="width: 200px; margin-left: 55px;">
    	<h2 class="login-box-msg">Нэвтрэх хэсэг</h2>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="input Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login" style="width: 320px;"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>
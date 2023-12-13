  <!-- <?php session_start(); ?>  -->
<!DOCTYPE html>
<html lang="en">




    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gate Pass Approval</title>
		    <link rel="icon" href="data:image/jpeg;base64,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" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

        <style>
            .top-content{
                background-color:#1B2840;
                height: 100vh;


               
            
            }


			
            </style>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Gatepass System</h3>
									<img src="data:image/png;base64,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">

									<p style="color:black";>Enter your Roll no and Password to log in:</p>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-user"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
							<?php
								if(isset($_SESSION["LoginError"]))
								{
									if($_SESSION["LoginError"] == 1)
									{
										?>
										
											<form role="form" action="controller/LoginController.php" method="post" class="login-form">
												<div class="form-group">
													<label class="sr-only" for="form-username">Office Code</label>
													<input type="text" name="officeUserCode" placeholder="Roll No" class="form-username form-control" id="form-username">
												</div>
												<div class="form-group">
													<label class="sr-only" for="form-password">Password</label>
													<input type="password" name="officeUserPass" placeholder="Password" class="form-password form-control" id="form-password">
												</div>
												<button type="submit" name="btnSubmit" class="btn">Log In!</button>
												<h3 align="center">Please check your roll no and password</h3>
												<!-- <h3 align="center"><a href = "view/recoverPassword.php">Forgot Password?</a></h3> -->
											</form>
											
										<?php
										unset($_SESSION["LoginError"]);
									}
									unset($_SESSION["LoginError"]);
								}
								else
								{
									?>
										
										<form role="form" action="controller/LoginController.php" method="post" class="login-form">
											<div class="form-group">
												<label class="sr-only" for="form-username">Office Code</label>
												<input type="text" name="officeUserCode" placeholder="Roll No" class="form-username form-control" id="form-username">
											</div>
											<div class="form-group">
												<label class="sr-only" for="form-password">Password</label>
												<input type="password" name="officeUserPass" placeholder="Password" class="form-password form-control" id="form-password">
											</div>
											<button type="submit" name="btnSubmit" class="btn">Log In!</button>
											<!-- <h3 align="center"><a href = "view/recoverPassword.php">Forgot Password?</a></h3> -->
										</form>
										
									<?php
								}
							?>
			                    
		                    </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js">


		</script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
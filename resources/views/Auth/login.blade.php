<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login - SPI Navigator</title>
    <link rel="apple-touch-icon" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/images/icons/Logo-Persero-Batam.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/css/app.css') }}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/css/pages/login-register.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/assets/css/style.css') }}">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 1-column  bg-white bg-lighten-2 menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="1-column">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-shadow" style="background: navy">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container">
          <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
            <ul class="nav navbar-nav">
              <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="/"><i class="ficon ft-arrow-left"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
			<div class="card border-grey border-lighten-3 m-0">
				<div class="card-header border-0">
					<div class="card-title text-center">
						<img src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/images/icons/Logo-Persero-Batam.png') }}" alt="perserobatam logo">
					</div>
					<h3 class="card-subtitle text-center text-bold pt-2" style="color: navy">Welcome to SPI Navigator!</h3>
				</div>
				<div class="card-content">
					<div class="card-body">
						<form class="form-horizontal" action="/dashboard" novalidate>
							<fieldset class="form-group position-relative has-icon-left">
								<input type="text" class="form-control input-lg" id="user-name" placeholder="Email/Username" tabindex="1" required data-validation-required-message= "Please enter your email/username.">
								<div class="form-control-position">
								    <i class="ft-user"></i>
								</div>
								<div class="help-block font-small-3"></div>
							</fieldset>
							<fieldset class="form-group position-relative has-icon-left">
								<input type="password" class="form-control input-lg" id="password" placeholder="Enter Password" tabindex="2" required data-validation-required-message= "Please enter valid passwords.">
								<div class="form-control-position">
								    <i class="fa fa-key"></i>
								</div>
								<div class="help-block font-small-3"></div>
							</fieldset>
							<div class="form-group row">
								<div class="col-md-6 col-12 text-center text-md-left">
									<fieldset>
						                <input type="checkbox" id="remember-me" class="chk-remember">
						                <label for="remember-me"> Remember Me</label>
						            </fieldset>
								</div>
								<div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
							</div>
							<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
						</form>
					</div>
				</div>
				<div class="card-footer border-0">
					<p class="card-subtitle line-on-side text-muted text-center font-small-5 mx-2 my-1"><span>Don't have an account ? <a href="/register">Sing Up</a></span></p>
				</div>
			</div>
		</div>
    </div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/core/app.js') }}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('../Robust-responsive-bootstrap-4-admin-template-build-system/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

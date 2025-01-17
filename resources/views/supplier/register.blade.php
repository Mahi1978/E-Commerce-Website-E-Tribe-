<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('client/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('client/css1/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-sm">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="{{url('insertSupplier')}}" enctype="multipart/form-data">
				  {{csrf_field()}}

					<div class="form-group">
						<span class="heading">Full Name :</span>
						<input type="text" name="supplier_name"  class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" >
					</div>

					<div class="form-group">
						<span class="heading">Contact Number :</span>
						<input type="integer" name="supplier_phone" class="form-control form-control-user" id="examplePhoneNumber" placeholder="Enter Contact Number">
					</div>
					<div class="form-group">
						<span class="heading">Email ID / Username :</span>
						<input type="email" name="supplier_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
					</div>
					<div class="form-group">
						<span class="heading">New Password :</span>
						<input type="password" name="new_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="New Password">
					</div>
					<div class="form-group">
						<span class="heading">Confirm Password :</span>
						<input type="password" name="confirm_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirm Password">
					</div>
					<input type="submit" value="SIGN - UP" class="btn btn-primary btn-user btn-block">

				</form>

				<div class="text-center" style="margin-top:5px;" >
					<a class="small" href=" {{url('supplier_login')}} " style="color:#7f0794;">Already have an account? Login!</a>
				</div>
            </div>
          </div>

		  <div class="col-lg-5" >

				<div class="social-class" style="padding-left:20%;padding-right:20%;padding-top:50%;width:100%;height:100%;background-image: linear-gradient(180deg,#d47f0029 10%,#f39921cf 70%);"  >
					<h5 style="margin-top:-60%;color:#7f0794;">
						SIGN IN with Social Network
					</h5>
					<br><br><br><br><br><br>
					<a href="index.html" class="btn btn-google btn-user btn-block">
					  <i class="fab fa-google fa-fw"></i> Register with Google
					</a>
					<br><br><br>
					<a href="index.html" class="btn btn-facebook btn-user btn-block" >
					  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
					</a>
					<br><br><br>
					<a href="index.html" class="btn btn-twitter btn-user btn-block"  >
						<i class="fab fa-twitter fa-fw"></i>Register with Twitter
					</a>

				</div>
		  </div>
        </div>
      </div>
    </div>

  </div>


</body>

</html>

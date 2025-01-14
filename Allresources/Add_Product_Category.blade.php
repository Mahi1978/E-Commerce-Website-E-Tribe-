<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Product Categories</title>

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
                <h1 class="h4 text-gray-900 mb-4">Add Product Categories!</h1>
              </div>
              <form class="user" method="post" action="{{URL::to('category')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                <span class="heading">Product ID:</span>
                          <input type="text" class="form-control form-control-user" id="examplePhoneNumber" name="product_id" placeholder="Enter product id ">
                      </div>
        	<div class="form-group">
					<span class="heading">Category Name:</span>
                    <input type="text" class="form-control form-control-user" id="examplePhoneNumber" name="category_name" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
					<span class="heading">Description :</span>
					<input type="text" class="form-control form-control-user" id="exampleInputEmail" name="description" placeholder="Enter Category Description">
                </div>
                <div class="form-group">
                <span class="heading">Category Image :</span>
                    <input type="file" class="form-control form-control-user" name="image" id="exampleInputPassword" >
                </div>
                <div class="form-group">
			        <button style="margin-left: 19rem;" class="btn btn-primary btn-user btn-block">
                  Add Category
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

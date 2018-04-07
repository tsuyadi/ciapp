<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title>CIAPP | Login </title>

  <!-- Icons -->
  <link href="<?php echo base_url('assets/node_modules/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/node_modules/simple-line-icons/css/simple-line-icons.css');?>" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="<?php echo base_url('assets/coreui/css/style.css');?>" rel="stylesheet" type="text/css">

  <!-- Styles required by this views -->

</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">       
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <form action="<?php echo base_url();?>index.php/login/validatelogin" method="post" name="login">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-user"></i></span>
                </div>
                <input id="username" name="username" type="text" class="form-control" placeholder="Username">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                </div>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-outline-primary px-4">Login</button>
                </div>
                <div class="col-6 text-right">
                  <button type="button" class="btn btn-link px-0">Forgot password?</button>
                </div>
              </div>
              <?php if(!empty($warning)){ ?>
                <div class="row">
                  <div class"card-body">
                    <div class="alert alert-danger alert-dismissable">
                      <i class="fa fa-ban"></i>
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Alert!</b><?php echo $warning ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </form>
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Sign up</h2>
                <p>Online registration to the CIAPP 2018 is now open!</p>
                <a href="<?php echo base_url();?>index.php/register" class="btn btn-primary active mt-3">Register Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo base_url('assets/node_modules/sweetalert/dist/sweetalert.min.js');?>"></script>  
  <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script type="text/javascript">
  $("#registerBtn").click(function(){
    swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            });
          } else {
            swal("Your imaginary file is safe!");
          }
    });  
  });
  </script>
</body>
</html>
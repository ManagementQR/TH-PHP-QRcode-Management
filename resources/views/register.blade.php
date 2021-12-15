<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../resources/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="{{URL::to('/register')}}" method="POST">
                                {{ csrf_field() }}
                                <?php 
                                    $message = Session::get('message');
                                    if($message){
                                        echo '<span class="text-alert">'.$message.'</span>';
                                        //Session::put('message',null);
                                    }
                                    
                                    ?>
                                <div class="form-group" >
                                    <input type="text" class="form-control form-control-user" 
                                        name="username_register" placeholder="Username">
                                    <span class="error-message" style="color: red">{{$errors->first('username')}}</span>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" 
                                        name="fullname" placeholder="Fullname">
                                    <span class="error-message" style="color: red">{{$errors->first('fullname')}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" 
                                        name="email" placeholder="Email Address">
                                    <span class="error-message" style="color: red">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                           name="password_register"  placeholder="Password">
                                    <span class="error-message" style="color: red">{{$errors->first('password')}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="confirm_password"  placeholder="Repeat Password">
                                    <span class="error-message" style="color: red">{{$errors->first('confirm_password')}}</span>
                                </div>
                                
                                <input type="submit" value="Register" class="btn btn-primary btn-user btn-block">
                                
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../resources/vendor/jquery/jquery.min.js"></script>
    <script src="../resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../resources/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../resources/js/sb-admin-2.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../resources/css/style.css" />
    <title>Sign in & Sign up</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{URL::to('/client-dashboard')}}" method="POST" class="sign-in-form">
            {{ csrf_field() }}
            <h2 class="title" >Đăng Nhập</h2>
            <?php 
              $message = Session::get('message');
              if($message){
                echo '<span class="text-alert" style="color: red">'.$message.'</span>';
                Session::put('message',null);
              }
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Đăng Nhập" class="btn solid" />
            <p class="social-text">Hoặc đăng nhập bằng các nền tảng mạng xã hội</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="{{URL::to('/signup')}}" method="POST" class="sign-up-form">
            <h2 class="title">Đăng ký tài khoản</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username_register" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="fullname" placeholder="Fullname" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_register" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirm Password" />
            </div>
            
            <input type="submit" class="btn" value="Đăng ký" />
            <p class="social-text">Hoặc Đăng ký tài khoản với các nền tảng mạng xã hội</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Tạo mới tài khoản!</h3>
            <p>
              Bạn chưa có tài khoản, hãy nhấn vào đăng ký ngay để sử dụng dịch vụ của chúng tôi.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng ký
            </button>
          </div>
          <img src="../resources/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Bạn đã có tài khoản ?</h3>
            <p>
              Quay lại trang đăng nhập
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="../resources/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../resources/js/appClient.js"></script>
  </body>
</html>

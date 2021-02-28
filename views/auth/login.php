
<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>Lowkey Blog - Personal Blog Template</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <style>
      .cate img{
        width: 200px;
        height: 150px;
        box-sizing: border-box;
      }
      .user img{
        width: 50px;
        height: 50px;
        box-sizing: border-box;
      }
    </style>
  </head>

 <body>

    
     
     <!-- Preloader Start -->
     <div class="preloader">
       <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
<div id="main">
  <div class="container">
      <div class="row">
          <!-- About Me (Left Sidebar) Start -->
           <div class="col-md-3">
             <div class="about-fixed">
                <div class="my-detail">
                  
                  <div class="white-spacing" style="padding: 0px;" >
                      <h1>
                        <?php if (isset($_SESSION['user_login'])) { ?>
                           <?php echo $_SESSION['user_login']; ?>
                        <?php } ?>
                      </h1>
                      <img style="width: 100%" src="https://source.unsplash.com/K4mSJ7kc0As/600x800" alt="">
                      <span style="padding: 10px 0px;"><a href="index.php?type=frontend&mod=home&act=index">Trang chủ</a></span>
                  </div><br><br>
                    <?php if ( isset($_SESSION['login'])){ ?>
                    <a href="index.php?type=backend&mod=auth&act=logout">Đăng xuất</a>             
                    <?php } ?>
                 <ul class="social-icon">
                   <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                   <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                  </ul>

              </div>
            </div>
          </div>
          <div class="col-md-9">
              <div class="col-md-12 page-body">
                <div class="row">
                	<div class="container" style="width: 60%">

					 <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4">Chào mừng trở lại!</h1>
                              </div>
                              <form class="user" method="POST" action="index.php?type=backend&mod=auth&act=handle">
                                  <div class="form-group">
                                      <input type="email" class="form-control form-control-user"
                                          id="exampleInputEmail" aria-describedby="emailHelp" name="username" 
                                          placeholder="Enter Email Address...">
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control form-control-user"
                                          id="exampleInputPassword" placeholder="Password" name="pwd">
                                  </div>
                                  <?php if (isset($_COOKIE['error'])) { ?>
                                        <div style="color: red">
                                          <?php echo $_COOKIE['error'] ?>
                                        </div>
                                  <?php } ?>
                                  <div class="form-group">
                                      <div class="custom-control custom-checkbox small">
                                          <input type="checkbox" class="custom-control-input" id="customCheck">
                                          <label class="custom-control-label" for="customCheck">Nhớ tài khoản</label>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-user btn-block">
                                      Login
                                  </button>
                                  <hr>
                                  <a href="index.html" class="btn btn-google btn-user btn-block">
                                      <i class="fab fa-google fa-fw"></i> Đăng nhập với Google
                                  </a>
                                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                      <i class="fab fa-facebook-f fa-fw"></i> Đăng nhập với Facebook
                                  </a>
                              </form>
                              <hr>
                              <div class="text-center">
                                  <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                              </div>
                              <div class="text-center">
                                  <a class="small" href="register.html">Tạo tài khoản mới!</a>
                              </div>
                  		</div>
  

     				</div>

  			 </div>

			</div> 
</div>
                     
<?php require_once('views/backend/includes/footer.php') ?>   
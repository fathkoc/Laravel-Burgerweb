<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('admin/')}}/images/favicon.ico" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="{{asset('admin/')}}/css/style.css"/>

</head>

<body>

 <div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{asset('admin/')}}/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

 <!--=================================
 login-->

<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url({{asset('admin/')}}/images/login-bg.jpg);" >
  <div class="container">
     <div class="row justify-content-center no-gutters vertical-align">

       <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Panel Giriş</h3>
            <form id="logform" method="post">
         <div class="section-field mb-20">
             <label class="mb-10" for="name">KullanıcıAdi</label>
               <input id="name" class="web form-control" type="text"  name="username">
            </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Şifre </label>
               <input id="Password" class="Password form-control" type="password"  name="password">
            </div>
                @csrf

              <button name="loginbuton" class="button" type="submit">Giriş Yap</button>

            </form>
             <p class="mt-20 mb-0">Bilgilerinimi Unuttun? <a href="register.html"> Buraya Tıkla</a></p>
          </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 login-->

</div>



<!--=================================
 jquery -->

<!-- jquery -->
<script src="{{asset('admin/')}}/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="{{asset('admin/')}}/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- chart -->
<script src="{{asset('admin/')}}/js/chart-init.js"></script>

<!-- calendar -->
<script src="{{asset('admin/')}}/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="{{asset('admin/')}}/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="{{asset('admin/')}}/js/morris.init.js"></script>

<!-- datepicker -->
<script src="{{asset('admin/')}}/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="{{asset('admin/')}}/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="{{asset('admin/')}}/js/toastr.js"></script>

<!-- validation -->
<script src="{{asset('admin/')}}/js/validation.js"></script>

<!-- lobilist -->
<script src="{{asset('admin/')}}/js/lobilist.js"></script>

<!-- custom -->
<script src="{{asset('admin/')}}/js/custom.js"></script>
 <script>
     let ajax_url='{{route('login_post')}}';

 </script>
 <script src="{{asset('admin/')}}/asset/login.js"></script>

</body>
</html>

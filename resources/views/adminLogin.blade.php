<!DOCTYPE html>
<head>
    <title>Đăng Nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
    {{--<link rel="stylesheet" href="{{{'./backend/css/bootstrap.min.css'}}}" >--}}
    <link rel="stylesheet" href="{{{asset('./backend/css/bootstrap.min.css')}}}">

    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{{asset('./backend/css/style.css')}}}" rel='stylesheet' type='text/css'/>
    <link href="{{{asset('./backend/css/style-responsive.css')}}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('./backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('./backend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{{asset('./backend/js/jquery2.0.3.min.js')}}}"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Đăng Nhập</h2>
        <!---------- thông báo message lỗi khi đăng nhập sai------------------->
        @if(session()->get('error'))
            <div class="alert alert-danger">
                {{session()->get('error')}}
            </div>



        @endif
    <!-------------------------------->
        <form action="dashboad" method="post">
        @csrf     <!--bảo mật trong gửi from csrf-field --->

            <input type="text" class="ggg" name="admin_email" placeholder="Nhập E-MAIL" required="">
            <input type="password" class="ggg" name="admin_password" placeholder="Nhập PASSWORD" required="">
            <span><input type="checkbox"/>Nhớ Mật Khẩu</span>
            <h6><a href="#">Quên Mật Khẩu ?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng Nhập" name="login">

        </form>
        {{--  <p> <a href="registration.html">Đăng Kí Tài Khoản Mới</a></p> --}}
        {{-- <a href="{{url('/login-facebook')}}" >
            Login Fb
        </a> --}}

    </div>
</div>
<script src="{{{asset('./backend/js/bootstrap.js')}}}"></script>
<script src="{{{asset('./backend/js/jquery.dcjqaccordion.2.7.js')}}}"></script>
<script src="{{{asset('./backend/js/scripts.js')}}}"></script>
<script src="{{{asset('./backend/js/jquery.slimscroll.js')}}}"></script>
<script src="{{{asset('./backend/js/jquery.nicescroll.js')}}}"></script>
<script src="{{{asset('./backend/js/jquery.scrollTo.js')}}}"></script>

<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
@include('sweetalert::alert')
</body>
</html>

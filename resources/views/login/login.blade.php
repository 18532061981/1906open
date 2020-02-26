<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('/css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.css?v=4.4.0')}}" rel="stylesheet">

    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css?v=4.1.0')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">h</h1>

        </div>
        <h3>欢迎使用 hAdmin</h3>

        <form class="m-t" role="form" action="{{url('login/add')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" placeholder="公司名" required="" name="username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="法人" required="" name="userren">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="公司地址" required="" name="usertype">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="营业执照照片" required="" name="username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="联系人电话" required="" name="usertop">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="" name="useremail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" required="" name="userpwd">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">注 册</button>



        </form>
    </div>
</div>

<!-- 全局js -->
<script src="{{asset('/js/jquery.min.js?v=2.1.4')}}"></script>
<script src="{{asset('/js/bootstrap.min.js?v=3.3.6')}}"></script>




</body>

</html>

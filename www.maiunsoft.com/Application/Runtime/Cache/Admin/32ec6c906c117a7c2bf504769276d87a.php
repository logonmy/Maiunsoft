<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie6" lang="zh-cn"><![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="zh-cn"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="zh-cn"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="zh-cn"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="zh-cn"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit">
    <meta name="referrer" content="unsafe-url"/>
    <meta name="referrer" content="always"/>
    <link rel="shortcut icon" href="img/favicon.png">
    <title>MAIUNSOFT WEBSITE CONTENT MANAGEMENT SYSTEM</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="http://static.maiunsoft.com/assets/bootstrap-3.3.5/css/bootstrap.min.css" />
    <!-- Custom styles for this template -->
    <link href="/www.maiunsoft.com/Application/Admin/View/_Static/css/style.css" rel="stylesheet">
    <link href="/www.maiunsoft.com/Application/Admin/View/_Static/css/style-responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="http://static.maiunsoft.com/js/jquery/jquery-2.2.0.min.js"></script>
</head>

<body class="login-body">
    <div class="container">
        <form class="form-signin" action="<?php echo U('login/login');;?>" method="post">
            <h2 class="form-signin-heading">MAIUNSOFT WCM SYSTEM</h2>
            <div class="login-wrap">
                <input name="username" type="text" class="form-control" placeholder="username" autofocus>
                <input name="password" type="password" class="form-control" placeholder="password">
                <label class="checkbox" style="margin-left:20px;">
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Sign In</button>
            </div>
        </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src=""></script>
</body>

</html>
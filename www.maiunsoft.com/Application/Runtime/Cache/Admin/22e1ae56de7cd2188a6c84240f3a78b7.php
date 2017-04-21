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
    <title>MAIUNSOFT WCM SYSTEM</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="http://static.maiunsoft.com/assets/bootstrap-3.3.5/css/bootstrap.min.css" />
<!-- Custom styles for this template -->
<link href="/www.maiunsoft.com/Application/Admin/View/_Static/css/style.css" rel="stylesheet">
<link href="/www.maiunsoft.com/Application/Admin/View/_Static/css/style-responsive.css" rel="stylesheet" />
<script type="text/javascript" src="http://static.maiunsoft.com/js/jquery/jquery-2.2.0.min.js"></script>
</head>

<body>
        <section id="container" class="">
        <!--top start-->
        <!--top start-->
<header class="header white-bg">
    <!--logo start-->
    <a href="<?php echo U('home/index');?>" class="logo">MAIUNSOFT WCM SYSTEM</a>
    <div class="top-nav ">
        <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="username">Administrator</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="#"><i class=" fa fa-suitcase"></i>首选项</a>
                    </li>
                    <li><a href="#"><i class="fa fa-cog"></i> 设置</a>
                    </li>
                    <li><a href="<?php echo U('my/reset_password');?>"><i class="fa fa-key"></i>修改密码</a>
                    </li>
                    <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-logout"></i> 退出系统</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
    </div>
</header>
<!--top end-->

        <!--top end-->

        <!--sidebar start-->
        <!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <div class="workspace-guid">
            <h1>个人工作间</h1>
            <a href="<?php echo U('home/index');?>" class="fa fa-windows"></a>
        </div>
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <?php if(is_array($menu_list)): foreach($menu_list as $key=>$menu): ?><li>
                    <a href="" class="menu-item <?php echo ($menu["status"]); ?>"> <i class="fa fa-<?php echo ($menu["icon"]); ?>"></i>
                        <span><?php echo ($menu["title"]); ?></span>
                    </a>
                    <ul class="sub">
                        <?php if(is_array($menu["sub_menu_list"])): foreach($menu["sub_menu_list"] as $key=>$sub_menu): ?><li class="sub-menu <?php echo ($sub_menu["status"]); ?>">
                                <a href="<?php echo U($sub_menu['name']);?>" class="sub-menu">
                                    <i class="fa fa-<?php echo ($sub_menu["icon"]); ?> fa-fw"></i> <?php echo ($sub_menu["title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </li><?php endforeach; endif; ?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<script>
$(document).ready(function(){

    // 找到所有的列表
    var subMenuList = $(".sub-menu");
    var currentURL = window.location.href;
    subMenuList.each(function(){
        var subUrl = $(this).attr("href");
        var pos = currentURL.indexOf(subUrl);
        if(pos>0) {
            // 标注
            $(this).parent().attr('class','active');
            return;
        }
    });
});
</script>

        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <section class="panel">
                    <header class="panel-heading">
                        <i class="fa fa-<?php echo ($pageGuid["icon"]); ?> fa-fw">&nbsp;</i><?php echo ($pageGuid["title"]); ?>
                        <a href="javascript:history.go(-1);" class="fa fa-reply pull-right" style="font-size:30px;"></a>
                    </header>
                    <div class="panel-body">
                        <!-- page start-->
                        
                        <!-- page end-->
                    </div>
                </section>
            </section>
        </section>
        <!--main content end-->


        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2015-2020 &copy; 脉云软件(上海)有限公司
                <a href="#" class="go-top">
                    <i class="icon-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- end container -->

    <!-- start js -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://static.maiunsoft.com/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.cookie.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.dcjqaccordion.2.7.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/respond.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.stepy.js"></script>

    <!--common script for all pages-->
    <script type="text/javascript" src="/www.maiunsoft.com/Application/Admin/View/_Static/js/common-scripts.js"></script>
    <!-- end js -->

    




</body>

</html>
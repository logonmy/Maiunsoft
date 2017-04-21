<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>脉云软件 | <?php echo ($_PageHeader["title"]); ?></title>
    <meta name="keyword" content="<?php echo ($_PageHeader["keywords"]); ?>">
    <meta name="description" content="<?php echo ($_PageHeader["description"]); ?>">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/favicon.png" >
	<link rel="stylesheet" href="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/css/reset.css">
	<link rel="stylesheet" href="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/css/swiper.min.css">
	<link rel="stylesheet" href="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/css/main.css"/>
	<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/zepto.min.js"></script>
	<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/iscroll.js"></script>
	<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/swiper.min.js"></script>
	<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/common.js"></script>
	<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/index.js"></script>
</head>

<body>
<!--导航部分-->
<header class="clear">
	<a href="<?php echo U('Index/index');?>" class="logo">Maiunsoft</a>
	<nav class="clear">
		<!--<a href="##" class="user"></a>-->
		<!--用户图标隐藏-->
		<a href="##" class="menu"></a>
		<div class="bg"></div>
		<div class="menu_list" id="wrapper">
			<div id="scroller">
				<ul class="item">
					<li>
						<a href="<?php echo U('Index/index');?>" class="shouye">首页</a>
						<em></em>
					</li>
				</ul>
				<ul class="item">
					<li>
						<span>脉点<i></i></span>
						<?php if(is_array($mdGroupList)): foreach($mdGroupList as $key=>$md): ?><a href="<?php echo U('article/index?gid='.$key);?>"><?php echo ($md["name"]); ?></a><?php endforeach; endif; ?>
					</li>
				</ul>
				<ul class="item">
					<li>
						<span>服务<i></i></span>

						<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><a href="<?php echo U('article/index?gid='.$key);?>"><?php echo ($group["name"]); ?></a>
							<div class="three">
								<?php if(is_array($group["articleList"])): foreach($group["articleList"] as $key=>$article): ?><a href="<?php echo U('article/detail?id='.$key);?>"><?php echo ($article["title"]); ?></a><?php endforeach; endif; ?>
							</div><?php endforeach; endif; ?>

					</li>
				</ul>
				<ul class="item">
					<li class="kai">
						<span>案例<i></i></span>
						<?php if(is_array($caseGroupList)): foreach($caseGroupList as $key=>$group): ?><a href="<?php echo U('article/index?gid='.$key);?>"><?php echo ($group["name"]); ?></a><?php endforeach; endif; ?>
					</li>
				</ul>
				<ul class="item">
					<li>
						<span>招聘<i></i></span>
						<a href="<?php echo U('Job/school',array('type'=>0),'');?>">校园招聘</a>
						<a href="<?php echo U('Job/social',array('type'=>1),'');?>">社会招聘</a>
					</li>
				</ul>
				<ul class="item">
					<li>
						<span>关于<i></i></span>
						<?php if(is_array($_aboutGroupList)): foreach($_aboutGroupList as $key=>$ab): ?><a href="<?php echo U('Company/index',array('id'=>$ab['id']));?>"><?php echo ($ab["name"]); ?></a><?php endforeach; endif; ?>
						<a href="<?php echo U('Company/contact');?>">联系方式</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!--模板渲染-->
<div id="main">
	<script type="text/javascript">
	document.title="<?php echo ($articleTitle[0]["name"]); ?>"
</script>
<!-- 焦点图 -->
<div class="banner">
	<img onClick="javascript:;" src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/placehold-img.png" data-original="<?php echo UploadUrl('slider'); echo ($articleTitle[0]["image"]); ?>" alt="">
	<div class="title"><?php echo (subtext($articleTitle[0]["name"],4)); ?></div>
</div>
<!-- 合作动态 -->
<div class="news">
	
	<?php if(is_array($articleList)): foreach($articleList as $key=>$article): ?><div onClick="location='<?php echo U('article/detail',array('id'=>$article['id']));?>'" class="floor floor_content">
			<h3><?php echo ($article["title"]); ?></h3>
			<p><?php echo ($article["bref"]); ?></p>
			<a href="<?php echo U('article/detail',array('id'=>$article['id']));?>" class="more" data-cont="yewudongcha-data_floor1">更多详情&gt;&gt;</a>
		</div><?php endforeach; endif; ?>
	
</div>
<!-- end 合作动态-->

	<!-- 脉云介绍 -->
<div class="info">

	<div class="about">
		<h4>联系方式</h4>
		<p>联系QQ：400-9910-560</p>
		<p>联系电话：021-80392945转001</p>
		<p>企业邮箱：service@maiunsoft.com</p>
		<p>企业公众号：service@maiunsoft.com</p>
	</div>
</div>
</div>

<!--底部-->
<footer id="footer" class="clear">
	<div class="copyright">版权所有:脉云软件（上海）有限公司</div>
	<div class="number">沪ICP备14051784号</div>
	<div class="share">
		<a href="##"><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/img03.png" alt="share"></a>
		<a href="##"><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/img04.png" alt="share"></a>
		<a href="##"><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/img05.png" alt="share"></a>
	</div>
</footer>


<!--<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/jquery.lazyload.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$("img").lazyload({
			placeholder:"/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/loading.gif",
			effect:"fadeIn",
			effectspeed:500
		})
	})
</script>-->


<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/echo.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	echo.init()
</script>

</body>
</html>
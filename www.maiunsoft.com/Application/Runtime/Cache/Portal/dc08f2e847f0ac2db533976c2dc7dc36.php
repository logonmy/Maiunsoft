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
		<a href="##" class="user"></a>
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
							<a href="<?php echo U('Article/index');?>"><?php echo ($test); ?></a>
							
							
							<a href="<?php echo U('Article/index');?>">合作动态</a>
							<a href="<?php echo U('Article/list');?>">行业风向</a>
							<a href="<?php echo U('Article/observe');?>">业务洞察</a>
						</li>
					</ul>
					<ul class="item">
						<li>
							<span>服务<i></i></span>
							<a href="<?php echo U('Service/consult');?>" class="has">咨询</a>
							<div class="three">
								<a href="zhuanyezixun">专业咨询</a>
								<a href="zhuanyezixun">专业咨询</a>
								<a href="zhuanyezixun">专业咨询</a>
								<a href="zhuanyezixun">专业咨询</a>
								<a href="zhuanyezixun">专业咨询</a>
								<a href="zhuanyezixun">专业咨询</a>
							</div>

							<a href="<?php echo U('Service/dev');?>" class="has">开发</a>
							<div class="three">
								<a href="ruanjiankaifa">软件开发</a>
								<a href="ruanjiankaifa">软件开发</a>
								<a href="ruanjiankaifa">软件开发</a>
							</div>

							<a href="<?php echo U('Service/maintenance');?>" class="has">运维</a>
							<div class="three">
								<a href="zhuomianyunwei">桌面运维</a>
								<a href="zhuomianyunwei">桌面运维</a>
								<a href="zhuomianyunwei">桌面运维</a>
							</div>

							<a href="<?php echo U('Service/train');?>" class="has">培训</a>
							<div class="three">
								<a href="peixun">IT培训</a>
								<a href="peixun">IT培训</a>
								<a href="peixun">IT培训</a>
							</div>
						</li>
					</ul>
					<ul class="item">
						<li class="kai">
							<span>客户<i></i></span>
							<a href="<?php echo U('Customer/finance');?>">金融</a>
							<a href="<?php echo U('Customer/edu');?>">教育</a>
							<a href="<?php echo U('Customer/consult');?>">咨询</a>
							<a href="<?php echo U('Customer/engineering');?>">工程</a>
						</li>
					</ul>
					<ul class="item">
						<li>
						<span>招聘<i></i></span>
							<a href="<?php echo U('Job/school');?>">校园招聘</a>
							<a href="<?php echo U('Job/social');?>">社会招聘</a>
						</li>
					</ul>
					<ul class="item">
						<li>
							<span>关于<i></i></span>
							<a href="<?php echo U('Company/about');?>">公司简介</a>
							<a href="<?php echo U('Company/service');?>">服务网络</a>
							<a href="<?php echo U('Company/cooperation');?>">合作伙伴</a>
							<a href="<?php echo U('Company/culture');?>">企业文化</a>
							<a href="<?php echo U('Company/sustainable');?>">可持续发展</a>
						</li>
					</ul>				
				</div>
			</div>
	</nav>
</header>	

<!--模板渲染-->
<div id="main">
	<!--  主体-->

	<!-- 焦点图 -->
		<div class="banner">
			<img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/md01.png" alt="">
			<div class="title">可持续发展</div>
		</div>
		<!-- 公司简介 -->
		<div class="news">
			<h1>可持续发展</h1>
			<div class="floor" style="padding-top:0.9rem">
				<h3>可持续发展</h3>
				<p>与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。</p>
				<p>订战略合作协议与悉云科技签订战略合作协云科技签订战略与悉云科技签订战略合作协云科技签订战略合作协.与悉云科技签订战略略与悉云科技签订战略合作协议。</p>
				<a href="##" class="more" data-cont="kechixu-data_floor1">更多详情&gt;&gt;</a>
			</div>
			<div class="floor" style="padding-top:0.9rem">
				<h3>可持续发展</h3>
				<p>与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。</p>
				<p>订战略合作协议与悉云科技签订战略合作协云科技签订战略与悉云科技签订战略合作协云科技签订战略合作协.与悉云科技签订战略略与悉云科技签订战略合作协议。</p>
				<a href="##" class="more" data-cont="kechixu-data_floor1">更多详情&gt;&gt;</a>
			</div>
			<div class="floor" style="padding-top:0.9rem">
				<h3>可持续发展</h3>
				<p>与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。</p>
				<p>订战略合作协议与悉云科技签订战略合作协云科技签订战略与悉云科技签订战略合作协云科技签订战略合作协.与悉云科技签订战略略与悉云科技签订战略合作协议。</p>
				<a href="##" class="more" data-cont="kechixu-data_floor1">更多详情&gt;&gt;</a>
			</div>
		</div>   <!-- end 公司简介-->

		

	<!-- 脉云介绍 -->
<div class="info">
	<div class="microblog">
		<h2>脉云微博</h2>
		<div class="QRcode">
			<img onClick="javascript:;" src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/QRcode.jpg" alt="QRcode">
		</div>
	</div>
	<div class="about">
		<h4>联系方式</h4>
		<p>联系方式：400-9910-540</p>
		<p>企业邮箱：service@maiunsoft.com</p>
		<p>企业QQ：service@maiunsoft.com</p>
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
</body>

</html>
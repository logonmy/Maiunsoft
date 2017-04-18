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
<?php echo $a; ?>
<!--导航部分-->
<!--<header class="clear">
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
							<a href="<?php echo U('Article/index');?>"><?php echo ($a); ?></a>
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
							<a href="<?php echo U('Job/school',array('type'=>0),'');?>">校园招聘</a>
							<a href="<?php echo U('Job/social',array('type'=>1),'');?>">社会招聘</a>
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
</header>	-->

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
							<?php if(is_array($mdGroupList)): foreach($mdGroupList as $key=>$md): ?><a href="<?php echo U('article/index?gid='.$key);?>"><?php echo ($md["name"]); ?></a><?php endforeach; endif; ?>
							<!--<a href="<?php echo U('Article/index');?>"><?php echo ($a); ?></a>
							<a href="<?php echo U('Article/index');?>">合作动态</a>
							<a href="<?php echo U('Article/list');?>">行业风向</a>
							<a href="<?php echo U('Article/observe');?>">业务洞察</a>-->
						</li>
					</ul>
					<ul class="item">
						<li>
							<span>服务<i></i></span>
							
							<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><a href="<?php echo U('article/index?gid='.$key);?>"><?php echo ($group["name"]); ?></a>
								<div class="three">
									<?php if(is_array($group["articleList"])): foreach($group["articleList"] as $key=>$article): ?><a href="<?php echo U('article/detail?id='.$key);?>"><?php echo ($article["title"]); ?></a><?php endforeach; endif; ?>
								</div><?php endforeach; endif; ?>
							
							<!--<a href="<?php echo U('Service/consult');?>" class="has">咨询</a>
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
							</div>-->
						</li>
					</ul>
					<ul class="item">
						<li class="kai">
							<span>案例<i></i></span>
							<?php if(is_array($caseGroupList)): foreach($caseGroupList as $key=>$group): ?><a href="<?php echo U('article/index?gid='.$key);?>"><?php echo ($group["name"]); ?></a><?php endforeach; endif; ?>
							<!--<a href="<?php echo U('Customer/finance');?>">金融</a>
							<a href="<?php echo U('Customer/edu');?>">教育</a>
							<a href="<?php echo U('Customer/consult');?>">咨询</a>
							<a href="<?php echo U('Customer/engineering');?>">工程</a>-->
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
							<!--<a href="<?php echo U('Company/about');?>">公司简介</a>
							<a href="<?php echo U('Company/service');?>">服务网络</a>
							<a href="<?php echo U('Company/cooperation');?>">合作伙伴</a>
							<a href="<?php echo U('Company/culture');?>">企业文化</a>
							<a href="<?php echo U('Company/sustainable');?>">可持续发展</a>-->
						</li>
					</ul>				
				</div>
			</div>
	</nav>
</header>	
<!--模板渲染-->
<div id="main">
	<script type="text/javascript">document.title='脉云软件 | 联系我们'</script>
<!--<div class="fixed-top">
    <div class="top">
        <div class="container">
            <a href="<?php echo U('index/index');?>">
                <img src="/www.maiunsoft.com/Public/logo.png" />
            </a>
            <h2 class="fa fa-bars"></h2>
        </div>
    </div>
    <div class="topmenus" style="display: none;">
        <ul>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/report">行业透视</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/solution">解决方案</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/products">软件产品</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/client">典型客户</a>
            </li>
            <li class="col-xs-4">
                <a data-toggle="modal" data-target="#contact_modal" style="color:yellow">联系我们</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/news">新闻资讯</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/about">关于脉云</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/help">服务支持</a>
            </li>
            <li class="col-xs-4">
                <a href="/www.maiunsoft.com/join">合作加盟</a>
            </li>
        </ul>
    </div>

    <div class="breadcrumb" style="width:100%;border-bottom: 1px solid #ddd;">
        <ul class="container">
            <li>
                <a href="<?php echo U('Index/index');?>">首页</a>
            </li>
            <?php if(is_array($breadcrumbs)): foreach($breadcrumbs as $key=>$bread): ?><li>
                    <a href="<?php echo ($bread["url"]); ?>"><?php echo ($bread["caption"]); ?></a>
                </li><?php endforeach; endif; ?>
            <?php if(!empty($directoryList)): ?><div class="directory-link fa fa-sort pull-right"></div><?php endif; ?>
        </ul>
    </div>
    <div class="directory" style="display:none;">
        <div class="container">
            <ul class="list-unstyled">
                <?php if(is_array($directoryList)): foreach($directoryList as $key=>$dir): ?><li>
                        <a href="<?php echo ($dir["url"]); ?>"><?php echo ($dir["name"]); ?></a>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.top h2').click(
        function() {
            var show = $('.topmenus').css('display');
            if (show == 'block') {
                $('.topmenus').css('display', 'none');
            } else {
                $('.topmenus').css('display', 'block');
            }
        }
    );

    $('.directory-link').click(
        function() {
            var show = $('.directory').css('display');
            if (show == 'block') {
                $('.directory').css('display', 'none');
            } else {
                $('.directory').css('display', 'block');
            }
        }
    );
});
</script>-->
<!-- 焦点图 -->


<div id="main">
<!-- 焦点图 -->
	<div class="banner">
	<img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/md01.png" alt="">
	<div class="title">联系方式</div>
	</div>
	<!-- 公司简介 -->

	<div class="news">
		<h1>联系方式</h1>
		<div class="wangluo">
				<div class="floor">
					<h3>上海总部</h3>					
					<table class="table">
						<tr>
							<td class="left" rowspan="2">联系人：</td><td class="right" rowspan="2">王小姐</td>
						</tr>
						<tr>
							
						</tr>
						<tr>
							<td class="left" rowspan="2">电话：</td><td class="right" rowspan="2">400-9910-540</td>
						</tr>
						<tr>
						
						</tr>
						<tr>
							<td class="left">企业邮箱：</td><td class="right">service@maiunsoft.com</td>
						</tr>
						<tr>
							<td class="left">企业地址：</td><td class="right">上海市沪太路5018弄梓坤科技园1号楼1509室</td>
						</tr>
					</table>
				</div>
				
			</div>  <!--end 网络服务-->
	</div>   <!--end news-->
</div>   <!-- end main-->


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
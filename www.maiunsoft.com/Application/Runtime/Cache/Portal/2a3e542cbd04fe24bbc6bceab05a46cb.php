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
	<script src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/js/xiaoyuanzhaopin.js"></script>
<script>document.title = "校园招聘";</script>
<!--  主体-->
<!-- 焦点图 -->
<div class="banner">
	<img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/banner03.png" alt="">
	<div class="title">校园招聘</div>
</div>
<!-- 招聘岗位 -->
<div class="news job">
	<div class="news-top clear">
		<h1>招聘详情</h1>
		
		<span class="news-top-right"><?php echo ($jobCityList[$jobCity]); ?><i></i></span>
		<div class="cpmWrapper">
			<div class="city">
				<h3>请选择应聘的城市</h3>
				<ul>
					<?php if(is_array($jobCityList)): foreach($jobCityList as $key=>$city): $hide = "hide"; ?>
					<li class="now <?php echo ($hide); ?>" data-city="<?php echo ($key); ?>"><?php echo ($city); ?></li><?php endforeach; endif; ?>
				</ul>
			</div>
			<span>取消</span>
		</div>
	</div>
	
	<!--<div class="floor">
		<h3>脉云软件（上海）有限公司</h3>
		<p>与悉云科技签订战略合作协议与悉云科技签合作协议,与悉云科技签订战略与悉云科技签合作协议与悉云科技签。</p>
		<p>订战略合作协议与悉云科技签订战略合作协云科技签订战略与悉云科技签订战略合作协云科技签订战略合作协.与悉云科技签订战略略与悉云科技签订战略合作协议。</p>
		<a href="##" class="more" data-cont="xiaoyuanzhaopin-data_floor1">更多详情&gt;&gt;</a>
	</div>-->
	<div class="information">
		<div class="info_menu">
			<?php if(is_array($activityTypeList)): foreach($activityTypeList as $key=>$activity): $selected = $activityType == $key ? "current" : ""; ?>
				<a href="javascript:;" class="<?php echo ($selected); ?>"><?php echo ($activity); ?></a><?php endforeach; endif; ?>
		</div>
		<div style="height:1.4rem;width:100%;margin-bottom:0.6rem;"></div>
		
		<div class="all-content">
			
			<div class="content" style="display: block;">
				
				<?php if(is_array($schoolActivityList)): foreach($schoolActivityList as $key=>$scActivity): ?><div class="template-city" data-city="<?php echo ($scActivity["city"]); ?>">
						<div class="floor">
					<h3>
						<span><?php echo ($scActivity["name"]); ?></span>
					</h3>
					<table class="table">
						<tr>
							<td class="left" rowspan="2">宣讲主题：</td>
							<td class="right" rowspan="2"><?php echo ($scActivity["agenda"]); ?></td>
						</tr>
						<tr>

						</tr>
						<tr>
							<td class="left" rowspan="2">宣讲时间：</td>
							<td class="right" rowspan="2"><?php echo ($scActivity["start_time"]); ?></td>
						</tr>
						<tr>

						</tr>
						<tr>
							<td class="left">宣讲嘉宾：</td>
							<td class="right"><?php echo ($scActivity["contact_name"]); ?></td>
						</tr>
						<tr>
							<td class="left">联系方式：</td>
							<td class="right"><?php echo ($scActivity["contact_number"]); ?></td>
						</tr>
						<tr>
							<td class="left">宣讲地址：</td>
							<td class="right"><?php echo ($scActivity["address"]); ?></td>
						</tr>
					</table>
					<a href="##" class="more" data-cont="xiaoyuanzhaopin-data_floor1">更多详情&gt;&gt;</a>
				</div>
					</div><?php endforeach; endif; ?>
				
			</div>
			<!--end 宣讲-->
			
			<div class="content">
				
				<?php if(is_array($traineeList)): foreach($traineeList as $key=>$trainee): ?><div class="template-city" data-city="<?php echo ($trainee["work_city"]); ?>">
					<div class="floor">
					<h3>
						<span><?php echo ($trainee["name"]); ?></span>
						<?php switch($trainee["urgency"]): case "2": ?><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/ji.png" alt="rush"><?php break;?>
							<?php case "3": ?><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/ji.png" alt="rush" style="margin-right:4px;">
							<img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/jinji.png" alt="rush"><?php break;?>
							<?php default: endswitch;?>
					</h3>
					<table class="table">
						<tr>
							<td class="left" rowspan="2">岗位职责：</td>
							<td class="right" rowspan="2"><?php echo ($trainee["work_content"]); ?></td>
						</tr>
						<tr>

						</tr>
						<tr>
							<td class="left" rowspan="2">任职要求：</td>
							<td class="right" rowspan="2"><?php echo ($trainee["requirements"]); ?></td>
						</tr>
						<tr>

						</tr>
						<tr>
							<td class="left">工作经验：</td>
							<td class="right">一年以下</td>
						</tr>
						<tr>
							<td class="left">公司地址：</td>
							<td class="right">上海市沪太路5018弄梓坤科技园1号楼1509室</td>
						</tr>
						<tr>
							<td class="left">薪资待遇：</td>
							<td class="right"><?php echo ($trainee["salary_scope"]); ?></td>
						</tr>
					</table>
					<a href="##" class="more" data-cont="xiaoyuanzhaopin-data_floor1">更多详情&gt;&gt;</a>
				</div>
					</div><?php endforeach; endif; ?>
			
			</div>
			<!--end 实习-->
			
			<div class="content">
				
				<?php if(is_array($graduateList)): foreach($graduateList as $key=>$graduate): ?><div class="template-city" data-city="<?php echo ($graduate["work_city"]); ?>">
					<div class="floor">
					<h3>
						<span><?php echo ($graduate["name"]); ?></span>
						<?php switch($graduate["urgency"]): case "2": ?><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/ji.png" alt="rush"><?php break;?>
							<?php case "3": ?><img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/ji.png" alt="rush" style="margin-right:4px;">
							<img src="/www.maiunsoft.com/Application/Portal/View/Mobile/Static/img/jinji.png" alt="rush"><?php break;?>
							<?php default: endswitch;?>
					</h3>
					<table class="table">
						<tr>
							<td class="left" rowspan="2">岗位职责：</td>
							<td class="right" rowspan="2"><?php echo ($graduate["work_content"]); ?></td>
						</tr>
						<tr>

						</tr>
						<tr>
							<td class="left" rowspan="2">任职要求：</td>
							<td class="right" rowspan="2"><?php echo ($graduate["requirements"]); ?></td>
						</tr>
						<tr>

						</tr>
						<tr>
							<td class="left">工作经验：</td>
							<td class="right">一年以下</td>
						</tr>
						<tr>
							<td class="left">公司地址：</td>
							<td class="right">上海市沪太路5018弄梓坤科技园1号楼1509室</td>
						</tr>
						<tr>
							<td class="left">薪资待遇：</td>
							<td class="right"><?php echo ($graduate["salary_scope"]); ?></td>
						</tr>
					</table>
					<a href="##" class="more" data-cont="xiaoyuanzhaopin-data_floor1">更多详情&gt;&gt;</a>
				</div>
					</div><?php endforeach; endif; ?>
				
			</div>
			<!--end 应届-->
		</div>
	</div>
	<a class="totop" href="#main"></a>
</div>
<!-- end 招聘岗位-->

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
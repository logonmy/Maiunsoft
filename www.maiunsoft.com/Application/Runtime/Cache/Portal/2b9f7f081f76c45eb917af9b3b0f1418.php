<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,
                                     initial-scale=1.0,
                                     maximum-scale=1.0,
                                     user-scalable=no">
			<title>脉云首页</title>
			<link rel="stylesheet" href="/www.maiunsoft.com/Application/Portal/View/Pc/Static/css/swiper.min.css">
			<link rel="stylesheet" href="/www.maiunsoft.com/Application/Portal/View/Pc/Static/css/demo.css">
	</head>

	<body>
		<nav>
			<img onClick="location='<?php echo U('index/index');?>'" class="vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/logo.png" alt="logo" />
			<div class="nav-items">
				<ul>
					<li>
						<div class="pointer">
							<span>脉点</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<!--<?php if(is_array($mdGroupList)): foreach($mdGroupList as $key=>$md): ?><li onClick="location='<?php echo U('article/index?gid='.$key);?>'">
											<?php echo ($md["name"]); ?>
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>-->
                                    <li onClick="location='<?php echo U('Article/observe');?>'">业务洞察<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='<?php echo U('Article/list');?>'">技术前沿<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onClick="location='<?php echo U('Article/detail');?>'">公司动态<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-div vertical-center">
									<?php if(is_array($mdArticleList)): foreach($mdArticleList as $key=>$article): ?><div class="hide">
											<b><?php echo ($article["title"]); ?></b>
											<div class="menu-img">
												<img src="<?php echo UploadUrl('article'); echo ($article["image"]); ?>" alt="">
											</div>
											<div class="menu-article">
												<span><?php echo ($article["bref"]); ?></span>
												<a href="<?php echo U('article/detail?id='.$article['id']);?>">更多</a>
											</div>
										</div><?php endforeach; endif; ?>
								</div>
							</div>
						</div>
					</li>
					<!--
                 -->
					<li>
						<div class="pointer">
							<span>服务</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><li onClick="location='<?php echo U('article/index?gid='.$key);?>'" style="padding-left:20px !important"><?php echo ($group["name"]); ?>
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow">
										</li><?php endforeach; endif; ?>
								</ul>
								
							</div>
							<div class="menu-right">
								<div class="menu-ul vertical-center">
									<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><ul class="hide">
											<?php if(is_array($group["articleList"])): foreach($group["articleList"] as $key=>$article): ?><li onClick="location='<?php echo U('article/detail?id='.$key);?>'"><?php echo ($article["title"]); ?></li><?php endforeach; endif; ?>
										</ul><?php endforeach; endif; ?>
								</div>
								<div class="nav-4-empty-block hide"></div>
								<div class="menu-content vertical-center">
									<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><div>
											<?php if(is_array($group["articleList"])): foreach($group["articleList"] as $key=>$article): ?><div class="hide">
													<b><?php echo ($article["title"]); ?></b><br />
													<p><?php echo ($article["bref"]); ?></p>
													<!-- <a href="./service-consult">更多</a> -->
												</div><?php endforeach; endif; ?>
										</div><?php endforeach; endif; ?>
								</div>
							</div>
						</div>
					</li>
					<!--
                 -->
					<li>
						<div class="pointer">
							<span>案例</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<?php if(is_array($caseGroupList)): foreach($caseGroupList as $key=>$group): ?><li onClick="location='<?php echo U('article/index?gid='.$key);?>'"><?php echo ($group["name"]); ?>
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow">
										</li><?php endforeach; endif; ?>
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-div vertical-center">
									<?php if(is_array($caseGroupList)): foreach($caseGroupList as $key=>$group): ?><div class="hide">
											<b><?php echo ($group["lastArticle"]["title"]); ?></b>
											<div class="menu-img">
												<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/mht-1.jpg" alt="">
											</div>
											<div class="menu-article">
												<span><?php echo ($group["lastArticle"]["bref"]); ?></span>
												<a href="<?php echo U('article/detail?id='.$group['lastArticle']['id']);?>">更多</a>
											</div>
										</div><?php endforeach; endif; ?>
								</div>
							</div>
						</div>
					</li>
					
					<!--招聘-->
					<li>
						<div class="pointer">
							<span>招聘</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<li onclick="location='<?php echo U('Job/school',array('type'=>0),'');?>'">校园招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='<?php echo U('Job/social',array('type'=>1),'');?>'">社会招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-ul menu-ul-2">
									<ul class="hide">
										<li onclick="location='<?php echo U('Job/school',array('type'=>0),'');?>'">校园宣讲<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
										<li onclick="location='<?php echo U('Job/school',array('type'=>1),'');?>'">实习生招聘<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
										<li onclick="location='<?php echo U('Job/school',array('type'=>2),'');?>'">应届生招聘<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
									</ul>
									<ul class="hide">
										<?php if(is_array($jobTypeList)): foreach($jobTypeList as $key=>$type): ?><li onClick="location='<?php echo U('job/social?type='.$key,'','');?>'"><?php echo ($type); ?><img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>
									</ul>
								</div>
								<div class="nav-4-empty-block hide"></div>
								<div class="menu-content vertical-center">
									<div>
										
										<?php if(is_array($schoolNeed)): foreach($schoolNeed as $key=>$scNeed): ?><div class="hide">
												<b><?php echo ($scNeed["name"]); ?></b><br />
												<p>
													<?php echo ($scNeed["requirements"]); ?>
												</p>
											</div><?php endforeach; endif; ?>
										
									</div>
									<div>
										<?php if(is_array($socialNeed)): foreach($socialNeed as $key=>$soNeed): ?><div class="hide">
												<b><?php echo ($soNeed["name"]); ?></b>
												<p>
													<?php echo ($soNeed["requirements"]); ?>
												</p>
											</div><?php endforeach; endif; ?>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!--关于-->
					<li>
						<div class="pointer">
							<span>关于</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<?php if(is_array($_aboutGroupList)): foreach($_aboutGroupList as $key=>$ab): ?><li onclick="location='<?php echo U('Company/index',array('id'=>$ab['id']),'');?>'"><?php echo ($ab["name"]); ?><img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>
									<li onClick="javascript:;">联系方式<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-about vertical-center">
									<?php if(is_array($_aboutGroupList)): foreach($_aboutGroupList as $key=>$abArticle): ?><div class="hide">
											<b><?php echo ($abArticle["lastArticle"]["title"]); ?></b>
											<span><?php echo ($abArticle["lastArticle"]["bref"]); ?></span>
											<a href="<?php echo U('Company/index',array('id'=>$abArticle['id']),'');?>">更多</a>
										</div><?php endforeach; endif; ?>
									
									<div class="hide">
										<span>
											<b>联系方式</b><br /><br /><br />
                                        	<p>联系电话： 400-9910-540</p>
											<p>企业邮箱： service@maiunsoft.com</p>
											<p>企业QQ： service@maiunsoft.com</p>
											<p>企业地址：上海市沪太路5018弄梓坤科技园1号楼1509室</p> 
                                       </span>
									</div>
								</div>
							</div>
							<!-- menu-right ends -->
						</div>
					</li>
				</ul>
			</div>
			<div class="nav-menu vertical-center">
				<input class="search-input" type="text" placeholder="搜索" />
				<button class="search-btn"></button>
				<!--登录接口-->
				<!--<a class="search-a" href="#"><img class="icon-menu" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/menu.png" alt="menu" /></a>-->
			</div>
		</nav>

		<div class="banner-div banner-4">
	<div class="banner-content-4 vertical-center">
		咨询客户
	</div>
	<div class="banner-mask-4 vertical-center">

	</div>
</div>

<div class="bg-color-3">
	<div class="connection">
		<span>联系电话： 400-9910-540</span>
		<span>企业邮箱： service@maiunsoft.com</span>
		<span>企业QQ： service@maiunsoft.com</span>
	</div>
</div>

<div class="bg-color-5">
	<div class="template-wrap">
		<div class="template-ceil">
			<b><?php echo ($exampleArticle_new["title"]); ?></b>
			<img class="template-ceil-img" src="<?php echo UploadUrl('group'); echo ($exampleArticle_new["image"]); ?>" alt="content-intro">
			<p>
				<?php echo ($exampleArticle_new["content"]); ?>
			</p>
			<div style="clear:both;"></div>
		</div>
		
		<?php $exampleLen = count($exampleArticleList); ?>
		
		<?php if($exampleLen > 1): ?><h3>更多咨询</h3><?php endif; ?>
		

		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>协同设计系统规划</b>
				<p>
					国脉通信规划设计有限公司是国家建设部和发改委批准的甲级通信行业勘察设计单位，高新技术企业。具有无线通信设计甲级资质、有线通信设计甲级资质和工程咨询甲级资质。作为一家以通信设计服务为主的高新技术企业，公司一直致力于通信设计主业，采取公司化管理，流程规范有序，质量要求严格，通过ISO9001质量认证，主营业务涵盖国内各大通信运营商以及地方政府等领域。
				</p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>项目系统规划</b>
				<p>
					国脉通信规划设计有限公司是国家建设部和发改委批准的甲级通信行业勘察设计单位，高新技术企业。具有无线通信设计甲级资质、有线通信设计甲级资质和工程咨询甲级资质。作为一家以通信设计服务为主的高新技术企业，公司一直致力于通信设计主业，采取公司化管理，流程规范有序，质量要求严格，通过ISO9001质量认证，主营业务涵盖国内各大通信运营商以及地方政府等领域。
				</p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>知识管理体系规划</b>
				<p>
					国脉通信规划设计有限公司是国家建设部和发改委批准的甲级通信行业勘察设计单位，高新技术企业。具有无线通信设计甲级资质、有线通信设计甲级资质和工程咨询甲级资质。作为一家以通信设计服务为主的高新技术企业，公司一直致力于通信设计主业，采取公司化管理，流程规范有序，质量要求严格，通过ISO9001质量认证，主营业务涵盖国内各大通信运营商以及地方政府等领域。
				</p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>信息安全体系规划</b>
				<p>
					国脉通信规划设计有限公司是国家建设部和发改委批准的甲级通信行业勘察设计单位，高新技术企业。具有无线通信设计甲级资质、有线通信设计甲级资质和工程咨询甲级资质。作为一家以通信设计服务为主的高新技术企业，公司一直致力于通信设计主业，采取公司化管理，流程规范有序，质量要求严格，通过ISO9001质量认证，主营业务涵盖国内各大通信运营商以及地方政府等领域。
				</p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>协同教学平台规划</b>
				<p>
					国脉通信规划设计有限公司是国家建设部和发改委批准的甲级通信行业勘察设计单位，高新技术企业。具有无线通信设计甲级资质、有线通信设计甲级资质和工程咨询甲级资质。作为一家以通信设计服务为主的高新技术企业，公司一直致力于通信设计主业，采取公司化管理，流程规范有序，质量要求严格，通过ISO9001质量认证，主营业务涵盖国内各大通信运营商以及地方政府等领域。
				</p>
			</div>
		</div>

	</div>

</div>
		
		<div class="bg-color-7" style="background:#fff;">
			<div class="section-four">
				<div class="link-part link-about">
					<b>关于</b>
					<?php if(is_array($_aboutGroupList)): foreach($_aboutGroupList as $key=>$group): ?><p><?php echo ($group["name"]); ?></p><?php endforeach; endif; ?>
				</div>
				<div class="link-part link-cooperation">
					<b>服务</b>
					<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><p><?php echo ($group["name"]); ?></p><?php endforeach; endif; ?>
				</div>
				<div class="link-part link-news">
					<b>合作</b>
					<?php if(is_array($partnerGroupList)): foreach($partnerGroupList as $key=>$group): ?><p><?php echo ($group["name"]); ?></p><?php endforeach; endif; ?>
				</div>
				<div class="link-part link-mobile">
					<b>移动脉云</b>
					<p><img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/qcode.png" alt="maiyun mobile QRCode"></p>
				</div>
				<div class="link-part link-global">
					<!-- <b>聚焦数字世界 服务现代生活</b> -->
					<b>联系方式</b>
					<!-- <p><img src="./imgs/world-map.png" alt="world map"></p> -->
					<p>联系电话： 400-9910-540</p>
					<p>企业邮箱： service@maiunsoft.com</p>
					<p>企业QQ： service@maiunsoft.com</p>
					<p>企业地址：上海市沪太路5018弄梓坤科技园1号楼1509室</p>
				</div>
			</div>
		</div>

		<footer>
			<div class="footer-content">
				<p>
					版权所有脉云（上海）有限公司
				</p>
				<p>
					沪ICP备14051784号
				</p>
				<a><img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon-email.png" alt="email-icon"></a>
				<a><img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon-qq.png" alt="qq-icon"></a>
				<a><img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon-weibo.png" alt="weibo-icon"></a>
			</div>
		</footer>

		<script src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/js/jquery-3.1.1.min.js"></script>
		<script src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/js/swiper.min.js"></script>
		<script src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/js/main.js"></script>
	</body>

</html>
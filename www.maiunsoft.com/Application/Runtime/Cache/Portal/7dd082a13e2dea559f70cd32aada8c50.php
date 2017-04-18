<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,
                                     initial-scale=1.0,
                                     maximum-scale=1.0,
                                     user-scalable=no">
			<title>脉云软件 | <?php echo ($_PageHeader["title"]); ?></title>
			<link rel="shortcut icon" href="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/favicon.png" >
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
									<?php if(is_array($mdGroupList)): foreach($mdGroupList as $key=>$md): ?><li onClick="location='<?php echo U('article/index?gid='.$key);?>'">
											<?php echo ($md["name"]); ?>
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>

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
										<li onclick="location='<?php echo U('Job/school',array('type'=>0),'');?>'">校园宣讲<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
										<li onclick="location='<?php echo U('Job/school',array('type'=>1),'');?>'">实习生招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
										<li onclick="location='<?php echo U('Job/school',array('type'=>2),'');?>'">应届生招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
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
									<?php if(is_array($_aboutGroupList)): foreach($_aboutGroupList as $key=>$ab): ?><li onclick="location='<?php echo U('Company/index',array('id'=>$ab['id']));?>'"><?php echo ($ab["name"]); ?><img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>
									<li onClick="location='<?php echo U('Company/contact');?>'">联系方式<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
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

		        <div class="swiper-container banner-div">
            <div class="swiper-wrapper">
                <?php if(is_array($bigSliderList)): foreach($bigSliderList as $key=>$slider): ?><div style="background-image:url(<?php echo UploadUrl('slider'); echo ($slider["image"]); ?>)" class="swiper-slide swiper-no-swiping">
                    </div><?php endforeach; endif; ?>
            </div>
             <!--<div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div> -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="bg-color-1">
            <div class="section-one">
                <div>
                    <b>最新动态</b>
                </div>
                <div class="section-one-content">
                    <?php if(is_array($newsList)): foreach($newsList as $key=>$news): ?><div class="section-one-article">
                            <img src="<?php echo UploadUrl('slider'); echo ($news["image"]); ?>" alt="logo-img">
                            <div>
                                <b><?php echo ($news["title"]); ?></b>
                                <p>
                                    <?php echo ($news["bref"]); ?>
                                </p>
                                <a class="section-one-article-link">
                                	
                                    <span onClick="location='<?php echo U('Index/index');?>'">更多详情<img class="icon-right" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-black.png"/></span>
                                </a>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
            </div>
        </div>

        <div class="bg-color-2">
            <div class="section-two">
                <div>
                    <b>业务洞察</b>
                </div>
                <div class="section-two-content">
                    <?php if(is_array($articleList)): foreach($articleList as $key=>$article): ?><div class="section-two-article">
                            <img src="<?php echo UploadUrl('slider'); echo ($article["image"]); ?>" alt="logo-img"><br >
                            <div>
                                <b><?php echo ($article["title"]); ?></b>
                                <p><?php echo ($article["bref"]); ?></p>
                                <button onClick="location='<?php echo U('Index/index');?>'" class="section-two-article-btn">了解更多</button>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
            </div>
        </div>

        <div class="section-five">
            <h3 id="sec-3">安全便捷的内容管理解决方案提供商</h3>
        </div>
		
		
        <div class="bg-color-6">
            <div class="section-six">
            	<?php $arr = array(0,1,2,3); ?>
            	<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$service_list): ?><div class="section-six-bg section-six-bg-<?php echo ($newServiceIcon[$key][0]); ?>">
            			
                    <div class="upblock-bg-<?php echo ($newServiceIcon[$key][0]); ?>"></div>
                    <div class="upblock-bg-cg hide"></div>
                    <div class="upblock">
                        <img class="upblock-icon-1" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-<?php echo ($newServiceIcon[$key][1]); ?>.png" alt="<?php echo ($newServiceIcon[$key][1]); ?>-icon"><br />
                        <img class="upblock-icon-2" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-line.png" alt="line">
                        <p class="upblock-title">
                            	<?php echo ($service_list["name"]); ?>
                        </p>
                        <p class="upblock-content hide">
                            	外资企业网站系统开发系统开发<br />
                            	外资企业网站系统开发系统开发
                        </p>
                        <button onClick="location='<?php echo U('Article/index?gid='.$key);?>'" class="upblock-btn hide">查看详情</button>
                    </div>
                	</div><?php endforeach; endif; ?>
            	
                <!--<div class="section-six-bg section-six-bg-0">
                    <div class="upblock-bg-0"></div>
                    <div class="upblock-bg-cg hide"></div>
                    <div class="upblock">
                        <img class="upblock-icon-1" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-smile.png" alt="smile-icon"><br />
                        <img class="upblock-icon-2" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-line.png" alt="line">
                        <p class="upblock-title">
                            系统咨询
                        </p>
                        <p class="upblock-content hide">
                            外资企业网站系统开发系统开发<br />
                            外资企业网站系统开发系统开发
                        </p>
                        <button class="upblock-btn hide">查看详情</button>
                    </div>
                </div>-->
                <!--<div class="section-six-bg section-six-bg-1">
                    <div class="upblock-bg-1"></div>
                    <div class="upblock-bg-cg hide"></div>
                    <div class="upblock">
                        <img class="upblock-icon-1" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-global.png" alt="global-icon"><br />
                        <img class="upblock-icon-2" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-line.png" alt="line">
                        <p class="upblock-title">
                            系统开发
                        </p>
                        <p class="upblock-content hide">
                            外资企业网站系统开发系统开发<br />
                            外资企业网站系统开发系统开发
                        </p>
                        <button class="upblock-btn hide">查看详情</button>
                    </div>
                </div>
             <div class="section-six-bg section-six-bg-2">
                    <div class="upblock-bg-2"></div>
                    <div class="upblock-bg-cg hide"></div>
                    <div class="upblock">
                        <img class="upblock-icon-1" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-setting.png" alt="setting-icon"><br />
                        <img class="upblock-icon-2" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-line.png" alt="line">
                        <p class="upblock-title">
                            系统运维
                        </p>
                        <p class="upblock-content hide">
                            外资企业网站系统开发系统开发<br />
                            外资企业网站系统开发系统开发
                        </p>
                        <button class="upblock-btn hide">查看详情</button>
                    </div>
                </div>
             <div class="section-six-bg section-six-bg-3">
                    <div class="upblock-bg-3"></div>
                    <div class="upblock-bg-cg hide"></div>
                    <div class="upblock">
                        <img class="upblock-icon-1" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-member.png" alt="member-icon"><br />
                        <img class="upblock-icon-2" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon/icon-line.png" alt="line">
                        <p class="upblock-title">
                            系统培训
                        </p>
                        <p class="upblock-content hide">
                            外资企业网站系统开发系统开发<br />
                            外资企业网站系统开发系统开发
                        </p>
                        <button class="upblock-btn hide" onClick="location='./intro'" >查看详情</button>
                    </div>
                </div>-->
            </div>
        </div>


		<div class="bg-color-7" style="background:#fff;">
			<div class="section-four">
				<div class="link-part link-about">
					<b>关于</b>
					<?php if(is_array($_aboutGroupList)): foreach($_aboutGroupList as $key=>$group): ?><p onClick="location='<?php echo U('Company/index/?id='.$group['id']);?>'"><?php echo ($group["name"]); ?></p><?php endforeach; endif; ?>
				</div>
				<div class="link-part link-cooperation">
					<b>服务</b>
					<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><p onClick="location='<?php echo U('article/index?gid='.$group['id']);?>'"><?php echo ($group["name"]); ?></p><?php endforeach; endif; ?>
				</div>
				<div class="link-part link-news">
					<b>脉点</b>
					<?php if(is_array($mdGroupList)): foreach($mdGroupList as $key=>$group): ?><p onClick="location='<?php echo U('article/index?gid='.$group['id']);?>'"><?php echo ($group["name"]); ?></p><?php endforeach; endif; ?>
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
				<a href="mailto:service@maiunsoft.com"><img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/icon-weibo.png" alt="weibo-icon"></a>
			</div>
		</footer>
		
		<script type="text/javascript">
			window.onload = function(){
				var banner_4 = document.getElementsByClassName("banner-4")[0];
				var menu_mask = document.getElementsByClassName("menu-mask");
				
				if(banner_4){
					//menu_mask.style.height =
					var height = banner_4.offsetHeight;
					for(var i = 0;i<5;i++){
						
						menu_mask[i].style.height = height+"px";
					}
					
					
				}
			}
		</script>
		
		
		<script src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/js/jquery-3.1.1.min.js"></script>
		<script src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/js/swiper.min.js"></script>
		<script src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/js/main.js"></script>
	</body>

</html>
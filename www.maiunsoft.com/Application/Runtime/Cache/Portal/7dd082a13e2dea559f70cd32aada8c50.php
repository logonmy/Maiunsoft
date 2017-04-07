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
									
									<li onClick="location='http://127.0.0.1/www.maiunsoft.com/Article/list'">行业风向<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='http://127.0.0.1/www.maiunsoft.com/Article/observe'">业务洞察<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='http://127.0.0.1/www.maiunsoft.com/Article/list'">技术前沿<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onClick="location='http://127.0.0.1/www.maiunsoft.com/Article/detail'">公司动态<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								
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
								<!--<ul>
									<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><li onClick="location='<?php echo U('article/index?gid='.$key);?>'" style="padding-left:20px !important"><?php echo ($group["name"]); ?>
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow">
										</li><?php endforeach; endif; ?>
								</ul>-->
								<ul>
                                    <li onClick="location='http://127.0.0.1/www.maiunsoft.com/Service/consult'">咨询<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='http://127.0.0.1/www.maiunsoft.com/Service/dev'">开发<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='http://127.0.0.1/www.maiunsoft.com/Service/maintenance'">运维<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='http://127.0.0.1/www.maiunsoft.com/Service/train'">培训<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
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
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>
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
					<!--
                 -->
					<li>
						<div class="pointer">
							<span>招聘</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<li onclick="location='http://127.0.0.1/www.maiunsoft.com/Job/school'">校园招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='http://127.0.0.1/www.maiunsoft.com/Job/social'">社会招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-ul menu-ul-2">
									<ul class="hide">
										<li data-href="http://127.0.0.1/www.maiunsoft.com/Job/detail">校园宣讲<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
										<li data-href="http://127.0.0.1/www.maiunsoft.com/Job/school">实习生招聘<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
										<li data-href="http://127.0.0.1/www.maiunsoft.com/Job/school">应届生招聘<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
									</ul>
									<ul class="hide">
										<?php if(is_array($jobTypeList)): foreach($jobTypeList as $key=>$type): ?><li onClick="location='<?php echo U('job/social?type='.$key);?>'"><?php echo ($type); ?><img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li><?php endforeach; endif; ?>
									</ul>
								</div>
								<div class="nav-4-empty-block hide"></div>
								<div class="menu-content vertical-center">
									<div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												0-0 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												0-1 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												0-2 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
									</div>
									<div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												1-0 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												1-1 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												1-2 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
										<div class="hide">
											<b>任职要求</b><br />
											<p>
												1-3 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
										<div class="hide">
											<b>与犀云签订战略合作协议 3-1-2</b><br />
											<p>
												1-4 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言 html5，c语言，html5，c语言
											</p>
											<!-- <a href="#">更多</a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="pointer">
							<span>关于</span>
						</div>
						<div class="menu-mask hide">
							<div class="menu-left">
								<ul>
									<li onclick="location='http://127.0.0.1/www.maiunsoft.com/Company/about'">公司简介<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='http://127.0.0.1/www.maiunsoft.com/Company/service'">服务网络<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='http://127.0.0.1/www.maiunsoft.com/Company/cooperation'">合作伙伴<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='http://127.0.0.1/www.maiunsoft.com/Company/culture'">企业文化<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-about vertical-center">
									<div class="hide">
										<b>脉云软件（上海）有限公司</b>
										<span>
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                        </span>
										<a href="./Company/about">更多</a>
									</div>
									<div class="hide">
										<b>脉云软件（上海）有限公司</b>
										<span>
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                        </span>
										<a href="./about1">更多</a>
									</div>
									<div class="hide">
										<b>脉云软件（上海）有限公司</b>
										<span>
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                        </span>
										<a href="./about2">更多</a>
									</div>
									<div class="hide">
										<b>脉云软件（上海）有限公司</b>
										<span>
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                            脉云软件作为一家各个方面
                                        </span>
										<a href="./about3">更多</a>
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
				<a class="search-a" href="#"><img class="icon-menu" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/menu.png" alt="menu" /></a>
			</div>
		</nav>

		        <div class="swiper-container banner-div">
            <div class="swiper-wrapper">
                <?php if(is_array($bigSliderList)): foreach($bigSliderList as $key=>$slider): ?><div style="background-image:url(<?php echo UploadUrl('slider'); echo ($slider["image"]); ?>)" class="swiper-slide">
                    </div><?php endforeach; endif; ?>
            </div>
            <!-- <div class="swiper-button-prev swiper-button-white"></div>
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
                                    <span>更多详情<img class="icon-right" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-black.png"/></span>
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
                                <button onClick="location='./cooperation2'" class="section-two-article-btn">了解更多</button>
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
                <div class="section-six-bg section-six-bg-0">
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
                </div><!--
             --><div class="section-six-bg section-six-bg-1">
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
                </div><!--
             --><div class="section-six-bg section-six-bg-2">
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
                </div><!--
             --><div class="section-six-bg section-six-bg-3">
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
                </div>
            </div>
        </div>

		
		<div class="bg-color-7" style="background:#fff;">
			<div class="section-four">
				<div class="link-part link-about">
					<b>关于</b>
					<p>公司简介</p>
					<p>服务网络</p>
					<p>合作伙伴</p>
					<p>企业文化</p>
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
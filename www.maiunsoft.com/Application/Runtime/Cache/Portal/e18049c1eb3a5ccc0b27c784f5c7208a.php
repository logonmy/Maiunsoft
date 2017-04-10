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
									
									<li onClick="location='<?php echo U('Article/list');?>'">行业风向<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
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
								<!--<ul>
									<?php if(is_array($serviceGroupList)): foreach($serviceGroupList as $key=>$group): ?><li onClick="location='<?php echo U('article/index?gid='.$key);?>'" style="padding-left:20px !important"><?php echo ($group["name"]); ?>
											<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow">
										</li><?php endforeach; endif; ?>
								</ul>-->
								<ul>
                                    <li onClick="location='<?php echo U('Service/consult');?>'">咨询<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='<?php echo U('Service/dev');?>'">开发<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='<?php echo U('Service/maintenance');?>'">运维<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
                                    <li onClick="location='<?php echo U('Service/train');?>'">培训<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
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
									<li onclick="location='<?php echo U('Job/school');?>'">校园招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='<?php echo U('Job/social');?>'">社会招聘<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
								</ul>
							</div>
							<div class="menu-right">
								<div class="menu-ul menu-ul-2">
									<ul class="hide">
										<li onclick="location='<?php echo U('Job/detail');?>'">校园宣讲<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
										<li onclick="location='<?php echo U('Job/school');?>'">实习生招聘<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
										<li onclick="location='<?php echo U('Job/school');?>'">应届生招聘<img class="hide vertical-center" src="./imgs/right-arrow.png" alt="right-arrow"></li>
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
									<li onclick="location='<?php echo U('Company/about');?>'">公司简介<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='<?php echo U('Company/service');?>'">服务网络<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='<?php echo U('Company/cooperation');?>'">合作伙伴<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
									<li onclick="location='<?php echo U('Company/culture');?>'">企业文化<img class="hide vertical-center" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/right-arrow.png" alt="right-arrow"></li>
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

		<div class="banner-div banner-4">
	<div class="banner-content-4 vertical-center">
		公司简介
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

<!-- <div class="template-big-card">
            <img class="big-card-img" src="./imgs/ceil-img-1.png" >
            <div class="big-card-content">
                <h3>公司简介</h3>
                <p>
                    oogle 和 Uber 互掴了几个巴掌，或许会成为引发无人驾驶领域大战的火药桶。
　　2 月 24 日，Google 母公司 Alphabet 旗下的自动驾驶技术公司 Waymo 指控 Uber 及其旗下的自动驾驶卡车公司 Otto 盗取了他们的自动驾驶技术。
　　指控称其自动驾驶汽车部门软件工程师 Anthony Levandowski 在离开谷歌创立自动驾驶卡车公司 Otto 之前，秘密下载了 14000 份专有技术文件。
　　Uber 的发言人则称 Waymo 的诉讼毫无根据，其目的只是想阻止竞争对手前进。3 月 1 日，Uber 去年收购无人车公司 Tyto 的交易被披露，这家公司为 Uebr 提供的一项自动驾驶技术专利或能反击 Google 窃密指控。但如果Waymo 可以证明 Levandowski 的盗窃行为，以及这种盗窃行为对 Waymo 造成了巨大的损失，那么 Uber 将会面临高额罚金。更为严重的是，此次诉讼很可能会挫败 Uber 开发无人驾驶汽车的计划，从而给 Uber 的未来蒙上一层阴影。
　　诉讼的背后，则指向了无人驾驶技术领域的混战。
                </p>
            </div>
        </div> -->
<div class="bg-color-5">
	<div class="template-wrap">

		<div class="template-ceil">
			<b>公司简介</b>
			<div class="template-ceil-img">
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/ceil-img-1.png" alt="content-intro">
			</div>
			<p>
				Google 和 Uber 互掴了几个巴掌，或许会成为引发无人驾驶领域大战的火药桶。 2 月 24 日，Google 母公司 Alphabet 旗下的自动驾驶技术公司 Waymo 指控 Uber 及其旗下的自动驾驶卡车公司 Otto 盗取了他们的自动驾驶技术。 指控称其自动驾驶汽车部门软件工程师 Anthony Levandowski 在离开谷歌创立自动驾驶卡车公司 Otto 之前，秘密下载了 14000 份专有技术文件。 Uber 的发言人则称 Waymo 的诉讼毫无根据，其目的只是想阻止竞争对手前进。3 月 1 日，Uber 去年收购无人车公司 Tyto 的交易被披露，这家公司为 Uebr 提供的一项自动驾驶技术专利或能反击 Google 窃密指控。但如果Waymo 可以证明 Levandowski 的盗窃行为，以及这种盗窃行为对 Waymo 造成了巨大的损失，那么 Uber 将会面临高额罚金。更为严重的是，此次诉讼很可能会挫败 Uber 开发无人驾驶汽车的计划，从而给 Uber 的未来蒙上一层阴影。 诉讼的背后，则指向了无人驾驶技术领域的混战。 商业应用尚未成熟 专利争夺大战已经打响 Google 算是无人驾驶领域的先行者， 其无人驾驶汽车项目开始于 2009 年，启动了一个数十亿美元的比赛作为孵化器，以完善无人驾驶技术。在此过程中，它帮助 Google 收集了成百上千项专利，涵盖自动化车辆的软件，硬件和道路行为等各个方面。 Google 从来没有透露自己在无人驾驶汽车上投入了多少，在 2012 年，Google 的无人车的自动驾驶套件成本就已经超过了 25 万美元，整车成本超 30 万美元，远超法拉利。 硬件成本如此之高，为了使量产成为可能，Google 在无人驾驶汽车的研发和人才的投入必须大手笔。据彭博社报道，Google 针对早期无人车团队员工制定过非常慷慨的薪酬制度。尽管没有透露具体数字，但是熟悉此事的员工说，这笔钱多到可以让他们想干嘛就干嘛。 此外无人车团队员工还能获得额外的期权和现金奖励， Google 按照项目价值为这些员工已获得的奖励设立一个倍数，两者相乘后发给员工。2015 年下半年 Google 还大幅提升奖金倍数，使得奖金数达到数百万美元。有员工被授予 16 倍奖金倍数。 2015 年第四季度，Google 运营费用增加 14% 达到 66 亿美元。首席财务官 Ruth Porat 称增长的原因是研发支出大增。尽管她没有具体指是什么项目，但 Google 内部人士表示说的正是汽车项目。 在与 Uber 的诉讼中，Waymo 也称为了将无人车引入大众市场，Waymo 已经投资了数百万美元和数万小时的工程时间来定制在业界中最先进的， 有效的激光雷达传感器，以期将整套系统出售给汽车制造商，而不是只解决自动驾驶解决方案中的一个环节。
			</p>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>

<div class="button-list">
	<a class="btn-active">服务网络</a>
	<a>合作伙伴</a>
	<a>企业文化</a>
	<a>可持续发展</a>
</div>

<!-- <div class="big-card-banner">
        </div> -->

<div style="padding-bottom: 110px;" class="bg-color-5">
	<div class="template-wrap">

		<div class="template-card switch-tab-1">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>服务网络之 --上海</b>
				<p>
					是指一些在网络上运行的、面向服务的、基于分布式程序的软件模块，网络服务采用HTTP和XML（标准通用标记语言的子集）等互联网通用标准，使人们可以在不同的地方通过不同的终端设备访问WEB上的数据，如网上订票，查看订座情况。网络服务在电子商务、电子政务、公司业务流程电子化等应用领域有广泛的应用，被业内人士奉为互联网的下一个重点
				</p>
			</div>
		</div>
		<div class="template-card switch-tab-1">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/guangzhou.png" alt="">
			</div>
			<div class="template-card-article">
				<b>广州</b>
				<p>
					DHCP的全名是“Dynamic Host Configuration Protocol”，即动态主机配置协议。在使用DHCP的网络里，用户的计算机可以从DHCP服务器那里获得上网的参数，几乎不需要做任何手工的配置就可以上网。 一般情况下，DHCP服务器会尽量保持每台计算机使用同一个IP地址上网。如果计算机长时间没有上网或配置为使用静态地址上网，DHCP服务器就会把这个地址分配给其他计算机。
				</p>
			</div>
		</div>
		<div class="template-card switch-tab-1">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/shenzhen.png" alt="">
			</div>
			<div class="template-card-article">
				<b>深圳</b>
				<p>
					根据协议，双方将在旅游投资项目库、乡村旅游扶贫、旅游投融资平台、旅游企业创新发展、区域旅游资源整合、互联网旅游新业态等方面开展合作。中信银行将充分利用中信集团资源优势，积极支持国家旅游局重点发展领域和重点建设项目，为旅游企业和旅游者提供全方位、便捷优惠的金融服务，全力支持旅游业发展。国家旅游局将推荐中信银行作为其重点发展领域和重点建设项目的合作伙伴。
				</p>
			</div>
		</div>

		<div class="company-list switch-tab-2 hide">
			<table width="100%">
				<tr>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-1.png" alt="co-1">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-2.png" alt="co-2">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-3.png" alt="co-3">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-4.png" alt="co-4">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-5.png" alt="co-5">
					</td>
				</tr>
				<tr class="table-tr-2">
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-6.png" alt="co-6">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-7.png" alt="co-7">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-8.png" alt="co-8">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-9.png" alt="co-9">
					</td>
					<td>
						<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/co-10.png" alt="co-10">
					</td>
				</tr>
			</table>
		</div>

		<div class="template-ceil switch-tab-3 hide">
			<p class="ceil-content-2">
				是非观——以用户为是，以自己为非 发展观——创业精神和创新精神 利益观——人单合一双赢 “永远以用户为是，以自己为非”的是非观是海尔创造用户的动力。 海尔人永远以用户为是，不但要满足用户需求，还要创造用户需求；海尔人永远自以为非，只有自以为非才能不断否定自我，挑战自我，重塑自我——实现以变制变、变中求胜。 创业创新的两创精神是海尔文化不变的基因。 海尔不变的观念基因既是对员工个人发展观的指引，也是对员工价值观的约束。“永远以用户为是，以自己为非”的观念基因要求员工个人具备两创精神。 人单合一双赢的利益观是海尔永续经营的保障。 海尔是所有利益相关方的海尔，主要包括员工、用户、股东。网络化时代，海尔和分供方、合作方共同组成网络化的组织，形成一个个利益共同体，共赢共享共创价值。 每个员工通过加入自主经营体与用户建立契约，从被管理到自主管理，从被经营到自主经营，实现“自主，自治，自推动”，这是对人性的充分释放。 每个员工通过加入自主经营体与用户建立契约，从被管理到自主管理，从被经营到自主经营，实现“自主，自治，自推动”，这是对人性的充分释放。 每个员工通过加入自主经营体与用户建立契约，从被管理到自主管理，从被经营到自主经营，实现“自主，自治，自推动”，这是对人性的充分释放。 每个员工通过加入自主经营体与用户建立契约，从被管理到自主管理，从被经营到自主经营，实现“自主，自治，自推动”，这是对人性的充分释放。
			</p>
		</div>

		<div class="template-card switch-tab-4 hide">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/ceil-img-2.png" alt="">
			</div>
			<div class="template-card-article">
				<b>可持续发展 -- 何为可持续发展</b>
				<p>
					中证网讯 可持续发展（英语：Sustainable Development，縮寫：SD），或永續發展，是指在保护环境的条件下既满足当代人的需求，又以不损害后代人的需求為前瞻的发展模式。“可持续发展”这个术语使用由布倫特蘭委員會创造已成为最经常被引用的可持续发展的定义：“既能满足我们现今的需求，又不损害子孙后代能满足他们的需求的发展模式。”
				</p>
			</div>
		</div>
		<div class="template-card switch-tab-4 hide">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/ceil-img-2.png" alt="">
			</div>
			<div class="template-card-article">
				<b>可持续发展三要素</b>
				<p>
					環境要素（Environmental aspect） 指尽量减少对环境的损害（Environmental Impact）。尽管这一原则得到各方人士的认可，但是由于目前人类科学知识的局限性，对于许多具体问题就会产生截然相反的认识，例如核电站，支持人士认为它可以减少温室气体排放，是环保的，反对人士认为核废料有长期放射性污染，同时核电站存在安全隐患是不环保的。 社会要素（Social aspect） 经济要素（Economic aspect）
				</p>
			</div>
		</div>
		<div class="template-card switch-tab-4 hide">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/ceil-img-2.png" alt="">
			</div>
			<div class="template-card-article">
				<b>可持续发展的公司</b>
				<p>
					不僅實現代際公正，更要實現代內公正，即當代一部份人的發展不應損害另一部份人的利益。 經濟與社會的發展要符合地球生態系統的動態平衡的法則和資源可持續利用的原則。 改變不合理的资源消耗式的消費模式。 解決全球的貧窮問題，窮人的生活質量有所提高。
				</p>
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
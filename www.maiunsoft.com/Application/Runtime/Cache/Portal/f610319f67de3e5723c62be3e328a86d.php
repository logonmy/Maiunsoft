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
		业务洞察
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
			<b>业务洞察</b>
			<img class="template-ceil-img" src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/ceil-img-1.png" alt="content-intro">
			<p>
				Google 和 Uber 互掴了几个巴掌，或许会成为引发无人驾驶领域大战的火药桶。 　　2 月 24 日，Google 母公司 Alphabet 旗下的自动驾驶技术公司 Waymo 指控 Uber 及其旗下的自动驾驶卡车公司 Otto 盗取了他们的自动驾驶技术。 　　指控称其自动驾驶汽车部门软件工程师 Anthony Levandowski 在离开谷歌创立自动驾驶卡车公司 Otto 之前，秘密下载了 14000 份专有技术文件。 　　Uber 的发言人则称 Waymo 的诉讼毫无根据，其目的只是想阻止竞争对手前进。3 月 1 日，Uber 去年收购无人车公司 Tyto 的交易被披露，这家公司为 Uebr 提供的一项自动驾驶技术专利或能反击 Google 窃密指控。但如果Waymo 可以证明 Levandowski 的盗窃行为，以及这种盗窃行为对 Waymo 造成了巨大的损失，那么 Uber 将会面临高额罚金。更为严重的是，此次诉讼很可能会挫败 Uber 开发无人驾驶汽车的计划，从而给 Uber 的未来蒙上一层阴影。 　　诉讼的背后，则指向了无人驾驶技术领域的混战。 　　商业应用尚未成熟 专利争夺大战已经打响 　　Google 算是无人驾驶领域的先行者， 其无人驾驶汽车项目开始于 2009 年，启动了一个数十亿美元的比赛作为孵化器，以完善无人驾驶技术。在此过程中，它帮助 Google 收集了成百上千项专利，涵盖自动化车辆的软件，硬件和道路行为等各个方面。 　　Google 从来没有透露自己在无人驾驶汽车上投入了多少，在 2012 年，Google 的无人车的自动驾驶套件成本就已经超过了 25 万美元，整车成本超 30 万美元，远超法拉利。 硬件成本如此之高，为了使量产成为可能，Google 在无人驾驶汽车的研发和人才的投入必须大手笔。据彭博社报道，Google 针对早期无人车团队员工制定过非常慷慨的薪酬制度。尽管没有透露具体数字，但是熟悉此事的员工说，这笔钱多到可以让他们想干嘛就干嘛。 　　此外无人车团队员工还能获得额外的期权和现金奖励， Google 按照项目价值为这些员工已获得的奖励设立一个倍数，两者相乘后发给员工。2015 年下半年 Google 还大幅提升奖金倍数，使得奖金数达到数百万美元。有员工被授予 16 倍奖金倍数。 　　2015 年第四季度，Google 运营费用增加 14% 达到 66 亿美元。首席财务官 Ruth Porat 称增长的原因是研发支出大增。尽管她没有具体指是什么项目，但 Google 内部人士表示说的正是汽车项目。 在与 Uber 的诉讼中，Waymo 也称为了将无人车引入大众市场，Waymo 已经投资了数百万美元和数万小时的工程时间来定制在业界中最先进的， 有效的激光雷达传感器，以期将整套系统出售给汽车制造商，而不是只解决自动驾驶解决方案中的一个环节。
			</p>
			<div style="clear:both;"></div>
		</div>

		<h3>更多动态</h3>

		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>与悉云科技签订战略合作协议</b>
				<p>
					1.0 合作纲领 　　1.1 合作宗旨 　　甲方与乙方的合作宗旨是通过双方的紧密合作，打造双赢、可持续发展的战略合作伙伴关系。 　　1.2 合作目标 　　双方相信，通过本次战略合作，能够帮助双方进一步提升整体运营效率、降低运营成本、改善提升三峡石相关产品的工艺技术、产品质量及开发序列等，实现双方未来的市场扩张策略并获得市场份额，为双方创造更大的商业价值。 　　1.3 合作内容 　　1.3.1双方合作具备排他性。甲方确定乙方为重庆市范围内旅游纪念品相关产品的唯一生产加工基地，
				</p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>与包钢集团签署战略合作协议</b>
				<p>
					作为一家业务网络覆盖全国的综合型券商，世纪证券始终致力于积极服务实体经济发展，在IPO、上市公司再融资、债券发行与承销、资产证券化、新三板挂牌与做市等领域具备全面综合的专业服务能力，已成功完成“通光线缆”、“川金诺”等IPO保荐承销、“安琪酵母”定向增发、中国农业银行等多家银行非公开发行优先股副主承销、“青鹰股份”等多家企业新三板挂牌及百余家企业新三板做市项目。包钢集团是内蒙古最大的工业企业、世界最大稀土工业基地，在新的发展时期，其紧密契合国家“一带一路”战略，
				</p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>签署旅游扶贫战略合作协议</b>
				<p>
					根据协议，双方将在旅游投资项目库、乡村旅游扶贫、旅游投融资平台、旅游企业创新发展、区域旅游资源整合、互联网旅游新业态等方面开展合作。中信银行将充分利用中信集团资源优势，积极支持国家旅游局重点发展领域和重点建设项目，为旅游企业和旅游者提供全方位、便捷优惠的金融服务，全力支持旅游业发展。国家旅游局将推荐中信银行作为其重点发展领域和重点建设项目的合作伙伴，并与其共同探索金融支持旅游产业发展的有效途径，实现旅游业与金融业的融合发展和共同提升。 </p>
			</div>
		</div>
		<div class="template-card">
			<div class="template-card-img">
				<span></span>
				<img src="/www.maiunsoft.com/Application/Portal/View/Pc/Static/imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article">
				<b>名家汇签署战略合作协议</b>
				<p>
					中证网讯 名家汇（300506）3月8日晚间公告，公司与美尚生态景观股份有限公司（以下简称“美尚生态”）于2017 年 3 月 7 日签订了《战略合作协议》，双方有意在城市景观、生态旅游等领域重大项目的市场营销、创意策划、规划设计、工程实施、运营服务等环节展开全方位的战略性合作。（沈楠） </p>
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
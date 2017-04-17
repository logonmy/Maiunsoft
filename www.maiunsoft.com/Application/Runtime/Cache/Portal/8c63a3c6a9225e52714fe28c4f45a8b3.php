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
			<b>咨询客户介绍</b>
			<img class="template-ceil-img" src="./imgs/ceil-img-1.png" alt="content-intro">
			<p>
				国际上的外汇和期货市场交易公司繁多，其中良莠不齐。各个公司都使劲办法极力争取客户，许多国内的经纪人更是不负责任的吹嘘和承诺。而客户如何能有一个选择交易公司的标准？而不是对一些雕虫小技迷惑了眼睛，而忽视了最实质和最重要的东西。 首先，外汇保证金和期货CFD交易都是高风险和高收益并存，任何推广活动或介绍人无视或者弱化市场的多重高风险性，而只是单单展示高收益，都是对客户的极端不负责任或是撒谎欺骗行为。每个进入市场的人都要事前知道市场的高风险性并且评估自己的风险承受能力后才能进入市场操作，这里外汇期货公司及其经纪人的职业操守，对客户的关系应该是共同发展，而不是损人利己。 当你承认了市场风险，进入国际市场交易后。首先考虑的最重要的就是资金的安全性。因为在国际上交易，资金在境外，中国相关的政府部门（银，证监会等）没有责任也不可能保证你的资金的安全。这样，你的交易商的注册地点，就是监管交易公司所在地政府的监管政策是重中之重，因为对注册地本国的客户的保护和对投资环境的保护是政府的责任，同时,海外客户也享受本地客户相同的权利。我虽然已经从事了几年的外汇保证金交易，也是直到最近参加了一个英国公司经纪人培训，才对此有了更多的了解。 监管就是保证客户资金的安全，这其中,一要监管交易公司不能贪污挪用客户的保证金。英国的金融管理局FSA要求公司每天提供公司的日常的账目表格核实资金状况.二是监管当客户赚到钱后,公司要有相应的资金付给客户.所以报告中也要有公司风险管理的部分.当所有客户内部对冲后余下的单向头寸数量超过安全线,公司必须把相关的部分对冲到国际市场中.不能没有管制的和客户对赌.从而保证交易公司的正常安全的运行.金融行业最重要的就是信誉,为了更好的统一监管,所有在英国的金融企业包括银行,保险,投资,贷款甚至博彩业公司等等都统一由一个政府部门金融管理局FSA监管.避免了责任不清,政令不通及政府相关部门相互扯皮的现象.对从事互联网交易的公司,要对交易平台软件进行严格的审核安全测试,交易公司的部门中的关键从业人员包括CEO和总经理等都要参加考试通过后拿到执照后方可上岗,至于对公司营业执照的要求更是严格.所以在国际上,有FSA执照本身就是一个金字招牌.有执照的公司运行相对规范和稳定.任何投资人都可以在FSA网站上直接投诉受监管的公司.当英国金融城的市长到中国作金融推介会上说,在伦敦的美国律师比纽约都多.更加证明伦敦乃是世界金融之都,而这一切建立在各个公司的诚信经营的理念和政府的严格监管的基础之上.
			</p>
			<div style="clear:both;"></div>
		</div>

		<h3>更多咨询</h3>

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
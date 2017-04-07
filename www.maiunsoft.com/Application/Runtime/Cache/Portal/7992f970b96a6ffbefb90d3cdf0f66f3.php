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

		<script>document.title = "校园招聘";</script>
<div class="banner-div banner-4">
	<div class="banner-content-4 vertical-center">
		校园招聘
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
		<div class="employ-tabswitch-1">
			<button class="tabswitch-btn switch-active" type="button">校园宣讲</button>
			<button class="tabswitch-btn" type="button">实习招聘</button>
			<button class="tabswitch-btn" type="button">应届生招聘</button>
		</div>

		<div class="drop-down">
			<!-- <select>
                        <option>
                            上海
                        </option>
                        <option>
                            兰州
                        </option>
                        <option>
                            深圳
                        </option>
                    </select> -->
			<div class="default-item">
				上海
			</div>
			<div class="drop-down-item hide">
				上海
			</div>
			<div class="drop-down-item hide">
				兰州
			</div>
			<div class="drop-down-item hide">
				深圳
			</div>
		</div>

		<div class="template-card card-switch-1">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article-3">
				<h3 class="job-title">上海大学</h3>
				<table>
					<tr>
						<td class="table-title">
							宣讲主题：
						</td>
						<td class="table-content">
							参与设计、审核、优化公司IT系统以及各应用系统的体系架构；
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲时间：
						</td>
						<td class="table-content">
							2017.12.23
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲嘉宾：
						</td>
						<td class="table-content">
							黎明
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲地址：
						</td>
						<td class="table-content">
							上海宝山区梓坤科技园1号楼南区
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="template-card card-switch-1">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article-3">
				<h3 class="job-title">兰州大学</h3>
				<table>
					<tr>
						<td class="table-title">
							宣讲主题：
						</td>
						<td class="table-content">
							全面负责公司运维项目的系统升级、扩容需求与资源落实，配合开发需求，测试、调整运维平台；
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲时间：
						</td>
						<td class="table-content">
							2016.12.30
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲嘉宾：
						</td>
						<td class="table-content">
							刘希
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲地址：
						</td>
						<td class="table-content">
							上海宝山区梓坤科技园1号楼南区
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="template-card card-switch-1">
			<div class="template-card-img">
				<span></span>
				<img src="imgs/shanghai.png" alt="">
			</div>
			<div class="template-card-article-3">
				<h3 class="job-title">西北师范大学</h3>
				<table>
					<tr>
						<td class="table-title">
							宣讲主题：
						</td>
						<td class="table-content">
							负责网络以及服务器的网络设置、维护和优化、网络的安全监控、系统性能管理和优化、网络性能管理和优化；
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲时间：
						</td>
						<td class="table-content">
							2017.4.6
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲嘉宾：
						</td>
						<td class="table-content">
							雷利
						</td>
					</tr>
					<tr>
						<td class="table-title">
							宣讲地址：
						</td>
						<td class="table-content">
							上海宝山区梓坤科技园1号楼南区
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="template-card card-switch-2 hide">
			<div class="template-card-article-2">
				<h3 class="job-title">Java实习生</h3>
				<table>
					<tr>
						<td class="table-title">
							岗位职责：
						</td>
						<td class="table-content">
							负责网络以及服务器的网络设置、维护和优化、网络的安全监控、系统性能管理和优化、网络性能管理和优化；
						</td>
					</tr>
					<tr>
						<td class="table-title">
							任职要求：
						</td>
						<td class="table-content">
							HTML5，C语言，C，Html5，C语言，Html
						</td>
					</tr>
					<tr>
						<td class="table-title">
							工作经验：
						</td>
						<td class="table-content">
							一年以下
						</td>
					</tr>
					<tr>
						<td class="table-title">
							公司地址：
						</td>
						<td class="table-content">
							上海宝山梓坤科技园5018号
						</td>
					</tr>
					<tr>
						<td class="table-title">
							薪资待遇：
						</td>
						<td class="table-content">
							5k-10k
						</td>
					</tr>
				</table>
				<div class="template-card-imgbox">
					<img src="./imgs/rush.png" alt="rush">
					<img src="./imgs/rush-2.png" alt="rush">
				</div>
			</div>
		</div>
		<div class="template-card card-switch-2 hide">
			<div class="template-card-article-2">
				<h3 class="job-title">运维实习生</h3>
				<table>
					<tr>
						<td class="table-title">
							岗位职责：
						</td>
						<td class="table-content">
							负责网络以及服务器的网络设置、维护和优化、网络的安全监控、系统性能管理和优化、网络性能管理和优化；
						</td>
					</tr>
					<tr>
						<td class="table-title">
							任职要求：
						</td>
						<td class="table-content">
							HTML5，C语言，C，Html5，C语言，Html
						</td>
					</tr>
					<tr>
						<td class="table-title">
							工作经验：
						</td>
						<td class="table-content">
							一年以下
						</td>
					</tr>
					<tr>
						<td class="table-title">
							公司地址：
						</td>
						<td class="table-content">
							上海宝山梓坤科技园5018号
						</td>
					</tr>
					<tr>
						<td class="table-title">
							薪资待遇：
						</td>
						<td class="table-content">
							5k-10k
						</td>
					</tr>
				</table>
				<div class="template-card-imgbox">
					<img src="./imgs/rush.png" alt="rush">
					<img src="./imgs/rush-2.png" alt="rush">
				</div>
			</div>
		</div>

		<div class="template-card card-switch-3 hide">
			<div class="template-card-article-2">
				<h3 class="job-title">运维实习生3</h3>
				<table>
					<tr>
						<td class="table-title">
							岗位职责：
						</td>
						<td class="table-content">
							负责网络以及服务器的网络设置、维护和优化、网络的安全监控、系统性能管理和优化、网络性能管理和优化；
						</td>
					</tr>
					<tr>
						<td class="table-title">
							任职要求：
						</td>
						<td class="table-content">
							HTML5，C语言，C，Html5，C语言，Html
						</td>
					</tr>
					<tr>
						<td class="table-title">
							工作经验：
						</td>
						<td class="table-content">
							一年以下
						</td>
					</tr>
					<tr>
						<td class="table-title">
							公司地址：
						</td>
						<td class="table-content">
							上海宝山梓坤科技园5018号
						</td>
					</tr>
					<tr>
						<td class="table-title">
							薪资待遇：
						</td>
						<td class="table-content">
							5k-10k
						</td>
					</tr>
				</table>
				<div class="template-card-imgbox">
					<img src="./imgs/rush.png" alt="rush">
					<img src="./imgs/rush-2.png" alt="rush">
				</div>
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
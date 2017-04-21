<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie6" lang="zh-cn"><![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="zh-cn"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="zh-cn"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="zh-cn"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="zh-cn"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit">
    <meta name="referrer" content="unsafe-url"/>
    <meta name="referrer" content="always"/>
    <title>MAIUNSOFT WCM SYSTEM</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="http://static.maiunsoft.com/assets/bootstrap-3.3.5/css/bootstrap.min.css" />
<!-- Custom styles for this template -->
<link href="/www.maiunsoft.com/Application/Admin/View/_Static/css/style.css" rel="stylesheet">
<link href="/www.maiunsoft.com/Application/Admin/View/_Static/css/style-responsive.css" rel="stylesheet" />
<script type="text/javascript" src="http://static.maiunsoft.com/js/jquery/jquery-2.2.0.min.js"></script>
</head>

<body>
        <section id="container" class="">
        <!--top start-->
        <!--top start-->
<header class="header white-bg">
    <!--logo start-->
    <a href="<?php echo U('home/index');?>" class="logo">MAIUNSOFT WCM SYSTEM</a>
    <div class="top-nav ">
        <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="username">Administrator</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="#"><i class=" fa fa-suitcase"></i>首选项</a>
                    </li>
                    <li><a href="#"><i class="fa fa-cog"></i> 设置</a>
                    </li>
                    <li><a href="<?php echo U('my/reset_password');?>"><i class="fa fa-key"></i>修改密码</a>
                    </li>
                    <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-logout"></i> 退出系统</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
    </div>
</header>
<!--top end-->

        <!--top end-->

        <!--sidebar start-->
        <!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <div class="workspace-guid">
            <h1>个人工作间</h1>
            <a href="<?php echo U('home/index');?>" class="fa fa-windows"></a>
        </div>
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <?php if(is_array($menu_list)): foreach($menu_list as $key=>$menu): ?><li>
                    <a href="" class="menu-item <?php echo ($menu["status"]); ?>"> <i class="fa fa-<?php echo ($menu["icon"]); ?>"></i>
                        <span><?php echo ($menu["title"]); ?></span>
                    </a>
                    <ul class="sub">
                        <?php if(is_array($menu["sub_menu_list"])): foreach($menu["sub_menu_list"] as $key=>$sub_menu): ?><li class="sub-menu <?php echo ($sub_menu["status"]); ?>">
                                <a href="<?php echo U($sub_menu['name']);?>" class="sub-menu">
                                    <i class="fa fa-<?php echo ($sub_menu["icon"]); ?> fa-fw"></i> <?php echo ($sub_menu["title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </li><?php endforeach; endif; ?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<script>
$(document).ready(function(){

    // 找到所有的列表
    var subMenuList = $(".sub-menu");
    var currentURL = window.location.href;
    subMenuList.each(function(){
        var subUrl = $(this).attr("href");
        var pos = currentURL.indexOf(subUrl);
        if(pos>0) {
            // 标注
            $(this).parent().attr('class','active');
            return;
        }
    });
});
</script>

        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <section class="panel">
                    <header class="panel-heading">
                        <i class="fa fa-<?php echo ($pageGuid["icon"]); ?> fa-fw">&nbsp;</i><?php echo ($pageGuid["title"]); ?>
                        <a href="javascript:history.go(-1);" class="fa fa-reply pull-right" style="font-size:30px;"></a>
                    </header>
                    <div class="panel-body">
                        <!-- page start-->
                        <style type="text/css">
    .edui-editor{
        width: 100%;
        height: 100%;
    }
</style>

<script>
function delete_article(id) {
    location.href = '/www.maiunsoft.com/index.php/Admin/Article/delete/id/' + id;
}

function edit_article (id) {
    $.get(
        "<?php echo U('article/edit');?>", {
            'id': id
        },
        function(data) 
        {
            if(data==0){
                alert('没有找到您要修改的数据');
                return;
            }else{
                $("#editArticleModal button[name='article_id']").val(data['id']);
                $("#editArticleModal input[name='article_title']").val(data['title']);
                $("#editArticleModal textarea[name='article_bref']").val(data['bref']);
                $("#editArticleModal input[name='article_reference']").val(data['reference']);
                $("#editArticleModal input[name='article_group']").val(data['group_id']);
                $("#editArticleModal input[name='article_author']").val(data['author']);
                $("#editArticleModal input[name='article_keywords']").val(data['keywords']);

                var type = $("#typeSelector").find("option[selected='selected']").text();
                var group = $("#groupSelector").find("option[selected='selected']").text();
                $("#editArticleModal label[name='group_show']").text(type+'-'+group);
                $("#editArticleModal .modal-title").html('编辑文章：'+data['title']);
                $("#editArticleModal").modal(); 
            }
        });
}

function edit_image (id) {
    $.get(
        "<?php echo U('article/edit');?>", {
            'id': id
        },
        function(data) 
        {
            if(data==0){
                alert('没有找到您要修改的数据');
                return;
            }else{
                $("#editImageModal button[name='article_id']").val(data['id']);
                $("#editImageModal .modal-title").html('上传图片：'+data['title']);
                var imageUrl = "<?php echo UploadUrl('article');?>"+data['image'];
                $("#editImageModal img[name='image_show']").attr('src',imageUrl);
                $("#editImageModal").modal(); 
            }
        });
}

function edit_content (id) {
    location.href = '/www.maiunsoft.com/index.php/Admin/Article/edit_content/id/' + id;
}

$(document).ready(function(){
    // 选择不同的库，显示相应的库存信息
    $("#groupSelector").change(function(){
        var url = "<?php echo U('article/admin');?>?type=<?php echo ($type); ?>&gid=" + $("#groupSelector").val();
        window.location.href = url;
    });

    $("#addArticleBtn").click(function(){
        $("#editArticleModal .modal-title").html('新建文章');
        $("#editArticleModal input").val(null);
        $("#editArticleModal button").val(null);
        $("#editArticleModal textarea").val(null);

        var type = $("#typeSelector").find("option[selected='selected']").text();
        var group = $("#groupSelector").find("option[selected='selected']").text();
        $("#editArticleModalTitle").text("<?php echo ($typeName); ?>-"+group);

        var group_id = $("#groupSelector").val();
        $("#editArticleModal input[name='article_group']").val(group_id);
        $("#editArticleModal").modal();  
    });
});
</script>

<section class="col-lg-12">
    <ul class="panel-tab">
        <li>
            <tagLib name="html" />
            <select id="groupSelector" name="group" onchange="" ondblclick="" class="" ><?php  foreach($groupList as $key=>$val) { if(!empty($groupId) && ($groupId == $key || in_array($key,$groupId))) { ?><option selected="selected" value="<?php echo $key ?>"><?php echo is_array($val)?$val[name]:$val; ?></option><?php }else { ?><option value="<?php echo $key ?>"><?php echo is_array($val)?$val[name]:$val; ?></option><?php } } ?></select>
        </li>
        <a id="addArticleBtn" class="pull-right fa fa-plus create-btn">&nbsp;新建<?php echo ($typeName); ?></a>
    </ul>
    <!-- Think 系统列表组件开始 -->
<table id="" class="table table-advance table-hover" cellpadding=0 cellspacing=0 ><tr class="row" ><th width="12">No</th><th>文章标题</th><th>来源</th><th >操作</th></tr><?php if(is_array($articleList)): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="row" ><td><?php echo ($i); ?></td><td><?php echo ($vo["title"]); ?></td><td><?php echo ($vo["reference"]); ?></td><td><a href="javascript:edit_article('<?php echo ($vo["id"]); ?>')">编辑</a>&nbsp;&nbsp;<a href="javascript:edit_content('<?php echo ($vo["id"]); ?>')">内容</a>&nbsp;&nbsp;<a href="javascript:edit_image('<?php echo ($vo["id"]); ?>')">图片</a>&nbsp;&nbsp;<a href="javascript:delete_article('<?php echo ($vo["id"]); ?>')">删除</a>&nbsp;&nbsp;</td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table>
<!-- Think 系统列表组件结束 -->

</section>

<!-- 新品编辑文章窗口 -->
<div class="modal" id="editArticleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:1000px;">
            <form action="<?php echo U('article/save');?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title" id="editArticleModalTitle">编辑文章</h4>
                </div>
                <div class="modal-body" style="overflow:auto;">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>文章标题</label>
                            <input type="text" name="article_title" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>文章来源</label>
                            <input type="text" name="article_reference" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>文章作者</label>
                            <input type="text" name="article_author" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>关键词</label>
                            <input type="text" name="article_keywords" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>文章简介</label>
                            <textarea class="form-control" name="article_bref" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-lg-12">
                        <input type="hidden" name="article_group" value="" />
                        <input type="hidden" name="article_type" value="<?php echo ($type); ?>" />
                        <button type="submit" class="btn btn-danger" name="article_id" value="">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="editImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:1000px;">
            <form action="<?php echo U('article/image');?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title" id="editArticleModalTitle">编辑图片信息</h4>
                </div>
                <div class="modal-body" style="overflow:auto;">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>上传</label>
                            <input class="form-control" type="file" name="article_image" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>图片</label>
                            <img name="image_show" src="" style="max-width:100%;max-height:150px;"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-lg-12">
                        <input type="hidden" name="article_group" value="" />
                        <input type="hidden" name="article_type" value="<?php echo ($type); ?>" />
                        <button type="submit" class="btn btn-danger" name="article_id" value="">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
                        <!-- page end-->
                    </div>
                </section>
            </section>
        </section>
        <!--main content end-->


        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2015-2020 &copy; 脉云软件(上海)有限公司
                <a href="#" class="go-top">
                    <i class="icon-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- end container -->

    <!-- start js -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://static.maiunsoft.com/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.cookie.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.dcjqaccordion.2.7.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/respond.min.js"></script>
    <script type="text/javascript" src="/www.maiunsoft.com/Public/Static/Js/jquery/jquery.stepy.js"></script>

    <!--common script for all pages-->
    <script type="text/javascript" src="/www.maiunsoft.com/Application/Admin/View/_Static/js/common-scripts.js"></script>
    <!-- end js -->

    




</body>

</html>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin table Examples</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <base href="<?php echo site_url();?>">

    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
    <?php include 'admin-sidebar.php'; ?>

    <!-- content start -->
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">

                </div>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12">
                <form action="admin/update_blog" method="post" class="am-form" enctype="multipart/form-data">
                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            文章标题
                        </div>
                        <div class="am-u-sm-8 am-u-md-4" style="margin-right: 500px;">
                            <input type="text" class="am-input-sm" name="title" value="<?php echo $blog->title?>">
                        </div>
                    </div>

                    <div class="am-g am-margin-top">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            文章主图
                        </div>
                        <div class="am-u-sm-8 am-u-md-4">
                            <input type="file" class="am-input-sm" name="photo" >
                            <input type="hidden" name="blog_id" value="<?php echo $blog->blog_id?>">
                        </div>
                    </div>

                    <div class="am-g am-margin-top-am">
                        <div class="am-u-sm-4 am-u-md-2 am-text-right">
                            文章内容
                        </div>
                        <div class="am-u-sm-12 am-u-md-10">
                            <textarea name="content" id="" cols="30" rows="10"><?php echo $blog->content?></textarea>
                        </div>

                    </div>
                    <div class="am-margin" style="margin-left: 170px;">
                        <input type="submit" class="am-btn am-btn-primary am-btn-xs" value="提交修改">
                        <input type="submit" class="am-btn am-btn-primary am-btn-xs" value="放弃修改">

                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
<!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>

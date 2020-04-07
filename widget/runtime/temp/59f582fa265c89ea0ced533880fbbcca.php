<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/cs.xiao18.top/application/index/view/shangcheng/add.html";i:1584459254;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>代理管理</title>
    <meta name="description" content="">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/public/static/amz/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/public/static/amz/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/public/static/amz/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/static/amz/css/admin.css">
    <link rel="stylesheet" href="/public/static/amz/css/app.css">
    <script src="/public/static/amz/js/echarts.min.js"></script>

    <!--old  下-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/linecons/css/linecons.css">

    <link rel="stylesheet" href="/public/static/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/public/static/assets/css/custom.css">

    <script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>


    <!--old  上-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">
    <link rel="stylesheet" href="/public/static/assets1/css/layui.css">
    <link rel="stylesheet" href="/public/static/assets1/css/view.css"/>
    <script src="/public/static/assets1/layui.all.js"></script>

</head>

<body data-type="index">

<div class="tpl-page-container">
<div class="page-title">





</div>
<div class="panel panel-default">

    <div class="title-env">
        <h1 class="title">消息通知修改</h1>
    </div>
    <div class="panel-body">

        <form role="form" id="form1"  method="post" action="<?php echo url('shangcheng/create'); ?>" enctype="multipart/form-data" class="validate">

            <div class="form-group">
                <label class="control-label">图片</label>
                <input type="file" class="form-control" name="picurl" />
            </div>
            <div class="form-group">
                <label class="control-label">标题</label>

                <input type="text" class="form-control" name="title"  placeholder="" />
            </div>
            <div class="form-group">
                <label class="control-label">内容(可使用html代码)</label>
				<textarea class="form-control" name="miaoshu" cols="5" style="margin: 0px -33.5px 0px 0px; width: 100%; height: 350px;" aria-invalid="false"></textarea>
            </div>

            <div class="form-group">
                <label class="control-label">链接</label>

                <input type="text" class="form-control" name="money"  placeholder="" />
            </div>
 		
            <div class="form-group">
                <button type="submit" class="btn btn-success">提交</button>
            </div>

        </form>

    </div>

</div>

<?php if(input('msg')!=''){ ?>
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> <?php echo input('msg')?>
    </div>
</div>

<?php }?>
<script>
    setTimeout("$('#alert').fadeOut(1000)",2000)
</script>
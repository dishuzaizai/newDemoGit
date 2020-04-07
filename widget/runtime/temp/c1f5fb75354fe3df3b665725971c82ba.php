<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/www/wwwroot/cs.xiao18.top/application/index/view/common/common.html";i:1585150700;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/lib/layui-v2.5.4/css/layui.css" media="all">
    <link rel="stylesheet" href="/css/layuimini.css" media="all">
    <link rel="stylesheet" href="/lib/font-awesome-4.7.0/css/font-awesome.min.css" media="all">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style id="layuimini-bg-color">
    </style>
</head>
<body class="layui-layout-body layuimini-all">
<div class="layui-layout layui-layout-admin">

    <div class="layui-header header">
        <div class="layui-logo">
        </div>
        <a>
            <div class="layuimini-tool"><i title="展开" class="fa fa-outdent" data-side-fold="1"></i></div>
        </a>

        <ul class="layui-nav layui-layout-left layui-header-menu layui-header-pc-menu mobile layui-hide-xs">
        </ul>
        <ul class="layui-nav layui-layout-left layui-header-menu mobile layui-hide-sm">
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="fa fa-list-ul"></i> 选择模块</a>
                <dl class="layui-nav-child layui-header-mini-menu">
                </dl>
            </li>
        </ul>

        <ul class="layui-nav layui-layout-right">
          <?php if(session('power')=='1'){?>
            <li class="layui-nav-item  slide-sidebar" style="margin-left: 10px">

                <button class="layui-btn layui-btn-warm" ><?php echo yue(); ?>元</button>

            </li>
            <li class="layui-nav-item  slide-sidebar" style="margin-left: 10px">
                <button class="layui-btn layui-btn-normal" onclick="money('0',<?php echo id(); ?>)">代理充值</button>
            </li>
            <?php } ?>
          
          
            <li class="layui-nav-item">
                <a href="javascript:;" data-refresh="刷新"><i class="fa fa-refresh"></i></a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;" data-clear="清理" class="layuimini-clear"><i class="fa fa-trash-o"></i></a>
            </li>
          <li class="layui-nav-item  slide-sidebar" style="margin-left: 10px">
                <button class="layui-btn layui-btn-radius layui-btn-danger"><?php echo power(); ?></button>
            </li>
            <li class="layui-nav-item layuimini-setting">
                <a href="javascript:;"><?php echo name(); ?></a>
                <dl class="layui-nav-child">
                   <!-- <dd>
                        <a href="javascript:;" data-iframe-tab="page/user-setting.html" data-title="基本资料" data-icon="fa fa-gears">基本资料</a>
                    </dd>
                    <dd>
                        <a href="javascript:;" data-iframe-tab="page/user-password.html" data-title="修改密码" data-icon="fa fa-gears">修改密码</a>
                    </dd>-->
                    <dd>
                        <a href="<?php echo url('login/login/dologin'); ?>" class="login-out">退出登录</a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item layuimini-select-bgcolor mobile layui-hide-xs">
                <a href="javascript:;" data-bgcolor="配色方案"><i class="fa fa-ellipsis-v"></i></a>
            </li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll layui-left-menu">
        </div>
    </div>

    <div class="layui-body">
        <div class="layui-tab" lay-filter="layuiminiTab" id="top_tabs_box">
            <ul class="layui-tab-title" id="top_tabs">
                <li class="layui-this" id="layuiminiHomeTabId" lay-id=""></li>
            </ul>
            <ul class="layui-nav closeBox">
                <li class="layui-nav-item">
                    <a href="javascript:;"> <i class="fa fa-dot-circle-o"></i> 页面操作</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-page-close="other"><i class="fa fa-window-close"></i> 关闭其他</a></dd>
                        <dd><a href="javascript:;" data-page-close="all"><i class="fa fa-window-close-o"></i> 关闭全部</a></dd>
                    </dl>
                </li>
            </ul>
            <div class="layui-tab-content clildFrame">
                <div id="layuiminiHomeTabIframe" class="layui-tab-item layui-show">
                </div>
            </div>
        </div>
    </div>

</div>

<script src="/lib/layui-v2.5.4/layui.js" charset="utf-8"></script>
<script>

    layui.config({
        base: "/js/"
    }).extend({
        layuimini: "layuimini"
    });
  layui.use(['element', 'layer', 'layuimini'], function () {
        var $ = layui.jquery,
            element = layui.element,
            layer = layui.layer;
    <?php if(session('power')=='1'){?>
layuimini.init('/api/init1.json');
  <?php }else{ ?>
    layuimini.init('/api/init.json');
    <?php }?>
        
    });
  
</script>
  <script>

    function money(status,id){
        if(status=='1')
        {
            var str = 'all';
        }else{
            if(id=='') {
                var str = "";
                $("input:checkbox[name='checkname']:checked").each(function () {
                    str += $(this).val() + ",";
                });

                if (str == '') {
                    return false
                }
            }else{
                var str     =   id
            }
        }


        layer.prompt({title: '请输入充值点数', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
                if(pass<1){
                    $('.layui-layer-content').append('<br><span style="color: red">最低起充金额1元</span>')
                    return false;
                }
                window.location.href='http://cs.xiao18.top/daili_pay/?id='+id+'&name=代理自助充点&fee='+pass;
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>
</body>
</html>

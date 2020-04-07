<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/cs.xiao18.top/application/index/view/user/pass.html";i:1564032838;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>系统设置</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/lib/layui-v2.5.4/css/layui.css" media="all">
    <link rel="stylesheet" href="/css/public.css" media="all">
    <style>
        .layui-form-item .layui-input-company {width: auto;padding-right: 10px;line-height: 38px;}
    </style>
</head>
<body>
<div class="layuimini-container">
    <div class="layuimini-main">

        <div class="layui-form layuimini-form">
          <form class="layui-form layui-card-body"  method="post" action="<?php echo url('user/pass'); ?>">
          <div class="layui-form-item">
                <label class="layui-form-label required">客服微信</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="客服微信" name="weichat" value="<?php echo $weichat; ?>" class="layui-input">
                    <tip>会显示在属于你用户的APP中。</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">七天链接</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="七天购买链接,请以http://开头" name="url5" value="<?php echo sname(session('usershshefsdf'),'url5'); ?>" class="layui-input">
                    <tip>【管理员无需填写此项，代理此处请填写发卡网链接或填写无数据使用官方支付】</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">一个月链接</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="一个月购买链接,请以http://开头" name="url1" value="<?php echo sname(session('usershshefsdf'),'url1'); ?>" class="layui-input">
                    <tip>【管理员无需填写此项，代理此处请填写发卡网链接或填写无数据使用官方支付】</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">三个月链接</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="三个月购买链接,请以http://开头" name="url2" value="<?php echo sname(session('usershshefsdf'),'url2'); ?>" class="layui-input">
                    <tip>【管理员无需填写此项，代理此处请填写发卡网链接或填写无数据使用官方支付】</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">六个月链接</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="六个月购买链接,请以http://开头" name="url6" value="<?php echo sname(session('usershshefsdf'),'url6'); ?>" class="layui-input">
                    <tip>【管理员无需填写此项，代理此处请填写发卡网链接或填写无数据使用官方支付】</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">一年链接</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="一个月购买链接,请以http://开头" name="url3" value="<?php echo sname(session('usershshefsdf'),'url3'); ?>" class="layui-input">
                    <tip>【管理员无需填写此项，代理此处请填写发卡网链接或填写无数据使用官方支付】</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">永久链接</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" placeholder="永久月购买链接,请以http://开头" name="url4" value="<?php echo sname(session('usershshefsdf'),'url4'); ?>" class="layui-input">
                    <tip>【管理员无需填写此项，代理此处请填写发卡网链接或填写无数据使用官方支付】</tip>
                </div>
            </div>
            
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">确认保存</button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>

<script src="/lib/layui-v2.5.4/layui.js" charset="utf-8"></script>
<script>
    var form = layui.form
        ,layer = layui.layer;
    <?php
        if(@$code=='2'){
            echo "layer.msg('糟糕 !修改失败', {icon: 5});";
        }else if(@$code=='1'){
        echo "layer.msg('恭喜 !修改成功', {icon: 6});";
    }
 ?>

</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/www/wwwroot/cs.xiao18.top/application/index/view/vip/dxjk.html";i:1563550002;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>短信接口</title>
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
          <form role="form" id="form1" method="post" action="<?php echo url('vip/dxjk'); ?>" class="validate">
            <div class="layui-form-item">
                <label class="layui-form-label required">短信接口appKEY</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required"  class="layui-input" value="<?php echo advert('2'); ?>" name="dxkey" >
                    <tip>填写自己部署网站的名称。</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">短信接口模板ID</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" class="layui-input" value="<?php echo advert('3'); ?>" name="mbid" >
                </div>
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button type="submit"  class="layui-btn" >确认保存</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="/lib/layui-v2.5.4/layui.js" charset="utf-8"></script>
<script>
  if($data=='1'){
  layer.msg('修改成功');
  }
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/cs.xiao18.top/application/index/view/vip/advert.html";i:1563617886;}*/ ?>
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
<body data-type="index">
<div class="layuimini-container">
    <div class="layuimini-main">

        <div class="layui-form layuimini-form">
          <form role="form" id="form1" method="post" action="<?php echo url('vip/advert'); ?>" class="validate">
            
            <div class="layui-form-item">
                <label class="layui-form-label required">APP名称</label>
                <div class="layui-input-block">
                    <input type="text" lay-verify="required" lay-reqtext="APP名称不能为空" placeholder="请输入APP名称" value="<?php echo advert('20'); ?>" name="zad1" class="layui-input">
                    <tip>填写自己部署网站的名称。</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">资源站网址</label>
                <div class="layui-input-block">
                    <input type="text"  lay-verify="required" lay-reqtext="网站域名不能为空" placeholder="请输入网站域名"  value="<?php echo advert('4'); ?>" name="sourl"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">APP下载URL</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('30'); ?>" name="downurl"  class="layui-input">
                </div>
            </div>
          
          
          
            <div class="layui-form-item">
                <label class="layui-form-label">试用时间</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input type="text"  lay-verify="number" value="<?php echo advert('5'); ?>" name="time" class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">分钟</div>
                <div class="layui-form-mid layui-word-aux">新用户注册赠送的时间。</div>
            </div>
            
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label required">APP首页公告</label>
                <div class="layui-input-block">
                    <textarea name="advert1" class="layui-textarea"><?php echo advert('7'); ?></textarea>
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">大厅公告</label>
                <div class="layui-input-block">
                    <textarea name="ban"  class="layui-textarea"><?php echo advert('6'); ?></textarea>
                </div>
            </div>
          <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">APP代理专区公告</label>
                <div class="layui-input-block">
                    <textarea name="advert3"  class="layui-textarea"><?php echo advert('21'); ?></textarea>
                </div>
            </div>
          <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">代理公告</label>
                <div class="layui-input-block">
                    <textarea name="advert" c class="layui-textarea" ><?php echo advert('1'); ?></textarea>
                </div>
            </div>
          
          <div class="layui-form-item">
                <label class="layui-form-label">m3u8解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('8'); ?>" name="geng"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">腾讯解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('9'); ?>" name="geng2"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">爱奇艺解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('10'); ?>" name="geng3"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">优酷解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('11'); ?>" name="geng4"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">芒果解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('12'); ?>" name="geng5"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">搜狐解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('13'); ?>" name="geng6"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">乐视解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('14'); ?>" name="geng7"  class="layui-input">
                </div>
            </div>
          <div class="layui-form-item">
                <label class="layui-form-label">PPTV解析地址</label>
                <div class="layui-input-block">
                    <input type="text"  value="<?php echo advert('15'); ?>" name="geng8"  class="layui-input">
                </div>
            </div>
            
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button type="submit" class="layui-btn">确认保存</button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
  
<?php echo $code=='1'?'<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 修改成功.
    </div>
</div>

':''; ?>
<script>
    setTimeout("$('#alert').fadeOut(1000)",2000)
</script>
  
<script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>
  <script src="/public/static/amz/js/echarts.min.js"></script>
    <script src="/public/static/assets1/layui.all.js"></script>

</body>
</html>
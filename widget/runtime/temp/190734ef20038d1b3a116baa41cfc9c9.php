<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/www/wwwroot/cs.xiao18.top/application/index/view/index/setTpay.html";i:1549700706;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/public/static/assets1/css/layui.css">
    <link rel="stylesheet" href="/public/static/assets1/css/view.css"/>
    <title></title>
</head>
<style>
    .layui-form-label {
        width: 70px !important;
    }
    .layui-input-block {
        margin-left: 100px !important;

    }
</style>
<body class="layui-view-body">
<div class="layui-content">
    <div class="layui-row">
        <div class="layui-card">

            <form class="layui-form layui-card-body"  method="post" action="<?php echo url('index/setTpay'); ?>">

		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<div class="layui-form-item">
                    <label class="layui-form-label"><?php echo $vo['name']; ?></label>
                    <div class="layui-input-block">
                        <input type="text" name="setValue[<?php echo $vo['id']; ?>]"  required  lay-verify="required" placeholder="<?php echo $vo['name']; ?>" autocomplete="off" class="layui-input" value="<?php echo $vo['money']; ?>">
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>
                </div>
			       
		<?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/public/static/assets1/layui.all.js"></script>

<script>
    var form = layui.form
        ,layer = layui.layer;
    <?php
        if(@$code=='2'){
            echo "layer.msg('糟糕 !修改失败', {icon: 5});";
        }elseif(@$code=='1'){
        echo "layer.msg('恭喜 !修改成功', {icon: 6});";
    }
 ?>

</script>
</body>
</html>
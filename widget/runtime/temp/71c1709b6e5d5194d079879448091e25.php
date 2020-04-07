<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/cs.xiao18.top/application/index/view/yhtx/index.html";i:1559899580;}*/ ?>
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

    <link rel="stylesheet" href="/public/static/assets1/css/layui.css">
    <link rel="stylesheet" href="/public/static/assets1/css/view.css"/>
    <script src="/public/static/assets1/layui.all.js"></script>
    <!--old  上-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">

</head>

<body data-type="index">

<!-- Responsive Table -->
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">

                <div class="panel-options">


                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>

                    <a href="#" data-toggle="reload">
                        <i class="fa-rotate-right"></i>
                    </a>

                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <div class="btn-toolbar">
                          <div class="btn-group dropdown-btn-group pull-right">
                             <?php if(session('power')=='0'){?>
                             <a href="javascript:;" onclick="yhtx('0','')" class=btn-single">
                               <button class="btn btn-blue" ><i class="el-star-empty"></i>批量支付
                                </button>
                                 </a>
                                <?php }?>
                          </div>
                     </div>
  <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                        <thead>
                        <tr>
                            <?php if(session('power')=='0'){?>
                            <th style="width: 50px"><input id="checkall" name="checkall" value="全选" type="checkbox" ></th>
                            <th style="width: 50px">ID</th>
                               <th>来源@昵称</th>                        
                            <?php }?>
                          <th>账户</th>
                       <?php if(session('power')=='0'){?>
                       <th style="width: 120px">收款码</th>  
                                                <?php }?>
                           <th>提现金额</th>
                           <th>创建时间</th>
                             <th>支付</th>
                             <th>归属人</th>
                            <th>登陆次数</th>
                              <th>剩余金币</th>
                               <th>账户余额</th>                  
                              <th style="width: 150px">操作</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                      <tr>
      <?php if(session('power')=='0'){?>
       <th style="width: 50px">
        <input name="checkname" value="<?php echo $vo['id']; ?>" type="checkbox" >
           </th>
          <th style="width: 50px"><?php echo $vo['id']; ?></th>
        <th style="width: 50px"><?php echo $vo['Source']; ?></th>  
           <?php }?>
           <td><?php echo $vo['username']; ?></td>
      <td><img style="width: 120px; height: 150px" src="<?php echo $vo['zfb']; ?>"></td>                       
          <td><font size=5 color="red"><?php echo $vo['txje']; ?></font></td>
           <td><?php echo date("Y-m-d H:i:s",$vo['ctime']); ?></td>
           <?php if(session('power')=='0'){?>
       <td><button class="btn btn-gray" onclick="yhtx('<?php echo $vo['tx']=='1'?'0':'1'; ?>','<?php echo $vo['id']; ?>','<?php echo $vo['nick_name']; ?>','<?php echo $vo['txje']; ?>','<?php echo $vo['zfb']; ?>','<?php echo $vo['weichat']; ?>')"><?php echo $vo['tx']==='1'?'<span style="color: red"> 拒绝支付</span>':'<span style="color: green"> 确定支付</span>'; ?></button></td>
       	<?php }?>
         &nbsp;
                      
         <td><?php echo $vo['parentid']=='0'?'暂无归属':gui($vo['parentid']) ?></td>
         <td><?php echo $vo['count']; ?></td>
           <td><?php echo $vo['sign']; ?></td>
        <td><?php echo $vo['money']; ?></td>    
          
         <td>
          <?php if($vo['parentid']==session('usershshefsdf') || session('power')=='0'){?>  &nbsp;
           <a href="<?php echo url('vip/update',['id'=>$vo['id']]); ?>" title="修改"> <i class="el-edit"></i></a>
          <?php }if(session('power')=='0'){?>  &nbsp;
         <a href="javascript:;" onclick="del('<?php echo $vo['id']; ?>')" title="封号删除" class=btn-single"><i class="el-trash-circled"></i></a>
         &nbsp;      &nbsp;
                                                     
      <?php }?>
        </td>
          </tr>
     <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
</div>
                    <?php echo $list->render(); ?>

                </div>

            </div>


        </div>

    </div>


</div>

<script>
    function yhtx(tx,id,nick_name,txje,zfb,weichat){

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
						var nikname =   nick_name
						var txjex   =   txje
						var zfb     =   zfb
						var weixin  =   weichat
        }
        layer.confirm('您是否审核通过这些数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/yhtx"); ?>',
                'data'  :   {
                    'id'    :   str,
                    'tx'    :   tx,
								'nickname'  :   nikname,
								   'txje'   :   txjex,
								   'zfb'    :   zfb,
									'weixin'  :   weixin
								},
                'dataType'  :   'json',
                'success'   :   function (msg)
                {
                    window.location.reload();
                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>


<script>
    function omoney(status,id){
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


        layer.prompt({title: '请输入扣款金额', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/omoney"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   1
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='1')
                        {

                            window.location.reload();
                        }else{
                            layer.closeAll();
                            $('#del').php('<div class="col-md-6" id="alert">' +
                                '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                                ' <button type="button" class="close" data-dismiss="alert">' +
                                '<span aria-hidden="true">×</span>' +
                                '<span class="sr-only">Close</span>' +
                                '</button>' +
                                '<strong> 糟糕 !</strong> '+msg.msg+
                                '' +
                                '</div>' +
                                '</div>');
                            setTimeout("yalert()", 2000)
                        }

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>



<script>
    $("input[name='checkall']").click(function(){
//判断当前点击的复选框处于什么状态$(this).is(":checked") 返回的是布尔类型
        if($(this).is(":checked")){
            $("input[name='checkname']").prop("checked",true);
        }else{
            $("input[name='checkname']").prop("checked",false);
        }
    });
</script>
<?php echo $code==1?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 添加成功.
    </div>
</div>

':''; ?>


<?php echo $code==2?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 修改成功.
    </div>
</div>

':''; ?>
<?php echo $code==3?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 删除成功.
    </div>
</div>

':''; if(session('power')=='0'){?>
<script>
    function del(id){
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
        layer.confirm('您是否删除该数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/delete"); ?>',
                'data'  :   {
                    'id'    :   str
                },
                'dataType'  :   'json',
                'success'   :   function (msg)
                {
                    if(msg.code=='1')
                    {
                        window.location.reload();
                    }else{
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 删除失败'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                    }


                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>


<script>
    function status(status,id){

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


        layer.confirm('您是否审核通过这些数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/status"); ?>',
                'data'  :   {
                    'id'    :   str,
                    'status':   status
                },
                'dataType'  :   'json',
                'success'   :   function (msg)
                {

                    window.location.reload();



                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>



<?php }if(session('power')=='0'){?>
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
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/money"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   2
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='0')
                        {

                            layer.closeAll();
                            $('#del').php('<div class="col-md-6" id="alert">' +
                                '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                                ' <button type="button" class="close" data-dismiss="alert">' +
                                '<span aria-hidden="true">×</span>' +
                                '<span class="sr-only">Close</span>' +
                                '</button>' +
                                '<strong> 糟糕 !</strong> '+ msg.msg+
                                '.请刷新后重试' +
                                '</div>' +
                                '</div>');
                            setTimeout("yalert()", 2000)
                        }else{
                            window.location.reload();

                        }
                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)

                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>

<?php }?>

<script>
    function ctime(){

        layer.prompt({title: '请输入补充天数', formType: 5}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/ctime"); ?>',
                    'data'  :   {
                        'day'   :   pass,
                        'type'  :   2
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        window.location.reload();

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>
<script>
    function btime(id) {
        if(id=='') {
            var str = "";
            $("input:checkbox[name='checkname']:checked").each(function () {
                str += $(this).val() + "-";
            });

            if (str == '') {
                return false
            }
        }else{
            var str     =   id
        }
		var windowWidth = $('body').width();
		console.log(windowWidth);
		if(windowWidth > 1136){
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['500px', '300px'], //宽高
				content: '<div class="form-group" style="left:0px">' +
				' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
				'<select id="ctime" class="form-control">' +

				' <option value="0.5"}>七天0.5点</option>' +
				' <option value="1"}>一个月1点</option>' +
				' <option value="2"}>三个月2点</option>' +
				' <option value="8"}>一年8点</option>' +
				' <option value="10"}>永久10点</option>' +
				' </select>' +
				' </div>' +
				'<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'
			});
		}else{
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['80%', '300px'], //宽高
				content: '<div class="form-group" style="left:0px">' +
				' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
				'<select id="ctime" class="form-control">' +

				' <option value="0.5"}>七天0.5点</option>' +
				' <option value="1"}>一个月1点</option>' +
				' <option value="2"}>三个月2点</option>' +
				' <option value="8"}>一年8点</option>' +
				' <option value="10"}>永久10点</option>' +
				' </select>' +
				' </div>' +
				'<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'
			});
		}
        
    }

</script>
<script>
    function pay(id)
    {
        var ctime   =   $('#ctime').val();


        $.ajax({
            'type'  :   'post',
            'url'   :   '<?php echo url("user/chong"); ?>',
            'data'  :   {
                'ctime'  :   ctime,
                'id'    :   id
            },
            'dataType'  :   'json',
            'success'   :   function (msg)
            {
                if(msg.code=='0')
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong>' + msg.msg+
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)

                }else if(msg.code=='1'){

                    window.location.reload();
                }

                layer.closeAll();
                setTimeout("$('#alert').fadeOut(1000)", 2000)
            },
            'error'     :   function (err)
            {
                layer.closeAll();
                $('#del').php('<div class="col-md-6" id="alert">' +
                    '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                    ' <button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<strong> 糟糕 !</strong> 服务器错误'+
                    '.请刷新后重试' +
                    '</div>' +
                    '</div>');
                setTimeout("yalert()", 2000)
            }
        })



    }

    function ptime() {

        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['80%', '300px'], //宽高
            content: '<div class="form-group style="left:0px"">' +
            ' <label class="control-label">&nbsp;&nbsp;&nbsp;数量</label>' +
            '<input type="number" id="num" class="form-control" name="num"   placeholder="自动生成数量" />' +
            '<br>' +
            ' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
            '<select id="ctime" class="form-control">' +

            ' <option value="0.5"}>七天0.5点</option>' +
            ' <option value="1"}>一个月1点</option>' +
            ' <option value="2"}>三个月2点</option>' +
            ' <option value="8"}>一年8点</option>' +
            ' <option value="10"}>永久10点</option>' +
            ' </select>' +
            ' </div>' +
            '<button class="btn btn-default" onclick="pays()" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'
        });
    }

</script>
<script>
    function pays(id)
    {
        var ctime   =   $('#ctime').val();
        var num   =   $('#num').val();
        if(num=='')
        {
            return false;
        }
        $.ajax({
            'type'  :   'post',
            'url'   :   '<?php echo url("vip/padd"); ?>',
            'data'  :   {

                'ctime'  :   ctime,
                'num'    :   num
            },
            'dataType'  :   'json',
            'success'   :   function (msg)
            {
                if(msg.code=='0')
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong>' + msg.msg+
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)


                }else if(msg.code=='1'){
                    layer.closeAll();

                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['500px', '300px'], //宽高
                        content: '<div class="form-group">' +
                        '<p style="margin-left: 20px;color: red">恭喜！批量注册成功！</p>' +
                        msg.msg+
                        '<button class="btn btn-default" onclick="kill()" style="float: right;margin-right: 20px;background-color: #68b828"> 确定</button></div>'
                    });

                }


                setTimeout("$('#alert').fadeOut(1000)", 2000)
            },
            'error'     :   function (err)
            {
                layer.closeAll();
                $('#del').php('<div class="col-md-6" id="alert">' +
                    '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                    ' <button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<strong> 糟糕 !</strong> 服务器错误'+
                    '.请刷新后重试' +
                    '</div>' +
                    '</div>');
                setTimeout("yalert()", 2000)
            }
        })



    }
</script>
<script>

    function kill()
    {
        layer.closeAll();
    }
    setTimeout("$('#alert').fadeOut(1000)", 2000)
</script>
<div id="del">

</div>
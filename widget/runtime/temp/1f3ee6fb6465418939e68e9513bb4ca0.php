<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/cs.xiao18.top/application/index/view/dianka/ylog.html";i:1550133470;}*/ ?>
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
<style>
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
        background-color: #1E9FFF !important;
        border-color: #1E9FFF !important;
    }
</style>

<body data-type="index">

<div class="tpl-page-container">


<!-- Responsive Table -->
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
             
               <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 有效激活码
                    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo url('/'); ?>"><i class="fa-home"></i>Home</a>
            </li>


        </ol>

    </div>

</div>
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
                <div style="text-align: center">
                    <form class="validate" method="get" action="<?php echo url('dianka/ylog'); ?>">

                        创建时间 <br><input class="form-control"  type="date" name="start" id="start" value="<?php echo $start; ?>" >-<input type="date" id="end" name="end" value="<?php echo $end; ?>" class="form-control" >
                        <input class="form-control" placeholder="&nbsp;点卡" type="text" id="user" value="<?php echo $user; ?>" name="user" style="height: 38px">
                        <select name="day" id="day" class="form-control">
                            <option value=""}>所有</option>
                            <option <?php echo $day=='七天'?'selected':''; ?> value="七天"}>七天</option>
                            <option <?php echo $day=='一个月'?'selected':''; ?> value="一个月"}>一个月</option>
                            <option <?php echo $day=='三个月'?'selected':''; ?> value="三个月"}>三个月</option>
							<option <?php echo $day=='六个月'?'selected':''; ?> value="六个月"}>六个月</option>
                            <option <?php echo $day=='一年'?'selected':''; ?> value="一年"}>一年</option>
                            <option <?php echo $day=='永久'?'selected':''; ?> value="永久"}>永久</option>

                        </select>
                        <button type="submit" class="btn btn-turquoise" style="height: 38px;margin-top: 7px;">搜索</button>
                        <button type="button" onclick="txt()" class="btn btn-turquoise" style="height: 38px;margin-top: 7px;">txt导出</button>
                        <button type="button" onclick="excel()" class="btn btn-turquoise" style="height: 38px;margin-top: 7px;">excel导出</button>
                        
                    </form>
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
                'url'   :   '<?php echo url("dianka/delete"); ?>',
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
</script>
					  <a href="javascript:;" onclick="del('')" class=btn-single">
                            <button class="btn btn-danger" ><i class="el-cancel-circled2"></i>批量删除
                                </button>
                            </a>

                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">


                    <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                         data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                        <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                            <thead>
                            <tr>
                             
                                <th style="width: 50px"><input id="checkall" name="checkall" value="全选" type="checkbox" ></th>
                                <th style="width: 50px">编号</th>
                                <th style="text-align:center;">卡号</th>
                                <th style="text-align:center;">充值时间</th>                                                           
                                <th style="text-align:center;">生成人</th>
                                <th style="text-align:center;">创建时间</th>
                                <th style="text-align:center;">删除卡密</th>




                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
							<th style="width: 50px">
                               <input name="checkname" value="<?php echo $vo['id']; ?>" type="checkbox" >
                            </th>
							<th style="width: 50px"><?php echo $vo['id']; ?></th>
                               <!-- <td><?php echo $vo['id']; ?></td>-->
                                <td><?php echo $vo['dianka']; ?></td>
                                <td><?php echo $vo['name']; ?></td>
                                <td><?php echo _name($vo['uid']); ?></td>
                                <td><?php echo date('Y-m-d H:i:s',$vo['ctime'])?></td>
								<td><a href="<?php echo url('dianka/del',['id'=>$vo['id']]); ?>" title="删除" class=btn-single"><i class="el-trash-circled"style="font-size: 18px;color:#cc3f44"></i></a></th></td>
                               </th>
                                   
                            </tr>

                            </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    
                    <?php echo $list->render(); ?>
					

                </div>

            </div>


        </div>

    </div>


</div>
<script>
      $("input[name='checkall']").click(function(){
//判断当前点击的复选框处于什么状态$(this).is(":checked") 返回的是布尔类型
        if($(this).is(":checked")){
            $("input[name='checkname']").prop("checked",true);
        }else{
            $("input[name='checkname']").prop("checked",false);
        }
    });
 
    function txt() {
        var user    = $('#user').val();
        var start    = $('#start').val();
        var end    = $('#end').val();
        var day    = $('#day').val();
        window.open('/index/dao/ctxt.html?user='+user+'&start='+start+'&end='+end+'&day='+day);
    }

    function excel() {
        var user    = $('#user').val();
        var start    = $('#start').val();
        var end    = $('#end').val();
        var day    = $('#day').val();
        window.open('/index/dao/cexcel.html?user='+user+'&start='+start+'&end='+end+'&day='+day);
    }

</script>
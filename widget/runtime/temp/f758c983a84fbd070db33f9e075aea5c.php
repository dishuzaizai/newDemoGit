<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/cs.xiao18.top/application/index/view/user/index.html";i:1559899580;}*/ ?>
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
                                        <span class="am-icon-code"></span> 代理管理
                              </div>
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

                    <div style="text-align: center">
						<form class="validate" method="get" action="<?php echo url('user/index'); ?>">
                        到期时间: <input class="form-control" type="date" name="start" >&nbsp;-&nbsp;<input class="form-control" type="date" name="end" >&nbsp;&nbsp;&nbsp;&nbsp;
                        <hr>
                        <textarea class="form-control" placeholder="&nbsp账户/昵称 关键词" type="text" name="key" style="height: 38px"></textarea>
                        <button type="submit" class="btn btn-turquoise" style="height: 38px;margin-top: 7px;">搜索</button>
                            <input type="hidden" name="parentid" value="<?php echo $parentid; ?>">
                    </form>
                    </div>

                    <div class="btn-toolbar">
                        <br>

                        <div class="btn-group focus-btn-group">
                            <a href="<?php echo url('user/add'); ?>">
                                <button class="btn btn-default"><i class="el-pencil"></i> 添加</button>
                            </a>
                        </div>
                        <?php if(session('power')=='0'){?>
                        <div class="btn-group dropdown-btn-group pull-right">
                            <a href="javascript:;" onclick="del('')" class=btn-single">
                                <button class="btn btn-danger" ><i class="el-cancel-circled2"></i> 批量删除
                                </button>
                            </a>
                            <a href="javascript:;" onclick="status('1','')" class=btn-single">
                                <button class="btn btn-blue" ><i class="el-star"></i> 批量解封
                                </button>
                            </a>
                            <a href="javascript:;" onclick="status('0','')" class=btn-single">
                                <button class="btn btn-blue" ><i class="el-star-empty"></i> 批量封号
                                </button>
                            </a>
                            <!--<a href="javascript:;" onclick="btime('')" class=btn-single">-->
                                <!--<button class="btn btn-warning" ><i class="el-clock"></i> 批量充值时间-->
                                <!--</button>-->
                            <!--</a>-->
                            <a href="javascript:;" onclick="ctime()" class=btn-single">
                                <button class="btn btn-warning" ><i class="el-clock-circled"></i> 时间补偿
                                </button>
                            </a>
                            <a href="javascript:;" onclick="money('0','')" class=btn-single">
                                <button class="btn btn-red" ><i class="el-basket-circled"></i> 批量充值
                                </button>
                            </a>
                            <!--<a href="javascript:;" onclick="money('1','')" class=btn-single">-->
                                <!--<button class="btn btn-red" ><i class="el-basket"></i> 全部充值-->
                                <!--</button>-->
                            <!--</a>-->
                        </div>
                    </div>

                    <?php }?>

                    <form action="<?php echo url('user/uadd'); ?>" method="post">
                        <div style="width: 600px;height: 250px;background:whitesmoke;position: fixed;z-index: 999999;left: 35%;top: 30%;border: solid 1px #d1d1d1;border-radius: 5px;display: none" class="box">
                            <div style="width: 50px;height: 50px;float: right;margin-top: 10px;" class="guanb">关闭</div>

                            <div  class="cate_list" style="margin-top: 30px;margin-left: 20px;">


                            </div>


                        </div>

                    </form>



			  <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                        <thead>
                        <tr>
                      
                            <th style="width: 50px"><input id="checkall" name="checkall" value="全选" type="checkbox" ></th>

                            <th style="width: 50px">ID</th>
                            <th>来源@昵称</th>                          
                       
                            <th>账户</th>
                      
                            <th>封号</th>
                    
                            <th>联系方式</th>
                          <!--  <th>广告权限</th>-->
                       <?php if(session('power')=='0'){?>
                          	<th>权限开关</th>
                            <th>广告类目</th>
                           <?php }?>
                            <th>创建时间</th>
                            <th>最后登陆时间</th>
                            <th>会员到期时间</th>
                            <th>账户余额</th>
                            <th>归属人</th>                          
                            <th>登录次数</th>
                            <th>剩余金币</th>

                        
                            <th style="width: 150px">代理数量</th>
                            <th style="width: 150px">用户数量</th>
                
                            <th style="width: 150px">操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                        
                            <th style="width: 50px">
                               <input name="checkname" value="<?php echo $vo['id']; ?>" type="checkbox" >
                            </th>
                            <th style="width: 50px"><?php echo $vo['id']; ?></th>
                            <th style="width: 50px"><?php echo $vo['Source']; ?></th>                                
               
                            <td><?php echo $vo['username']; ?></td>
                        
                            <td><button class="btn btn-gray" onclick="status('<?php echo $vo['status']=='1'?'0':'1'; ?>','<?php echo $vo['id']; ?>')"><?php echo $vo['status']==='1'?'<span style="color: green"> 封&nbsp;&nbsp;&nbsp;&nbsp;号</span>':'<span style="color: red"> 解封</span>'; ?></button></td>
                
                            <td><?php echo $vo['phone']; ?></td>
                          <!--<td><?php if($vo['add_switch'] == 0): ?><span onclick="add_status(1,<?php echo $vo['id']; ?>)" class="btn btn-success" > 开启</span><?php endif; if($vo['add_switch'] == 1): ?><span class="btn btn-danger"  onclick="add_status(0,<?php echo $vo['id']; ?>)"> 关闭</span><?php endif; ?></td>-->
                            <?php if(session('power')=='0'){?>
                          	<td><?php if($vo['qx'] == 1 ){ ?>
                              <a href="<?php echo url('ggqx'); ?>?type=0&id=<?php echo $vo['id']; ?>" class="btn btn-gray">已开启权限</button>
                              <?php }else{ ?>
                              <a href="<?php echo url('ggqx'); ?>?type=1&id=<?php echo $vo['id']; ?>" class="btn btn-gray">已关闭权限</button>
                              <?php }?>
                          	</td>
                          <td>
                                <span class="btn btn-success" id="cate" onclick="cate('<?php echo $vo['id']; ?>')">点击选择</span>
                            </td>
                             <?php }?>

                            <td><?php echo date("Y-m-d H:i:s",$vo['ctime']); ?></td>
                            <td>

                                <?php
                                    if($vo['logintime']=='0')
                                    {
                                        echo '未登陆';
                                    }else{
                                        echo date('Y-m-d H:i:s',$vo['logintime']);
                                    }
                                ?>


                            </td>


                            <td><button onclick="btime('<?php echo $vo['id']; ?>')" class="btn btn-gray">
                                <?php
                                if($vo['type']=='1')
                                {
                                    echo '永久';
                                }else{
                                 if($vo['lasttime']=='0')
                                    {
                                        echo '未充值';
                                    }elseif($vo['lasttime']<time()){
                                        echo '<span style="color:red">'.date('Y-m-d H:i:s',$vo['lasttime']).'</span>';
                                }else{
                                echo date('Y-m-d H:i:s',$vo['lasttime']);
                                }
                                }

                                ?></button></td>
                        &nbsp;
                            <td><button onclick="money('','<?php echo $vo['id']; ?>')" class="btn btn-gray"><?php echo $vo['money']; ?></button></td>
                            <td><?php echo $vo['parentid']=='0'?'暂无归属':gui($vo['parentid']) ?></td>
                            <td><?php echo $vo['count']; ?></td>
   <td><?php echo $vo['sign']; ?></td>
                         
                            <td>
                                <a target="_Blank" href="/index/user/index/parentid/<?php echo $vo['id']; ?>"> <?php echo getusercount($vo['id']); ?></a>
                            </td>
                            <td>
                                <a target="_Blank" href="/index/vip/index/parentid/<?php echo $vo['id']; ?>"><?php echo getvipcount($vo['id']); ?></a>
                            </td>
                            <td>
                                 <?php if(session('power')=='0'){?>  &nbsp;
                                <a href="<?php echo url('user/update',['id'=>$vo['id']]); ?>" title="修改"> <i class="el-edit"></i></a>
                                <?php }if(session('power')=='0'){?>  &nbsp;
                                <a href="javascript:;" onclick="del('<?php echo $vo['id']; ?>')" title="删除" class=btn-single"><i class="el-trash-circled"></i></a>
                                      <?php }if($vo['parentid']==session('usershshefsdf') || session('power')=='0'){?>  &nbsp;
                                <a href="<?php echo url('user/log',['id'=>$vo['id']]); ?>" title="充值日志" class=btn-single">  <i class="el-list"></i></i></a>
                          <?php }if(session('power')=='0'){?>  &nbsp;
                                <a onclick="omoney('','<?php echo $vo['id']; ?>')" title="扣款"  class=btn-single"> <i class="el-skype"></i></a>
                                          <?php }if($vo['parentid']==session('usershshefsdf') || session('power')=='0'){?>  &nbsp;                                                                             
                                <a href="<?php echo url('user/pass_log',['id'=>$vo['id']]); ?>" title="密码修改日志" > <i class="el-edit"></i></a>
<?php }?>
                         

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
  
  
    function cate(e) {

        $('.box').show();


        $('.guanb').click(function () {
            $('.box').hide();
        })

        $.ajax({
            type: "post",
            url: "<?php echo url('user/cate'); ?>",
            data: {id:e},
            dataType: "json",
            success: function(data){
                console.log(data);
                $('.cate_list').empty();
                var html = '<input type="hidden" name="id" value="'+e+'">';
                $.each(data.data, function(commentIndex, comment){

                        html += '<label style="padding: 10px;"><input name="cate[]" type="checkbox" value="'+comment['id']+'">'+comment['cname']+'</label>';
                });

                html+=' <div style="width: 60px;margin: 0 auto"><input type="submit" class="btn btn-success" style="margin: 0 auto"></div>';

                $('.cate_list').html(html);
                $.each(data.arr, function(commentIndex, comment){

                    $('input:checkbox[value='+comment+']').attr('checked','true');
                });


            }
        });
    }
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
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/money"); ?>',
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

<?php if(session('power')=='0'){?>
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



<?php echo $code=='err4'?'
<div class="col-md-6">
    <div class="alert alert-danger" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong> 糟糕 !</strong> 推荐码已存在
        .请重新添加
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

':''; ?>
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
<?php }?>

<script>
  function add_status(status,id){

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


        layer.confirm('您确定修改用户权限吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/add_status"); ?>',
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



<?php if(session('power')=='0'){?>

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
    function ctime(){

        layer.prompt({title: '请输入补充天数', formType: 5}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/ctime"); ?>',
                    'data'  :   {
                        'day'   :   pass,
                        'type'  :   1
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

<?php }?>


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

        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['500px', '300px'], //宽高
            content: '<div class="form-group">' +
            ' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
            
            '<select id="ctime" class="form-control">' +
            <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): $i = 0; $__LIST__ = $pay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				'<option value=<?php echo $vo["id"]; ?> > <?php echo $vo["name"]; ?> <?php echo $vo["money"]; ?> </option>' + 
			<?php endforeach; endif; else: echo "" ;endif; ?>
            ' </select>' +
            ' </div>' +
            '<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'
        });
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
                'money'  :   '',
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
</script>
<script>
    setTimeout("$('#alert').fadeOut(1000)", 2000)
</script>
<div id="del">

</div>
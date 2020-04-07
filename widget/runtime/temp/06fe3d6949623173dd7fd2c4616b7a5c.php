<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/cs.xiao18.top/application/index/view/index/index.html";i:1585160048;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/lib/layui-v2.5.4/css/layui.css" media="all">
    <link rel="stylesheet" href="/lib/font-awesome-4.7.0/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="/css/public.css" media="all">
</head>
<style>
    .layui-top-box {padding:40px 20px 20px 20px;color:#fff}
    .panel {margin-bottom:17px;background-color:#fff;border:1px solid transparent;border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}
    .panel-body {padding:15px}
    .panel-title {margin-top:0;margin-bottom:0;font-size:14px;color:inherit}
    .label {display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em;margin-top: .3em;}
    .layui-red {color:red}
    .main_btn > p {height:40px;}
</style>
<body>
<div class="layuimini-container">
    <div class="layuimini-main layui-top-box">
        <div class="layui-row layui-col-space10">

            <div class="layui-col-md3">
                <div class="col-xs-6 col-md-3">
                    <div class="panel layui-bg-cyan" style="background: linear-gradient(-125deg,#57bdbf,#2f9de2);">
                        <div class="panel-body">
                            <div class="panel-title">
                                <span class="label pull-right layui-bg-blue">实时</span>
                                <h5>用户统计</h5>
                            </div>
                            <div class="panel-content">
                                <h1 class="no-margins"><?php echo $ycount; ?></h1>
                                <div class="stat-percent font-bold text-gray"><i class="fa fa-commenting"></i><?php echo $tzcount; ?></div>
                                <small>今日登录人数</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md3">
                <div class="col-xs-6 col-md-3">
                    <div class="panel layui-bg-blue" style="background: linear-gradient(-125deg,#5EFCE8,#736EFE);">
                        <div class="panel-body">
                            <div class="panel-title">
                                <span class="label pull-right layui-bg-cyan">实时</span>
                                <h5>付费用户</h5>
                            </div>
                            <div class="panel-content">
                                <h1 class="no-margins"><?php echo $fcount; ?></h1>
                                <div class="stat-percent font-bold text-gray">&nbsp; </div>
                                <small> &nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md3">
                <div class="col-xs-6 col-md-3">
                    <div class="panel layui-bg-green" style="background: linear-gradient(-125deg,#FFF6B7,#F6416C);">
                        <div class="panel-body">
                            <div class="panel-title">
                                <span class="label pull-right layui-bg-orange">实时</span>
                                <h5>免费用户</h5>
                            </div>
                            <div class="panel-content">
                                <h1 class="no-margins"><?php echo $mcount; ?></h1>
                                <div class="stat-percent font-bold text-gray">&nbsp;</div>
                                <small>&nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3">
                <div class="col-xs-6 col-md-3">
                    <div class="panel layui-bg-orange" style="background: linear-gradient(-125deg,#81FFEF,#F067B4);">
                        <div class="panel-body">
                            <div class="panel-title">
                                <span class="label pull-right layui-bg-green">实时</span>
                                <h5>代理数</h5>
                            </div>
                            <div class="panel-content">
                                <h1 class="no-margins"><?php echo $dcount; ?></h1>
                                <div class="stat-percent font-bold text-gray">&nbsp;</div>
                                <small>&nbsp;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
  
<div class="layui-col-md8">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md6">
                        <div class="layui-card">
                    <div class="layui-card-header"><i class="fa fa-bullhorn icon icon-tip"></i>系统公告</div>
                    <div class="layui-card-body layui-text">
                      <div class="layuimini-notice">
                            <div class="layuimini-notice-title">南风更新美化界面</div>
                            <div class="layuimini-notice-extra">2020-03-26 01:06</div>
                            <div class="layuimini-notice-content layui-hide">
                                全新源码<br>
                                同步全网更新最新源码对接苹果CMS系统，使您观影更加流畅<br>
                            </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                           http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes
                            </div>
                        </div>
                      
                        <div class="layuimini-notice">
                            <div class="layuimini-notice-title">对接全新CMS影视系统</div>
                            <div class="layuimini-notice-extra">2020-02-12 23:06</div>
                            <div class="layuimini-notice-content layui-hide">
                                本系统对接独家接口<br>
                                现有苹果cms接口<br>
                                更多接口可以联系作者定制<br>
                                接口获取请联系作者QQ<br>
                            </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                            "http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"
                            </div>
                        </div>
                        <div class="layuimini-notice">
                            <div class="layuimini-notice-title">新增用户充值接口</div>
                            <div class="layuimini-notice-extra">2020-02-09 12:57</div>
                            <div class="layuimini-notice-content layui-hide">
                                前端新增充值接口<br>
                                用户可以自主充值余额<br>
                                使用余额可以购买商品及会员<br>
                            </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                            "http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"
                            </div>
                        </div>
                        <div class="layuimini-notice">
                            <div class="layuimini-notice-title">全网影视独家全新系统</div>
                            <div class="layuimini-notice-extra">2020-02-05 14:28</div>
                            <div class="layuimini-notice-content layui-hide">
                                全新系统UI<br>
                                区别千月，千寻，等等各版本<br>
                                新系统bug请联系作者<br>
                                作者提供修复等等<br>
                        </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                           "http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"
                          </div>
                        </div>
                        
                        <div class="layuimini-notice">
                            <div class="layuimini-notice-title">新增商城管理系统</div>
                            <div class="layuimini-notice-extra">2020-02-09 12:57</div>
                            <div class="layuimini-notice-content layui-hide">
                                前端新增商城管理系统<br>
                                用户可以自主购买自己想买的商品<br>
                                使用账户余额可以购买商品及会员权限<br>
                            </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                            "http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"
                            </div>
                        </div>
                        <div class="layuimini-notice">
                            <div class="layuimini-notice-title">南风美化千月影视</div>
                            <div class="layuimini-notice-extra">2020-02-06 12:57</div>
                            <div class="layuimini-notice-content layui-hide">
                                美化原版本界面<br>
                                修复后台已有的BUG<br>
                                增肌新功能在这里就不一一展示了<br>
                            </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                            "http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"
                            </div>
                        </div>
                        <div class="layuimini-notice">
                            <div class="layuimini-notice-title">南风网络科技</div>
                            <div class="layuimini-notice-extra">2020-01-02 08:36</div>
                            <div class="layuimini-notice-content layui-hide">
                                美化后台界面<br>
                                增加优化小功能细节<br>
                                对千月开始进行二开美化优化<br>
                            </div>
                          <div class="layuimini-notice-content1" style="display: none!important;">
                            "http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"
                            </div>
                        </div>
                        
                    </div>
                          
                </div>
                    </div>
                    <div class="layui-col-md6">
                      
                       <div class="layui-card">
                    <div class="layui-card-header"><i class="fa fa-fire icon"></i>版本信息</div>
                    <div class="layui-card-body layui-text">
                        <table class="layui-table">
                            <colgroup>
                                <col width="100">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <td>开发商</td>
                                <td>
                                    南风网络科技
                                </td>
                            </tr>
                            <tr>
                                <td>当前版本</td>
                                <td>V9.8</td>
                            </tr>
                            <tr>
                                <td>作者扣扣</td>
                                <td>
                                  39616590
                                  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1339431070:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                              </td>
                            </tr>
                            <tr>
                                <td>问题反馈</td>
                                <td style="padding-bottom: 0;">
                                    <div class="layui-btn-container">
                                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=39616590&site=qq&menu=yes"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="千月对接苹果cms影视交" title="千月对接苹果cms影视交"></a>
                                      
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>最新版本</td>
                                <td style="padding-bottom: 0;">
                                        V10.0
                                </td>
                            </tr>
                              <tr>
                                <td>在线更新</td>
                                <td style="padding-bottom: 0;">
                                    请点击上方联系作者获取最新版本
                                </td>
                            </tr>
                            <tr>
                                <td>版权说明</td>
                                <td style="padding-bottom: 0;">
                                    请勿直接商用,若由于商用引起版权纠纷，一切责任均由使用者承担。
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                    </div>
                </div>
            </div>
      <style>
        .layui-card {border:1px solid #f2f2f2;border-radius:5px;}
        .icon {margin-right:10px;color:#1aa094;}
        .icon-cray {color:#ffb800!important;}
        .icon-blue {color:#1e9fff!important;}
        .icon-tip {color:#ff5722!important;}
        .layuimini-qiuck-module {text-align:center;margin-top: 10px}
        .layuimini-qiuck-module a i {display:inline-block;width:100%;height:60px;line-height:60px;text-align:center;border-radius:2px;font-size:30px;background-color:#F8F8F8;color:#333;transition:all .3s;-webkit-transition:all .3s;}
        .layuimini-qiuck-module a cite {position:relative;top:2px;display:block;color:#666;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;font-size:14px;}
        .welcome-module {width:100%;height:210px;}
        .panel {background-color:#fff;border:1px solid transparent;border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}
        .panel-body {padding:10px}
        .panel-title {margin-top:0;margin-bottom:0;font-size:12px;color:inherit}
        .label {display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em;margin-top: .3em;}
        .layui-red {color:red}
        .main_btn > p {height:40px;}
        .layui-bg-number {background-color:#F8F8F8;}
        .layuimini-notice:hover {background:#f6f6f6;}
        .layuimini-notice {padding:7px 16px;clear:both;font-size:12px !important;cursor:pointer;position:relative;transition:background 0.2s ease-in-out;}
        .layuimini-notice-title,.layuimini-notice-label {
            padding-right: 70px !important;text-overflow:ellipsis!important;overflow:hidden!important;white-space:nowrap!important;}
        .layuimini-notice-title {line-height:28px;font-size:14px;}
        .layuimini-notice-extra {position:absolute;top:50%;margin-top:-8px;right:16px;display:inline-block;height:16px;color:#999;}
    </style>
<script src="/lib/layui-v2.5.4/layui.js" charset="utf-8"></script>
  <script>
    layui.config({
        base: "/js/"
    }).extend({
        "layuimini": "layuimini"
    });
    layui.use(['layer', 'layuimini'], function () {
        var $ = layui.jquery,
            layer = layui.layer;

        /**
         * 查看公告信息
         **/
        $('body').on('click', '.layuimini-notice', function () {
            var title = $(this).children('.layuimini-notice-title').text(),
                noticeTime = $(this).children('.layuimini-notice-extra').text(),
                content = $(this).children('.layuimini-notice-content').html(),
                content1 = $(this).children('.layuimini-notice-content1').html();
            var html = '<div style="padding:15px 20px; text-align:justify; line-height: 22px;border-bottom:1px solid #e2e2e2;background-color: #2f4056;color: #ffffff">\n' +
                '<div style="text-align: center;margin-bottom: 20px;font-weight: bold;border-bottom:1px solid #718fb5;padding-bottom: 5px"><h4 class="text-danger">' + title + '</h4></div>\n' +
                '<div style="font-size: 12px">' + content + '</div>\n' +
                '</div>\n';
            parent.layer.open({
                type: 1,
                title: '系统公告'+'<span style="float: right;right: 1px;font-size: 12px;color: #b1b3b9;margin-top: 1px">'+noticeTime+'</span>',
                area: '300px;',
                shade: 0.8,
                id: 'layuimini-notice',
                btn: ['查看', '取消'],
                btnAlign: 'c',
                moveType: 1,
                content:html,
                success: function (layero) {
                    var btn = layero.find('.layui-layer-btn');
                    btn.find('.layui-layer-btn0').attr({
                        href: content1,
                        target: '_blank'
                    });
                }
            });
        });
        echartsRecords.setOption(optionRecords);
    });
</script>
</body>
</html>
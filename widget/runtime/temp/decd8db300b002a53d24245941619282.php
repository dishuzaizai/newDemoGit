<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/cs.xiao18.top/application/index/view/vip/yyshezi.html";i:1585016910;}*/ ?>
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
          <form role="form" id="form1" method="post" action="<?php echo url('vip/yyshezi'); ?>" class="validate">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
             <div class="layui-form-item">
                <label class="layui-form-label required">运营模式</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['yyms']; ?>"  name="yyms"  class="layui-input">
                    <tip>填写0为免费模式，1为收费模式。</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">注册限制</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['zcxz']; ?>"  name="zcxz"  class="layui-input">
                    <tip>一部手机最多注册几个账号。</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">搜索推荐</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['sotuij']; ?>"  name="sotuij" class="layui-input">
                    <tip>搜索界面推荐影片名，最多6个（用英文,分割）。</tip>
                </div>
            </div>		
            <div class="layui-form-item">
                <label class="layui-form-label">操作安全码</label>
                <div class="layui-input-block">
                    <input value="<?php echo $vo['ydkey']; ?>"  name="ydkey"class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">提现限制</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value="<?php echo $vo['txxz']; ?>"  name="txxz"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">天</div>
                <div class="layui-form-mid layui-word-aux">提现需要会员有效期在多少天以上。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">开通代理的价格</label>
                <div class="layui-input-block">
                    <input  value=<?php echo $vo['daili']; ?>  name="daili" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">体验卡购买价格</label>
                <div class="layui-input-block">
                    <input  value=<?php echo $vo['tiyan']; ?> name="tiyan"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">月卡购买价格</label>
                <div class="layui-input-block">
                    <input  value=<?php echo $vo['yueka']; ?> name="yueka" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">季度卡购买价格</label>
                <div class="layui-input-block">
                    <input  value=<?php echo $vo['jika']; ?> name="jika" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">半年卡购买价格</label>
                <div class="layui-input-block">
                    <input  value=<?php echo $vo['bannian']; ?> name="bannian" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">年卡购买价格</label>
                <div class="layui-input-block">
                    <input  value=<?php echo $vo['nianka']; ?> name="nianka" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">永久卡购买价格</label>
                <div class="layui-input-block">
                    <input value=<?php echo $vo['yongjiu']; ?> name="yongjiu" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">金币兑换现金比率</label>
                <div class="layui-input-inline">
                    <input value=<?php echo $vo['jbmoney']; ?> name="jbmoney" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">100的整倍数</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">金币兑换会员天数比率</label>
                <div class="layui-input-inline">
                    <input value=<?php echo $vo['jbday']; ?>  name="jbday" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">10的整倍数</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">新号注册送钱</label>
                <div class="layui-input-inline">
                    <input value=<?php echo $vo['zcmoney']; ?> name="zcmoney" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">不送填写0即可</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">新号注册送金币</label>
                <div class="layui-input-inline">
                    <input value=<?php echo $vo['zcjb']; ?> name="zcjb" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">不送填写0即可</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">分享注册送金币</label>
                <div class="layui-input-inline">
                    <input value=<?php echo $vo['sharefjb']; ?> name="sharefjb" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">10的整倍数</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">徒弟充值代理</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['fdljb']; ?> name="fdljb"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">一级代理返佣</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['dljba']; ?> name="dljba"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">二级代理返佣</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['dljbb']; ?> name="dljbb"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">三级代理返佣</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['dljbc']; ?> name="dljbc"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">四级代理返佣</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['dljbd']; ?> name="dljbd" class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">五级代理返佣</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['dljbe']; ?> name="dljbe"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
            </div>
            
            <div class="layui-form-item">
                <label class="layui-form-label">充值体验卡</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['ckfa']; ?> name="ckfa"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                <div class="layui-form-mid layui-word-aux">给师傅(上级)返钱。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">充值月卡</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['ckfb']; ?> name="ckfb"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                <div class="layui-form-mid layui-word-aux">给师傅(上级)返钱。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">充值季卡</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['ckfc']; ?> name="ckfc"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                <div class="layui-form-mid layui-word-aux">给师傅(上级)返钱。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">充值半年卡</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['ckfd']; ?> name="ckfd"  class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                <div class="layui-form-mid layui-word-aux">给师傅(上级)返钱。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">充值年卡</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['ckfe']; ?> name="ckfe" class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                <div class="layui-form-mid layui-word-aux">给师傅(上级)返钱。</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">充值永久卡</label>
                <div class="layui-input-inline" style="width: 80px;">
                    <input value=<?php echo $vo['ckff']; ?> name="ckff" class="layui-input">
                </div>
                <div class="layui-input-inline layui-input-company">元</div>
                <div class="layui-form-mid layui-word-aux">给师傅(上级)返钱。</div>
            </div>
			<?php if(is_array($list1) || $list1 instanceof \think\Collection || $list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<font color="#F5611A" size="3"><b>其它设置</b></font>
          <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">APP工作模式</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['app_working_mode']; ?>" name="app_working_mode"  class="layui-input">
					<tip>填写0为代理，1为返佣。</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">APP影视主题</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['vip_movies_theme']; ?>" name="vip_movies_theme"  class="layui-input">
					<tip>填写0-5</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">app_id</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['apicloud_app_id']; ?>" name="apicloud_app_id"  class="layui-input">
					<tip>填写APPapicloud_app_id</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">代理激活码购买地址</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['faka_agent']; ?>" name="faka_agent"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">安卓apk下载地址</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['app_android_apk_down']; ?>" name="app_android_apk_down"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">ios下载地址</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['app_ios_down']; ?>" name="app_ios_down"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">贴图库token</label>
                <div class="layui-input-block">
                   <textarea name="imgapi_Token" placeholder="申请地址:http://www.tietuku.com/" class="layui-textarea"><?php echo $vo['imgapi_Token']; ?></textarea>
                </div>
            </div>				
          <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">图片上传api</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Picture_upload_API']; ?>" name="Picture_upload_API"  class="layui-input">
		
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">腾讯X5</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['tencent_x5']; ?>" name="tencent_x5"  class="layui-input">
		
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">安卓更新版本号</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Android_Updated_version']; ?>" name="Android_Updated_version"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">安卓更新介绍</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Android_Updated_content']; ?>" name="Android_Updated_content"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">ios更新版本号</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Ios_Updated_version']; ?>" name="Ios_Updated_version"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">ios更新介绍</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Ios_Updated_content']; ?>" name="Ios_Updated_content"  class="layui-input">
                </div>
            </div>	
            <div class="layui-form-item">
                <label class="layui-form-label required">安卓更新控制</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Android_Updated_switch']; ?>" name="Android_Updated_switch"  class="layui-input">
					<tip>1为更新</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">ios更新控制</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Ios_Updated_switch']; ?>" name="Ios_Updated_switch"  class="layui-input">
					<tip>1为更新</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">会员过期语音提示</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Vip_Voice_cues']; ?>" name="Vip_Voice_cues"  class="layui-input">
					<tip>1为开</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">快捷登录按钮</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Is_Quick_login']; ?>" name="Is_Quick_login"  class="layui-input">
                </div>
				<tip>1为开</tip>
            </div>	
            <div class="layui-form-item">
                <label class="layui-form-label required">影视VIP区域头部图片</label>
                <div class="layui-input-block">
                   <textarea name="vip_movies_theme_top" placeholder="图片地址" class="layui-textarea"><?php echo $vo['vip_movies_theme_top']; ?></textarea>
                </div>
            </div>	
            <div class="layui-form-item">
                <label class="layui-form-label required">影视VIP区域底部部图片</label>
                <div class="layui-input-block">
                   <textarea name="vip_movies_theme_foot" placeholder="图片地址" class="layui-textarea"><?php echo $vo['vip_movies_theme_foot']; ?></textarea>
                </div>
            </div>	
            <div class="layui-form-item">
                <label class="layui-form-label required">APP分享广告邀请词</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['app_Invitation_slogans']; ?>" name="app_Invitation_slogans"  class="layui-input">
					
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">APP分享海报</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['share_Poster_template']; ?>" name="share_Poster_template"  class="layui-input">
					<tip>直链图片地址</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">APP分享海报2</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['share_Poster_template2']; ?>" name="share_Poster_template2"  class="layui-input">
					<tip>直链图片地址</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">APP分享海报3</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['share_Poster_template3']; ?>" name="share_Poster_template3"  class="layui-input">
					<tip>直链图片地址</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">APP搜索框指定值</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['app_secret_key']; ?>" name="app_secret_key"  class="layui-input">
					<tip>1为开</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">播放器底部展示</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['player_bottom_show']; ?>" name="player_bottom_show"  class="layui-input">
                </div>
				<tip>1为开</tip>
            </div>	
            <div class="layui-form-item" style="display: none;">frame2推荐显示</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['frame_two_show']; ?>" name="frame_two_show"  class="layui-input">
					<tip>0</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">推荐影视数量</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Hot_Video_num']; ?>" name="Hot_Video_num"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">私人影视数量</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Private_Video_num']; ?>" name="Private_Video_num"  class="layui-input">
			
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">专题直播数量</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Special_Live_num']; ?>" name="Special_Live_num"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">TV直播数量</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Tv_Live_num']; ?>" name="Tv_Live_num"  class="layui-input">
			
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">解析播放类型</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Analytical_type']; ?>" name="Analytical_type"  class="layui-input">
					<tip>0</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">本地播放器选择</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Player_selection']; ?>" name="Player_selection"  class="layui-input">
			        <tip>1、2</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">是否强制邀请码</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Mandatory_Invitation_Code']; ?>" name="Mandatory_Invitation_Code"  class="layui-input">
					<tip>0、1</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">邀请码输入框是否显示</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Invitation_Code_Show']; ?>" name="Invitation_Code_Show"  class="layui-input">
			
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">邀请码是否自动识别</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Invitation_Code_Distinguish']; ?>" name="Invitation_Code_Distinguish"  class="layui-input">
					<tip>0、1</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">注册开关</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['register_switch']; ?>" name="register_switch"  class="layui-input">
			        <tip>0、1</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">启动页图片地址</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['launchImageAd']; ?>" name="launchImageAd"  class="layui-input">
					<tip>直链图片地址</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">启动页广告地址</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['launchImageAd_url']; ?>" name="launchImageAd_url"  class="layui-input">
			
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">启动页显示时间</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['launchImageAd_time']; ?>" name="launchImageAd_time"  class="layui-input">
					<tip>毫秒</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">启动页是否允许跳过</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['launchImageAd_skip']; ?>" name="launchImageAd_skip"  class="layui-input">
			        <tip>0、1</tip>
                </div>
            </div>
            <div class="layui-form-item"  style="display: none;">
                <label class="layui-form-label required">特权影视页 返回是否绑定系统返回键</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['System_Return_Key_Binding']; ?>" name="System_Return_Key_Binding"  class="layui-input">
			
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">分类页 影视类型 展示</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Movies_Category_List_Switch']; ?>" name="Movies_Category_List_Switch"  class="layui-input">
					<tip>0、1</tip>
                </div>
            </div>
            <div class="layui-form-item" style="display: none;">
                <label class="layui-form-label required">分类页 写真 伦理 播放权限</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['mn_xz_power']; ?>" name="mn_xz_power"  class="layui-input">
			        <tip>0、1</tip>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">上传头像积分</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['upload_headimg_integral']; ?>" name="upload_headimg_integral"  class="layui-input">
			        
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">设置昵称积分</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['set_nickname_integral']; ?>" name="set_nickname_integral"  class="layui-input">
			       
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">支付宝收款码积分</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['upload_alipay_code_integral']; ?>" name="upload_alipay_code_integral"  class="layui-input">
			       
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">快捷登陆赠送积分</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['wechat_login_code_integral']; ?>" name="wechat_login_code_integral"  class="layui-input">
			       
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">加载动画</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['Load_animation']; ?>" name="Load_animation"  class="layui-input">
                </div>
				<tip>小牛、小猫、M、小可爱、小星星</tip>
            </div>	
<?php endforeach; endif; else: echo "" ;endif; if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>		
            <font color="#F5611A" size="3"><b>支付接口配置</b></font>
            <div class="layui-form-item">
                <label class="layui-form-label required">支付网关</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['apiurl']; ?>" name="apiurl"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">商户ID</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['partner']; ?>" name="partner"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label required">商户key</label>
                <div class="layui-input-block">
                    <input lay-verify="required" value="<?php echo $vo['key']; ?>" name="key"  class="layui-input">
                </div>
            </div>
          <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" type="submit">确认保存</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="/lib/layui-v2.5.4/layui.js" charset="utf-8"></script>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/cs.xiao18.top/application/app/view/index/qudao.html";i:1585150988;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>完美视界 影视VIP全聚合！</title>
    <script>
        !function (e) {
            function t(n) {
                if (i[n]) return i[n].exports;
                var r = i[n] = {exports: {}, id: n, loaded: !1};
                return e[n].call(r.exports, r, r.exports, t), r.loaded = !0, r.exports
            }

            var i = {};
            return t.m = e, t.c = i, t.p = "", t(0)
        }([function (e, t) {
            "use strict";
            Object.defineProperty(t, "__esModule", {value: !0});
            var i = window;
            t["default"] = i.vl = function (e, t) {
                var n = e || 100, r = t || 690, a = i.document, d = navigator.userAgent,
                    o = d.match(/Android[\S\s]+AppleWebkit\/(\d{3})/i), l = d.match(/U3\/((\d+|\.){5,})/i),
                    s = l && parseInt(l[1].split(".").join(""), 10) >= 80, u = a.documentElement, c = 1;
                if (o && o[1] > 534 || s) {
                    u.style.fontSize = n + "px";
                    var p = a.createElement("div");
                    p.setAttribute("style", "width: 1rem;display:none"), u.appendChild(p);
                    var m = i.getComputedStyle(p).width;
                    if (u.removeChild(p), m !== u.style.fontSize) {
                        var v = parseInt(m, 10);
                        c = 100 / v
                    }
                }
                var f = a.querySelector('meta[name="viewport"]');
                f || (f = a.createElement("meta"), f.setAttribute("name", "viewport"), a.head.appendChild(f)), f.setAttribute("content", "width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1");
                var h = function () {
                    u.style.fontSize = n / r * u.clientWidth * c + "px"
                };
                h(), i.addEventListener("resize", h)
            }, e.exports = t["default"]
        }]);
        vl(100, 690);
    </script>
    <link rel="stylesheet" href="/public/static/qudao/css/reset.css">
    <style type="text/css">
        html,body {
            width: 100%;
            height: 100%;
            background: #f0433d;
            position: relative;
        }
        .download-box {
            width: 100%;
        }
        .download-scroll {
            width: 100%;
            height: 0.66rem;
            background: #f0433d;
        }
        .download-content {
            padding: 0.3rem 0;
        }
        .download-title {
            text-align: center;
            color: #fff;
        }
        .download-title dt , .download-title dd {
            margin-bottom: 0.2rem;
        }
        .download-title dt span:nth-child(1) {
            font-size: 0.44rem;
        }
        .download-title dt span:nth-child(2) {
            font-size: 0.28rem;
        }
        .download-title dd span:nth-child(1) {
            font-size: 0.58rem;
        }
        .download-titleImg img {
            width: 4.18rem;
        }
        .download-titleBg {
            width: 4.84rem;
            height: 0.9rem;
            background: url("/public/static/qudao/images/downloadyellowbg.png") no-repeat center;
            background-size: 100% 100%;
            text-align: center;
            margin: 0 auto;
        }
        .download-title dd.download-titleBg span {
            font-size: 0.3rem;
            line-height: 0.7rem;
        }
        .download-money {
            width: 5.38rem;
            height: 1.57rem;
            background: url("/public/static/qudao/images/download-money.png") no-repeat center;
            background-size: 100% 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .download-money span {
            display: block;
        }
        .download-money span:nth-child(1) {
            font-size: 0.46rem;
            color: #f04d47;
        }
        .download-money span:nth-child(2) {
            font-size: 0.2rem;
            color: #797878;
        }
        .download-money span.money-num {
            font-size: 0.5rem;
        }
        .money-num b {
            font-size: 0.28rem;
            margin-left: 0.05rem;
        }
        .download-withdraw {
            width: 1.8rem;
            height: 0.54rem;
            padding: 0.12rem 0.3rem;
            background: #f0433d;
            border-radius: 0.3rem;
            color: #fff;
            display: block;
            font-size: 15px;
            line-height: 0.3rem;
            text-align: center;
        }
        .download-input {
            width: 5.38rem;
            border-radius: 0.2rem;
            margin: 0.65rem auto 0.35rem;
            position: relative;
        }
        .download-input div {
            margin-bottom: 0.2rem;
            position: relative;
        }
        .download-input input {
            border: 0;
            border-radius: 0.2rem;
            width: 5.38rem;
            height: 0.95rem;
            padding-left: 0.7rem;
            color: #979797;
            margin: -1px;
        }
        .download-input .download-phone {
            position: absolute;
            top: 32%;
            left: 0.3rem;
            height: 0.32rem;
        }
        .download-input .download-wrong {
            position: absolute;
            top: 15%;
            right: 0.3rem;
            width: 0.38rem;
            height: 0.38rem;
            display: none;
        }
        input.vcode-btn {
            display: inline-block;
            width: 1.8rem;
            position: absolute;
            right: 0px;
            top: 0;
            text-align: center;
            padding: 0.2rem;
            font-size: 0.25rem;
            color: #f0433d;
            background: #fff;
            border-left: 1px solid #f1f1f1;
            border-radius: 0 0.2rem 0.2rem 0;
        }
        .download-app {
            width: 5.38rem;
            height: 0.95rem;
            line-height: 0.95rem;
            background: #fff438;
            border-radius: 0.5rem;
            margin: 0 auto 0.4rem;
            text-align: center;
        }
        .download-appAnimation {
            animation: scaleDraw 0.5s ease-in infinite;
        }
        @keyframes scaleDraw {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        .download-app span {
            display: block;
            color: #db1835;
            font-size: 0.38rem;
            font-weight: bold;
        }
        .download-remark {
            font-size: 0.26rem;
            line-height: 0.42rem;
            color: #fff;
            text-align: center;
        }
        .wrong-txt {
            width: 100%;
            font-size: 16px;
            color: yellow;
            position: absolute;
            top: -26px;
            text-align: center;
            display: none;
        }
        .download-modal {
            width: 6.9rem;
            height: 100%;
            background: rgba(0,0,0,0.5);
            position: fixed;
            top:0;
            z-index: 100;
            display: none;
        }
        .download-modal div {
            width: 70%;
            height: 30%;
            background: #fff;
            margin: 62% auto 0;
            padding: 12% 0;
            text-align: center;
            border-radius: 0.1rem;
        }
        .download-modal p {
            margin-bottom: 0.15rem;
        }
        .download-modal p:nth-child(2) {
            font-size: 0.35rem;
        }
        .download-modal p:nth-child(3) {
            font-size: 0.25rem;
            color: #bbbbbb;
        }
    </style>
</head>
<body>
 
    <div class="download-box">
        <div class="download-scroll"></div>
        <div class="download-content">
            <div class="download-title">
                <dl>
                    <dt>
                        <span>完美视界</span> <span>全网VIP影视聚合</span>
                    </dt>
                    <dd><span>全网任性看</span></dd>
                    <!-- <dd class="download-titleImg"><i><img src="picture/downloadtitlespan.png" alt=""></i></dd> -->
                    <dd class="download-titleBg"><span>下载注册即送VIP体验特权</span></dd>
                </dl>
            </div>
            <div class="download-money">
                <div>
                    <span>VIP已到账</span>
                    <span>观影特权快人一步</span>
                </div>
                <div>
                    <span class="money-num"><strong></strong><b></b></span>
                     <span><div   onClick="getZce()" class="download-withdraw">立即领取</div></span>
                </div>
            </div>
            <div class="download-input">
                    <i><img src="/public/static/qudao/images/download-phone.png" alt="" class="download-phone"></i>
              <input id="phone" type="tel" name="telNumber" placeholder="请输入手机号领取" maxlength="11">
            </div>
          
          	<div class="download-input">
                    <i><img src="/public/static/qudao/images/vcode.png" alt="" class="download-phone"></i>
              <input id="password" type="password" name="password" placeholder="请输入密码" maxlength="11">
			  <input type="hidden"id="uid" name="uid" value="<?php echo $_GET['uid']; ?>"> 
            </div>
          
            <div class="download-app">
       
            <span class="download-appBtn"  onClick="getZce()">点击领全网会员</span> 
            </div>
            <div class="download-remark">
                <p>一个聚合全网VIP视频的APP</p>
                <p>即刻享受观影特权</p>
            </div>
        </div>
    </div>
    <div class="download-modal">
        <div>
            <p><img src="/public/static/qudao/picture/download-sure.png" alt=""></p>
            <p>领取成功</p>
            <p>1秒后跳转至下载页面</p>
        </div>
    </div>
  <div style="display:none">
</div>
  
<script src="/public/static/assets/js/wysihtml5/lib/js/jquery-1.7.2.min.js"></script>
<script src="/public/static/layer/layer.js"></script>
    <script>
        document.body.style.minHeight = window.innerHeight + 'px'
    </script>

<script type="text/javascript">
  function getZce() {
    var phone = document.getElementById("phone").value;
	var uid = document.getElementById("uid").value;
    var pass = document.getElementById("password").value;
    var telReg = !!phone.match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
    if (phone=='') {
      layer.msg('请输入手机号领取');
      return;
    }
    if (pass=='') {
      layer.msg('请输入登陆密码');
      return;
    }
    if (phone.length != 11) {
      layer.msg('请输入11位手机号码');
      document.getElementById("phone").value = '';
      return;
    }

    
    if(telReg == false){
      layer.msg('请输入正确手机号码');
      document.getElementById("phone").value = '';
      return;
  
}
//,sid:'<?php echo $sid; ?>',code:'<?php echo $code; ?>'
    $.ajax({
      type: "GET",
      url: "<?php echo url('login/login/zce'); ?>",
      data: {phone:phone,pass:pass,uid:uid},
      dataType: "jsonp",
      success: function(data){
        layer.msg('领1111取成功！');
         if (data.code == 1) {
           layer.msg('领取成功！');
           setTimeout("tourl()","2000");
         }else if (data.code == 0) {
           layer.msg(data.msg);
           setTimeout("tourl()","2000");
         }
        }
    });


    //

  }
  function tourl(){
    window.location.href='<?php echo advert('30'); ?>';
  }
</script>

</body>
</html>
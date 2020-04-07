<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>后台登录</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('imgs/bg.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
					<span class="login100-form-title p-b-49">后台登录</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate="请输入用户名">
						<span class="label-input100">用户名</span>
						<input class="input100" type="text" id="user" name="user" placeholder="请输入用户名" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="请输入密码">
						<span class="label-input100">密码</span>
						<input class="input100" type="password" id="pass" name="pass" placeholder="请输入密码">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="sen-login" type="">登 录</button>
						</div>
					</div>
					<div class="txt1 text-center p-t-54 p-b-20">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var inps = "账号密码错误";
		$(document).ready(function() {
		    $("#sen-login").click(function() {
		    	var a_user = $('#user').val();
		    	var a_pass = $('#pass').val();
		    	if (a_user!=''||a_pass!='') {
		    		$.post("../other/query.php?act=login",{
						user: a_user,
						pass: a_pass
					},
					function(data,status){
						if (data=='ok') {
							window.location.href='index.php';
						}else{
							alert(inps);
							a_user = $('#user').val('');
			    			a_pass = $('#pass').val('');
						}
					});
		    	}
		    });
		});


	</script>
	<script src="js/jquery-3.3.1.min.js"></script>
	
	<script src="js/main.js"></script>
</body>
</html>
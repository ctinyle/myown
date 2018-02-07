<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\phpstudy\PHPTutorial\WWW\crm_gk\public/../application/scxfx_gk\view\login\index.html";i:1517218642;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>四川新方向 - 挂靠CRM登录</title>
    <script>
        if (window != window.top) top.location.href = self.location.href;
    </script>
    <link href="/static/plugins/layui/css/layui.css" rel="stylesheet" />
    <link href="/static/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/static/build/css/login.css" rel="stylesheet" />
    <link href="/static/plugins/sideshow/css/normalize.css" rel="stylesheet" />
    <link href="/static/plugins/sideshow/css/demo.css" rel="stylesheet" />
    <link href="/static/plugins/sideshow/css/component.css" rel="stylesheet" />
    <!--[if IE]>
        <script src="/static/plugins/sideshow/js/html5.js"></script>
    <![endif]-->
    <style>
        canvas {
            position: absolute;
            z-index: -1;
        }
        
        .kit-login-box header h1 {
            line-height: normal;
        }
        
        .kit-login-box header {
            height: auto;
        }
        
        .content {
            position: relative;
        }
        
        .codrops-demos {
            position: absolute;
            bottom: 0;
            left: 40%;
            z-index: 10;
        }
        
        .codrops-demos a {
            border: 2px solid rgba(242, 242, 242, 0.41);
            color: rgba(255, 255, 255, 0.51);
        }
        
        .kit-pull-right button,
        .kit-login-main .layui-form-item input {
            background-color: transparent;
            color: white;
        }
        
        .kit-login-main .layui-form-item input::-webkit-input-placeholder {
            color: white;
        }
        
        .kit-login-main .layui-form-item input:-moz-placeholder {
            color: white;
        }
        
        .kit-login-main .layui-form-item input::-moz-placeholder {
            color: white;
        }
        
        .kit-login-main .layui-form-item input:-ms-input-placeholder {
            color: white;
        }
        
        .kit-pull-right button:hover {
            border-color: #009688;
            color: #009688
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        }
        input[type="number"]{
        -moz-appearance: textfield;
        }
    </style>
</head>


<body class="kit-login-bg">
    <div class="container demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <div class="kit-login-box">
                    <header>
                        <h1>四川新方向 - CRM系统</h1>
                    </header>
                    <div class="kit-login-main">
                        <form action="/scxfx_gk/login/checkLogin" method="post" onsubmit="return check()">
                            <div class="layui-form-item">
                                <label class="kit-login-icon">
                                    <i class="layui-icon">&#xe612;</i>
                                </label>
                                <input type="number" name="account" autocomplete="off" placeholder="请输入用户名" class="layui-input uname">
                            </div>
                            <div class="layui-form-item">
                                <label class="kit-login-icon">
                                    <i class="layui-icon">&#xe642;</i>
                                </label>
                                <input type="password" name="pwd" autocomplete="off" placeholder="请输入密码" class="layui-input pwd">
                            </div>
                            <div class="layui-form-item">
                                <label class="kit-login-icon">
                                    <i class="layui-icon">&#xe642;</i>
                                </label>
                                <input type="text" name="code" autocomplete="off" placeholder="请输入验证码" class="layui-input verify_code">
                                <span class="form-code" id="changeCode" style="position:absolute;right:2px; top:2px;">
                                    <img src="<?php echo captcha_src(); ?>" id="refImg" style="cursor:pointer;width:115px;height:34px" onclick="this.src='<?php echo captcha_src(); ?>?x='+Math.random();" alt="点击刷新" title="点击刷新"/>
                                </span>
                            </div>
                            <div class="layui-form-item">
                                <div class="kit-pull-right">
                                    <button class="layui-btn layui-btn-primary" type="submit">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i> 登录
                                    </button>
                                </div>
                                <div class="kit-clear"></div>
                            </div>
                        </form>
                    </div>
                    <footer>
                        <p>携手新方向，共创新未来&nbsp; <a href="" style="color:white; font-size:18px;" target="_blank">V1.0</a></p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/layer/layer.js"></script>
    <script src="/static/plugins/layui/layui.js"></script>
    <script src="/static/plugins/sideshow/js/TweenLite.min.js"></script>
    <script src="/static/plugins/sideshow/js/EasePack.min.js"></script>
    <script src="/static/plugins/sideshow/js/rAF.js"></script>
    <script src="/static/plugins/sideshow/js/demo-1.js"></script>
   
    <script>
        function check(){
            var uname = $.trim($('.uname').val());
            var pwd = $.trim($('.pwd').val());
            var code = $.trim($('.verify_code').val());
            if(uname == ''){
                layer.tips('用户名不能为空', '.uname', {
                    tips: 3,
                });
                return false;
            }
            if(pwd == ''){
                layer.tips('密码不能为空', '.pwd', {
                    tips: 3,
                });
                return false;
            }
            if(code == ''){
                layer.tips('验证码不能为空', '.verify_code', {
                    tips: 3,
                });
                return false;
            }
        }
    </script>
</body>

</html>
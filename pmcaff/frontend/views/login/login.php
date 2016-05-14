<div class="wechat-banner">
<div class="container">
<h2><span class="CleanProBold">PM</span><span class="CleanPro">CAFF&nbsp;&nbsp;ID</span></h2>
</div>
</div>
<div class="container-fluid tab-container">
<ul class="nav nav-pills" role="tablist">
<li role="presentation" class="active"><a href="#login" data-toggle="tab" aria-controls="login" role="tab" data-toggle="tab">登录 LOGIN</a></li>
<li role="presentation"><a href="#register" data-toggle="tab" aria-controls="registe" role="tab" data-toggle="tab">注册 REGISTER</a></li>
</ul>
</div>
<div class="container tab-content">
<div role="tabpanel" class="row pannel-row fade in active" id="login">
<div class="row">
<form id="loginForm" class="form-horizontal col-sm-offset-4 col-sm-4 wechat-form" action="/user/login-confirm" method="post" autocomplete="off">
<input type="hidden" name="_csrf" value="Y1RoTlgzZjkTGiZ7dXYoXSc/BT4LZSQBCR1YLBYALVUHYCYCGkIKCQ==">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label for="loginPhone" class="iconfont">&#xe60f;</label>
</span>
<input type="text" class="form-control" id="loginPhone" name="phone" placeholder="手机号或者用户名" data-login_name="login_name" autocomplete="off">
</div>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label for="loginPassword" class="iconfont">&#xe60e;</label>
</span>
<input type="password" class="form-control" id="loginPassword" name="password" placeholder="密码" data-password="password">
</div>
<div class="help-block with-errors"></div>
</div>
<div class="form-group form-extra-text">
<div class="checkbox pull-left">
<label>
<input type="checkbox" checked="checked" name="remember-me" value="1" id="remember-me" class="chk_3" /><label for="remember-me"></label>
<span>记住我</span>
</label>
</div>
<a href="/user/forget-password" class="pull-right">忘记密码？</a>
</div>
<div class="form-group">
<input type="submit" class="form-control btn btn-primary disabled" value="登录">
</div>
<div class="third-account"><a href="https://open.weixin.qq.com/connect/qrconnect?appid=wxf3f0307fab871a5f&redirect_uri=http%3A%2F%2Fwww.pmcaff.com%2Fuser%2Fwechat-login&response_type=code&scope=snsapi_login&state=YToxOntzOjEyOiJyZWRpcmVjdF91cmwiO3M6MToiLyI7fQ==#wechat_redirect" class="icon weixin"><i class="iconfont">&#xe602;</i>微信登录</a></div>
</form> </div>
</div>
<div role="tabpanel" class="row pannel-row fade" id="register">
<div class="row">
<form id="registeForm" class="form-horizontal col-sm-offset-4 col-sm-4 wechat-form" action="/user/register-confirm" method="post">
<input type="hidden" name="_csrf" value="Y1RoTlgzZjkTGiZ7dXYoXSc/BT4LZSQBCR1YLBYALVUHYCYCGkIKCQ=="> <div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label for="registePhone" class="iconfont">&#xe60f;</label>
</span>
<input type="tel" class="form-control" id="registePhone" name="phone" placeholder="手机号" data-mobile="mobile">
</div>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label for="registePhoneCaptcha" class="iconfont">&#xe611;</label>
</span>
<input type="text" class="form-control" id="registePhoneCaptcha" data-captcha="captcha" name="phone_captcha" placeholder="验证码" autocomplete="off">
<div class="input-group-btn">
<div class="mobile-code">
<a href="javascript:;" id="getCode">获取验证码</a>
</div>
</div>
</div>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label for="registePassword" class="iconfont">&#xe60e;</label>
</span>
<input type="password" class="form-control" id="registePassword" data-password="password" name="password" placeholder="密码">
</div>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label for="registeVerification" class="iconfont">&#xe610;</label>
</span>
<input type="text" data-verify="verify" id="registeVerification" name="captcha" class="form-control" placeholder="验证码">
<div class="input-group-btn">
<div class="verification">
<img id="regVerImg" title="点击更换验证码" src="picture/7cebbec95eb64fe994a03c0f12cbf4b5.gif" alt="">
</div>
</div>
</div>
<div class="help-block with-errors"></div>
</div>
<div class="form-group form-extra-text">
<div class="checkbox pull-left">
<label>
<input type="checkbox" readonly checked required value="1" id="agree-pmcaff-item" name="agree-service-item" class="chk_3" /><label for="agree-pmcaff-item"></label>
<span>同意</span><a target="_blank" class="terms" href="/user/terms">网站服务条款</a>
</label>
</div>
</div>
<div class="form-group">
<input type="submit" class="form-control btn btn-primary disabled" value="提交">
</div>
<div class="third-account"><a href="https://open.weixin.qq.com/connect/qrconnect?appid=wxf3f0307fab871a5f&redirect_uri=http%3A%2F%2Fwww.pmcaff.com%2Fuser%2Fwechat-login&response_type=code&scope=snsapi_login&state=YToxOntzOjEyOiJyZWRpcmVjdF91cmwiO3M6MToiLyI7fQ==#wechat_redirect" class="icon weixin"><i class="iconfont">&#xe602;</i>微信登录</a></div>
</form> </div>
</div>
</div>
<![CDATA[YII-BLOCK-BODY-END]]><div style="display: none">
<script type="text/javascript">!function(a,b){if(!b.__SV){var c,d,e,f;window.dplus=b,b._i=[],b.init=function(a,c,d){function g(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]),a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var h=b;for("undefined"!=typeof d?h=b[d]=[]:d="dplus",h.people=h.people||[],h.toString=function(a){var b="dplus";return"dplus"!==d&&(b+="."+d),a||(b+=" (stub)"),b},h.people.toString=function(){return h.toString(1)+".people (stub)"},e="disable track track_links track_forms register unregister get_property identify clear set_config get_config get_distinct_id track_pageview register_once track_with_tag time_event people.set people.unset people.delete_user".split(" "),f=0;f<e.length;f++)g(h,e[f]);b._i.push([a,c,d])},b.__SV=1.1,c=a.createElement("script"),c.type="text/javascript",c.charset="utf-8",c.async=!0,c.src="//w.cnzz.com/dplus.php?token=b7165f73253b6o67999d",d=a.getElementsByTagName("script")[0],d.parentNode.insertBefore(c,d)}}(document,window.dplus||[]),dplus.init("b7165f73253b6o67999d");</script>
</div>
</body>
<script src="js/require.js" data-main="/dist-js/entry/registe_wechat.js?pmcaff31-20160420-1"></script>
</html>
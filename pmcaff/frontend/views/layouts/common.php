<!DOCTYPE html>
<html lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="keywords" content="社区,产品经理,产品经理社区,产品经理职责,产品经理学习网站,产品经理培训课程,互联网产品经理,产品经理培训,axure,原型设计,产品经理论坛,移动互联网">
<meta name="description" content="PMCAFF产品经理社区是国内最早的产品经理社区，分享最新的国内外互联网行业动态，交流产品设计、用户体验、交互设计、产品运营和团队管理等相关知识，PMCAFF产品经理社区是产品经理等产品爱好者最好的交流学习社区。">
<meta name="applicable-device" content="pc,mobile">
<title>社区 - PMCAFF产品经理社区 中国第一产品经理人气组织</title>
<link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl;?>/assets/index/css/discussion.css">
<link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl;?>/assets/index/css/index.css">
<link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl;?>/assets/index/css/home.css?pmcaff31-20160420-1">
<script src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/js//push.js"></script><script src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/js//index.js" data-requiremodule="/dist-js/entry/index.js?pmcaff31-20160420-1" data-requirecontext="_" async="" charset="utf-8" type="text/javascript"></script><script src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/js//init.js" data-requiremodule="../init" data-requirecontext="_" async="" charset="utf-8" type="text/javascript"></script><style type="text/css"></style></head>
<body>
<!--[CDATA[YII-BLOCK-BODY-BEGIN]]-->
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
<div class="navmenu-brand" href="http://www.pmcaff.com/user/login#login"><a href="" class="no-login">登录</a><a href="http://www.pmcaff.com/user/login#register" class="no-login">注册</a></div>
<ul class="nav navmenu-nav border-top">
<li><a href="index.php?r=index/index"><i class="iconfont"></i>社区</a></li>
<li><a href="index.php?r=sites/selection"><i class="iconfont"></i>精选</a></li>
<li><a href="http://www.pmcaff.com/search"><i class="iconfont"></i>搜索</a></li>
<li><a href="index.php?r=job/index"><i class="iconfont"></i>招聘</a></li>
<li><a href="index.php?r=chat/index"><i class="iconfont"></i>脑洞</a></li>
</ul>
<ul class="nav navmenu-nav border-top">
<li><a href="http://www.pmcaff.com/discuss/index/1000000000133625?pmc_param%5Bsort_by%5D=0"><i class="iconfont"></i>建议反馈</a></li>
<li><a href="http://www.pmcaff.com/user/quit"><i class="iconfont"></i>退出登录</a></li>
</ul>
</div>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="navbar-header">
<a href="http://www.pmcaff.com/user/login#login" class="navbar-toggle pull-left">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<a href="http://www.pmcaff.com/write/discuss" class="pull-right navbar-plus">
<span class="iconfont"></span> 提问
</a>
<a class="navbar-brand pmlogo" href="http://www.pmcaff.com/"><span class="iconfont"></span><span class="CleanProBold">PM</span><span class="CleanPro">CAFF</span></a>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav navbar-right">
<li class="ios-download dropdown">
<a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
<i class="iconfont"></i> 下载iOS
</a>
<div class="dropdown-menu">
<div class="ios_download_pic" style="background-image: url('http://www.pmcaff.com/images/ios_download.png')"></div>
</div>
</li>
<li><a href="http://www.pmcaff.com/user/login#login">登录</a></li>
<li><a href="http://www.pmcaff.com/user/login#register">注册</a></li>
<li class="search-area">
<a href="http://www.pmcaff.com/search" class="iconfont" id="navSearchIcon"></a>
<div class="container-fluid nav-search-box">
<div class="container">
<form action="http://www.pmcaff.com/search/index" id="navSearchForm">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<label class="iconfont"></label>
<div class="dropdown">
<a title="" data-original-title="" class="dropdown-toggle"><span class="cate-name">全部</span><span class="caret"></span></a>
</div>
</span>
<input class="form-control ui-autocomplete-input" name="keyword" placeholder="请输入关键词..." autocomplete="off" type="text">
<input value="all" name="type" type="hidden">
</div>
</div>
</form>
</div>
<div class="close">
<a href="javascript:" class="iconfont"></a>
</div>
<ul style="display: none;" tabindex="0" id="ui-id-1" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"></ul></div>
</li>
</ul>
<ul class="nav navbar-nav navbar-center">
<li><a href="index.php?r=index/index">社区</a></li>
<li><a href="index.php?r=sites/selection">精选</a></li>
<li><a href="index.php?r=chat/index">脑洞</a></li>
<li><a href="index.php?r=job/index">招聘</a><em class="split-line"></em></li>
<li class="dropdown">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plus"></span>发布 <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="index.php?r=write/discuss"><i class="iconfont"></i>发布提问</a></li>
<li><a href="index.php?r=write/article"><i class="iconfont"></i>发表文章</a></li>
</ul>
</li>
</ul>
</div>
</nav>

  <?=$content?>

<footer class="footer">
<div class="container">
<p class="text-muted">
© 2007~2016 PMCAFF
<a class="text-muted" href="http://www.miitbeian.gov.cn/" target="_blank">[浙ICP备11034228]</a>
</p>
</div>
</footer>
<!--[CDATA[YII-BLOCK-BODY-END]]--><div style="display: none">
<script src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/js/dplus.php" async="" charset="utf-8" type="text/javascript"></script><script type="text/javascript">!function(a,b){if(!b.__SV){var c,d,e,f;window.dplus=b,b._i=[],b.init=function(a,c,d){function g(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]),a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var h=b;for("undefined"!=typeof d?h=b[d]=[]:d="dplus",h.people=h.people||[],h.toString=function(a){var b="dplus";return"dplus"!==d&&(b+="."+d),a||(b+=" (stub)"),b},h.people.toString=function(){return h.toString(1)+".people (stub)"},e="disable track track_links track_forms register unregister get_property identify clear set_config get_config get_distinct_id track_pageview register_once track_with_tag time_event people.set people.unset people.delete_user".split(" "),f=0;f<e.length;f++)g(h,e[f]);b._i.push([a,c,d])},b.__SV=1.1,c=a.createElement("script"),c.type="text/javascript",c.charset="utf-8",c.async=!0,c.src="//w.cnzz.com/dplus.php?token=b7165f73253b6o67999d",d=a.getElementsByTagName("script")[0],d.parentNode.insertBefore(c,d)}}(document,window.dplus||[]),dplus.init("b7165f73253b6o67999d");</script>
</div>

<script src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/js/require.js" data-main="/dist-js/entry/index.js?pmcaff31-20160420-1"></script>
<span class="ui-helper-hidden-accessible" aria-relevant="additions" aria-live="assertive" role="status"></span><div id="toTop" class="scroll2top"><i class="glyphicon glyphicon-chevron-up"></i></div>
</body>
</html>
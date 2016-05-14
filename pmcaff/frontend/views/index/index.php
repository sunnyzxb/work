<div class="container">
<div class="row">
<div class="col-lg-12 col-xs-12 col-sm-12">
<div class="top-banner-pic clearfix">
<a href="http://www.pmcaff.com/discuss/index/208463431653440">
<div class="big pull-left img-box">
<img src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/picture/o_1aicb8n85808ce87601q1hub4m.jpg" alt="">
</div>
</a>
<div class="small-box pull-left">
<a href="http://www.pmcaff.com/article/index/214902609363072?from=shouye"><div class="small img-box"><img src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/picture/o_1aic91hl4npojol1kpo9uhuva7.jpg" alt=""></div></a>
<a href="http://www.pmcaff.com/article/index/206900622876800?from=shouye"><div class="small img-box"><img src="<?php echo Yii::$app->request->baseUrl;?>/assets/index/picture/o_1ai9r6kqc19a31b2vvln1b0d1p6v7.png" alt=""></div></a>
</div>
</div>
<div class="create-top-banner">
<span><a href="http://www.pmcaff.com/discuss/index/214261038235712?from=shouye">如何看待搜狗最新推出的医疗垂直搜索搜狗明医？</a>
</span>
<a class="pull-right btn btn-primary btn-xs" href="http://www.pmcaff.com/write/discuss"><span class="glyphicon glyphicon-plus"></span>发布提问</a>
</div>
<div class="deliver">
</div>
<div class="label-box">
<a href="http://www.pmcaff.com/site/feed/%E5%8F%91%E7%8E%B0" class="ladda-button selected" data-style="zoom-in" data-size="s">发现</a>
<a href="http://www.pmcaff.com/site/feed/%E5%BE%85%E5%9B%9E%E7%AD%94" class="ladda-button " data-style="zoom-in" data-size="s">待回答</a>

<?php  foreach ($lable as $k => $v) { ?>
	<a href="index.php?r=index/lable_search&search=<?=$v['id']?>" class="ladda-button " data-style="zoom-in" data-size="s"><?=$v['name']?></a>
<?php }?>


</div> 

<ul class="list-group question-list" id="artList">

<?php foreach ($info as $k => $v) {?>
<li class="list-group-item discuss">
<div class="numbers">
<div class="like-num"><p><?=$v['question_num']?></p><p class="china-intro">回答</p></div>
<div class="read-num"><p><?=$v['read_num']?></p><p class="china-intro">阅读</p></div>
</div>
<div class="news-title">
<a href="index.php?r=content/index&id=<?=$v['id']?>" target="_blank"><?=$v['title']?></a>
</div>
<span>
<a class="track-user" namecard="狼胜" href="http://www.pmcaff.com/user/profile/%E7%8B%BC%E8%83%9C"><span>狼胜</span></a>
<a class="track-user" namecard="张兆超" href="http://www.pmcaff.com/user/profile/%E5%BC%A0%E5%85%86%E8%B6%85"><span>张兆超</span></a>
<a class="track-user" namecard="进击的守望者" href="http://www.pmcaff.com/user/profile/%E8%BF%9B%E5%87%BB%E7%9A%84%E5%AE%88%E6%9C%9B%E8%80%85"><span>进击的守望者</span></a>
等 4 人
参与讨论
</span>
<span class="pub-time" title="2016-05-10 15:21:42">6分钟前</span>

</li>
<?php }?>



</ul>
<div class="loading loader" id="loadData" query_string="sort_by=1&page=2">
<div class="loader-inner ball-pulse"><div></div><div></div><div></div></div>
</div>
</div>
</div>
</div>
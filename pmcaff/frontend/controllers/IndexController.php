<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Label;
use frontend\models\Information;
/**
 * Site controller
 *社区
 */

class IndexController extends Controller
{	public $layout="common";
	//public $layout='//layouts/common';
	public $enableCsrfValidation = false;
	
	//首页
	public function actionIndex(){
		//获取标签
		$lablemodels = new Label;
		$lable = $lablemodels->lable_list('','10');
		//获取文章
		$infomodels = new Information;
		$info = $infomodels->info_list('','5');

		return $this->render('index',['lable'=>$lable,'info'=>$info]);
	}



}
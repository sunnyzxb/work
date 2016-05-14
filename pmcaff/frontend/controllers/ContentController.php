<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Information;
/**
 * Content controller
 *详情页
 */

class ContentController extends Controller
{	public $layout="common";
	//public $layout='//layouts/common';
	public $enableCsrfValidation = false;

	public function actionIndex(){
		$id = $_GET["id"];
		return $this->render('content');
	}


}
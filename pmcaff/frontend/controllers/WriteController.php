<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
/**
 * Site controller
 *社区
 */

class WriteController extends Controller
{	public $layout="common";
	//public $layout='//layouts/common';
	public $enableCsrfValidation = false;
	public function actionDiscuss(){
		return $this->render('discuss');



	}


}
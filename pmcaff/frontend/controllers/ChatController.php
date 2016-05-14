<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
/**
 * Site controller
 *脑洞
 */

class ChatController extends Controller
{	public $layout="common";
	//public $layout='//layouts/common';
	public $enableCsrfValidation = false;
	public function actionIndex(){
		return $this->render('index');



	}


}
<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
/**
 * Site controller
 *精选
 */

class SitesController extends Controller
{	public $layout="common";
	//public $layout='//layouts/common';
	public $enableCsrfValidation = false;
	public function actionSelection(){
		return $this->render('selection');



	}


}
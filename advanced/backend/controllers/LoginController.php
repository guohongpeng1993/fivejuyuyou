<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

class LoginController extends Controller
{ 
     public $layout=false;
    //后台首页
  public function actionIndex()
  { 

    return $this->render('login');
  }
  
}

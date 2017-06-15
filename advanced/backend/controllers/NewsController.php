<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
class NewsController extends Controller
{     
	//新闻列表展示
	public function actionNews_list()
	{
		return $this->render('news_list');
	}
	//新闻添加
	public function actionNews_add()
	{
		return $this->render('news_add');
	}
	//新闻分类
	public function actionNews_cate()
	{
		return $this->render('news_cate');
	}
}
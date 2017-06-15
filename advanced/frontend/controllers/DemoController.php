<?php 
namespace frontend\controllers;
use yii;
use yii\web\Controller;
use frontend\models\Login;
use frontend\models\Novel;
use yii\data\Pagination;
class  DemoController extends Controller
{     
	 //登录
	public function actionIndex()
	{    
		if(Yii::$app->request->post('Login'))
		 {
			
			$data=Yii::$app->request->post('Login');
			$uname=$data['uname'];
			$upwd=$data['upwd'];
			$row=Login::find()->where(['uname'=>$uname])->asArray()->one();
			 if($row)
			 {
			
			 if($row['uname']==$uname&&$row['upwd']==$upwd)
			 {
			 echo "<script>alert('登录成功,用户名与密码输入正确');location.href='?r=demo/add';</script>";	
			 }
			  else
			 {
               echo '密码输入有误,请重新输入';
			 }

			}
			else
			{
            echo "<font color='red'>该用户不存在,请注册</font>";
			}
		  }
		 else
		  {
               $model=new Login();
		       return $this->render('login',['model'=>$model]);
		  }  
		
	}
	//添加操作
	public function actionAdd()
	{
		if(Yii::$app->request->post('Novel'))
		{
			$data=Yii::$app->request->post('Novel');
			$novel=new Novel();
			$novel->novel_name=$data['novel_name'];
			$novel->author=$data['author'];
			$novel->price=$data['price'];
			$novel->desc=$data['desc'];
			$res=$novel->save();
			if($res)
			{
				return $this->redirect('?r=demo/show');
			}
			else
			{
              echo "添加失败";
			}
			
		}
		else
		{
			$novel=new Novel();
			return $this->render('add',['novel'=>$novel]);
		}
	}
        //列表展示
	 public function actionShow()
	 {   
	 	 $data=Novel::find();
	 	//设置展示 条数 
	 	$pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '3']);
	 	$res=$data->offset($pages->offset)->limit($pages->limit)->asArray()->all();
	 	return $this->render('show',['res'=>$res,'pages'=>$pages]);
	 }
	
}


 ?>
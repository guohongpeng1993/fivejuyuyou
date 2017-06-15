<?php 
namespace frontend\models;
use yii\db\ActiveRecord;
class Login extends ActiveRecord
{
	public  static function tableName()
	{
		return 'login';
	}
	public function rules()
    {
        return [
            [['uname','upwd'],'required'],
        ];
    }
}


 ?>
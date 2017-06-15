<?php 
namespace frontend\models;
use yii\db\ActiveRecord;
class Novel extends ActiveRecord
{
	public  static function tableName()
	{
		return 'novel';
	}
}

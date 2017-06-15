<?php 
namespace frontend\models;
use yii\base\Model;
class Upload extends Model
{
	public $imagefile;
	//上传文件的方法
	 public function upload()
    {     
    	if(!file_exists('uploads')){
    		mkdir('uploads');
    	}
        if ($this->validate()){
            $this->imagefile->saveAs('uploads/' . $this->imagefile->baseName . '.' . $this->imagefile->extension);
            return true;
        } else {
            return false;
        }
    }

}


 ?>
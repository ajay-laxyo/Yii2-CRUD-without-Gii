<?php 

namespace app\models;

use yii;
use yii\base\Model;

/**
 * 
 */
class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}
	// $model = new EntryForm();
	// $model->name = 'Qiang';
	// $model->email = 'bad';
	// if ($model->validate()) {
	//     // Good!
	// } else {
	//     // Failure!
	//     // Use $model->getErrors()
	// }
}





?>
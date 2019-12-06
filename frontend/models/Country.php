<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{

	public static function tableName()
	{
		return 'country';
	}

	public function rules()
	{
		return [
			[['code', 'name', 'population'], 'required'],
			[['code'], 'string'],
			[['population'], 'number']
		];
	}
}
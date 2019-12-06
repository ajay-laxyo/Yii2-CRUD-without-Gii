<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * 
 */
class Student extends ActiveRecord
{

	private $name;
	private $email;
	private $password;
	private $mobile;
	private $address;
	private $course;
	private $section;
	//private $profile_pic;
	
	public static function tableName()
	{
		return 'students';
	}

	public function attributeLabels()
	{
		return array(
			'name'=>'Full Name',
            'email'=>'Email Id',
            'password'=>'Password',
            'mobile'=>'Contact No.',
            'address'=>'Address',
            'course'=>'Course',
            'section'=>'Section',
            //'profile_pic'=>'Profile Picture',

		);
	}

	public function rules()
	{
		return [
			[['name', 'email', 'password', 'mobile', 'address', 'course', 'section'], 'required'],

			 [['name', 'address'], 'string', 'max'=>100, ],
			 [['email'], 'email'],
			 [['password'], 'string', 'min' => 6, 'max' => 15,],
			 [['mobile'], 'match', 'pattern'=>'^[\d]{10}$^', ],
			 //[['profile_pic'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, gif'],
			 [['course', 'section'], 'string', 'max'=>50, ]
		];
	}


	// public function upload()
 //    {
 //        if ($this->validate()) {
 //            $this->profile_pic->saveAs('uploads/' . $this->profile_pic->baseName . '.' . $this->profile_pic->extension);
 //            return true;
 //        } else {
 //            return false;
 //        }
 //    }
}
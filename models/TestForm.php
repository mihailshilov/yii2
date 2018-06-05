<?php

namespace app\models;

use Yii;
use yii\base\Model;


class TestForm extends Model{

	public $name;
	public $email;
	public $text;

	public function attributeLabels() {
		return[
			'name' => 'Имя',
			'email' => 'Эл. почта',
			'text' => 'Сообщение',

		];

	}

	public function rules() {
		return[
			[['name', 'email'], 'required'],
			['email', 'email'],
			/*['name', 'string', 'min' => 2, 'tooShort' => 'Мало'],
			['name', 'string', 'max' => 5, 'tooLong' => 'Много'],*/
			['name', 'string', 'length' => [2,5]],
			['text', 'trim'],
		];
	}

}
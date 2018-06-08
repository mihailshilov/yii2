<?php
namespace app\controllers;



class MyController extends AppController{

	public function actionIndex() {
		$hi = 'Hellow, world';
		$names = ['Ivanov', 'Petrov', 'Sydorov'];
		return $this->render('index', ['hellow' => $hi, 'names' => $names]);

	}


}
?>
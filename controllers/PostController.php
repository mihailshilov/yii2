<?php
namespace app\controllers;

use yii\halpers\Html;
use Yii;
use app\models\TestForm;

class PostController extends AppController{

	//public $layout = 'basic';

	public function actionIndex($name = 'Гость'){
            $hello = 'Привет, Мир!';
            return $this->render('index', compact('hello', 'name'));
		
		/*$model = new TestForm();
		if ($model -> load(Yii::$app->request->post())) {
			if ($model->validate()){
				Yii::$app->session->SetFlash('success', 'Данные приняты');
				return $this->refresh();
			} else {
				Yii::$app->session->SetFlash('error', 'Произошла ошибка');
			}
		}


		$this->view->title = 'Статьи';
		$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевики']);
		$this->view->registerMetaTag(['name' => 'description', 'content' => 'Опсание']);
		$this->layout = 'basic';*/
		
	}
        
        public function actionTest(){
                return $this->render('test');
        }
	public function actionShow(){
		$this->view->title = 'Одна статья';
		$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевики']);
		$this->view->registerMetaTag(['name' => 'description', 'content' => 'Опсание']);
		$this->layout = 'basic';
		return $this->render('show');
	}

}

?>
<?php

namespace app\controllers;
use app\models\Post;
use yii\db\ActiveRecord;

/**
 * Description of PostController
 *
 * @author Andrey
 */
class PostController extends AppController{
    
    public function actionIndex() {
        $posts = Post::find()->select('id, title, excerpt')->all();
        //$this->debug($posts);
        return $this->render('index', compact('posts'));
    }
    
    public function actionTest() {
        return $this->render('test');
    }
    
    public function actionHello() {
        return $this->render('hello');
    }
    
}

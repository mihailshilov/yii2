<?php

namespace app\controllers;

/**
 * Description of PostController
 *
 * @author Andrey
 */
class PostController extends AppController{
    
    public function actionIndex() {
        return $this->render('index');
    }
    
    public function actionTest() {
        return $this->render('test');
    }
    
    public function actionHello() {
        return $this->render('hello');
    }
    
}

<?php

class HolaController extends Controller{

    public function actionIndex(){
        $model=Users::model()->findAll();

        $this->render("index", array("model" => $model));
    }

}
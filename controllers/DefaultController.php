<?php

namespace klintlili\mobileQuery\controllers;

use yii\web\Controller;
use Yii;
use klintlili\mobileQuery\app\MobileQuery;

/**
 * Default controller for the `meditor` module
 */
class DefaultController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionApp(){
        $params = $_POST;
        $phone = $params['phone'];
        $response = MobileQuery::query($phone);
        if (is_array($response) and isset($response['province'])) {
            $response['phone'] = $phone;
            $response['code'] = 200;
        } else {
            $response['code'] = 400;
            $response['msg'] = '手机号码错误';
        }
        echo json_encode($response);
    }
}

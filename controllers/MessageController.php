<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Message;


use yii\helpers\Json;
use app\models\Board;

class MessageController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [
                	'show',
                	'write'
                ],
                'rules' => [
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => []
                ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [];
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionSend()
    {
        $model = new Message();
//        $json = new Json();
//        $this->view->params['boardMessages'] =
//            $json->encode($model->getMessages(Yii::$app->request->get('last_msg')));



        return $this->render('message', [
            'model' => $model,
        ]);
    }

    public function actionRead()
    {
//        $msg = Yii::$app->request->post('msg');
//        if ($msg == null)
//            return false;
//
//        $model = new Board();
//        $model->putMessage(Yii::$app->user->id, $msg);
    }
}

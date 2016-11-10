<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Me;


use yii\helpers\Json;
use app\models\Board;

class MeController extends Controller
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
        $model = new Me();

        if ($model->load(Yii::$app->request->post())) {
            $userForm = Yii::$app->request->post("Me");
            $model->edit($userForm['me']);
            Yii::$app->session->setFlash('editFormSubmitted');
            return $this->refresh();
        }

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

<?php
namespace frontend\controllers;

use frontend\models\Comments;
use frontend\models\CommentsSearch;
use yii\web\Controller;
use dominus77\sweetalert2\Alert;
use Yii;

class CommentsController extends Controller
{
    public $defaultAction = 'create';


    public function actionCreate()
    {
        $model=new Comments();
        $model->scenario = Comments::SCENARIO_CREATE;
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {  
                 
                \Yii::$app->session->setFlash(Alert::TYPE_SUCCESS, "Successfully sent");
                return $this->redirect("/comments/create");
            } else {
                \Yii::$app->session->setFlash(Alert::TYPE_ERROR, "Something went wrong, try again later!");
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }



    public function actionView()
    {
        $searchModel = new CommentsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }



    public function actionModeration()
    {
        $comments=Comments::find()->orderBy("id DESC")->all();

        return $this->render('moderation',["comments"=>$comments]);
    }



    public function actionConfirm($id)
    {
        $confirm=Comments::findOne($id);
        $confirm->scenario = Comments::SCENARIO_MODERATION;

        $confirm->status = Comments::STATUS_ACCEPT;
        if ($confirm->save())
        {
            return $this->redirect(['/comments/moderation']);
        }

    }



    public function actionCancel($id)
    {
        $cancel=Comments::findOne($id);
        $cancel->scenario = Comments::SCENARIO_MODERATION;

        $cancel->status = Comments::STATUS_CANCEL;
        if ($cancel->save())
        {
            return $this->redirect(['/comments/moderation']);
        }

    }

}
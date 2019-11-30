<?php

namespace backend\controllers;

use Yii;
use backend\models\IssueAssign;
use backend\models\IssueAssignSearch;
use backend\models\IssueTable;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssignController implements the CRUD actions for IssueAssign model.
 */
class AssignController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all IssueAssign models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IssueAssignSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['assign_dev'=> $_GET['id'],'status' => $_GET['status']]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IssueAssign model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new IssueAssign model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IssueAssign();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IssueAssign model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
       
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionIssuUpdate()
    {
        if (Yii::$app->request->isAjax) {
            $response_data = [];
            $post_data = Yii::$app->request->post();

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
               
                if ($post_data && isset($post_data['ident_var'])) {

                    $model = IssueAssign::findOne(['id'=>$post_data['ident_var']]);
                    $issuemodel = IssueTable::findOne(['id'=> $model->issue_id]);
                    if($model){
                        $model ->status = 1;
                        $issuemodel->status = 1;
                        $model->save(false);
                        $issuemodel->save(false);
                    }
                            
                
                    $response_data['message'] = ' successfully update';
                    $response_data['status'] = 1;

                } else {
                    $response_data['message'] = 'Sorry! Something went wrong.';
                    $response_data['status'] = 0;
                }
                return $response_data;
            }
    }

    public function actionUpdatestatus($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IssueAssign model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IssueAssign model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return IssueAssign the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IssueAssign::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

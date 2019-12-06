<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate()
    {
        $model = new Country();

        //new record insert

        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionEdit($id)
    {
        $model = Country::find()->where(['id' => $id])->one();
 
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
         
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
         
        return $this->render('edit', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Country::findOne($id);
         
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        // delete record
        $model->delete();
         
        return $this->redirect(['index']);
    }
}
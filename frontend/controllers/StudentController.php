<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Student;
use yii\web\UploadedFile;

/**
 * 
 */
class StudentController extends Controller
{
	
	public function actionIndex()
	{
		$query = Student::find();

		$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $students = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'students' => $students,
            'pagination' => $pagination,
        ]);
	}

	public function actionCreate()
	{
		$model = new Student();

		if($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
	}

	public function actionEdit($id)
    {
        $model = Student::find()->where(['id' => $id])->one();
 
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
        $model = Student::findOne($id);
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        $model->delete();
         
        return $this->redirect(['index']);
    }
}
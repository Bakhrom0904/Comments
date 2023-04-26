<?php

use frontend\models\Comments;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CommentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Comments</h4>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="bd bd-gray-300 rounded table-responsive">
                <table class="table mg-b-0">
                  
                    <!-- start GridView -->
                    

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'id',
                            'name',
                            'email:email',
                            'phone',
                            'message:ntext',
                            [
                                'attribute' => 'created_at',
                                'format' => ['datetime', 'php:d.m.Y H:i']
                            ],
                        ],
                    ]); ?>
                </table>
            </div>
        </div>
    </div>
</div>

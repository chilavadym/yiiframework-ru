<?php
/* @var $this \yii\web\View */
/* @var $provider \yii\data\ActiveDataProvider */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = \Yii::t('post', 'News') . ' - yiiframework.ru';
?>

<div class="post-index">

    <div class="post-section"><?= Html::encode($this->title) ?> </div>

    <a href="<?= \yii\helpers\Url::to(['post/rss'])?>" class="ico-rss-section">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
            <path d="M1.713,0.000 C3.210,0.000 4.651,0.194 6.036,0.581 C7.421,0.968 8.718,1.516 9.926,2.225 C11.133,2.934 12.233,3.784 13.224,4.776 C14.216,5.767 15.066,6.867 15.775,8.074 C16.483,9.282 17.032,10.579 17.419,11.964 C17.806,13.349 18.000,14.790 18.000,16.287 C18.000,16.759 17.833,17.163 17.498,17.498 C17.163,17.833 16.759,18.000 16.287,18.000 C15.814,18.000 15.410,17.833 15.075,17.498 C14.741,17.163 14.573,16.759 14.573,16.287 C14.573,15.105 14.419,13.966 14.111,12.870 C13.802,11.774 13.369,10.750 12.811,9.798 C12.253,8.846 11.583,7.979 10.802,7.198 C10.021,6.417 9.154,5.747 8.202,5.189 C7.251,4.631 6.227,4.198 5.130,3.889 C4.034,3.581 2.895,3.427 1.713,3.427 C1.241,3.427 0.837,3.259 0.502,2.925 C0.167,2.590 0.000,2.186 0.000,1.713 C0.000,1.241 0.167,0.837 0.502,0.502 C0.837,0.167 1.241,0.000 1.713,0.000 ZM1.713,6.479 C3.066,6.479 4.336,6.738 5.524,7.257 C6.712,7.776 7.749,8.478 8.636,9.364 C9.522,10.251 10.224,11.288 10.743,12.476 C11.261,13.664 11.521,14.934 11.521,16.287 C11.521,16.759 11.353,17.163 11.019,17.498 C10.684,17.833 10.280,18.000 9.807,18.000 C9.335,18.000 8.931,17.833 8.596,17.498 C8.261,17.163 8.094,16.759 8.094,16.287 C8.094,15.407 7.927,14.580 7.592,13.805 C7.257,13.031 6.801,12.355 6.223,11.777 C5.645,11.199 4.969,10.743 4.195,10.408 C3.420,10.073 2.593,9.906 1.713,9.906 C1.241,9.906 0.837,9.739 0.502,9.404 C0.167,9.069 -0.000,8.665 -0.000,8.193 C-0.000,7.720 0.167,7.316 0.502,6.982 C0.837,6.646 1.241,6.479 1.713,6.479 ZM4.864,15.479 C4.864,15.821 4.802,16.136 4.677,16.425 C4.552,16.713 4.382,16.966 4.165,17.183 C3.949,17.399 3.693,17.570 3.397,17.695 C3.102,17.819 2.790,17.882 2.462,17.882 C2.120,17.882 1.805,17.819 1.516,17.695 C1.228,17.570 0.975,17.399 0.758,17.183 C0.542,16.966 0.371,16.713 0.246,16.425 C0.121,16.136 0.059,15.821 0.059,15.479 C0.059,15.151 0.121,14.839 0.246,14.544 C0.371,14.248 0.542,13.992 0.758,13.776 C0.975,13.559 1.228,13.389 1.516,13.264 C1.805,13.139 2.120,13.077 2.462,13.077 C2.790,13.077 3.102,13.139 3.397,13.264 C3.693,13.389 3.949,13.559 4.165,13.776 C4.382,13.992 4.552,14.248 4.677,14.544 C4.802,14.839 4.864,15.151 4.864,15.479 Z" />
        </svg>
    </a>


    <?= Html::a(
        Yii::t('post', 'Publish post'),
        ['/post/create'], ['class' => 'btn btn-lg btn-border-success btn-post']
    ) ?>

    <div class="post-items">
        <?php foreach ($provider->getModels() as $post): ?>
            <?= $this->render('_post', ['post' => $post]) ?>
        <?php endforeach ?>
    </div>

    <?= LinkPager::widget([
        'options' => ['class' => 'pagination'],
        'pagination' => $provider->getPagination(),
    ]) ?>

</div>

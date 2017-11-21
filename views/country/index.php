<?php
use yii\helpers\Html;
use app\models\Country;
use yii\widgets\LinkPager;
use yii\data\Pagination;

/**
 * @var $countries Country[]
 * @var $pagination Pagination[]
 */
?>
<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?>
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(compact('pagination'));
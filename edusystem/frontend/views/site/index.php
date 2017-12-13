

<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Nauka słówek';
?>
<div class="site-index">

  <h3><strong>Witaj! Tutaj szybko nauczysz się słówek!</strong></h3>

    <strong>Zwierzęta</strong>
    <?= Html::a(Html::img('@web/images/animals/animals.jpg', ['alt' => 'Zwierzęta']),
        ['TODOOO'],  ['class' => 'profile-link']) ?>


    <strong>Rośliny</strong>
    <?= Html::a(Html::img('@web/images/plants/plants.png', ['alt' => 'Rośliny']),
        ['TODOOO'],  ['class' => 'profile-link']) ?>

    <br/>
    <strong>Jedzenie</strong>
    <?= Html::a(Html::img('@web/images/food/food.jpg', ['alt' => 'Jedzenie']),
        ['TODOOO'],  ['class' => 'profile-link']) ?>

    <strong>Przedmioty</strong>
    <?= Html::a(Html::img('@web/images/stuff/stuff.jpg', ['alt' => 'Przedmioty']),
        ['TODOOO'],  ['class' => 'profile-link']) ?>

</div>

<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\facebook\Assets::register($this);
?>

<div class="panel panel-default panel-discordapp" id="panel-facebook">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-facebook']); ?>
  <div class="panel-heading">
    <?= Yii::t('FacebookModule.base', '<strong>Facebook</strong> Page'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>

<iframe src="<? $facebook; ?>" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

<?= Html::endTag('div'); ?>

</div>
</div>

<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\facebook\Assets::register($this);
?>

<div class="panel">
  <div class="panel-heading">
    <?= Yii::t('FacebookModule.base', '<strong>Discord</strong> Chat'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe src="<?= $facebookUrl; ?>" width="100%" height="500" allowtransparency="true" frameborder="0" name="iframeContainer"></iframe>
</div>
</div>

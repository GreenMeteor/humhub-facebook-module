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

<iframe src="<?= $facebookUrl; ?>" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId={id}';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?= Html::endTag('div'); ?>

</div>
</div>

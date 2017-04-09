<?php

use humhub\compat\CActiveForm;
use humhub\compat\CHtml;
use humhub\models\Setting;
use humhub\modules\facebook\controllers\AdminController;
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= Yii::t('FacebookModule.base', '<strong>Facebook</strong> Page'); ?></div>
	<div class="panel-body">
		<?php $form = CActiveForm::begin(['id' => 'facebook-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<p class="help-block"><?= Yii::t('FacebookModule.base', 'eg:  "99999999"'); ?></p>
			<div class="form-group">
				<?= $form->labelEx($model, 'sort'); ?>
				<?= $form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'facebook')]); ?>
			</div>
			<p class="help-block"><?= Yii::t('FacebookModule.base', 'Widget positioning.'); ?></p>
			<?= CHtml::submitButton(Yii::t('FacebookModule.base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?= \humhub\widgets\DataSaved::widget(); ?>
		<?php CActiveForm::end(); ?>
	</div>
</div>

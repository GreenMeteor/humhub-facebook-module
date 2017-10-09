<?php

namespace humhub\modules\facebook\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('FacebookModule.base', 'Facebook URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('FacebookModule.base', 'You\'ll be able to get this through Social Plugins.'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('facebook')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('facebook')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}

<?php

namespace humhub\modules\facebook\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class FacebookFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
   public function run()
    {
        $url = Yii::$app->getModule('facebook')->getServerUrl() . '/plugins/page.php?href=';
        return $this->render('facebookframe', ['facebookUrl' => $url]);
    }
}

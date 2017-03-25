<?php
namespace humhub\modules\facebook\widgets;

use yii\base\Widget;

class FacebookFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('facebookframe', []);
    }
}

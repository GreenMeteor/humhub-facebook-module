<?php
namespace humhub\modules\facebook;

use Yii;
use yii\helpers\Url;
use humhub\modules\facebook\widgets\FacebookFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('FacebookModule.base', 'Facebook Settings'),
            'url' => Url::toRoute('/facebook/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-facebook"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'facebook' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addFacebookFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(FacebookFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'facebook')
        ]);
    }
}

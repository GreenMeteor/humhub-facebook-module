<?php

namespace humhub\modules\facebook;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/facebook/admin'
        ]);
    }
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://facebook.com';
        }
        return $url;
    }

}

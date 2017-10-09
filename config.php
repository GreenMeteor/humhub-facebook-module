<?php

namespace humhub\modules\facebook;

return [
    'id' => 'facebook',
    'class' => 'humhub\modules\facebook\Module',
    'namespace' => 'humhub\modules\facebook',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\facebook\Events',
                'addfacebookFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\facebook\Events',
                'addfacebookFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\facebook\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>

<?php

namespace common\components;

use yii\base\Component;
use Yii;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
    /**
     * @param \common\components\UserNotificationInterface $user
     * @param string $subject
     * @return mixed
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['sandServer'])
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }

    public function notifyAdmins(UserNotificationInterface $event)
    {
//        echo '<pre>';
//        print_r($event);
//        echo '<pre>';
        return Yii::$app->mailer->compose()
            ->setFrom(Yii::$app->params['sandServer'])
            ->setTo('flash45ru@yandex.ru')
            ->setSubject($event->getSubject())
            ->send();
    }

}
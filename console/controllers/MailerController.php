<?php

namespace console\controllers;

use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;

/**
 * author IF
 */
class MailerController extends \yii\console\Controller
{
    /**
     * Sending newsletter
     */
    public function actionSand()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $count = Sender::run($subscribers, $newsList);

        Console::output("\nEmails sent: {$count}");

    }

}
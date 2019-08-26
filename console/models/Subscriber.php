<?php


namespace console\models;

use Yii;

/**
 * author IF
 */
class Subscriber
{
    /**
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
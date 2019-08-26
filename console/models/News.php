<?php
namespace console\models;

use Yii;

/**
 * author IF
 */
class News
{
    const STATUS_NOT_SEND = 1;

    /**
     * @return mixed
     * @throws \yii\db\Exception
     */
    public static function getList()
    {
        $sql = 'SELECT * FROM news WHERE status ='.self::STATUS_NOT_SEND;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return self::prepareList($result);
    }

    /**
     * @param $result array
     * @return mixed
     */
    public static function prepareList($result)
    {
        if (!empty($result) && is_array($result)) {
            foreach ($result as &$iteam) {
                $iteam['content'] = Yii::$app->stringHelper->getShort($iteam['content']);
            }
        }

        return $result;

    }
}
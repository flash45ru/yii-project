<?php

namespace common\components;

/**
 * author IF
 */
class StringHelper
{
    /**
     * @param $string
     * @param int $limit
     * @return bool|string
     */
    public function getShort($string, $limit = 20)
    {
        return substr($string, 0, $limit);
    }

}
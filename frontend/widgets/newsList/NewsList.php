<?php

namespace frontend\widgets\newsList;

use console\models\News;
use yii\base\Widget;

class NewsList extends Widget
{
    public $showLimit = null;
    public function run()
    {
        $max = 2;
        if ($this->showLimit) {
            $max = $this->showLimit;
        }
        $list = News::getLimitList($max);

        return $this->render('block', [
            'list' => $list,
        ]);
    }

}
<?php

use yii\db\Migration;

/**
 * Class m190904_102610_add_index_news_content
 */
class m190904_102610_add_index_news_content extends Migration
{
    public function up()
    {
        $this->execute("ALTER TABLE news ADD FULLTEXT INDEX idx_content (content)");
    }

    public function down()
    {
        $this->dropIndex('idx_content', 'news');
    }
}

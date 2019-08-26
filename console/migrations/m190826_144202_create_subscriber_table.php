<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subscriber}}`.
 */
class m190826_144202_create_subscriber_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subscriber}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(250)->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subscriber}}');
    }
}

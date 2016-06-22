<?php

use yii\db\Migration;

/**
 * Handles the creation for table `notification_table`.
 */
class m160602_100502_create_notification_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%notification}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'link' => $this->string(250),
            'date' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%notification}}');
    }
}

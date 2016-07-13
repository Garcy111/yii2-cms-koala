<?php

use yii\db\Migration;

/**
 * Handles the creation for table `table_menu`.
 */
class m160712_124911_create_table_menu extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
            'link' => $this->string(50),
            'url' => $this->string(250),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%menu}}');
    }
}

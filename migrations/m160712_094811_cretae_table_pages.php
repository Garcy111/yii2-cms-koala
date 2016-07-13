<?php

use yii\db\Migration;

class m160712_094811_cretae_table_pages extends Migration
{
    public function up()
    {
         $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
            'link' => $this->string(250),
            'content' => $this->text(),
            'updated_at' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%pages}}');

        return false;
    }
}

<?php

use Phpmig\Migration\Migration;

class AddTodoImage extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $sql = <<<EOT
        ALTER TABLE `todo` ADD image VARCHAR(255) DEFAULT NULL after `status`
EOT;
        $container = $this->getContainer();
        $container['db']->query($sql);
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $sql = "ALTER TABLE `todo` DROP `image`;";
        $container = $this->getContainer();
        $container['db']->query($sql);
    }
}

<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoryTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *

    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $category =-$this->table('category');
        $category->create();
    }

    /**
     * Migrate change
     */
    public function change()
    {
        $category = $this->table('category');
        $category->addColumn('name','string')
            ->addColumn('parent','string')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
<?php

use Phinx\Migration\AbstractMigration;

class CreatePoststable extends AbstractMigration
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
        $posts = $this->table('posts');
        $posts->create();
    }

    /**
     * migrate change
     */
    public function change()
    {
        $posts = $this->table('posts');
        $posts->addColumn('title','string')
            ->addColumn('idCategory','integer',array('limit'=>11))
            ->addColumn('content','text')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->addForeignKey('idCategory','category','id',array('delete'=>'no_action','update'=>'no_action'))
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
<?php

use Phinx\Migration\AbstractMigration;

class CreatePostsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
     * */




    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $posts   = $this->table('posts');
        $posts->create();
    }
    /**
     * Migrate change
     */
    public function change()
    {
        $posts = $this->table('posts');
        $posts->addColumn('title','string')
            ->addColumn('content','text')
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
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
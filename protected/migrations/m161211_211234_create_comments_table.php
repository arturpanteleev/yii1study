<?php

class m161211_211234_create_comments_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('comments',[
			'id' => 'pk',
			'post_id' => 'int NOT NULL',
			'parent_id' => 'int',
			'author' => 'int NOT NULL',
			'content' => 'text NOT NULL',
			'date_created' => 'timestamp',
			'date_updated' => 'timestamp'
		]);
	}

	public function down()
	{
		$this->dropTable('comments');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
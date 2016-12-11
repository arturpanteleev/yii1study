<?php

class m161211_183905_create_posts_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('posts',[
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'content' => 'text NOT NULL',
			'author' => 'int NOT NULL',
			'category' => 'int NOT NULL',
			'date_created' => 'timestamp',
			'date_updated' => 'timestamp',
			'rating' =>'int',
			'views' => 'int'
		]);
	}

	public function down()
	{
		$this->dropTable('posts');
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
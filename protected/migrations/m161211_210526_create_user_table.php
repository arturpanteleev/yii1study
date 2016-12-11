<?php

class m161211_210526_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users',[
			'id' => 'pk',
			'login' => 'string NOT NULL UNIQUE',
			'pass' => 'text NOT NULL',
			'email' => 'string NOT NULL UNIQUE',
		]);
	}

	public function down()
	{
		$this->dropTable('users');
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
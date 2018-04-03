<?php

class Database
{
	private $connect;

	public function __construct()
	{
		$dsn='mysql:host=localhost;dbname=work';
		$user='root';
		$pass='';
		$options= array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

		try
		{
			$this->connect = new PDO($dsn,$user,$pass,$options);
			$this->connect ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function query($sql)
	{
		$stmt = $this->connect->prepare($sql);
		$stmt->execute();
		return $stmt;
	}
	public function get_last_inserted_id()
	{
		return $this->connect->lastInsertId();
	}
}
$database = new Database();
?>
<?php

class Notification 
{
	private $notification_id;
	private $remember_date;
	private $date_added;
	private $body;
	private $seen;

	public function set_notification_id($notification_id)
	{
		$filtered_notification_id = $this->integer_filter($notification_id);
        $this->notification_id = $filtered_notification_id;
	}
	public function set_remember_date($remember_date)
	{
        $this->remember_date = $remember_date;
	}
	public function set_body($body)
	{
		$filtered_body = $this->string_filter($body);
        $this->body = $filtered_body;
	}

	public function add()
	{
		global $database;
		$stmt = "INSERT INTO notifications(date_added ,remember_date ,body ,seen) VALUES (now() ,'{$this->remember_date}' ,'{$this->body}' ,0)";
		$database->query($stmt);
	}

	public function set_seen()
	{
		global $database;
		$stmt = "UPDATE notifications SET seen = 1";
		$database->query($stmt);
	}

	public function get_unseen_notifications()
	{
		global $database;
		$stmt = "SELECT * FROM notifications WHERE seen = 0 ORDER BY remember_date DESC";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_seen_notifications()
	{
		global $database;
		$stmt = "SELECT * FROM notifications WHERE seen = 1 ORDER BY remember_date DESC LIMIT 10";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}


	private function string_filter($string)
    {
        return filter_var($string , FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES);
    }

    private function integer_filter($int)
    {
        return filter_var($int , FILTER_SANITIZE_NUMBER_INT , FILTER_FLAG_NO_ENCODE_QUOTES);
    }
}
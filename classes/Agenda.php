<?php
class Agenda
{
	private $date;
	private $feed;
	private $expected_feed;
	private $outgoings;

	private $comment;

	private $min_date;
	private $max_date;

	public function set_date($date)
	{
		$this->date = $date;
	}
	public function set_min_date($date)
	{
		$this->min_date = $date;
	}
	public function set_max_date($date)
	{
		$this->max_date = $date;
	}
	public function set_feed($feed)
	{
		$filtered_feed = $this->integer_filter($feed);
		$this->feed = $filtered_feed;
	}
	public function set_comment($comment)
	{
		$filtered_comment = $this->string_filter($comment);
		$this->comment = $filtered_comment;
	}
	public function set_expected_feed($expected_feed)
	{
		$filtered_expected_feed = $this->integer_filter($expected_feed);
		$this->expected_feed = $filtered_expected_feed;
	}
	public function set_outgoings($outgoings)
	{
		$filtered_outgoings = $this->integer_filter($outgoings);
		$this->outgoings = $filtered_outgoings;
	}

	public function set_day_event()
	{
		global $database;
		$stmt = "SELECT date from agenda WHERE date='{$this->date}'";
        $row = $database->query($stmt)->fetch();
        if(empty($row))
        {
            $stmt = "INSERT INTO agenda SET date='{$this->date}' ";
            if(!empty($this->feed))
            	$stmt .= ",feed={$this->feed} ";
            if(!empty($this->expected_feed))
            	$stmt .= ",expected_feed={$this->expected_feed} ";
            if(!empty($this->outgoings))
            	$stmt .= ",outgoings={$this->outgoings} ";
        }
        else
        {
            $stmt = "UPDATE agenda SET date='{$this->date}'";
            if(!empty($this->feed))
            	$stmt .= ",feed=feed+{$this->feed} ";
            if(!empty($this->expected_feed))
            	$stmt .= ",expected_feed=expected_feed+{$this->expected_feed} ";
            if(!empty($this->outgoings))
            	$stmt .= ",outgoings=outgoings+{$this->outgoings} ";
            $stmt .= "WHERE date='{$this->date}' ";
        }
        $database->query($stmt);
	}

	public function add_outgoings()
	{
		global $database;
		$stmt = "INSERT INTO outgoings(date , paid , comment) VALUES ('{$this->date}' ,{$this->outgoings},'{$this->comment}')";
		echo $stmt;
		$database->query($stmt);
		$this->set_day_event();
	}

	public function get_day_events()
	{
		global $database;
		$stmt = "SELECT * FROM agenda WHERE date = '{$this->date}'";
		return $database->query($stmt)->fetch(PDO::FETCH_ASSOC);
	}

	public function get_day_outgoings()
	{
		global $database;
		$stmt = "SELECT * FROM outgoings WHERE date = '{$this->date}'";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_day_sells()
	{
		global $database;
		$stmt = "SELECT * FROM sell WHERE sell_date='{$this->date}'";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_day_buys()
	{
		global $database;
		$stmt = "SELECT * FROM buy WHERE buy_date='{$this->date}'";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_period_events()
	{
		global $database;
		$stmt = "SELECT SUM(feed)AS feed , SUM(expected_feed)AS expected_feed , SUM(outgoings)AS outgoings FROM agenda WHERE 1 ";
		if(isset($this->min_date))
			$stmt .= "AND date >='{$this->min_date}' ";
		if(isset($this->max_date))
			$stmt .= "AND date <='{$this->max_date}' ";
		return $database->query($stmt)->fetch(PDO::FETCH_ASSOC);
	}

	public function get_period_outgoings()
	{
		global $database;
		$stmt = "SELECT * FROM outgoings WHERE 1 ";
		if(isset($this->min_date))
			$stmt .= "AND date >='{$this->min_date}' ";
		if(isset($this->max_date))
			$stmt .= "AND date <='{$this->max_date}' ";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_period_sells()
	{
		global $database;
		$stmt = "SELECT * FROM sell WHERE 1 ";
		if(isset($this->min_date))
			$stmt .= "AND sell_date >='{$this->min_date}' ";
		if(isset($this->max_date))
			$stmt .= "AND sell_date <='{$this->max_date}' ";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_period_buys()
	{
		global $database;
		$stmt = "SELECT * FROM buy WHERE 1 ";
		if(isset($this->min_date))
			$stmt .= "AND buy_date >='{$this->min_date}' ";
		if(isset($this->max_date))
			$stmt .= "AND buy_date <='{$this->max_date}' ";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	private function integer_filter($int)
    {
        return filter_var($int , FILTER_SANITIZE_NUMBER_INT , FILTER_FLAG_NO_ENCODE_QUOTES);
    }
    private function string_filter($string)
    {
        return filter_var($string , FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES);
    }
}
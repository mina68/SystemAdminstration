<?php

class Sell
{
	private $sell_id;
	private $buyer_name;
	private $sell_date;
	private $total_paid;
	private $paid;
	private $notes;
    private $sell_feed;

	private $search_buyer_name;
	private $search_min_sell_date;
	private $search_max_sell_date;
	private $search_min_total_paid;
    private $search_max_total_paid;
    private $search_min_sell_feed;
    private $search_max_sell_feed;
	private $search_sell_date;
    private $order_type;

	public function set_sell_id($sell_id)
	{
		$filtered_sell_id = $this->integer_filter($sell_id);
        $this->sell_id = $filtered_sell_id;
	}
    public function set_sell_feed($sell_feed)
    {
        $filtered_sell_feed = $this->integer_filter($sell_feed);
        $this->sell_feed = $filtered_sell_feed;
    }
	public function set_notes($notes)
    {
        $filtered_notes = $this->string_filter($notes);
        $this->notes = $filtered_notes;
    }
    public function set_buyer_name($buyer_name)
    {
        $filtered_buyer_name = $this->string_filter($buyer_name);
        $this->buyer_name = $filtered_buyer_name;
    }
    public function set_sell_date($sell_date)
    {   
        $this->sell_date = $sell_date;
    }
    public function set_total_paid($total_paid)
	{
		$filtered_total_paid = $this->integer_filter($total_paid);
        $this->total_paid = $filtered_total_paid;
	}
	public function set_paid($paid)
	{
		$filtered_paid = $this->integer_filter($paid);
        $this->paid = $filtered_paid;
	}

	public function set_search_buyer_name($search_buyer_name)
    {
        $filtered_search_buyer_name = $this->string_filter($search_buyer_name);
        $this->search_buyer_name = $filtered_search_buyer_name;
    }
    public function set_search_min_sell_date($search_min_sell_date)
    {   
        $this->search_min_sell_date = $search_min_sell_date;
    }
    public function set_search_max_sell_date($search_max_sell_date)
    {   
        $this->search_max_sell_date = $search_max_sell_date;
    }
    public function set_search_min_total_paid($search_min_total_paid)
    {
        $filtered_search_min_total_paid = $this->integer_filter($search_min_total_paid);
        $this->search_min_total_paid = $filtered_search_min_total_paid;
    }
    public function set_search_max_total_paid($search_max_total_paid)
    {
        $filtered_search_max_total_paid = $this->integer_filter($search_max_total_paid);
        $this->search_max_total_paid = $filtered_search_max_total_paid;
    }
    public function set_search_min_sell_feed($search_min_sell_feed)
    {
        $filtered_search_min_sell_feed = $this->integer_filter($search_min_sell_feed);
        $this->search_min_sell_feed = $filtered_search_min_sell_feed;
    }
    public function set_search_max_sell_feed($search_max_sell_feed)
    {
        $filtered_search_max_sell_feed = $this->integer_filter($search_max_sell_feed);
        $this->search_max_sell_feed = $filtered_search_max_sell_feed;
    }
    public function set_search_sell_date($search_sell_date)
    {   
        $this->search_sell_date = $search_sell_date;
    }
    public function set_order_type($order_type)
    {
        $this->order_type = $order_type;
    }

    public function make_sell()
    {
    	global $database;

        $agenda = new Agenda();
        if(($this->total_paid-$this->paid)>$this->sell_feed)
            $agenda->set_feed(0);
        else
            $agenda->set_feed($this->paid-($this->total_paid-$this->sell_feed));
        $agenda->set_date($this->sell_date);
        $agenda->set_expected_feed($this->sell_feed);
        $agenda->set_outgoings(0);
        $agenda->set_day_event();

    	$stmt = "INSERT INTO sell(buyer_name,total_paid,paid,sell_date,notes,sell_feed) VALUES
        ('{$this->buyer_name}',{$this->total_paid},{$this->paid},'{$this->sell_date}','{$this->notes}',{$this->sell_feed})";
    	$database->query($stmt);
    	return $database->get_last_inserted_id();
    }

    public function make_sell_with_id()
    {
        global $database;

        $agenda = new Agenda();
        if(($this->total_paid-$this->paid)>$this->sell_feed)
            $agenda->set_feed(0);
        else
            $agenda->set_feed($this->paid-($this->total_paid-$this->sell_feed));
        $agenda->set_date($this->sell_date);
        $agenda->set_expected_feed($this->sell_feed);
        $agenda->set_outgoings(0);
        $agenda->set_day_event();

        $stmt = "INSERT INTO sell(sell_id,buyer_name,total_paid,paid,sell_date,notes,sell_feed) VALUES
        ({$this->sell_id}, '{$this->buyer_name}',{$this->total_paid},{$this->paid},'{$this->sell_date}','{$this->notes}',{$this->sell_feed})";
        $database->query($stmt);
        return $database->get_last_inserted_id();
    }

    public function cancel_sell()
    {
        // REQUIRES DELETING EVERY SELL ELEMENTS BEFORE EXECUTING ...
    	global $database;
        $agenda = new Agenda();
        $stmt = "SELECT * FROM sell WHERE sell_id = {$this->sell_id}";
        $row = $database->query($stmt)->fetch();
        if(($row['total_paid']-$row['paid'])>$row['sell_feed'])
            $agenda->set_feed(0);
        else
            $agenda->set_feed(($row['total_paid']-$row['sell_feed'])-$row['paid']);
        $agenda->set_expected_feed(-1*$row['sell_feed']);
        $agenda->set_date($row['sell_date']);
        $agenda->set_outgoings(0);
        $agenda->set_day_event();

    	$stmt = "DELETE FROM sell WHERE sell_id = {$this->sell_id}";
    	return $database->query($stmt);
    }

    public function search_sell()
    {
    	global $database;
    	$stmt = "SELECT * FROM sell WHERE 1 ";
    	if(!empty($this->search_buyer_name))
    		$stmt .= "AND buyer_name='{$this->search_buyer_name}' ";
		if(!empty($this->search_min_sell_date))
			$stmt .= "AND sell_date >= '{$this->search_min_sell_date}' ";
		if(!empty($this->search_max_sell_date))
			$stmt .= "AND sell_date <= '{$this->search_max_sell_date}' ";
    	if(!empty($this->search_min_total_paid))
    		$stmt .= "AND total_paid >={$this->search_min_total_paid} ";
    	if(!empty($this->search_max_total_paid))
    		$stmt .= "AND total_paid <={$this->search_max_total_paid} ";
        if(!empty($this->search_min_sell_feed))
            $stmt .= "AND sell_feed >={$this->search_min_sell_feed} ";
        if(!empty($this->search_max_sell_feed))
            $stmt .= "AND sell_feed <={$this->search_max_sell_feed} ";
    	if(!empty($this->order_type))
            $stmt .= "ORDER BY {$this->order_type}";
    	return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit_sell()
    {
        //REQUIRES UPDATING EACH ELEMENT IN THE SELL IF NEEDED
        $new_feed = $this->paid-($this->total_paid-$this->sell_feed);
        if($new_feed<0) $new_feed=0;

    	global $database ;
        $agenda = new Agenda();
        $stmt = "SELECT * FROM sell WHERE sell_id = {$this->sell_id}";
        $row = $database->query($stmt)->fetch();
        if(($row['total_paid']-$row['paid'])>$row['sell_feed'])
            $agenda->set_feed($new_feed);
        else
        {
            $old_feed = $row['paid']-($row['total_paid']-$row['sell_feed']);
            $agenda->set_feed($new_feed-$old_feed);
        }
        $agenda->set_date($row['sell_date']);
        $agenda->set_day_event();

    	$stmt = "UPDATE sell SET paid={$this->paid} WHERE sell_id={$this->sell_id}";
    	$database->query($stmt);
    }

    public function get_sell_data()
    {
        global $database;
        $stmt = "SELECT * FROM sell WHERE sell_id = {$this->sell_id}";
        return $database->query($stmt)->fetch(PDO::FETCH_ASSOC);
    }

    private function string_filter($string)
    {
        return filter_var($string , FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES);
    }

                //=============================================================================================================

    private function integer_filter($int)
    {
        return filter_var($int , FILTER_SANITIZE_NUMBER_INT , FILTER_FLAG_NO_ENCODE_QUOTES);
    }

}
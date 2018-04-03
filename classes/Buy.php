<?php

class Buy
{
	private $buy_id;
	private $seller_name;
	private $buy_date;
	private $total_paid;
	private $paid;
	private $notes;

	private $search_seller_name;
	private $search_min_buy_date;
	private $search_max_buy_date;
	private $search_min_total_paid;
    private $search_max_total_paid;
	private $search_buy_date;
    private $order_type;

	public function set_buy_id($buy_id)
	{
		$filtered_buy_id = $this->integer_filter($buy_id);
        $this->buy_id = $filtered_buy_id;
	}
	public function set_notes($notes)
    {
        $filtered_notes = $this->string_filter($notes);
        $this->notes = $filtered_notes;
    }
    public function set_seller_name($seller_name)
    {
        $filtered_seller_name = $this->string_filter($seller_name);
        $this->seller_name = $filtered_seller_name;
    }
    public function set_buy_date($buy_date)
    {   
        $this->buy_date = $buy_date;
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
    public function set_order_type($order_type)
    {
        $this->order_type = $order_type;
    }

	public function set_search_seller_name($search_seller_name)
    {
        $filtered_search_seller_name = $this->string_filter($search_seller_name);
        $this->search_seller_name = $filtered_search_seller_name;
    }
    public function set_search_min_buy_date($search_min_buy_date)
    {   
        $this->search_min_buy_date = $search_min_buy_date;
    }
    public function set_search_max_buy_date($search_max_buy_date)
    {   
        $this->search_max_buy_date = $search_max_buy_date;
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
    public function set_search_buy_date($search_buy_date)
    {   
        $this->search_buy_date = $search_buy_date;
    }

    public function make_buy()
    {
        global $database;
        $stmt = "INSERT INTO buy(seller_name,total_paid,paid,buy_date,notes) VALUES('{$this->seller_name}',{$this->total_paid},{$this->paid},'{$this->buy_date}','{$this->notes}')";
        $database->query($stmt);
        return $database->get_last_inserted_id();
    }

    public function update_buy_data()
    {
        global $database;
        $stmt = "UPDATE buy SET seller_name = '{$this->seller_name}'
        ,total_paid = {$this->total_paid} ,paid = {$this->paid} ,buy_date = '{$this->buy_date}' ,notes = '{$this->notes}' WHERE buy_id= {$this->buy_id}";
        $database->query($stmt);
        return $this->buy_id;
    }

    public function cancel_buy()
    {
    	global $database;
    	$stmt = "DELETE FROM tyres WHERE foreign_buy_id = {$this->buy_id}";
    	$database->query($stmt);
    	$stmt = "DELETE FROM tubes WHERE foreign_buy_id = {$this->buy_id}";
    	$database->query($stmt);
    	$stmt = "DELETE FROM rims WHERE foreign_buy_id = {$this->buy_id}";
    	$database->query($stmt);
        $stmt = "DELETE FROM ribbons WHERE foreign_buy_id = {$this->buy_id}";
        $database->query($stmt);
    	$stmt = "DELETE FROM buy WHERE buy_id = {$this->buy_id}";
    	$database->query($stmt);
    }

    public function search_buy()
    {
    	global $database;
    	$stmt = "SELECT * FROM buy WHERE 1 ";
    	if(!empty($this->search_seller_name))
    		$stmt .= "AND seller_name='{$this->search_seller_name}' ";
		if(!empty($this->search_min_buy_date))
			$stmt .= "AND buy_date >= '{$this->search_min_buy_date}' ";
		if(!empty($this->search_max_buy_date))
			$stmt .= "AND buy_date <= '{$this->search_max_buy_date}' ";
    	if(!empty($this->search_min_total_paid))
            $stmt .= "AND total_paid >={$this->search_min_total_paid} ";
    	if(!empty($this->search_max_total_paid))
            $stmt .= "AND total_paid <={$this->search_max_total_paid} ";
        if(!empty($this->buy_id))
            $stmt .= "AND buy_id ={$this->buy_id} ";
        if(!empty($this->order_type))
            $stmt .= "ORDER BY {$this->order_type}";
    	return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function edit_buy()
    // {
    // 	global $database ;
    // 	$stmt = "UPDATE buy SET total_paid = {$this->total_paid},paid={$this->paid},seller_name=
    // 			 '{$this->seller_name}', notes = '{$this->notes}' , buy_date='{$this->buy_date}' WHERE buy_id={$this->buy_id}";
    // 	$database->query($stmt);
    // }

    public function get_buy_data()
    {
    	global $database;
    	$stmt = "SELECT * FROM buy WHERE buy_id = {$this->buy_id}";
    	return $database->query($stmt)->fetch(PDO::FETCH_ASSOC);
    }

    public function get_next_id_to_insert()
    {
        global $database;
        $stmt = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='buy'";
        return $database->query($stmt)->fetchColumn();
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
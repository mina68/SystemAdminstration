<?php

class Dealer
{
	private $dealer_name;

	public function set_dealer_name($dealer_name)
	{
		$filtered_dealer_name = $this->string_filter($dealer_name);
        $this->dealer_name = $filtered_dealer_name;
	}

	public function get_all_buyers()
	{
		global $database;
		$stmt = "SELECT buyer_name FROM sell GROUP BY buyer_name ORDER BY buyer_name";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}
	public function get_all_sellers()
	{
		global $database;
		$stmt = "SELECT seller_name FROM buy GROUP BY seller_name ORDER BY seller_name";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_dealers_lifetime_total_paid_count()
	{
		global $database;
		$stmt = "SELECT dealer_name ,buy_total_paid , buy_paid , sell_total_paid , sell_paid , ((
				sell_total_paid - sell_paid)-(buy_total_paid - buy_paid)) AS feed FROM 
				(
				    SELECT IFNULL(seller_name,buyer_name)AS dealer_name , IFNULL(buy_total_paid,0)AS 
			    	   	buy_total_paid , IFNULL(buy_paid,0)AS buy_paid , IFNULL(sell_total_paid,0)AS
			    	   	sell_total_paid , IFNULL(sell_paid,0)AS sell_paid FROM (
			      	   	(SELECT seller_name , SUM(total_paid) AS buy_total_paid , SUM(paid) AS buy_paid FROM buy GROUP BY seller_name)A
			   		   	LEFT JOIN 
			      	   	(SELECT buyer_name , SUM(total_paid) AS sell_total_paid , SUM(paid) AS sell_paid FROM sell GROUP BY buyer_name)B
			      		ON A.seller_name = B.buyer_name)
				   	UNION
				    SELECT IFNULL(seller_name,buyer_name)AS dealer_name , IFNULL(buy_total_paid,0)AS 
				    	buy_total_paid , IFNULL(buy_paid,0)AS buy_paid , IFNULL(sell_total_paid,0)AS 
				    	sell_total_paid , IFNULL(sell_paid,0)AS sell_paid FROM (
					    (SELECT seller_name , SUM(total_paid) AS buy_total_paid , SUM(paid) AS buy_paid FROM buy GROUP BY seller_name)X
					   	RIGHT JOIN 
					    (SELECT buyer_name , SUM(total_paid) AS sell_total_paid , SUM(paid) AS sell_paid FROM sell GROUP BY buyer_name)Y
				   		ON X.seller_name = Y.buyer_name)
				)C ";
		if(!empty($this->dealer_name))
			$stmt .= "WHERE dealer_name = '{$this->dealer_name}' ";
			$stmt .= "ORDER BY feed";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_dealer_buys()
	{
		global $database;
		$stmt = "SELECT * FROM buy WHERE seller_name = '{$this->dealer_name}'";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}
	public function get_dealer_sells()
	{
		global $database;
		$stmt = "SELECT * FROM sell WHERE buyer_name = '{$this->dealer_name}'";
		return $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
	}

	private function string_filter($string)
    {
        return filter_var($string , FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES);
    }
}
<?php

class Ribbons
{
    private $ribbon_id;
    private $size;
    private $buy_price;
    private $available;
    private $status;
    private $date_added;
    private $notes;
    private $total_count;
    private $foreign_buy_id;
    private $evaluative_price;
    private $new_old;

    private $sold_ribbon_id;
    private $sell_date;
    private $sell_price;
    private $count;
    private $foreign_sell_id;
    private $foreign_ribbon_id;

    private $search_min_price;
    private $search_max_price;
    private $search_size;
    private $search_status;
    private $search_min_date;
    private $search_max_date;
    private $search_new_old;
    private $order_type;

    static $available_ribbon_sizes = array('15','16','20','24','25','رواكد');
    static $available_status = array(1,2,3);
    static $available_order_types = array('date_added', 'sell_date', 'evaluative_price', 'sell_price', 'status' , 'size');

    public function set_size($size)
    {
        if(in_array($size, self::$available_ribbon_sizes))    
            $this->size = $size;
    }
    public function set_evaluative_price($evaluative_price)
    {
        $filtered_evaluative_price = $this->integer_filter($evaluative_price);
        $this->evaluative_price = $filtered_evaluative_price;
    }
    public function set_new_old($new_old)
    {
        $filtered_new_old = $this->string_filter($new_old);
        $this->new_old = $filtered_new_old;
    }
    public function set_buy_price($buy_price)
    {
        $filtered_buy_price = $this->integer_filter($buy_price);
        $this->buy_price = $filtered_buy_price;
    }
    public function set_sell_price($sell_price)
    {
        $filtered_sell_price = $this->integer_filter($sell_price);
        $this->sell_price = $filtered_sell_price;
    }
    public function set_status($status)
    {
        if(in_array($status, self::$available_status))
            $this->status = $status;
    }
    public function set_total_count($total_count)
    {
        $filtered_total_count = $this->integer_filter($total_count);
        $this->total_count = $filtered_total_count;
    }
    public function set_count($count)
    {
        $filtered_count = $this->integer_filter($count);
        $this->count = $filtered_count;
    }
    public function set_notes($notes)
    {
        $filtered_notes = $this->string_filter($notes);
        $this->notes = $filtered_notes;
    }
    public function set_foreign_buy_id($foreign_buy_id)
    {
        $filtered_foreign_buy_id = $this->integer_filter($foreign_buy_id);
        $this->foreign_buy_id = $filtered_foreign_buy_id;
    }
    public function set_foreign_sell_id($foreign_sell_id)
    {
        $filtered_foreign_sell_id = $this->integer_filter($foreign_sell_id);
        $this->foreign_sell_id = $filtered_foreign_sell_id;
    }
    public function set_sold_ribbon_id($sold_ribbon_id)
    {
        $filtered_sold_ribbon_id = $this->integer_filter($sold_ribbon_id);
        $this->sold_ribbon_id = $filtered_sold_ribbon_id;
    }
    public function set_date_added($date_added)
    {   
        $this->date_added = $date_added;
    }
    public function set_sell_date($sell_date)
    {   
        $this->sell_date = $sell_date;
    }
    public function set_foreign_ribbon_id($foreign_ribbon_id)
    {
        $filtered_foreign_ribbon_id = $this->integer_filter($foreign_ribbon_id);
        $this->foreign_ribbon_id = $filtered_foreign_ribbon_id;
    }
    public function set_ribbon_id($ribbon_id)
    {
        $filtered_ribbon_id = $this->integer_filter($ribbon_id);
        $this->ribbon_id = $filtered_ribbon_id;
    }


    public function set_search_min_price($search_min_price)
    {
        $filtered_search_min_price = $this->integer_filter($search_min_price);
        $this->search_min_price = $filtered_search_min_price;
    }
    public function set_search_max_price($search_max_price)
    {
        $filtered_search_max_price = $this->integer_filter($search_max_price);
        $this->search_max_price = $filtered_search_max_price;
    }
    public function set_search_new_old($search_new_old)
    {
        $filtered_search_new_old = $this->string_filter($search_new_old);
        $this->search_new_old = $filtered_search_new_old;
    }
    public function set_search_size($search_size)
    {   
        if(in_array($search_size, self::$available_ribbon_sizes))
            $this->search_size = $search_size;
    }
    public function set_search_status($search_status)
    {   
        if(in_array($search_status, self::$available_status))
        $this->search_status = $search_status;
    }
    public function set_search_min_date($search_min_date)
    {   
        $this->search_min_date = $search_min_date;
    }
    public function set_search_max_date($search_max_date)
    {   
        $this->search_max_date = $search_max_date;
    }
    public function set_order_type($order_type)
    {
        if(in_array($order_type, self::$available_order_types))
            $this->order_type = $order_type;
    }

    public function get_buy_price()
    {
        global $database;
        $stmt = "SELECT buy_price FROM ribbons WHERE ribbon_id={$this->ribbon_id}";
        return $database->query($stmt)->fetchColumn();
        //REQUIRES MULTIPLE WITH COUNT AFTER FETCHING ...
    }

    public function get_ribbon_data()
    {
        global $database;
        $stmt = "SELECT * FROM ribbons WHERE ribbon_id={$this->ribbon_id}";
        return $database->query($stmt)->fetch();
    }

    public function get_ribbon_number_sold()
    {
        global $database;
        $stmt = "SELECT SUM(count) FROM sold_ribbons WHERE foreign_ribbon_id={$this->ribbon_id}";
        return $database->query($stmt)->fetchColumn();
    }

    public function add()
    {
        global $database;
        $stmt ="INSERT INTO ribbons(size , buy_price , status , notes , total_count , date_added 
                , available , foreign_buy_id,evaluative_price,new_old ) VALUES ('{$this->size}' , {$this->buy_price} , 
                {$this->status} , '{$this->notes}' , {$this->total_count} , '{$this->date_added}' , {$this->total_count} , {$this->foreign_buy_id},{$this->evaluative_price},'{$this->new_old}')";
        return $database->query($stmt) ? true : flase ;
    }

                //=============================================================================================================

    public function get_available_ribbons_with_conditions()
    {
        global $database;
        $stmt = "SELECT * FROM ribbons WHERE available>0 ";
        if(!empty($this->search_min_price))
            $stmt .= "AND evaluative_price >= {$this->search_min_price} ";
        if(!empty($this->search_min_price))
            $stmt .= "AND evaluative_price <= {$this->search_max_price} ";
        if(!empty($this->search_min_date))
            $stmt .= "AND date_added >= '{$this->search_min_date}' ";
        if(!empty($this->search_max_date))
            $stmt .= "AND date_added <= '{$this->search_max_date}' ";
        if(!empty($this->search_new_old))
            $stmt .= "AND new_old = '{$this->search_new_old}' ";
        if(!empty($this->search_status))
            $stmt .= "AND status = {$this->search_status} ";
        if(!empty($this->search_size))
            $stmt .= "AND size = '{$this->search_size}' ";
        if(!empty($this->foreign_buy_id))
            $stmt .= "AND foreign_buy_id = {$this->foreign_buy_id} ";
        if(!empty($this->order_type))
            $stmt .= "ORDER BY {$this->order_type} DESC";

        $tubes = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tubes;
    }
    public function get_sold_ribbons_with_conditions()
    {
        global $database;
        $stmt = "SELECT * FROM sold_ribbons INNER JOIN ribbons ON ribbons .ribbon_id = sold_ribbons . 
                 foreign_ribbon_id WHERE 1 ";
        if(!empty($this->search_min_price))
            $stmt .= "AND sell_price >= {$this->search_min_price} ";
        if(!empty($this->search_min_price))
            $stmt .= "AND sell_price <= {$this->search_max_price} ";
        if(!empty($this->search_min_date))
            $stmt .= "AND sell_date >= '{$this->search_min_date}' ";
        if(!empty($this->search_max_date))
            $stmt .= "AND sell_date <= '{$this->search_max_date}' ";
        if(!empty($this->search_status))
            $stmt .= "AND status = {$this->search_status} ";
        if(!empty($this->search_new_old))
            $stmt .= "AND new_old = '{$this->search_new_old}' ";
        if(!empty($this->search_size))
            $stmt .= "AND size = '{$this->search_size}' ";
        if(!empty($this->order_type))
            $stmt .= "ORDER BY {$this->order_type} DESC";

        $tubes = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tubes;
    }

                //=============================================================================================================

    public function update()
    {
        global $database;
        $stmt = "UPDATE ribbons SET size='{$this->size}' , status={$this->status}
                , notes='{$this->notes}'
                ,new_old='{$this->new_old}',
                evaluative_price={$this->evaluative_price} ";
        if(!empty($this->buy_price))
            $stmt .= ", buy_price = {$this->buy_price} ";
        if(!empty($this->date_added))
            $stmt .= ", date_added = '{$this->date_added}' ";
        if(!empty($this->total_count))
        {
            $stmt .= ", available = available + ( {$this->total_count} - total_count ) , total_count={$this->total_count} ";
        }
        $stmt .= "WHERE ribbon_id={$this->ribbon_id}";
        return $database->query($stmt) ? true : false;
    }

                //=============================================================================================================

    public function delete()
    {
        global $database;

        $stmt = "DELETE FROM ribbons WHERE ribbon_id={$this->ribbon_id}";
        return $database->query($stmt) ? true : false;
    }

                //=============================================================================================================

    public function get_buy_ribbons()
    {
        global $database;
        $stmt = "SELECT * FROM ribbons WHERE foreign_buy_id={$this->foreign_buy_id}";
        $tubes = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tubes;
    }

    public function get_sell_ribbons()
    {
        global $database;
        $stmt = "SELECT * FROM sold_ribbons INNER JOIN ribbons ON ribbons.ribbon_id = sold_ribbons.foreign_ribbon_id WHERE foreign_sell_id={$this->foreign_sell_id}";
        $tubes = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tubes;
    }

                //=============================================================================================================

    public function sell()
    {
        global $database;
        $stmt = "UPDATE ribbons SET available=available - {$this->count} WHERE ribbon_id={$this->foreign_ribbon_id}";
        $database->query($stmt);
        $stmt = "INSERT INTO sold_ribbons(count,sell_price,sell_date,foreign_sell_id,foreign_ribbon_id) 
                 VALUES({$this->count},{$this->sell_price},'{$this->sell_date}',{$this->foreign_sell_id},
                 {$this->foreign_ribbon_id})";
        return $database->query($stmt) ? true : false ;

        //UPDATING THE DAY FEED
        // $stmt = "SELECT date from agenda WHERE date='{$this->sell_date}'";
        // $row = $database->query($stmt)->fetch();
        // if(empty($row))
        // {
        //     $stmt = "INSERT INTO agenda (date,feed,outgoings) VALUES('{$this->sell_date}',{$this->sell_price}-(SELECT buy_price FROM ribbons WHERE ribbon_id={$this->foreign_ribbon_id}),0)";
        //     $database->query($stmt);
        // }
        // else
        // {
        //     $stmt = "UPDATE agenda SET feed=feed+{$this->count}*({$this->sell_price}-(SELECT buy_price FROM ribbons WHERE ribbon_id={$this->foreign_ribbon_id})) WHERE date='{$this->sell_date}' ";
        //     $database->query($stmt);
        // }
    }
    
    public function get_ribbon_back($back_number)
    {
        global $database;
        $stmt = "UPDATE ribbons SET available=available + {$back_number} 
                 WHERE ribbon_id=(SELECT foreign_ribbon_id FROM sold_ribbons WHERE sold_ribbon_id={$this->sold_ribbon_id})";
        $database->query($stmt);
        $stmt = "UPDATE sold_ribbons SET count=count - {$back_number} 
                 WHERE sold_ribbon_id={$this->sold_ribbon_id}";
        $database->query($stmt);
        $stmt = "DELETE FROM sold_ribbons WHERE count <= 0";
        $database->query($stmt);
        return ;
    }

    public function send_ribbon_back($back_number)
    {
        global $database;
        $stmt = "UPDATE ribbons SET available=available - {$back_number} ,
                 total_count=total_count-{$back_number}
                 WHERE ribbon_id={$this->ribbon_id}";
        $database->query($stmt);
        $stmt = "DELETE FROM ribbons WHERE total_count <= 0";
        $database->query($stmt);
        return ;
    }

    public function delete_buy_ribbons()
    {
        global $database;
        $stmt = "DELETE FROM ribbons WHERE foreign_buy_id = {$this->foreign_buy_id}";
        return $database->query($stmt);
    }

    public function delete_sell_ribbons()
    {
        global $database;
        $stmt = "UPDATE ribbons SET available = available + IFNULL((SELECT count FROM sold_ribbons WHERE foreign_sell_id={$this->foreign_sell_id} AND ribbons.ribbon_id = sold_ribbons.foreign_ribbon_id),0)";
        $database->query($stmt);
        $stmt = "DELETE FROM sold_ribbons WHERE foreign_sell_id = {$this->foreign_sell_id}";
        return $database->query($stmt);
    }

                //=============================================================================================================

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
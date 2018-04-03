<?php

class Tyres
{
    private $tyre_id;
    private $size;
    private $buy_price;
    private $available;
    private $brand;
    private $status;
    private $date_added;
    private $notes;
    private $total_count;
    private $foreign_buy_id;
    private $type;
    private $evaluative_price;
    private $new_old;

    private $sold_tyre_id;
    private $sell_date;
    private $sell_price;
    private $count;
    private $foreign_sell_id;
    private $foreign_tyre_id;

    private $search_min_price;
    private $search_max_price;
    private $search_size;
    private $search_brand;
    private $search_status;
    private $search_min_date;
    private $search_max_date;
    private $search_new_old;
    private $search_type;
    private $order_type;

    static $available_tyre_sizes = array('16/600','16/650','16/700','16/750','16/825','16/900','16/1050','17.5','18/1000','18/1200','18/18*12.5','19/600','20/600','20/650','20/700','20/750','20/825','20/900','20/1000','20/1100','20/1200','20/1300','20/1400','21','22.5/10','22.5/11','22.5/12','22.5/13','22.5/295/60','22.5/295/70','22.5/295/80','22.5/315/60','22.5/315/65','22.5/315/70','22.5/315/80','24/1200','24/1300','24/1400','24/16.9','24/17','24/18','25/15.5','25/17.5','25/20.5','25/32.5','25/26.5','25/29.5','رواكد');
    static $available_brands = array('ميشلان','ساميتومو','باروم','تايجر','كوبر','نانكانج','نيتو','باكيت','كليبر','اليانس','اودسو','سها','سوبر ستون','اورورا','دستون','دي ماستر','ميلر','ثاندرار','جيه كيه','سمسون','سمسونج','جود ريش','نسر','بريجستون','يوكوهاما','تويو','فايرستون','ميتس','بتلاس','جود يير','فولدا','صافا','كومهو','هانكوك','نوكيا','كونتننتال','مارشال','جي تي','فديرال','مكسيس','شمبيون','ريكن','كيندا','بريسا','صيني','اوتانا','روسي','اوكراني','سيريلانكي','فيتنامي','دانلوب','شات','بريللي','تريال','فاروس');
    static $available_status = array(1,2,3);
    static $available_order_types = array('date_added', 'sell_date', 'evaluative_price', 'sell_price', 'status' , 'size');

    public function set_size($size)
    {
        if(in_array($size, self::$available_tyre_sizes))    
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
    public function set_type($type)
    {
        $filtered_type = $this->string_filter($type);
        $this->type = $filtered_type;
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
    public function set_brand($brand)
    {
        if(in_array($brand, self::$available_brands))
            $this->brand = $brand;
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
    public function set_sold_tyre_id($sold_tyre_id)
    {
        $filtered_sold_tyre_id = $this->integer_filter($sold_tyre_id);
        $this->sold_tyre_id = $filtered_sold_tyre_id;
    }
    public function set_date_added($date_added)
    {   
        $this->date_added = $date_added;
    }
    public function set_sell_date($sell_date)
    {   
        $this->sell_date = $sell_date;
    }
    public function set_foreign_tyre_id($foreign_tyre_id)
    {
        $filtered_foreign_tyre_id = $this->integer_filter($foreign_tyre_id);
        $this->foreign_tyre_id = $filtered_foreign_tyre_id;
    }
    public function set_tyre_id($tyre_id)
    {
        $filtered_tyre_id = $this->integer_filter($tyre_id);
        $this->tyre_id = $filtered_tyre_id;
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
    public function set_search_type($search_type)
    {
        $filtered_search_type = $this->string_filter($search_type);
        $this->search_type = $filtered_search_type;
    }
    public function set_search_size($search_size)
    {   
        if(in_array($search_size, self::$available_tyre_sizes))
            $this->search_size = $search_size;
    }
    public function set_search_brand($search_brand)
    {   
        if(in_array($search_brand, self::$available_brands))
            $this->search_brand = $search_brand;
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
        $stmt = "SELECT buy_price FROM tyres WHERE tyre_id={$this->tyre_id}";
        return $database->query($stmt)->fetchColumn();
        //REQUIRES MULTIPLE WITH COUNT AFTER FETCHING ...
    }

    public function get_tyre_data()
    {
        global $database;
        $stmt = "SELECT * FROM tyres WHERE tyre_id={$this->tyre_id}";
        return $database->query($stmt)->fetch();
    }

    public function get_tyre_number_sold()
    {
        global $database;
        $stmt = "SELECT SUM(count) FROM sold_tyres WHERE foreign_tyre_id={$this->tyre_id}";
        return $database->query($stmt)->fetchColumn();
    }

    public function add()
    {
        global $database;
        $stmt ="INSERT INTO tyres( size , buy_price , brand , status , notes , total_count , date_added 
                , available , foreign_buy_id , evaluative_price,type,new_old ) 
                VALUES ('{$this->size}' , {$this->buy_price} , '{$this->brand}' , {$this->status} , 
                '{$this->notes}' , {$this->total_count} ,'{$this->date_added}' , {$this->total_count} , 
                {$this->foreign_buy_id},{$this->evaluative_price},'{$this->type}','{$this->new_old}')";
        return $database->query($stmt) ? true : flase ;
    }

                //=============================================================================================================

    public function get_available_tyres_with_conditions()
    {
        global $database;
        $stmt = "SELECT * FROM tyres WHERE available>0 ";
        if(!empty($this->search_min_price))
            $stmt .= "AND evaluative_price >= {$this->search_min_price} ";
        if(!empty($this->search_min_price))
            $stmt .= "AND evaluative_price <= {$this->search_max_price} ";
        if(!empty($this->search_min_date))
            $stmt .= "AND date_added >= '{$this->search_min_date}' ";
        if(!empty($this->search_max_date))
            $stmt .= "AND date_added <= '{$this->search_max_date}' ";
        if(!empty($this->search_brand))
            $stmt .= "AND brand = '{$this->search_brand}' ";
        if(!empty($this->search_status))
            $stmt .= "AND status = {$this->search_status} ";
        if(!empty($this->search_type))
            $stmt .= "AND type = '{$this->search_type}' ";
        if(!empty($this->search_new_old))
            $stmt .= "AND new_old = '{$this->search_new_old}' ";
        if(!empty($this->search_size))
            $stmt .= "AND size = '{$this->search_size}' ";
        if(!empty($this->foreign_buy_id))
            $stmt .= "AND foreign_buy_id = {$this->foreign_buy_id} ";
        if(!empty($this->order_type))
            $stmt .= "ORDER BY {$this->order_type} DESC";

        $tyres = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tyres;
    }
    public function get_sold_tyres_with_conditions()
    {
        global $database;
        $stmt = "SELECT * FROM sold_tyres INNER JOIN tyres ON tyres .tyre_id = sold_tyres . 
                 foreign_tyre_id WHERE 1 ";
        if(!empty($this->search_min_price))
            $stmt .= "AND sell_price >= {$this->search_min_price} ";
        if(!empty($this->search_min_price))
            $stmt .= "AND sell_price <= {$this->search_max_price} ";
        if(!empty($this->search_min_date))
            $stmt .= "AND sell_date >= '{$this->search_min_date}' ";
        if(!empty($this->search_max_date))
            $stmt .= "AND sell_date <= '{$this->search_max_date}' ";
        if(!empty($this->search_brand))
            $stmt .= "AND brand = '{$this->search_brand}' ";
        if(!empty($this->search_status))
            $stmt .= "AND status = {$this->search_status} ";
        if(!empty($this->search_type))
            $stmt .= "AND type = '{$this->search_type}' ";
        if(!empty($this->search_new_old))
            $stmt .= "AND new_old = '{$this->search_new_old}' ";
        if(!empty($this->search_size))
            $stmt .= "AND size = '{$this->search_size}' ";
        if(!empty($this->order_type))
            $stmt .= "ORDER BY {$this->order_type} DESC";

        $tyres = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tyres;
    }

                //=============================================================================================================

    public function update()
    {
        global $database;
        $stmt = "UPDATE tyres SET size='{$this->size}' , status={$this->status}
                , notes='{$this->notes}'
                ,type='{$this->type}',brand='{$this->brand}',new_old='{$this->new_old}',
                evaluative_price={$this->evaluative_price} ";
        if(!empty($this->buy_price))
            $stmt .= ", buy_price = {$this->buy_price} ";
        if(!empty($this->date_added))
            $stmt .= ", date_added = '{$this->date_added}' ";
        if(!empty($this->total_count))
        {
            $stmt .= ", available = available + ( {$this->total_count} - total_count ) , total_count={$this->total_count} ";
        }
        $stmt .= "WHERE tyre_id={$this->tyre_id}";
        return $database->query($stmt) ? true : false;
    }

                //=============================================================================================================

    public function delete()
    {
        global $database;
        $stmt = "DELETE FROM tyres WHERE tyre_id={$this->tyre_id}";
        return $database->query($stmt) ? true : false;
    }

                //=============================================================================================================

    public function get_buy_tyres()
    {
        global $database;
        $stmt = "SELECT * FROM tyres WHERE foreign_buy_id={$this->foreign_buy_id}";
        $tyres = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tyres;
    }

    public function get_sell_tyres()
    {
        global $database;
        $stmt = "SELECT * FROM sold_tyres INNER JOIN tyres ON tyres .tyre_id = sold_tyres . 
                 foreign_tyre_id WHERE foreign_sell_id={$this->foreign_sell_id}";
        $tyres = $database->query($stmt)->fetchAll(PDO::FETCH_ASSOC);
        return $tyres;
    }

                //=============================================================================================================

    public function sell()
    {
        global $database;
        $stmt = "UPDATE tyres SET available=available - {$this->count} WHERE tyre_id={$this->foreign_tyre_id}";
        $database->query($stmt);
        $stmt = "INSERT INTO sold_tyres(count,sell_price,sell_date,foreign_sell_id,foreign_tyre_id) 
                 VALUES({$this->count},{$this->sell_price},'{$this->sell_date}',{$this->foreign_sell_id},
                 {$this->foreign_tyre_id})";
        $database->query($stmt);
    }
    
    // public function get_tyre_back($back_number)
    // {
    //     global $database;
    //     $stmt = "UPDATE tyres SET available=available + {$back_number} 
    //              WHERE tyre_id=(SELECT foreign_tyre_id FROM sold_tyres WHERE sold_tyre_id={$this->sold_tyre_id})";
    //     $database->query($stmt);
    //     $stmt = "UPDATE sold_tyres SET count=count - {$back_number} 
    //              WHERE sold_tyre_id={$this->sold_tyre_id}";
    //     $database->query($stmt);
    //     $stmt = "DELETE FROM sold_tyres WHERE count <= 0";
    //     $database->query($stmt);
    //     return ;
    // }

    // public function send_tyre_back($back_number)
    // {
    //     global $database;
    //     $stmt = "UPDATE tyres SET available=available - {$back_number} ,
    //              total_count=total_count-{$back_number}
    //              WHERE tyre_id={$this->tyre_id}";
    //     $database->query($stmt);
    //     $stmt = "DELETE FROM tyres WHERE total_count <= 0";
    //     $database->query($stmt);
    //     return ;
    // }

    public function delete_buy_tyres()
    {
        global $database;
        $stmt = "DELETE FROM tyres WHERE foreign_buy_id = {$this->foreign_buy_id}";
        return $database->query($stmt);
    }

    public function delete_sell_tyres()
    {
        global $database;
        $stmt = "UPDATE tyres SET available = available + IFNULL((SELECT count FROM sold_tyres WHERE foreign_sell_id={$this->foreign_sell_id} AND tyres.tyre_id = sold_tyres.foreign_tyre_id),0)";
        $database->query($stmt);
        $stmt = "DELETE FROM sold_tyres WHERE foreign_sell_id = {$this->foreign_sell_id}";
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
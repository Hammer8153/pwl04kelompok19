<?php


class crud {


public function get_products_recent() {

    require(ROOT_PATH . "inc/database.php");

    try{
        $results = $db->query("SELECT name, price, img, sku, paypal
            FROM products
            ORDER BY sku DESC
            LIMIT 4");
     } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);
    $recent = array_reverse($recent);

    return $recent;

    
}

public function get_products_search($s) {
        
    require(ROOT_PATH . "inc/database.php");

    try {
        $results = $db->prepare("
            SELECT name, price, img, sku, paypal
            FROM products
            WHERE name LIKE ?
            ORDER BY sku");
        $results->bindValue(1,"%" . $s . "%");
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from database.";
        exit;
    }

    $matches = $results->fetchAll(PDO::FETCH_ASSOC);

    return $matches;
}


public function get_products_count() {

    require(ROOT_PATH . "inc/database.php");

    try {
        $results = $db->query("
            SELECT COUNT(sku)
            FROM products");
    } catch (Exception $e) {
        echo "Data could not be retrieved from database.";
        exit;
    }

    return intval($results->fetchColumn(0));
}


public function get_products_subset($positionStart, $positionEnd) {
    $offset = $positionStart - 1;
    $rows = $positionEnd - $positionStart + 1;

    require(ROOT_PATH . "inc/database.php");

    try {
        $results = $db->prepare("
            SELECT name, price, img, sku, paypal
            FROM products
            ORDER BY sku
            limit ?, ?");
        $results->bindParam(1,$offset,PDO::PARAM_INT);
        $results->bindParam(2,$rows,PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $subset = $results->fetchAll(PDO::FETCH_ASSOC);

    return $subset;
}


public function get_products_all() {
    

require(ROOT_PATH . "inc/database.php");
try {
    $results = $db->query("
        SELECT name,price,img,sku,paypal  
        FROM products 
        ORDER BY sku ASC");
         } catch (Exception $e) {
        echo "Data could not be retrieved from database bro!!.";
        exit;
    }

    $products = $results->fetchAll(PDO::FETCH_ASSOC);



    return $products;
}


public function get_product_single($sku){

    require(ROOT_PATH . "inc/database.php");

    try {
        $results = $db->prepare("SELECT name, price, img, sku, paypal FROM products WHERE sku = ?");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);
    
    if ($product == false ) return $product;
    $product["sizes"] = array();

    try {
        $results = $db->prepare("
            SELECT size 
            FROM products_sizes a 
            INNER JOIN sizes b ON a.size_id = b.id
            WHERE product_sku = ?
            ORDER BY `order`");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    while ($row = $results->fetch(PDO::FETCH_ASSOC)){
        $product["sizes"][] = $row["size"];
    }

    return $product;

    }

}

class user {
        public function insert($a,$b) {
        require(ROOT_PATH . "inc/database.php");
    
        try{
            $results = $db->prepare("INSERT into customer VALUES (NULL,?,?)");
            $results->bindParam(1,$a);
            $results->bindParam(2,md5($b));
            $results->execute();
            return $results;
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }
        }



        public function login($username, $password) {
        require(ROOT_PATH . "inc/database.php");

        $password = md5($password); 
        $results = $db->query("SELECT * from customer where username='$username' && password='$password' ");
        $row = (bool) $results->fetchColumn();
        
        if ($row == 1 ) {
        session_start();
        $_SESSION['login'] = $username;
        return TRUE; }
        else { 
        return FALSE; } 
        }

        public function logout(){
            require(ROOT_PATH . "inc/database.php");
            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
        }
    }


class admin{


        public function admlogin($uname, $passwd) {
        require(ROOT_PATH . "inc/database.php");
        
        $results = $db->query("SELECT * from admin where uname='$uname' && passwd='$passwd'");
        $row = (bool) $results->fetchColumn();
        
        if ($row == 1 ) {
        session_start();
        $_SESSION['admin'] = $uname;
        return TRUE; }
        else { 
        return FALSE; } 
        }

        public function userview(){
            require(ROOT_PATH . "inc/database.php");
            
            try {
                $results = $db->query("SELECT * FROM customer");
            } catch (Exception $e) {
                echo "Data could not be retrieved from database bro!!.";
            exit;
            }

            $view = $results->fetchAll(PDO::FETCH_ASSOC);

            return $view;
           }

        public function userdel($a){

            require(ROOT_PATH . "inc/database.php");
            
            try {
                $results = $db->query("DELETE FROM admin where id_cust='$a'");
                header('location: user.php');
            } catch (Exception $e) {
                echo "Data could not be retrieved from database bro!!.";
                exit;
            }
        }
		
		public function insertproducts($a,$b,$c,$d) {
        require(ROOT_PATH . "inc/database.php");
    
        try{
            $results = $db->prepare("INSERT into products VALUES (sku++,?,?,?,?)");
            $results->bindParam(1,$a);
            $results->bindParam(2,$b);
			$results->bindParam(3,$c);
			$results->bindParam(4,$d);
            $results->execute();
            return $results;
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }
        }
		
		public function delproducts($a){

            require(ROOT_PATH . "inc/database.php");
            
            try {
                $results = $db->query("DELETE FROM products where sku='$a'");
                header('location: delete.php');
            } catch (Exception $e) {
                echo "Data could not be retrieved from database bro!!.";
                exit;
            }
        }

}
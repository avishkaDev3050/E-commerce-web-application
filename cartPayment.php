<?php

session_start();
include 'connection.php';

if (isset($_SESSION['u'])) {
    
    $user_email = $_SESSION['u']['email'];

    $adddress_rs = Database::search("SELECT *  FROM `address` WHERE `user_email` = '". $user_email ."' ");
    $adddress    = $adddress_rs->fetch_assoc();
    $line_1 = $adddress['line_1'];
    $line_2 = $adddress['line_2'];
    $city_rs = Database::search("SELECT * FROM `city` WHERE `id` = '". $adddress['city_id'] ."' ");
    $city_name  = $city_rs->fetch_assoc();

    $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_email` = '". $user_email ."' ");
    $num_rs = $cart_rs->num_rows;

    $model_namee;
    $totalAmount = 0;
    $totalQty = 0;

    for ($i=0; $i < $num_rs; $i++) { 

        $cart_products = $cart_rs->fetch_assoc();

        $product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '". $cart_products['product_id'] ."'");
        $product    = $product_rs->fetch_assoc();
        $price = $product['price'];

        // $totalAmount += $price * $totalQty;
        $totalAmount = $totalAmount + ($price * $cart_products['qty']);

        $model = Database::search("SELECT * FROM `model` WHERE `id` = '". $product['model_id'] ."' ");
        $model_name = $model->fetch_assoc();

    }

    // $totalAmount += 5000;

    $amount = 100;
    $merchant_id = "1226423";
    $order_id = uniqid();
    $currency = "LKR";
    $item = $model_name['model'];
    $merchant_secret = "MzkzMjU5NTAzNjI2Mjk2Njc3MTIyNDYzNTc3NjYwMTY1MjExNjgyNg==";
    $fname = $_SESSION['u']['fname'];
    $lname = $_SESSION['u']['lname'];
    $email = $_SESSION['u']['email'];
    $phone = $_SESSION['u']['mobile'];
    $addres = $line_1 . ' ' . $line_2;
    $city = $city_name['city'];
    $country = "Sri Lanka";

    $hash = strtoupper(
        md5(
            $merchant_id . 
            $order_id . 
            number_format($totalAmount, 2, '.', '') . 
            $currency .  
            strtoupper(md5($merchant_secret)) 
        )
    );

    $array = [];
    $array["amount"] = $amount;
    $array["merchant_id"] = $merchant_id;
    $array["order_id"] = $order_id;
    $array["currency"] = $currency;
    $array["item"] = $item;
    $array["merchant_secret"] = $merchant_secret;
    $array["fname"] = $fname;
    $array["lname"] = $lname;
    $array["email"] = $email;
    $array["phone"] = $phone;
    $array["addres"] = $addres;
    $array["city"] = $city;
    $array["country"] = $country;
    $array["hash"] = $hash;

    $jsonObj = json_encode($array);
    

    echo $jsonObj;
    // echo($totalAmount);

}

?>

<?php
// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'YOUR_SERVER_KEY';

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
    'payment_type' => 'gopay',
    'gopay': {
        'enable_callback': true,                // optional
        'callback_url': 'someapps://callback'   // optional, anda juga dapat menggunakan url web seperti "https://myshop.com/finish"
    }
);

$response = \Midtrans\CoreApi::charge($params);
?>

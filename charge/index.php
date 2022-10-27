<?php
curl -X POST -d '{  
   "transaction_details":{  
      "order_id":"mobile-12345",
      "gross_amount":280000
   },
   "item_details":[  
      {  
         "id":"A01",
         "price":280000,
         "quantity":1,
         "name":"Mie Ayam Komplit"
      }
   ],
   "customer_details":[  
      {  
         "email":"tester@example.com",
         "first_name":"Budi",
         "last_name":"Khannedy",
         "phone":"628112341234"
      }
   ]
}' "https://foodloop.herokuapp.com/charge/index.php/"
?>

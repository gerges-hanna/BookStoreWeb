<?php
include 'DBMangement.php';
class CustomerService {
  
    public function getCustomers(){

      $db = new  DBMangement();
      $db->ConnectStart();
      $query = "SELECT * FROM customer";
      $res = $db->executequery($query);
      $arr = array() ;
      
      while ($row=  mysqli_fetch_assoc($res))
            {
          echo 'hiiii';
                $cu=new Customer();
                $cu->id=$row['person_id'];
                $cu->phonr=$row['phone'];
                $arr[] = $cu ;
                echo 'hi pop';
            }
           
      $db->CloseConnect();
      return $arr;
   }
}

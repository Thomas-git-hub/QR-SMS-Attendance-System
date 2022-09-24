<?php
//  if(empty($_POST)) { header('location: ../../error.php'); exit(); }
 require_once '../../includes/conn.php';
 require_once '../../includes/func.php';

extract($_POST);
$action = $_GET['action'];




switch ($action) {

        case 'updateProfile':    
            $data = Array (
                            "sdt_address" =>$address,
                            "sdt_parentNumber" =>  $parentNumber,
                          );
              $db->where("sdt_ref_id", $sdt_ref_id);
            if( $db->update ('student_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        echo json_encode($res);
        break;

        case 'updatePass':    
            $data = Array (
                            "sdt_username" =>$email,
                            "sdt_password" =>  $password,
                          );
              $db->where("sdt_ref_id", $sdt_ref_id);
            if( $db->update ('student_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        echo json_encode($res);
        break;
    
   
}

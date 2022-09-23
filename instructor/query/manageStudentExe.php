<?php
//  if(empty($_POST)) { header('location: ../../error.php'); exit(); }
 require_once '../../includes/conn.php';
 require_once '../../includes/func.php';

extract($_POST);
$action = $_GET['action'];




switch ($action) {

     case  'toggle':
        if($status==1)
        $status = 0;
      else
        $status = 1;
        $data = Array (
            'sdt_active' => $status,
        );
        $db->where ('sdt_id', $id);
        if ($db->update ('student_tbl', $data))
            $res = array("res" => true , "status" => $status , 'id' =>$id);
        else
            $res = array("res" => false);
        echo json_encode($res);
        break;

   
    
   
}

?>



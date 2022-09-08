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
            'status' => $status,
        );
        $db->where ('ins_id', $id);
        if ($db->update ('instructor_tbl', $data))
            $res = array("res" => true , "status" => $status , 'id' =>$id);
        else
            $res = array("res" => false);
        echo json_encode($res);
        break;

    case 'getone':
        $db->where("ins_ref_id", test_input($ins_ref));
        $res= $db->getOne ("instructor_tbl");
        echo json_encode($res);
        break;
    
    case 'add':
        $assignId= get_random_figures();
        $db->where("ins_fullname", $fullname);
        $db->Where("ins_idnumber", $employeeid);

        if($db->has("instructor_tbl")) {
            $res = array("res" => 'exist');
        }else{
            $data = Array ("ins_ref_id" =>  $assignId,
                            "ins_fullname" =>  $fullname,
                            "ins_idnumber" =>  $employeeid,
                            "ins_contact" =>  $contact,
                            "username" =>  $username,
                            "password" =>  $password,
                          );
            if( $db->insert ('instructor_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        }
        echo json_encode($res);
        break;
        case 'update':    
            $data = Array (
                            "ins_contact" =>$contact,
                            "username" =>  $username,
                            "password" =>  $password,
                          );
              $db->where("ins_ref_id", $ins_ref);
            if( $db->update ('instructor_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        echo json_encode($res);
        break;
    
   
}



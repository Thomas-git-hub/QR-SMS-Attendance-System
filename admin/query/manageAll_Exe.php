<?php
//  if(empty($_POST)) { header('location: ../../error.php'); exit(); }
 require_once '../../includes/conn.php';
 require_once '../../includes/func.php';

extract($_POST);
$action = $_GET['action'];

switch ($action) {
    
    case 'add':
        $assignId= get_random_figures();
        $db->where("str_name", $strandName);
        $db->Where("grade", $strandGrade);

        if($db->has("strand_tbl")) {
            $res = array("res" => 'exist');
        }else{
            $data = Array ("str_ref_id" =>  $assignId,
                            "str_name" =>  $strandName,
                            "grade" =>  $strandGrade,
                            //"date_added" => date('Y-m-d H:i:s')
                          );
            if( $db->insert ('strand_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        }
        echo json_encode($res);
        break;

     case 'addblock':
        $assignId= get_random_figures();
        $db->where("block_name", $blockName);
        $db->Where("str_ref_id", $str_ref);

        if($db->has("block_tbl")) {
            $res = array("res" => 'exist');
        }else{
            $data = Array ("block_ref_id" =>  $assignId,
                            "block_name" =>  $blockName,
                            "str_ref_id" =>  $str_ref,
                            //"date_added" => date('Y-m-d H:i:s')
                          );
            if( $db->insert ('block_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        }
        echo json_encode($res);
        break;

        case 'addsub':
        $assignId= get_random_figures();
        $db->where("subject_name", $subName);
        $db->Where("str_ref_id", $str_ref);

        if($db->has("subject_tbl")) {
            $res = array("res" => 'exist');
        }else{
            $data = Array ("subject_ref_id" =>  $assignId,
                            "subject_name" =>  $subName,
                            "str_ref_id" =>  $str_ref,
                            //"date_added" => date('Y-m-d H:i:s')
                          );
            if( $db->insert ('subject_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        }
        echo json_encode($res);
        break;

  
    
   
}



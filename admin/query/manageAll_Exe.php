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

       case 'assign':
        $assignId= get_random_figures();
        
        // $db->join("block_subject bl", "ins.bs_id=bl.bs_id", "LEFT");
        // // $block = $db->get ("instructor_tbl ins", null, "bl.block_ref_id, bl.subject_ref_id");
        // $db->where("ins.ins_ref_id", $ins);
        // $db->Where("bl.block_ref_id", $strandGrade);
        // $db->Where("bl.subject_ref_id", $subject);

        // if($db->has("instructor_tbl ins")) {
        //     $res = array("res" => 'exist');
        // }else{
            $data = Array ("bs_id" =>  $assignId,
                            "block_ref_id" =>  $strandGrade,
                            "subject_ref_id" =>  $subject,
                            //"date_added" => date('Y-m-d H:i:s')
                          );
            $data2 = Array ( "ins_ref_id" =>  $ins,
                            "bs_id" =>  $assignId,
                            //"date_added" => date('Y-m-d H:i:s')
                          );
            if( $db->insert ('block_subject', $data)&& $db->insert ('assign_sub', $data2))

                $res = array("res" => true);
            else
                $res = array("res" => false);
        // }
        echo json_encode($res);
        break;
   
}



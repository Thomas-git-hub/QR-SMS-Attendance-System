<?php
 if(empty($_POST)) { header('location: ../../error.php'); exit(); }
 require_once '../../includes/conn.php';
 require_once '../../includes/func.php';

extract($_POST);
$action = $_GET['action'];
switch ($action) {
    case 'add':
        $id= get_random_figures();
        $db->where("str_name", $strandName);
        $db->Where("grade", $strandGrade);
        
        if($db->has("strand_tbl")) {
            $res = array("res" => 'exist');
        }else{
            $data = Array ("str_ref_id" =>  $id,
                            "str_name" =>  $strandName,
                            "grade" =>  $strandGrade,
                            //"date_added" => date('Y-m-d H:i:s')
                          );
            if( $db->insert ('strand_tbl', $data))
                $res = array("res" => true);
            else
                $res = array("res" => false);
        }
        break;
    
    default:
        # code...
        break;
}
echo json_encode($res);


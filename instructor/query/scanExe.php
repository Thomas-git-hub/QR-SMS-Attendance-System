<?php

extract($_POST);

// if(!isset($_POST)){
//     header('location: ../scanner.php');
//     exit();
// }

require_once '../../includes/conn.php';
require_once '../../includes/func.php';



// $type =1;
// $ins_ref_id = '166368460172463';
// $bs_id = '166368487899620';
// $block_ref_id ='166368455546707';
// $std_ref_id =   '166368494386671';



$db->where("student_ref_id", $std_ref_id);
if( $check= $db->getOne("assign_student")) {
    if ($db->count > 0){

        if($check['block_ref_id'] === $block_ref_id) {


                 $res=  " same galing sa test {$check['block_ref_id']} --- $block_ref_id";
                    
                $db->where("sdt_ref_id", $std_ref_id);
                $student = $db->getOne("student_tbl");
                $sms_to = $student['sdt_parentNumber'];
                test_input($sms_to);

                $studentName = strtoupper($student['sdt_fullname']);

                $db->where("ins_ref_id", test_input($ins_ref_id) );
                $instructor = $db->getOne("instructor_tbl");
                $instructorName = ucwords($instructor['ins_fullname']);

                if($type ==1 ){
                    $type = 'ON-TIME';
                }

                else if($type ==2 ){
                    $type = 'LATE';
                }
                else if($type ==3 ){
                    $type = 'EXCUSE';
                }

                $today = date("g:i a - F j "); 
                $sms_msg = "{$studentName} ,  {$type} on Mr/Ms. {$instructorName} class at {$today} \n \n Note: This auto generated -Please Do not reply";

                date_default_timezone_set('Asia/Manila');
                $now= date('Y-m-d H:i:s');

                #   uncommnet kungg gusto mag testting mag send / inoff ko lng

                if( gw_send_sms($sms_to,$sms_msg) == 'success'){
                    $data = Array ("ins_ref_id" => $ins_ref_id,
                    "bs_id" =>  $bs_id,
                    "std_ref_id" => $std_ref_id,
                    "sender" => 'ONE WAY SMS',
                    "trans_message" => $sms_msg,
                    "type" => $type,
                    "trans_datetime" => $now,
                    'status' => 'active',
                );
                if($db->insert ('transaction_tbl', $data)) {
                    $res = array ('res' => 'success');
                }else{
                    $res = array ('res' => 'failed');
                }
                }else{
                    $res = array ('res' => 'error');
                }

            
                
                // $data = Array ("ins_ref_id" => $ins_ref_id,
                //     "bs_id" =>  $bs_id,
                //     "std_ref_id" => $std_ref_id,
                //     "sender" => 'ONE WAY SMS',
                //     "trans_message" => $sms_msg,
                //     "type" => $type,
                //     "trans_datetime" => $now,
                //     'status' => 'active',
                // );
                // if($db->insert ('transaction_tbl', $data)) {
                //     $res = array ('res' => 'success');
                // }else{
                //     $res = array ('res' => 'failed');
                // }

                // 
     
        }else{
            $res = array ('res' => 'invalidClass');

          
        }
        


    }else{
        $res = array ('res' => 'notexist');
    }
} else {

         $res = array ('res' => 'notexist');
}


echo json_encode($res);
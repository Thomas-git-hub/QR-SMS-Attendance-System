<?php
require_once '../includes/conn.php';
require_once '../includes/func.php';
extract($_POST);
$action = $_GET['action'];

// $action = "add";
// $fullname = $gender =$address =$phoneNumber =$email =$block =$password ="test" ;
switch ($action) {
    
    case 'add':
        $id= get_random_figures();
        $data = Array (
            'sdt_ref_id' => $id,
            'sdt_fullname' => $fullname,
            'sdt_gender' => $gender,
            'sdt_address' => $address,
            'sdt_parentNumber' => $phoneNumber,
            'sdt_username' =>$email,
            'sdt_password' =>$password,
        );
        if($db->insert('student_tbl', $data)){

            $bsId = get_random_figures();
            $assign = Array (
                'student_ref_id' => $id,
                'block_ref_id' => $block,
                'as_ref_id' => $bsId,
            );

            if($db->insert('assign_student', $assign)){
                $res =  array ('res'=>true);
            }else{
                $res =  array ('res'=>true);
            }
        }
           
        else
            $res =  array ('res'=>FALSE);
    break;
}

echo  json_encode($res);

?>
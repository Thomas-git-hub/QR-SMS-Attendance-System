<?php

    require_once '../includes/conn.php';
    require_once '../includes/func.php';

    extract($_POST);

    $userType ='admin';
    $username  ='admin';
    $password  ='admin123';

    if($userType == 'admin'){
        $usernameColumn = 'admin_username';
        $passwordColumn = 'admin_password';
        $idColumn = 'admin_id';
    }else if($userType == 'student'){
        $usernameColumn = 'sdt_username';
        $passwordColumn = 'sdt_password';
        $idColumn = 'std_ref_id';
    }else {  // ins
        $usernameColumn = 'username';
        $passwordColumn = 'password';
        $idColumn = 'ins_ref_id';
    }

    $db->where($usernameColumn,$username);
    $db->where($passwordColumn,$password);
    if($user =$db->getOne($userType."_tbl")){
       if($db->count > 0){
          sessionSet();
          if(!isset($_SESSION['userType'])){
            $_SESSION['userType'] = $userType;
            $_SESSION['userId'] = $user[$idColumn];

            // temporay
            $res = Array ('res' =>  true ,'userType' => $userType);
          }
       }
    }else
         $res = Array ('res' =>  false );
      

echo json_encode($res);
    
   

    


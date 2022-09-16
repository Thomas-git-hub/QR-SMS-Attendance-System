<?php
require_once '../../includes/conn.php';
extract($_POST);
$action = $_GET['action'];

switch ($action) {
    
    case 'getstrand':
        if($_POST){
            $db->where ("grade", $_POST['id']);
            echo $db->JsonBuilder()->get('strand_tbl');
        }else{
             header("location: ../pages/error.php");
        }
        break;

     case 'getblock':
        if($_POST){
        $db->where ("str_ref_id", $_POST['id']);
        echo $db->JsonBuilder()->get('block_tbl');
        }else{
             header("location: ../pages/error.php");
        }
        break;

    case 'getsubject':
        if($_POST){
        $db->where ("str_ref_id", $_POST['id']);
        echo $db->JsonBuilder()->get('subject_tbl');
        }else{
             header("location: ../pages/error.php");
        }
        break;
}

?>
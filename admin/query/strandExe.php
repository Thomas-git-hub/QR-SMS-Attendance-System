<?php
//  if(empty($_POST)) { header('location: ../../error.php'); exit(); }
 require_once '../../includes/conn.php';
 require_once '../../includes/func.php';

extract($_POST);
$action = $_GET['action'];

switch ($action) {
    // case  'toggle':
    //     if($status==1)
    //     $status = 0;
    //   else
    //     $status = 1;
    //     $data = Array (
    //         'str_active' => $status,
    //     );
    //     $db->where ('str_ref_id', $id);
    //     if ($db->update ('strand_tbl', $data))
    //         $res = array("res" => true , "status" => $status , 'id' => $id);
    //     else
    //         $res = array("res" => false);
    //     echo json_encode($res);
    //     break;

    // case 'update':
       
    //     $db->where("str_name", $strandName);
    //     $db->Where("grade", $strandGrade);

    //     if($db->has("strand_tbl")) {
    //         $res = array("res" => 'exist');
    //     }else{
    //         $data = Array (
    //                         "str_name" =>  $strandName,
    //                         "grade" =>  $strandGrade,
    //                         //"date_added" => date('Y-m-d H:i:s')
    //                       );
    //         $db->Where("str_ref_id", $id);
    //         if( $db->update ('strand_tbl', $data))
    //             $res = array("res" => true);
    //         else
    //             $res = array("res" => false);
    //     }
    //     echo json_encode($res);
    //     break;

    // case 'getone':
    //     $db->where("str_ref_id", test_input($id));
    //     $res= $db->getOne ("strand_tbl");
    //     echo json_encode($res);
    //     break;
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

    // case 'get':
      
    //     $output= array();
    //     // yung table column na issort
    //     $columns = array(
    //         0 => 'grade',
    //         1 => 'str_name',
    //     );
        
    //     //  kung saan tbl mag qquery // pwede din dito yung mga join
    //     $outputs  =  $db->get('strand_tbl', $limit);
    //     $data = array();

    //     //  get data , make sure na lahat tama , pati ordering
    //     foreach ($outputs as $row) { 
    //         $sub_array = array();
    //         // $sub_array[] = $count;
    //         $sub_array[] = $row['grade'];
    //         $sub_array[] = $row['str_name'];

    //         //  eto para sa toggle pra maassign antin yung mga need na id pra pag nag pindot matic n
           
           
    //         $data[] = $sub_array;
          
    //     }

    //     $res = array(
    //         'draw'=> intval($_POST['draw']),
    //         'recordsTotal' =>$db->count ,
    //         'recordsFiltered'=>$db->getValue ("strand_tbl", "count(*)"),  // 
    //         'data'=>$data,
    //     );
    //     echo json_encode($res);
    //     break;

    
   
}



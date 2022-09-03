<?php
//  if(empty($_POST)) { header('location: ../../error.php'); exit(); }
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
        echo json_encode($res);
        break;

    case 'get':
      
        $output= array();
        // yung table column na issort
        $columns = array(
            0 => 'grade',
            1 => 'str_name',
        );

        //  kung ano yung isesearch
        if(isset($_POST['search']['value'])){
            $search_value = $_POST['search']['value'];
            $db->where ("str_name", '%'.$search_value.'%', 'like');
        }
        // pag sort pag clinick yung sa colum na icon
        if(isset($_POST['order'])) {
            $column_name = $_POST['order'][0]['column'];
            $order = $_POST['order'][0]['dir'];    
            $db->orderBy($columns[$column_name],$order);
        } 
        // defeault ordering
        else
        {   
            $db->orderBy("grade",'asc');
            $db->orderBy("str_name",'asc');
        }
        if($_POST['length'] != -1)  {
            $start = $_POST['start'];
            $length = $_POST['length'];
            $limit =  Array ($start, $length);
        }	else{
            $limit = null;
        }
        
        //  kung saan tbl mag qquery // pwede din dito yung mga join
        $outputs  =  $db->get('strand_tbl', $limit);
        $data = array();

        //  get data , make sure na lahat tama , pati ordering
        foreach ($outputs as $row) { 
            $sub_array = array();
            // $sub_array[] = $count;
            $sub_array[] = $row['grade'];
            $sub_array[] = $row['str_name'];

            //  eto para sa toggle pra maassign antin yung mga need na id pra pag nag pindot matic na

            if($row['str_active'] == 1)
                $sub_array[] = ' <button type="button" id="'.$row['str_ref_id'].'"  data-status="'.$row['str_active'].'" class="btn btn-sm  btn-toggle__campus btn-danger">Disable</button>';
            else
                $sub_array[] = ' <button type="button" id="'.$row['str_ref_id'].'"  data-status="'.$row['str_active'].'" class="btn btn-sm   btn-toggle__campus btn-sucess">Enable</button>';        
           
           
            $data[] = $sub_array;
          
        }

        $res = array(
            'draw'=> intval($_POST['draw']),
            'recordsTotal' =>$db->count ,
            'recordsFiltered'=>$db->getValue ("strand_tbl", "count(*)"),  // 
            'data'=>$data,
        );
        echo json_encode($res);
        break;

    
   
}



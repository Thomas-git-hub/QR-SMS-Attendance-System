<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/sidebar.css">
	<link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
</head>
<body>


<div class="container">
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add strand
</button>

    <table id="strand_tbl" class="table display" >
        <thead>
            <tr>
                <th>Grade</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
        </tbody>
    </table>
    
    
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="strandFrm">
            <input  name="id"  type="hidden" value="0">
            <input  class="form-control" type="text" name="strandName" placeholder="strandName" required> <br>
            <select class="form-select"  name="strandGrade"  required>
                    <option value="11">Grade 11</option>
                    <option value="12">Grade 12</option>
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
    


<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/jszip.min.js"></script>
<script type="application/json" src="../js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="../js/pdfmake.min.js"></script>

<script type="text/javascript" src="../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>


<script>

$(function() {


    function get(){
        var campusAdminTable=  $('#strand_tbl').DataTable({
        serverSide: true,
        processing: true,
        paging: true,
        order: [],
        ajax: {
            url: './query/strandExe.php?action=get',
            type: 'post',
        },
        });
    }

    get();
   
    //  add and update
    $(document).on('submit', '#strandFrm', function(event){
        event.preventDefault();

      

        if($("input[name=id]").val()==0 ||  $("input[name=id]").val()=='')
          var action ='add';
        else
          var action ='update';
        
        $.ajax({
          type: 'POST',
          url: `./query/strandExe.php?action=${action}`,
          dataType: 'JSON',
          data: $('#strandFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res=='exist'){
                alert("Duplicate");
            }else  if(response.res){
                alert('success');
                $("#exampleModal").modal('hide');
                $('#strand_tbl').DataTable().draw(); 
                $('#strandFrm').trigger("reset");
              
            }
          }
        });
    });

    //  gettting the info
    $(document).on('click', '.btn-update__strand', function(event){
        event.preventDefault();
        var id = this.id;
        $.ajax({
          type: 'POST',
          url: './query/strandExe.php?action=getone',
          dataType: 'JSON',
          data: {"id":id},
          success: function (response) {
            console.log(response);
            $("input[name=id]").val(response.str_ref_id);
            $("input[name=strandName]").val(response.str_name);
            $("input[name=strandGrade]").val(response.grade);
            $("#exampleModal").modal('show');
          }
        });

    });


    // toggle

    
    $(document).on('click', '.btn-toggle__strand', function () {
        var id = this.id;
        var status = $(this).attr("data-status");
       $.ajax({
           type: 'POST',
           url: './query/strandExe.php?action=toggle',
           dataType: 'JSON',
           data: {
             'id' : id,
             'status' :status,
           },
           success: function (response) {
               console.log (response);
            if(response.res){
               if(response.status==1)
                   $("#" + response.id ).removeClass("btn-success").addClass("btn-danger").attr("data-status",1).html('Disable');
               else
                   $("#" + response.id ).removeClass("btn-danger").addClass("btn-success").attr("data-status",0).html('Enable');
            }else{
               alert('Fail')
            }
              
           }
       });
        
      });
    


    

   



});
     
</script>

</body>
</html>



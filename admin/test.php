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
            <input name="id"  type="hidden">
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

    $(document).on('submit', '#strandFrm', function(event){
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: './query/strandExe.php?action=add',
          dataType: 'JSON',
          data: $('#strandFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res){
                alert('success');
                $("#exampleModal").modal('hide');
            }
          }
        });
    });

   



});
     
</script>

</body>
</html>



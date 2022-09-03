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
        <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
             Add
        </button>

        </div>
     </div>

    
    <!-- <form action=""  method="post" id="strandFrm">
        <input type="text" name="strandName" placeholder="strandName">
        <select  name="strandGrade" >
                <option value="11">Grade 11</option>
                <option value="12">Grade 12</option>
        </select>
        <button type="submit">save</button>
    </form>

    <hr> -->

<script src="../js/jquery.min.js"></script>

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
    $(document).on('submit', '#strandFrm', function(event){
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: './query/strandExe.php?action=add',
          dataType: 'JSON',
          data: $('#strandFrm').serialize(),
          success: function (response) {
            console.log(response);
          }
        });
    });
});
     
</script>

</body>
</html>



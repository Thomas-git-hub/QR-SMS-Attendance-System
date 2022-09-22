<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <div class="d-flex" role="search">
    <p  class="h6 text-primary" style="margin-right: 10px;"> <?php  $db->where ("sdt_ref_id", $_SESSION['userId']);
                                                                      $user = $db->getOne ("student_tbl");
                                                                       echo  ucwords($user['sdt_fullname']);  ?></p>
      <div class="name">
      <div class="dropdown">


          <a class="dropdown-item" href="../query/logoutExe.php">Log Out <i class='bx bx-log-out-circle topnav_icon'></i></a>
      </div>
      </div>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html>
<head>
  <title>Jurusan Teknik Komputer dan Informatika POLBAN</title>
  <?php include 'panggil.php' ?>
</head>

<?php 
if(!isset($_GET['content'])){
  $vcontent = "dashboard.php";
}
else{
  $vcontent = $_GET['content'];
}
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-atas" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <form class="navbar-form" style="width: 225px;" role="search">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                             <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                             </button>
                         </span>
                     </div>
                 </form>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> PT. Rony Berjaya <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- SIDE BAR -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="profile">
                          <img class="img-profile" src="image/img.jpg">
                    </li>
                    <li class="sidebar-profile-edit">
                      <ul class="identity-profile">
                        <li class="text-center">
                          <b>PT. Rony Berjaya</b>
                        </li>
                        <li class="text-center">
                          <i>Administrator Dosen</i>
                        </li>
                      </ul>
                    </li>
                    <li class="active">
                      <a class="active" href="dosen.php?content=<?php echo "dashboard.php"?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li><a href="dosen.php?content=<?php echo "searchalumni.php"?>"><i class="fa fa-fw fa-search"></i> Search Alumni</a>
                    </li>
                    <li><a href="dosen.php?content=<?php echo "loker.php"?>"><i class="fa fa-fw fa-table"></i> Lowongan Pekerjaan</a>
                    </li>
                    <li><a href="dosen.php?content=<?php echo "beasiswa.php"?>"><i class="fa fa-fw fa-child"></i> Beasiswa</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Forms <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li>
                              <a href="dosen.php?content=<?php echo "lowongan.php"?>">Input Lowongan Pekerjaan</a>
                           </li>
                           <li>
                              <a href="dosen.php?content=<?php echo "inputBeasiswa.php"?>">Input Beasiswa</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="dosen.php?content=<?php echo "calendaracademic.php"?>"><i class="fa fa-fw fa-calendar"></i> Calendar Academic</a>
                    </li>
                </ul>
            </div>
            <!-- SIDE BAR -->
        </nav>

        <!-- ISI -->
        <div id="page-wrapper">

            <?php include $vcontent; ?>

        </div>
        <!-- /#page-wrapper -->
        <!-- ISI -->


        <!-- FOOTER -->
        <div class="navbar-fixed-bottom sub-footer-edit">
            <div class="copyright text-center">
              &copy; Day 2016 by <a target="_blank" href="#">Kelompok Rony</a>.All Rights Reserved.
            </div>
        </div>
        <!-- FOOTER -->

    </div>
    <!-- /#wrapper -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#datatabel').DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                dayClick: function() {
                    alert('a day has been clicked!');
                }
            });
        });
    </script>

    <script>
      function goBack(){
        window.history.back();
      }
    </script>

    <script type="text/javascript">
      tinymce.init({
        selector : '#mytextarea'
      });
    </script>

</body>

</html>
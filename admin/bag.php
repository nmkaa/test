<?php include 'includes/session.php'; ?>
<?php
  $sumid = 0;
  $where = '';
  if(isset($_GET['sum'])){
    $sumid = $_GET['sum'];
    $where = 'WHERE bag.sum_id = '.$sumid;
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Баг
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Иргэний бүртгэл</li>
        <li class="active">Баг</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Нэмэх</a>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Сум: </label>
                    <select class="form-control input-sm" id="select_sum">
                      <option value="0">ALL</option>
                      <?php
                        $sql = "SELECT * FROM sum";
                        $query = $conn->query($sql);
                        while($sumrow = $query->fetch_assoc()){
                          $selected = ($sumid == $sumrow['id']) ? " selected" : "";
                          echo "
                            <option value='".$sumrow['id']."' ".$selected.">".$sumrow['name']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Сум</th>
                  <th>Багын нэр</th>
                  <th>Үйлдэл</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, bag.id AS bagid FROM bag LEFT JOIN sum ON sum.id=bag.sum_id $where";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['name']."</td>
                          <td>".$row['code']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['bagid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['bagid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/bag_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_sum').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'bag.php';
    }
    else{
      window.location = 'bag.php?sum='+value;
    }
  });

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'bag_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.bagid').val(response.bagid);
      $('#edit_code').val(response.code);
      $('#sumselect').val(response.sum_id).html(response.name);
      $('#del_bag').html(response.code);
    }
  });
}
</script>
</body>
</html>

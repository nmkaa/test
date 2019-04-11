<?php include 'includes/session.php'; ?>
<?php
  $torolid = 0;
  $where = '';
  if(isset($_GET['torol'])){
    $torolid = $_GET['torol'];
    $where = 'WHERE olgolt.torol_id = '.$torolid;
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
        Нийгмийн халамжийн үйлчилгээ
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Үйлчилгээ</li>
        <li class="active">Тэтгэмжийн жагсаалт</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Таны оруулсан утга алдаатай байна!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Амжилттай бүртгэгдлээ!</h4>
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
                    <label>Төрөл: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <?php
                        $sql = "SELECT * FROM torol";
                        $query = $conn->query($sql);
                        while($torolrow = $query->fetch_assoc()){
                          $selected = ($torolid == $torolrow['id']) ? " selected" : "";
                          echo "
                            <option value='".$torolrow['id']."' ".$selected.">".$torolrow['name']."</option>
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
                  <th  width="20%">Төрөл</th>
                  <!-- <th  width="8%">Шифр</th> -->
                  <th  width="20%">Олголт</th>
                  <th width="45%">Бүрдүүлэх бичиг баримт</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, olgolt.id AS olgoltid FROM olgolt LEFT JOIN torol ON torol.id=olgolt.torol_id $where";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['name']."</td>
                          
                          <td>".$row['title']."</td>
                          <td>".$row['barimt']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['olgoltid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['olgoltid']."'><i class='fa fa-trash'></i> Delete</button>
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
  <?php include 'includes/olgolt_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_category').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'olgolt.php';
    }
    else{
      window.location = 'olgolt.php?torol='+value;
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
    url: 'olgolt_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.olgoltid').val(response.olgoltid);
      $('#edit_title').val(response.title);
      $('#edit_barimt').val(response.barimt);
      $('#torolselect').val(response.torol_id).html(response.name);
      $('#barimtcheck').val(response.barimt);
      $('#del_olgolt').html(response.title);
    }
  });
}
</script>
</body>
</html>

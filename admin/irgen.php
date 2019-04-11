<?php include 'includes/session.php'; ?>
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
        Иргэн
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Иргэний бүртгэл</li>
        <li class="active">Иргэний жагсаалт</li>
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
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Баг</th>
                  <th>Зураг</th>
                  <th>РД</th>
                  <th>Овог</th>
                  <th>Нэр</th>
                  <th>Тэтгэмж</th>
                  <!-- <th>Status</th> -->
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, irgen.id AS irgenid FROM irgen LEFT JOIN bag ON bag.id=irgen.bag_id LEFT JOIN olgolt ON olgolt.id=irgen.olgolt_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      // if($row['status']){
                      //   $status = '<span class="label label-danger">borrowed</span>';
                      // }
                      // else{
                      //   $status = '<span class="label label-success">available</span>';
                      // }
                      $photo = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>
                          <td>".$row['code']."</td>
                          <td>
                            <img src='".$photo."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['irgenid']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>".$row['rd']."</td>
                          <td>".$row['firstname']."</td>
                          <td>".$row['lastname']."</td>
                          <td>".$row['title']."</td>
                       
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['irgenid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['irgenid']."'><i class='fa fa-trash'></i> Delete</button>
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
  <?php include 'includes/irgen_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
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

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'irgen_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.irgenid').val(response.irgenid);
      $('#edit_rd').val(response.rd);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#selbag').val(response.bag_id);
      $('#selbag').html(response.code);
      $('#selolgolt').val(response.olgolt_id);
      $('#selolgolt').html(response.title);
      $('#selrd').val(response.irgenid);
      $('#selrd').html(response.rd);
      $('.del_irgen').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>
</body>
</html>

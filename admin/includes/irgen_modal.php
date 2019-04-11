<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Иргэн шинээр нэмэх</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="irgen_add.php">

                  <div class="form-group">
                    <label for="bag" class="col-sm-3 control-label">Баг</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="bag" name="bag" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM bag";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['code']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Зураг</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="rd" class="col-sm-3 control-label">РД</label>

                    <div class="col-sm-9" class="form-control">
                      <select id="rdTT" name="rdTT" required>
                        <!-- <option value="" selected>- Select -</option> -->
                      
                          <option>А</option>
                          <option>Б</option>
                          <option>В</option>
                          <option>Г</option>
                          <option>Д</option>
                          <option>Е</option>
                          <option>Ё</option>
                          <option>Ж</option>
                          <option>З</option>
                          <option>И</option>
                          <option>Й</option>
                          <option>К</option>
                          <option>Л</option>
                          <option>М</option>
                          <option>Н</option>
                          <option>О</option>
                          <option>Ө</option>
                          <option>П</option>
                          <option>Р</option>
                          <option>С</option>
                          <option>Т</option>
                          <option>У</option>
                          <option>Ү</option>
                          <option>Ф</option>
                          <option>Х</option>
                          <option>Ц</option>
                          <option>Ч</option>
                          <option>Ш</option>
                          <option>Щ</option>
                          <option>Ъ</option>
                          <option>Ы</option>
                          <option>Ь</option>
                          <option>Э</option>
                          <option>Ю</option>
                          <option>Я</option>
                    </select>
                    <select id="rdT" name="rdT" required>
                      <!-- <option value="" selected>- Select -</option> -->
                      <option>А</option>
                      <option>Б</option>
                      <option>В</option>
                      <option>Г</option>
                      <option>Д</option>
                      <option>Д</option>
                      <option>Е</option>
                      <option>Ё</option>
                      <option>Ж</option>
                      <option>З</option>
                          <option>И</option>
                          <option>Й</option>
                          <option>К</option>
                          <option>Л</option>
                          <option>М</option>
                          <option>Н</option>
                          <option>О</option>
                          <option>Ө</option>
                          <option>П</option>
                          <option>Р</option>
                          <option>С</option>
                          <option>Т</option>
                          <option>У</option>
                          <option>Ү</option>
                          <option>Ф</option>
                          <option>Х</option>
                          <option>Ц</option>
                          <option>Ч</option>
                          <option>Ш</option>
                          <option>Щ</option>
                          <option>Ъ</option>
                          <option>Ы</option>
                          <option>Ь</option>
                          <option>Э</option>
                          <option>Ю</option>
                          <option>Я</option>
                    </select> 
                      <input type="number" id="rd" name="rd" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Овог</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Нэр</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="olgolt" class="col-sm-3 control-label">Тэтгэмж</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="olgolt" name="olgolt" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM olgolt";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['title']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Иргэний мэдээлэл засварлах</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="irgen_edit.php">
                <input type="hidden" class="irgenid" name="id">
                  <div class="form-group">
                    <label for="bag" class="col-sm-3 control-label">Баг</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="bag" name="bag" required>
                        <option value="" selected id="selbag"></option>
                        <?php
                          $sql = "SELECT * FROM bag";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['code']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_rd" class="col-sm-3 control-label">РД</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_rd" name="rd">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Овог</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Нэр</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="olgolt" class="col-sm-3 control-label">Тэтгэмж</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="olgolt" name="olgolt" required>
                        <option value="" selected id="selolgolt"></option>
                        <?php
                          $sql = "SELECT * FROM olgolt";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['title']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Устгах...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="irgen_delete.php">
                <input type="hidden" class="irgenid" name="id">
                <div class="text-center">
                    <p>Иргэний мэдээлэл устгах</p>
                    <h2 class="del_stu bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_stu"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="student_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="studid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     
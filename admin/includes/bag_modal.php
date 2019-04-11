<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Баг нэмэх</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="bag_add.php">
                <div class="form-group">
                    <label for="sum" class="col-sm-3 control-label">Сум</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="sum" id="sum" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM sum";
                          $query = $conn->query($sql);
                          while($crow = $query->fetch_assoc()){
                            echo "
                              <option value='".$crow['id']."'>".$crow['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="code" class="col-sm-3 control-label">Багын нэр</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="code" id="code" required></textarea>
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
              <h4 class="modal-title"><b>Баг засах</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="bag_edit.php">
                <input type="hidden" class="bagid" name="id">
                <div class="form-group">
                    <label for="sum" class="col-sm-3 control-label">Сум</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="sum" id="sum">
                        <option value="" selected id="sumselect"></option>
                        <?php
                          $sql = "SELECT * FROM sum";
                          $query = $conn->query($sql);
                          while($crow = $query->fetch_assoc()){
                            echo "
                              <option value='".$crow['id']."'>".$crow['name']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_code" class="col-sm-3 control-label">Багын нэр</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="code" id="edit_code"></textarea>
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
              <form class="form-horizontal" method="POST" action="bag_delete.php">
                <input type="hidden" class="bagid" name="id">
                <div class="text-center">
                    <p>Баг устгах</p>
                    <h2 id="del_bag" class="bold"></h2>
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


     
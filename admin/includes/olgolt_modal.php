<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Олголт нэмэх</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="olgolt_add.php">
                <div class="form-group">
                    <label for="torol" class="col-sm-3 control-label">Төрөл</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="torol" id="torol" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM torol";
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

<!--                 <div class="form-group">
                    <label for="serial" class="col-sm-3 control-label">Шифр</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="serial" id="serial" required></textarea>
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Тэтгэмжийн нэр</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="title" id="title" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="barimt" class="col-sm-3 control-label">Бүрдүүлэх бичиг баримт</label>

                    <div class="col-sm-9">
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Өргөдөл"> Өргөдөл</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Цээж зураг"> Цээж зураг</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Иргэний үнэмлэх хуулбарын хамт"> Иргэний үнэмлэх хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Нийгмийн даатгалын сангаас тэтгэвэр авах эрх үүсээгүй тухай аймгийн нийгмийн даатгалын хэлтсийн тодорхойлолт"> Нийгмийн даатгалын сангаас тэтгэвэр авах эрх үүсээгүй тухай аймгийн нийгмийн даатгалын хэлтсийн тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Багийн засаг даргын тодорхойлолт"> Багийн засаг даргын тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Ахмад дайчны үнэмлэх, хуулбарын хамт"> Ахмад дайчны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Тухайн орон нутгийн тарифт үнээр тооцож замын зардал төлсөн тухай баримт, эсхүл нэхэмжлэл"> Тухайн орон нутгийн тарифт үнээр тооцож замын зардал төлсөн тухай баримт, эсхүл нэхэмжлэл</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Одой болохыг тогтоосон Эмнэлэг, хөдөлмөрийн магадлах комиссын шийдвэр"> Одой болохыг тогтоосон Эмнэлэг, хөдөлмөрийн магадлах комиссын шийдвэр</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Тэжээгчийн нас барсны гэрчилгээ, асран хамгаалагч, харгалзан дэмжигчийн иргэний үнэмлэх, тэдгээрийн хуулбар"> Тэжээгчийн нас барсны гэрчилгээ, асран хамгаалагч, харгалзан дэмжигчийн иргэний үнэмлэх, тэдгээрийн хуулбар</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Эмчийн тодорхойлолт">  Эмчийн тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Хүүхэд эсэн мэнд бойжиж байгаа тухай эмчийн тодорхойлолт"> Хүүхэд эсэн мэнд бойжиж байгаа тухай эмчийн тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Хүүхэд асрах чөлөөтэй байгаа бол чөлөө олгосон тухай ажил олгогчийн тушаал, хуулбарын хамт"> Хүүхэд асрах чөлөөтэй байгаа бол чөлөө олгосон тухай ажил олгогчийн тушаал, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт"> Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Нас барсан эхнэр, эсхүл нөхрийн нас барсны гэрчилгээ,   хуулбарын хамт"> Нас барсан эхнэр, эсхүл нөхрийн нас барсны гэрчилгээ,   хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт /16 насанд хүрсэн бол иргэний үнэмлэх, хуулбарын хамт/"> Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт /16 насанд хүрсэн бол иргэний үнэмлэх, хуулбарын хамт/</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimt" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>

                      <!-- <textarea class="form-control" name="title" id="title" required></textarea> -->
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
              <h4 class="modal-title"><b>Засах</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="olgolt_edit.php">
                <input type="hidden" class="olgoltid" name="id">

                <div class="form-group">
                    <label for="torol" class="col-sm-3 control-label">Төрөл</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="torol" id="torol">
                        <option value="" selected id="torolselect"></option>
                        <?php
                          $sql = "SELECT * FROM torol";
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
<!--                 <div class="form-group">
                    <label for="edit_serial" class="col-sm-3 control-label">Шифр</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_serial" name="serial">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="edit_title" class="col-sm-3 control-label">Тэтгэмжийн нэр</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="title" id="edit_title"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="barimtcheck" class="col-sm-3 control-label">Бүрдүүлэх бичиг баримт</label>

                    <div class="col-sm-9"> 
                   
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Өргөдөл"> Өргөдөл</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Цээж зураг"> Цээж зураг</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Иргэний үнэмлэх хуулбарын хамт"> Иргэний үнэмлэх хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Нийгмийн даатгалын сангаас тэтгэвэр авах эрх үүсээгүй тухай аймгийн нийгмийн даатгалын хэлтсийн тодорхойлолт"> Нийгмийн даатгалын сангаас тэтгэвэр авах эрх үүсээгүй тухай аймгийн нийгмийн даатгалын хэлтсийн тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Багийн засаг даргын тодорхойлолт"> Багийн засаг даргын тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Ахмад дайчны үнэмлэх, хуулбарын хамт"> Ахмад дайчны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Тухайн орон нутгийн тарифт үнээр тооцож замын зардал төлсөн тухай баримт, эсхүл нэхэмжлэл"> Тухайн орон нутгийн тарифт үнээр тооцож замын зардал төлсөн тухай баримт, эсхүл нэхэмжлэл</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Одой болохыг тогтоосон Эмнэлэг, хөдөлмөрийн магадлах комиссын шийдвэр"> Одой болохыг тогтоосон Эмнэлэг, хөдөлмөрийн магадлах комиссын шийдвэр</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Тэжээгчийн нас барсны гэрчилгээ, асран хамгаалагч, харгалзан дэмжигчийн иргэний үнэмлэх, тэдгээрийн хуулбар"> Тэжээгчийн нас барсны гэрчилгээ, асран хамгаалагч, харгалзан дэмжигчийн иргэний үнэмлэх, тэдгээрийн хуулбар</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Эмчийн тодорхойлолт">  Эмчийн тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Хүүхэд эсэн мэнд бойжиж байгаа тухай эмчийн тодорхойлолт"> Хүүхэд эсэн мэнд бойжиж байгаа тухай эмчийн тодорхойлолт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Хүүхэд асрах чөлөөтэй байгаа бол чөлөө олгосон тухай ажил олгогчийн тушаал, хуулбарын хамт"> Хүүхэд асрах чөлөөтэй байгаа бол чөлөө олгосон тухай ажил олгогчийн тушаал, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт"> Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Нас барсан эхнэр, эсхүл нөхрийн нас барсны гэрчилгээ,   хуулбарын хамт"> Нас барсан эхнэр, эсхүл нөхрийн нас барсны гэрчилгээ,   хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт /16 насанд хүрсэн бол иргэний үнэмлэх, хуулбарын хамт/"> Хүүхдүүдийн төрсний гэрчилгээ, хуулбарын хамт /16 насанд хүрсэн бол иргэний үнэмлэх, хуулбарын хамт/</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                      <p><input type="checkbox" name="barimt[]" id="barimtcheck" value="Алдар цолны үнэмлэх, хуулбарын хамт"> Алдар цолны үнэмлэх, хуулбарын хамт</p>
                    
                      <!-- <textarea class="form-control" name="title" id="title" required></textarea> -->
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
              <form class="form-horizontal" method="POST" action="olgolt_delete.php">
                <input type="hidden" class="olgoltid" name="id">
                <div class="text-center">
                    <p>Тэтгэвэр, тэтгэмж устгах</p>
                    <h2 id="del_olgolt" class="bold"></h2>
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

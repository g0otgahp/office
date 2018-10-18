<!--RegisterBrandForm -->
<?php echo form_open_multipart('Position/PositionInsert')?>
<!-- Modal -->
<div id="PositionInsert" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">เพิ่มตำแหน่ง</h4>
      </div>
      <div class="modal-body">
        <center>
          <table>

            <tr>
              <td>ชื่อตำแหน่ง : &nbsp;</td>
              <td>
                <input autocomplete="off" name="positionName" type="text"
                required class="form-control" style="margin-top:10px;"
                placeholder="กรอกชื่อตำแหน่ง" required>
              </td>
            </tr>

            <tr>
              <td>กำหนดสิทธิ์ : &nbsp;</td>
              <td><div class="form-group" style="margin-top:10px">
                <select class="form-control" name="permission">
                  <option value="1">ต่ำ</option>
                  <option value="2">ปานกลาง</option>
                  <option value="3">สูง</option>
                  <option value="4">สูงมาก</option>
                </select>
              </div></td>
            </tr>

          </table>
        </div>
        <div class="modal-footer">
          <button type"submit" class="btn btn-success btn-sm">ยืนยัน</button>
          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <?php echo form_close()?>

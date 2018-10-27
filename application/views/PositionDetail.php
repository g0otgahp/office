<!--RegisterBrandForm -->
<?php foreach ($dataShow as $dataShow): ?>

  <?php echo form_open_multipart('Position/PositionUpdate')?>

  <!-- Modal -->
  <div id="PositionUpdate<?php echo $dataShow['positionId']; ?>" class="modal fade">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">แก้ไขตำแหน่ง <a href="<?php echo SITE_URL('Position/PositionDelete/'.$dataShow['positionId']); ?>"
            style="font-size:11px;padding-left:10px;color:red;"
            onClick="javascript: return confirm('ต้องการลบตำแหน่งนี้ใช่หรือไม่')"><b>ลบตำแหน่ง</b></i> </a></h4>
        </div>

        <div class="modal-body">
          <center>
          <table>

            <tr>
              <td>ชื่อตำแหน่ง : &nbsp;</td>
              <td>
                <input type="hidden" name="positionId" value="<?php echo $dataShow['positionId']; ?>">
                <input autocomplete="off" name="positionName" type="text" value="<?php echo $dataShow['positionName']; ?>"
                required class="form-control" style="margin-top:20px;" placeholder="กรอกชื่อตำแหน่ง" required>
              </td>
            </tr>

            <tr>
              <td>กำหนดสิทธิ์ : &nbsp;</td>
              <td><div class="form-group" style="margin-top:10px">
                <select class="form-control" name="permission">
                  <option value="1" <?php if($dataShow['permission'] == "1"){echo "selected";} ?>>ต่ำ</option>
                  <option value="2" <?php if($dataShow['permission'] == "2"){echo "selected";} ?>>ปานกลาง</option>
                  <option value="3" <?php if($dataShow['permission'] == "3"){echo "selected";} ?>>สูง</option>
                  <option value="4" <?php if($dataShow['permission'] == "4"){echo "selected";} ?>>สูงมาก</option>
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

<?php endforeach; ?>

<div id="wrapper" ng-Controller="EmployeeFormCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">จัดการลายเซ็น</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <?php echo form_open_multipart('Employee/SignatureSave')?>
      <!-- Modal -->
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ลายเซ็นของคุณ สถานะ :
                <?php if (@$_SESSION['profileSigOn'] == 1): ?>
                  <span style="color:green">เปิดการใช้งานอยู่</span>
                  <?php else: ?>
                    <span style="color:red">ปิดการใช้งานอยู่</span>
                <?php endif; ?>
                  <a onclick="Reload();" href="<?php echo SITE_URL('Employee/SignatureStatus/'.$_SESSION['profileId']."/".$_SESSION['profileSigOn']) ?>" class="btn btn-warning pull-right">เปิด/ปิด</a>
              </h4>
            </div>
            <div class="modal-body">
              <center>
                <table>
                  <tr>
                    <td>รูปภาพเดิม : &nbsp;</td>
                    <td>
                      <?php if (@$_SESSION['profileSigImage'] != ''): ?>
                      <img src="<?php echo base_url('uploads/Signature/'.$_SESSION['profileSigImage'])?>" height="90">
                    <?php endif; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    </td>
                    <td>
                      <small style="color:red;">สกุลไฟล์ .png เท่านั้น**</small>
                    </td>
                  </tr>
                  <tr>
                    <td>อัพโหลด : &nbsp;</td>
                    <td><div class="form-group" style="margin-top:10px">
                      <input autocomplete="off" name="profileId" type="hidden" value="<?php echo $_SESSION['profileId'] ?>">
                      <input autocomplete="off" name="profileSigImage" type="file"
                       class="form-control" required accept="image/x-png">
                    </div></td>
                    <tr>
                      <td>
                      </td>
                      <td>
                        <small style="color:gray;">หากยังไม่มีลายเซ็นให้คลิกที่ปุ่ม
                          <a target="_blank" href="https://www.signaturemaker.in/en/draw-a-signature-online/"><i class="fa fa-plus"></i>สร้างลายเซ็นใหม่</a>
                        </small>
                      </td>
                    </tr>
                  </tr>

                </table>
              </div>
              <div class="modal-footer">
                <button type"submit" class="btn btn-success btn-sm">ยืนยัน</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>

        <?php echo form_close()?>


    </div>
    <!-- /#page-wrapper -->
  </div>

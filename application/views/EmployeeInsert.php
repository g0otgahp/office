    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">การจัดการพนักงาน</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <?php echo form_open_multipart('Employee/EmployeeInsert') ?>

            <div class="row">
              <div class="col-lg-9 col-lg-offset-1">

            <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                  <label>บริษัท</label>
                  <input type="text" class="form-control" disabled placeholder="Company" value="นิวซีโน่ (ประเทศไทย) จำกัด">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>ไอดีเข้าสู่ระบบ</label>
                  <input type="text" class="form-control" name="loginUsername" autocomplete="off" placeholder="ไอดีเข้าสู่ระบบ" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รหัสผ่าน</label>
                  <input type="password" class="form-control" name="loginPassword" autocomplete="off" placeholder="รหัสผ่าน" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">อีเมลล์</label>
                  <input type="email" class="form-control" name="profileEmail" autocomplete="off" placeholder="อีเมลล์" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label>คำนำหน้า</label>
                  <select class="form-control" name="profilePrefix">
                    <option value="นาย" selected>นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>ชื่อ</label>
                  <input type="text" class="form-control" name="profileName" autocomplete="off" placeholder="ชื่อ" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>นามสกุล</label>
                  <input type="text" class="form-control" name="profileSurname" autocomplete="off" placeholder="นามสกุล" required>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>ชื่อเล่น</label>
                  <input type="text" class="form-control" name="profileNickname" autocomplete="off" placeholder="ชื่อเล่น" required>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label>เพศ</label>
                  <select class="form-control" name="profileSex">
                    <option value="ชาย" selected>ชาย</option>
                    <option value="หญิง">หญิง</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>รหัสประจำตัวประชาชน</label>
                  <input type="text" class="form-control" name="profileCitizenId" autocomplete="off" placeholder="รหัสประจำตัวประชาชน" maxlength="13" onkeypress='validate(event)' required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>เบอร์ติดต่อ</label>
                  <input type="text" class="form-control" name="profilePhone" placeholder="เบอร์ติดต่อ" autocomplete="off" maxlength="10" onkeypress='validate(event)' required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ตำแหน่ง</label>
                  <select class="form-control" name="positionId">
                    <?php foreach ($dataPosition as $dataPosition): ?>
                      <option value="<?php echo $dataPosition['positionId'] ?>"><?php echo $dataPosition['positionName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>รูปภาพประจำตัว</label>
                  <input type="file" accept="image/*" name="profileImage" class="form-control">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>ที่อยู่</label>
                  <textarea rows="5" class="form-control" name="profileAddress" autocomplete="off" placeholder="ที่อยู่" required></textarea>
                </div>
              </div>
            </div>



            <button type="submit" class="btn btn-info btn-fill pull-right">สมัครสมาชิก</button>
            <div class="clearfix"></div>

            <br>
            <br>

          </div>
        </div>

            <?php echo form_close() ?>





        </div>
        <!-- /#page-wrapper -->
    </div>

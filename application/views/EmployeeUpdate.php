<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการพนักงาน <a href="<?php echo SITE_URL('Employee/EmployeeDelete/'.$dataUpdate[0]['profileId']); ?>"
          style="font-size:11px;padding-left:10px;color:red;"
          onClick="javascript: return confirm('ต้องการลบพนักงานนี้ใช่หรือไม่')"><b>ลบพนักงาน</b></i> </a></h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>


    <?php echo form_open_multipart('Employee/EmployeeUpdate') ?>

    <div class="row">
      <div class="col-lg-9 col-lg-offset-1">

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>บริษัท</label>
              <input type="text" class="form-control" disabled placeholder="Company" value="นิวซีโน่ (ประเทศไทย) จำกัด">
              <input type="hidden" name="profileId" value="<?php echo $dataUpdate[0]['profileId'] ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>ไอดีเข้าสู่ระบบ</label>
              <input type="text" class="form-control" value="<?php echo $dataUpdate[0]['loginUsername'] ?>" name="loginUsername" autocomplete="off" placeholder="ไอดีเข้าสู่ระบบ" required disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>รหัสผ่าน</label>
              <input type="password" class="form-control" value="<?php echo $dataUpdate[0]['loginPassword'] ?>" name="loginPassword" autocomplete="off" placeholder="รหัสผ่าน" required disabled>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">อีเมลล์</label>
              <input type="email" class="form-control" value="<?php echo $dataUpdate[0]['profileEmail'] ?>" name="profileEmail" autocomplete="off" placeholder="อีเมลล์" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>คำนำหน้า</label>
              <select class="form-control" name="profilePrefix">
                <option value="นาย" <?php if($dataUpdate[0]['profilePrefix'] == "นาย"){echo "selected";} ?>>นาย</option>
                <option value="นาง" <?php if($dataUpdate[0]['profilePrefix'] == "นาง"){echo "selected";} ?>>นาง</option>
                <option value="นางสาว" <?php if($dataUpdate[0]['profilePrefix'] == "นางสาว"){echo "selected";} ?>>นางสาว</option>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ชื่อ</label>
              <input type="text" class="form-control" value="<?php echo $dataUpdate[0]['profileName'] ?>" name="profileName" autocomplete="off" placeholder="ชื่อ" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>นามสกุล</label>
              <input type="text" class="form-control" value="<?php echo $dataUpdate[0]['profileSurname'] ?>" name="profileSurname" autocomplete="off" placeholder="นามสกุล" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>ชื่อเล่น</label>
              <input type="text" class="form-control" value="<?php echo $dataUpdate[0]['profileNickname'] ?>" name="profileNickname" autocomplete="off" placeholder="ชื่อเล่น" required>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>เพศ</label>
              <select class="form-control" name="profileSex">
                <option value="ชาย" <?php if($dataUpdate[0]['profileSex'] == "ชาย"){echo "selected";} ?>>ชาย</option>
                <option value="หญิง" <?php if($dataUpdate[0]['profileSex'] == "หญิง"){echo "selected";} ?>>หญิง</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>รหัสประจำตัวประชาชน</label>
              <input type="text" class="form-control" value="<?php echo $dataUpdate[0]['profileCitizenId'] ?>" name="profileCitizenId" autocomplete="off" placeholder="รหัสประจำตัวประชาชน" maxlength="13" onkeypress='validate(event)' required>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>เบอร์ติดต่อ</label>
              <input type="text" class="form-control" value="<?php echo $dataUpdate[0]['profilePhone'] ?>" name="profilePhone" placeholder="เบอร์ติดต่อ" autocomplete="off" maxlength="10" onkeypress='validate(event)' required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>ตำแหน่ง</label>
              <select class="form-control" name="positionId">
                <?php foreach ($dataPosition as $dataPosition): ?>
                  <option value="<?php echo $dataPosition['positionId'] ?>"<?php if($dataPosition['positionId'] == $dataUpdate[0]['positionId']){echo "selected";} ?>><?php echo $dataPosition['positionName'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>รูปภาพประจำตัว</label>
              <input type="file" accept="image/*" name="profileImage" class="form-control">
              <input type="hidden" name="profileImage" value="<?php echo $dataUpdate[0]['profileImage'] ?>">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>ที่อยู่</label>
              <textarea rows="5" class="form-control" name="profileAddress" autocomplete="off" placeholder="ที่อยู่" required><?php echo $dataUpdate[0]['profileAddress'] ?></textarea>
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-info btn-fill pull-right">แก้ไขพนักงาน</button>
        <div class="clearfix"></div>

        <br>
        <br>

      </div>
    </div>

    <?php echo form_close() ?>





  </div>
  <!-- /#page-wrapper -->
</div>

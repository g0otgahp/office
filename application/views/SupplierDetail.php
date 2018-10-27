<div id="wrapper">

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">การจัดการลูกค้า
                  <a href="<?php echo SITE_URL('Supplier/SupplierDelete/'.$dataUpdate[0]['supplierId']); ?>"
                    style="font-size:11px;padding-left:10px;color:red;"
                    onClick="javascript: return confirm('ต้องการทำสิ่งนี้ใช่หรือไม่')"><b>ลบ</b></i> </a></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <?php echo form_open_multipart('Supplier/SupplierUpdate') ?>

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

            <input type="hidden" name="supplierId" value="<?php echo $dataUpdate[0]['supplierId'] ?>">

        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <label>องค์กร <small style="color:red">*</small></label>
              <input type="text" class="form-control" name="supplierCompany" value="<?php echo $dataUpdate[0]['supplierCompany'] ?>"
              autocomplete="off" placeholder="ตัวอย่าง : บริษัท นิวซีโน่ (ประเทศไทย) จำกัด" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>คำนำหน้า</label>
              <select class="form-control" name="supplierPrefix">
                <option value="นาย" <?php if($dataUpdate[0]['supplierPrefix'] == "นาย"){echo "selected";}; ?>>นาย</option>
                <option value="นาง" <?php if($dataUpdate[0]['supplierPrefix'] == "นาง"){echo "selected";}; ?>>นาง</option>
                <option value="นางสาว" <?php if($dataUpdate[0]['supplierPrefix'] == "นางสาว"){echo "selected";}; ?>>นางสาว</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>ชื่อ - นามสกุล <small style="color:red">* ( ไม่ต้องใส่ นาย/นาง/นางสาว )</small> </label>
              <input type="text" class="form-control" name="supplierName" value="<?php echo $dataUpdate[0]['supplierName'] ?>"
              autocomplete="off" placeholder="ตัวอย่าง : สมชาย ลายคราม" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>ชื่อเล่น</label>
              <input type="text" class="form-control" name="supplierNickname" value="<?php echo $dataUpdate[0]['supplierNickname'] ?>"
              placeholder="" autocomplete="off">
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>เพศ</label>
              <select class="form-control" name="supplierSex">
                <option value="ชาย" <?php if($dataUpdate[0]['supplierSex'] == "ชาย"){echo "selected";}; ?>>ชาย</option>
                <option value="หญิง" <?php if($dataUpdate[0]['supplierSex'] == "หญิง"){echo "selected";}; ?>>หญิง</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>แผนก</label>
              <input type="text" class="form-control" name="supplierDepartment" value="<?php echo $dataUpdate[0]['supplierDepartment'] ?>"
              placeholder="ตัวอย่าง : ฝ่ายบัญชี" autocomplete="off">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>ตำแหน่งงาน</label>
              <input type="text" class="form-control" name="supplierPosition" value="<?php echo $dataUpdate[0]['supplierPosition'] ?>"
              placeholder="ตัวอย่าง : เจ้าหน้าที่จัดซื้อ" autocomplete="off">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>อีเมลล์</label>
              <input type="email" class="form-control" name="supplierEmail" value="<?php echo $dataUpdate[0]['supplierEmail'] ?>"
              placeholder="" autocomplete="off" autocomplete="off">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>เบอร์ติดต่อ <small style="color:red">* ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" maxlength="10" class="form-control" name="supplierMainPhone"
              value="<?php echo $dataUpdate[0]['supplierMainPhone'] ?>" placeholder="" autocomplete="off" required
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>เบอร์สำรอง <small style="color:red">ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" name="supplierSubPhone"
              value="<?php echo $dataUpdate[0]['supplierSubPhone'] ?>" placeholder="" autocomplete="off"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>แฟกซ์ <small style="color:red">ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" name="supplierFax"
              value="<?php echo $dataUpdate[0]['supplierFax'] ?>" placeholder="" autocomplete="off"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>ที่อยู่หลัก <small style="color:red">*</small> </label>
              <textarea rows="5" class="form-control" name="supplierAddress" autocomplete="off"
              placeholder="ที่อยู่" required><?php echo $dataUpdate[0]['supplierAddress'] ?></textarea>
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-info btn-fill pull-right">แก้ไขลูกค้า</button>
        <div class="clearfix"></div>

        <br>
        <br>

      </div>
    </div>

        <?php echo form_close() ?>

    </div>
    <!-- /#page-wrapper -->
</div>

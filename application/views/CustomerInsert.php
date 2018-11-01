<div id="wrapper" ng-controller="CustomerCtrl">

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">การจัดการลูกค้า</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <?php echo form_open_multipart('Customer/CustomerInsert') ?>

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <label>องค์กร <small style="color:red">*</small></label>
              <input type="text" class="form-control" name="customerCompany" autocomplete="off" placeholder="ตัวอย่าง : บริษัท นิวซีโน่ (ประเทศไทย) จำกัด" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>คำนำหน้า</label>
              <select class="form-control" name="customerPrefix">
                <option value="นาย" selected>นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>ชื่อ - นามสกุล <small style="color:red">* ( ไม่ต้องใส่ นาย/นาง/นางสาว )</small> </label>
              <input type="text" class="form-control" name="customerName" autocomplete="off" placeholder="ตัวอย่าง : สมชาย ลายคราม" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>ชื่อเล่น</label>
              <input type="text" class="form-control" name="customerNickname" placeholder="" autocomplete="off">
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>เพศ</label>
              <select class="form-control" name="customerSex">
                <option value="ชาย" selected>ชาย</option>
                <option value="หญิง">หญิง</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>แผนก</label>
              <input type="text" class="form-control" name="customerDepartment" placeholder="ตัวอย่าง : ฝ่ายบัญชี" autocomplete="off">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>ตำแหน่งงาน</label>
              <input type="text" class="form-control" name="customerPosition" placeholder="ตัวอย่าง : เจ้าหน้าที่จัดซื้อ" autocomplete="off">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>อีเมลล์</label>
              <input type="email" class="form-control" name="customerEmail" placeholder="" autocomplete="off" autocomplete="off">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>เบอร์ติดต่อ <small style="color:red">* ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" maxlength="10" class="form-control" name="customerMainPhone" placeholder="" autocomplete="off" required
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>เบอร์สำรอง <small style="color:red">ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" name="customerSubPhone" placeholder="" autocomplete="off"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>แฟกซ์ <small style="color:red">ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" name="customerFax" placeholder="" autocomplete="off"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>ที่อยู่หลัก <small style="color:red">*</small> </label>
              <textarea rows="5" class="form-control" name="customerAddress" autocomplete="off" placeholder="ที่อยู่" required></textarea>
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-info btn-fill pull-right">เพิ่มลูกค้า</button>
        <div class="clearfix"></div>

        <br>
        <br>

      </div>
    </div>

        <?php echo form_close() ?>





    </div>
    <!-- /#page-wrapper -->
</div>

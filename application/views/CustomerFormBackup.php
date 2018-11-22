<div id="wrapper" ng-controller="CustomerCtrl">

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">การจัดการลูกค้า</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <form>

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <label>องค์กร <small style="color:red">*</small></label>
              <input type="text" class="form-control" ng-Model="form.customerCompany" autocomplete="off" placeholder="ตัวอย่าง : บริษัท นิวซีโน่ (ประเทศไทย) จำกัด" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>คำนำหน้า</label>
              <select class="form-control" ng-Model="form.customerPrefix">
                <option value="นาย" selected>นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>ชื่อ - นามสกุล <small style="color:red">* ( ไม่ต้องใส่ นาย/นาง/นางสาว )</small> </label>
              <input type="text" class="form-control" ng-Model="form.customerName" autocomplete="off" placeholder="ตัวอย่าง : สมชาย ลายคราม" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>ชื่อเล่น</label>
              <input type="text" class="form-control" ng-Model="form.customerNickname" placeholder="" autocomplete="off">
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>เพศ</label>
              <select class="form-control" ng-Model="form.customerSex">
                <option value="ชาย" selected>ชาย</option>
                <option value="หญิง">หญิง</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>ฝ่าย</label>
              <input type="text" class="form-control" ng-Model="form.customerDepartment" placeholder="ตัวอย่าง : ฝ่ายบัญชี" autocomplete="off">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>ตำแหน่งงาน</label>
              <input type="text" class="form-control" ng-Model="form.customerPosition" placeholder="ตัวอย่าง : เจ้าหน้าที่จัดซื้อ" autocomplete="off">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>อีเมลล์</label>
              <input type="email" class="form-control" ng-Model="form.customerEmail" placeholder="" autocomplete="off" autocomplete="off">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>เบอร์ติดต่อ <small style="color:red">* ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" maxlength="10" class="form-control" ng-Model="form.customerMainPhone" placeholder="" autocomplete="off" required
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>เบอร์สำรอง <small style="color:red">ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" ng-Model="form.customerSubPhone" placeholder="" autocomplete="off"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>แฟกซ์ <small style="color:red">ไม่ต้องใส่เครื่องหมาย ( - )</small> </label>
              <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" ng-Model="form.customerFax" placeholder="" autocomplete="off"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>จังหวัด <small style="color:red">*</small> </label>
                <select class="form-control" ng-change="idDistricts()" ng-model="form.customerProvinces">
                  <option value="0" selected>--- กรุณาเลือกจังหวัด ---</option>
                  <option ng-repeat="provinces in dataProvinces" value="{{provinces.id}}" >{{provinces.name_in_thai}}</option>
                </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>อำเภอ <small style="color:red">*</small> </label>
              <select class="form-control" ng-change="idSubDistricts()" ng-model="form.customerDistricts">
                <option value="0" selected>--- กรุณาเลือกอำเภอ ---</option>
                <option ng-repeat="districts in dataDistricts" value="{{districts.id}}" >{{districts.name_in_thai}}</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>ตำบล <small style="color:red">*</small> </label>
              <select class="form-control" ng-model="form.customerSubDistricts">
                <option value="0" selected>--- กรุณาเลือกตำบล ---</option>
                <option ng-repeat="subDistricts in dataSubDistricts" value="{{subDistricts.id}}" >{{subDistricts.name_in_thai}}</option>
              </select>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>ที่อยู่หลัก <small style="color:red">*</small> </label>
              <textarea rows="5" class="form-control" ng-Model="form.customerAddress" autocomplete="off" placeholder="ที่อยู่" required></textarea>
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-info btn-fill pull-right" ng-Click="CustomerInsert()">เพิ่มลูกค้า</button>
        <div class="clearfix"></div>

        <br>
        <br>

      </form>


      </div>
    </div>






    </div>
    <!-- /#page-wrapper -->
</div>

<div id="wrapper" ng-controller="SupplierFormCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">ข้อมูลองค์กร (ผู้ผลิต)
          <a href="#" style="font-size:11px;padding-left:10px;color:red;"
          onClick="javascript: return confirm('ต้องการทำสิ่งนี้ใช่หรือไม่')" ng-Show="{{delete}}" ng-Click="onClickDelete()"><b>ลบ</b></i> </a></h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <form>

      <div class="row" style="padding-top:2em">
        <div class="col-lg-9 col-lg-offset-1">

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>ชื่อองค์กร <small style="color:red">*</small></b></div>
              <div class="col-md-6">
                <input type="text" class="form-control" ng-Model="form.supplierCompany" autocomplete="off"
                placeholder="ตัวอย่าง : บริษัท นิวซีโน่ (ประเทศไทย) จำกัด" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>โทร (องค์กร)</b></div>
              <div class="col-md-6">
                <input type="tel" maxlength="10" class="form-control" ng-Model="form.supplierCompanyPhone" autocomplete="off"
                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
              </div>
            </div>


            <div class="form-group row">
              <div class="col-md-2"><b>แฟกซ์ (องค์กร)</b></div>
              <div class="col-md-6">
                <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" ng-Model="form.supplierCompanyFax" autocomplete="off"
                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
              </div>
            </div>

          </div>

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>ที่อยู่องค์กร</b></div>
              <div class="col-md-6">
                <textarea rows="3" class="form-control" ng-Model="form.supplierAddress" autocomplete="off"></textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>จังหวัด</b></div>
              <div class="col-md-6">
                <select class="form-control" ng-change="idProvinces()" ng-model="form.supplierProvinces">
                  <option value="0" selected>--- กรุณาเลือกจังหวัด ---</option>
                  <option ng-repeat="provinces in dataProvinces" value="{{provinces.id}}" >{{provinces.name_in_thai}}</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2"><b>อำเภอ / เขต</b></div>
              <div class="col-md-6">
                <select class="form-control" ng-change="idDistricts()" ng-model="form.supplierDistricts">
                  <option value="0" selected>--- กรุณาเลือกอำเภอ ---</option>
                  <option ng-repeat="districts in dataDistricts" value="{{districts.id}}" >{{districts.name_in_thai}}</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2"><b>ตำบล / แขวง</b></div>
              <div class="col-md-6">
                <select class="form-control" ng-change="idSubDistricts()" ng-model="form.supplierSubDistricts">
                  <option value="0" selected>--- กรุณาเลือกตำบล ---</option>
                  <option ng-repeat="subDistricts in dataSubDistricts" value="{{subDistricts.id}}" >{{subDistricts.name_in_thai}}</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>รหัสไปรษณีย์</b></div>
              <div class="col-md-6">
                <input type="text" class="form-control" ng-Model="form.supplierZipcode" autocomplete="off"
                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="5">
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">ข้อมูลผู้ติดต่อ (ผู้ผลิต)</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-lg-9 col-lg-offset-1">

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>คำนำหน้า</b></div>
              <div class="col-md-6">
                <select class="form-control" ng-Model="form.supplierPrefix">
                  <option value="นาย" selected>นาย</option>
                  <option value="นาง">นาง</option>
                  <option value="นางสาว">นางสาว</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2"><b>ชื่อ - นามสกุล <small style="color:red">*</small> </b></div>
              <div class="col-md-6">
                <input type="text" class="form-control" ng-Model="form.supplierName" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-2"><b>ชื่อเล่น</b></div>
              <div class="col-md-6">
                <input type="text" class="form-control" ng-Model="form.supplierNickname" placeholder="" autocomplete="off">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-2"><b>เพศ</b></div>
              <div class="col-md-6">
                <select class="form-control" ng-Model="form.supplierSex">
                  <option value="ชาย" selected>ชาย</option>
                  <option value="หญิง">หญิง</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>ตำแหน่งงาน <small style="color:red">*</small></b></div>
              <div class="col-md-6">
                <input type="text" class="form-control" ng-Model="form.supplierPosition" placeholder="ตัวอย่าง : เจ้าหน้าที่จัดซื้อ" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-2"><b>ฝ่ายงาน <small style="color:red">*</small></b></div>
              <div class="col-md-6">
                <input type="text" class="form-control" ng-Model="form.supplierDepartment" placeholder="ตัวอย่าง : ฝ่ายบัญชี" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group row">
              <div class="col-md-2"><b>อีเมลล์</b></div>
              <div class="col-md-6">
                <input type="email" class="form-control" ng-Model="form.supplierEmail" placeholder="" autocomplete="off">
              </div>
            </div>
          </div>


          <div class="row">
            <div class="form-group row">
            <div class="col-md-2"><b>เบอร์ติดต่อ <small style="color:red">*</small></b></div>
            <div class="col-md-6">
                <input type="tel" maxlength="10" class="form-control" ng-Model="form.supplierMainPhone" placeholder="" autocomplete="off" required
                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
              </div>
            </div>

            <div class="form-group row">
            <div class="col-md-2"><b>เบอร์สำรอง</b></div>
            <div class="col-md-6">
                <input type="tel" pattern="[0-9]*" maxlength="10" class="form-control" ng-Model="form.supplierSubPhone" placeholder="" autocomplete="off"
                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
              </div>
            </div>

            <div class="form-group row">
            <div class="col-md-2"><b>Line Id</b></div>
            <div class="col-md-6">
                <input type="text" ng-Model="form.supplierIdLine" class="form-control">
              </div>
            </div>
          </div>

          <div class="row" style="padding:3em" ng-show="{{insert}}">
            <button type="submit" class="btn btn-info btn-lg btn-block" ng-Click="onClickInsert()">เพิ่มลูกค้า</button>
          </div>

          <div class="row" style="padding:3em" ng-show="{{update}}">
            <button type="submit" class="btn btn-warning btn-lg btn-block" ng-Click="onClickUpdate()">แก้ไขลูกค้า</button>
          </div>


        </div>
      </div>

    </form>


  </div>


  <!-- /#page-wrapper -->
</div>

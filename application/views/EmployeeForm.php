<div id="wrapper" ng-Controller="EmployeeFormCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการพนักงาน
          <span ng-if="form.profileId">
          <a href="#" style="font-size:11px;padding-left:10px;color:red;"
          onClick="javascript: return confirm('ต้องการทำสิ่งนี้ใช่หรือไม่')" ng-Click="onClickDelete()"><b>ลบ</b></i></a></span></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <form>

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>ชื่อองค์กร</b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" autocomplete="off" value="บริษัท นิวซีโน่ (ประเทศไทย) จำกัด"
                    disabled  placeholder="" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>ไอดีเข้าสู่ระบบ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" autocomplete="off" ng-model="form.loginUsername"
                  placeholder="" ng-disabled="update" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>รหัสผ่าน <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="password" class="form-control" autocomplete="off" ng-model="form.loginPassword"
                  placeholder="" ng-disabled="update" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>คำนำหน้า <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <select class="form-control" ng-model="form.profilePrefix">
                    <option value="นาย" selected>นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>ชื่อ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" autocomplete="off" ng-model="form.profileName"
                  placeholder="" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>นามสกุล <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" autocomplete="off" ng-model="form.profileSurname"
                  placeholder="" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>ชื่อเล่น <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" autocomplete="off" ng-model="form.profileNickname"
                  placeholder="" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>เพศ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <select class="form-control" ng-model="form.profileSex">
                    <option value="ชาย" selected>ชาย</option>
                    <option value="หญิง">หญิง</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>รหัสประจำตัวประชาชน <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" autocomplete="off" ng-model="form.profileCitizenId" placeholder="" maxlength="13" required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>อีเมลล์ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="email" class="form-control" autocomplete="off" ng-model="form.profileEmail"
                  placeholder="" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>เบอร์ติดต่อ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="tel" class="form-control" autocomplete="off" ng-model="form.profilePhone" placeholder="" maxlength="10" required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>ตำแหน่งงาน <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <select class="form-control" ng-model="form.positionId" >
                      <option value="0" selected>----- กรุณาเลือกตำแหน่งงาน -----</option>
                      <option ng-repeat="data in dataPositions" value="{{data.positionId}}">{{data.positionName}}</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>รูปภาพประจำตัว</b></div>
                <div class="col-md-6">
                  <input type="file" accept="image/*" ng-model="profileImage" class="form-control">
                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="form-group row">
                <div class="col-md-3"><b>ที่อยู่ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <textarea rows="5" class="form-control" ng-model="form.profileAddress" autocomplete="off" placeholder="ที่อยู่" required></textarea>
              </div>
            </div>

            <span ng-if="form.profileId">
              <div class="row" style="padding:3em" ng-disabled="update">
                <button type="submit" class="btn btn-warning btn-lg btn-block" ng-click="onClickUpdate()">แก้ไขสมาชิก</button>
              </div>
            </span>

            <span ng-if="!form.profileId">
              <div class="row" style="padding:3em" ng-disabled="insert">
                <button type="submit" class="btn btn-info btn-lg btn-block" ng-click="onClickInsert()">สมัครสมาชิก</button>
              </div>
            </span>

            <div class="clearfix"></div>

            <br>
            <br>

          </div>
        </div>

      </form>

    </div>
    <!-- /#page-wrapper -->
  </div>

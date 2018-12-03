<div id="wrapper" ng-controller="EmployeeCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการพนักงาน <a href="#" ng-click="onClickInsert()"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="10%" class="text-center">ลำดับ</th>
                  <th class="text-center">ชื่อ - นามสกุล</th>
                  <th class="text-center">ตำแหน่ง</th>
                  <th class="text-center">เบอร์ติดต่อ</th>
                  <th class="text-center">สถานะ</th>
                  <th class="text-center" width="15%">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>

                <tr ng-repeat="dataEmployee in dataEmployees">
                  <td class="text-center"> <b>{{$index+1}}</b> </td>
                  <td class="text-center"> <b>{{dataEmployee.profilePrefix}} {{dataEmployee.profileName}} {{dataEmployee.profileSurname}} </b> </td>
                  <td class="text-center"> <b>{{dataEmployee.positionName}}</b> </td>
                  <td class="text-center"> <b>{{dataEmployee.profilePhone.substr(0,3)}}-{{dataEmployee.profilePhone.substr(3,3)}}-{{dataEmployee.profilePhone.substr(6,4)}}</b> </td>
                  <td class="text-center"> <span ng-if="dataEmployee.profileStatus == 1" style="color:green;font-weight:bold">ปกติ</span>
                                           <span ng-if="dataEmployee.profileStatus == 2" style="color:red;font-weight:bold">พ้นสภาพ</span>
                                           <span ng-if="dataEmployee.profileStatus >= 3" style="color:#e6e600;font-weight:bold">พักงาน</span> </td>

                  <?php if ($_SESSION['permission'] >= 2): ?>
                    <td class="text-center">
                      <a href="#" style="font-size:13px;padding-left:10px;color:blue;" ng-click="onClickUpdate(dataEmployee)">
                        <b>จัดการพนักงาน</b> <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                  <?php else: ?>
                    <td class="text-center" style="color:red">
                      <b>Admin Zone</b>
                    </td>
                  <?php endif; ?>

                </tr>

                </tbody>
              </table>
              <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.col-lg-12 -->
        </div>




      </div>
      <!-- /#page-wrapper -->
    </div>

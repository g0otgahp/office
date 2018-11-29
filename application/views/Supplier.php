<div id="wrapper" ng-controller="SupplierCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการผู้ผลิต <a href="#" ng-Click="onClickInsert()"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" datatable="ng" dt-options="dtOptions" dt-instance="dtInstance">
              <thead>
                <tr>
                  <th width="5%" class="text-center">ลำดับ</th>
                  <th class="text-center">ชื่อบริษัท</th>
                  <th class="text-center">ชื่อผู้ติดต่อ</th>
                  <th class="text-center" width="10%">ชื่อเล่น</th>
                  <th class="text-center" width="12%">ตำแหน่งงาน</th>
                  <th class="text-center" width="10%">ฝ่ายงาน</th>
                  <th class="text-center" width="10%">เบอร์ติดต่อ</th>
                  <th class="text-center" width="10%">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>

                <tr ng-repeat="supplier in dataSupplier">
                  <td class="text-center"> <b>{{$index+1}}</b></td>
                  <td> <b>{{supplier.supplierCompany}}</b> </td>
                  <td> <b>คุณ {{supplier.supplierName}}</b> </td>
                  <td class="text-left"> <b>คุณ {{supplier.supplierNickname}}</b> </td>
                  <td class="text-left"> <b>{{supplier.supplierPosition}}</b> </td>
                  <td class="text-left"> <b>{{supplier.supplierDepartment}}</b> </td>
                  <td class="text-left"> <b>{{supplier.supplierMainPhone.substr(0,3)}}-{{supplier.supplierMainPhone.substr(3,3)}}-{{supplier.supplierMainPhone.substr(6,4)}}</b> </td>

                  <?php if ($_SESSION['permission'] >= 2): ?>
                    <td class="text-center">
                       <a href="#" ng-Click="onClickUpdate(supplier)"> <b>รายละเอียด</b> </a>
                     </td>
                    <?php else: ?>
                      <td class="text-center" style="color:red"><b>Admin Zone</b></td>
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

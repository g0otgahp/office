<div id="wrapper" ng-controller="CustomerCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการลูกค้า <a href="<?php echo SITE_URL('Customer/CustomerForm'); ?>"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover dataTable">
              <thead>
                <tr>
                  <th width="10%" class="text-center">ลำดับ</th>
                  <th class="text-center">ชื่อบริษัท</th>
                  <th class="text-center">ชื่อผู้ติดต่อ</th>
                  <th class="text-center">แผนก</th>
                  <th class="text-center">ตำแหน่ง</th>
                  <th class="text-center">เบอร์ติดต่อ</th>
                  <th class="text-center" width="15%">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>

                <?php $i=1; foreach ($dataShow as $dataShow): ?>

                  <tr>
                    <td class="text-center"> <b><?php echo $i ?></b></td>
                    <td> <b><?php echo $dataShow['customerCompany'] ?></b> </td>
                    <td> <b>คุณ <?php echo $dataShow['customerName'] ?></b> </td>
                    <td class="text-center"> <b><?php echo $dataShow['customerDepartment'] ?></b> </td>
                    <td class="text-center"> <b><?php echo $dataShow['customerPosition'] ?></b> </td>
                    <td class="text-center"> <b><?php echo substr($dataShow['customerMainPhone'],0,3) . "-" .
                    substr($dataShow['customerMainPhone'],3,3) . "-" .
                    substr($dataShow['customerMainPhone'],6,4)?></b> </td>

                    <?php if ($_SESSION['permission'] >= 2): ?>
                      <td class="text-center"> <a href="<?php echo SITE_URL('Customer/CustomerForm/?customerId=' . $dataShow['customerId']); ?>"> <b>รายละเอียดลูกค้า</b> </a> </td>
                      <!-- <td class="text-center"> <a href="" ng-click="btnUpdate()"> <b>รายละเอียดลูกค้า</b> </a> </td> -->
                      <?php else: ?>
                        <td class="text-center" style="color:red"><b>Admin Zone</b></td>
                    <?php endif; ?>
                  </tr>

                  <?php $i++; endforeach; ?>

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

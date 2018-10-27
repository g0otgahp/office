<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการผู้จำหน่าย <a href="<?php echo SITE_URL('Supplier/SupplierFormInsert'); ?>"
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

                <!-- <tr>
                  <td class="text-center">1</td>
                  <td>บริษัท LG Life's Goods</td>
                  <td>เจ้าหน้าที่ LG</td>
                  <td class="text-center">การตลาด</td>
                  <td class="text-center">พนักงานขาย</td>
                  <td class="text-center">088-234-7765</td>
                  <td class="text-center"> <a href="#"><b>รายละเอียดผู้จำหน่าย</b></a> </td>
                </tr> -->

                <?php $i=1; foreach ($dataShow as $dataShow): ?>

                <tr>
                  <td class="text-center"> <b><?php echo $i ?></b></td>
                  <td> <b><?php echo $dataShow['supplierCompany'] ?></b> </td>
                  <td> <b>คุณ <?php echo $dataShow['supplierName'] ?></b> </td>
                  <td class="text-center"> <b><?php echo $dataShow['supplierDepartment'] ?></b> </td>
                  <td class="text-center"> <b><?php echo $dataShow['supplierPosition'] ?></b> </td>
                  <td class="text-center"> <b><?php echo substr($dataShow['supplierMainPhone'],0,3) . "-" .
                                                         substr($dataShow['supplierMainPhone'],3,3) . "-" .
                                                         substr($dataShow['supplierMainPhone'],6,4)?></b> </td>
                  <td class="text-center"> <a href="<?php echo SITE_URL('Supplier/SupplierFormUpdate/' . $dataShow['supplierId']); ?>"> <b>รายละเอียดลูกค้า</b> </a> </td>
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

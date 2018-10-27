<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการสินค้า <a href="<?php echo SITE_URL('Product/ProductFormInsert'); ?>"
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
                  <th class="text-center">รหัสสินค้า</th>
                  <th class="text-center">ประเภทสินค้า</th>
                  <th class="text-center">ชื่อรุ่น</th>
                  <th class="text-center">แบรนด์</th>
                  <th class="text-center">ราคา</th>
                  <th class="text-center" width="15%">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>

                <!-- <tr>
                  <td class="text-center">1</td>
                  <td>NEWZENO</td>
                  <td>55SE3KD</td>
                  <td class="text-center">Digital Signage</td>
                  <td class="text-center">LG Life's Goods</td>
                  <td class="text-center">56000</td>
                  <td class="text-center"> <a href="#"><b>รายละเอียดสินค้า</b></a> </td>
                </tr> -->

                <?php $i=1; foreach ($dataShow as $dataShow): ?>

                <tr>
                  <td class="text-center"> <b><?php echo $i ?></b></td>
                  <td> <b><?php echo $dataShow['productCode'] ?></b> </td>
                  <td class="text-center"> <b><?php echo $dataShow['productCategory'] ?></b> </td>
                  <td class="text-center"> <b><?php echo $dataShow['productModel'] ?></b> </td>
                  <td class="text-center"> <b><?php echo $dataShow['productBrand'] ?></b> </td>
                  <td class="text-center"> <b><?php echo number_format($dataShow['productRetail']) ?> บาท</b> </td>
                  <td class="text-center"> <a href="<?php echo SITE_URL('product/productFormUpdate/' . $dataShow['productId']); ?>"> <b>รายละเอียดลูกค้า</b> </a> </td>
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

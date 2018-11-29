<div id="wrapper" ng-controller="ProductCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการสินค้า <a href="#" ng-Click="onClickInsert()"
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
                    <th width="10%" class="text-center">ลำดับ</th>
                  <th class="text-center">รหัสสินค้า</th>
                  <th class="text-center">ประเภทสินค้า</th>
                  <th class="text-center">แบรนด์</th>
                  <th class="text-center">ชื่อรุ่น</th>
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


                <tr ng-repeat="product in dataProduct">
                  <td class="text-center"> <b>{{$index+1}}</b></td>
                  <td> <b>{{product.productCode}}</b> </td>
                  <td class="text-center"> <b>{{product.product_categoryName}}</b> </td>
                  <td class="text-center"> <b>{{product.product_brandName}}</b> </td>
                  <td class="text-center"> <b>{{product.productModel}}</b> </td>
                  <td class="text-center"> <b>{{product.productRetail | number:2}} บาท</b> </td>
                  <?php if ($_SESSION['permission'] >= 2): ?>
                    <td class="text-center"> <a href="#" ng-Click="onClickUpdate(product)"> <b>รายละเอียดสินค้า</b> </a> </td>
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

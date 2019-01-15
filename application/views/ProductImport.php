<div id="wrapper" ng-controller="ProductImportCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">นำเข้าสินค้า <a onclick="Reload();" href="<?php echo SITE_URL('ProductImport/ProductImportForm/'.$_SESSION['profileId'].'?profileId='.$_SESSION['profileId']); ?>"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">

            <div class="rows">

              <table width="100%" class="table table-striped table-bordered table-hover" datatable="ng" dt-options="dtOptions" dt-instance="dtInstance">
                <thead>
                  <tr>
                    <th width="5%" class="text-center">ลำดับ</th>
                    <th width="15%" class="text-center">วัน/เดือน/ปี</th>
                    <th width="8%" class="text-left">เลขที่เอกสาร</th>
                    <th width="8%" class="text-left">เอกสารอ้างอิง</th>
                    <th width="8%" class="text-right">จำนวณ</th>
                    <th width="8%" class="text-right">ราคารวม</th>
                    <th width="17%" class="text-left">ชื่อผู้รับ</th>
                    <th width="15%" class="text-left">เบอร์โทรศัพท์</th>
                    <th width="8%" class="text-center">พิมพ์</th>
                    <th width="15%" class="text-center">ตัวเลือก</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="Stock in StockList">
                    <td class="text-center"> <b>{{$index+1}}</b> </td>
                    <td class="text-center"> <b>{{Stock.stockDate}}</b> </td>
                    <td class="text-left"> <b>{{Stock.stockNo}}</b> </td>
                    <td class="text-left"> <b>{{Stock.stockRef}}</b> </td>
                    <td class="text-right" style="color:green;"> <b>{{Stock.SUMQty  | number}} <i class="glyphicon glyphicon-arrow-up"> </i></b> </td>
                    <td class="text-right"> <b>{{Stock.SUMPrice | number:2}}</b> </td>
                    <td class="text-left"> <b>{{Stock.stockReciveName}}</b> </td>
                    <td class="text-left"> <b>{{Stock.stockTel}}</b> </td>
                    <td class="text-center">
                      <a class="btn btn-primary btn-xs" href=""><b>พิมพ์ </b><i class="fa fa-print"></i></a>
                    </td>
                    <?php if ($_SESSION['permission'] >= 2): ?>
                        <td class="text-center"> <a href="#" class="btn btn-primary btn-xs"> <b>ตรวจสอบ <i class="glyphicon glyphicon-eye-open"></i></b> </a> </td>
                          <?php else: ?>
                        <td class="text-center" style="color:red"><b>Admin Zone</b></td>
                    <?php endif; ?>
                  </tr>

                </tbody>
              </table>
            </div>

            <!-- /.table-responsive -->
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.col-lg-12 -->
      </div>




    </div>
    <!-- /#page-wrapper -->
  </div>

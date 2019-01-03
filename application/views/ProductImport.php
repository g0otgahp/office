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

              <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%" class="text-center">ลำดับ</th>
                    <th width="15%" class="text-center">วัน/เดือน/ปี</th>
                    <th width="30%" class="text-center">เลขที่เอกสาร</th>
                    <th width="10%" class="text-center">สถานะ</th>
                    <th width="8%" class="text-center">พิมพ์</th>
                    <th width="15%" class="text-center">ตัวเลือก</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"> <b>1</b> </td>
                    <td class="text-center"> <b>2018-12-19 15:28:04</b> </td>
                    <td class="text-center"> <b>MP-181219-01</b> </td>
                    <td class="text-center"> <b>รออนุมัติ</b> </td>
                    <td class="text-center">
                      <a class="btn btn-primary btn-xs" href=""><b>พิมพ์ </b><i class="fa fa-print"></i></a>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-success btn-xs" href="#"><b>อนุมัติ </b></a>
                      <a class="btn btn-danger btn-xs" href="#"><b>ยกเลิก </b></a>
                    </td>
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

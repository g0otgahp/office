<div id="wrapper" ng-controller="Ctrl">

  <div id="page-wrapper" >
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"> <a href="<?php echo SITE_URL('Quotation'); ?>">ใบเสนอราคา</a>
          -
        <span>สร้างใบเสนอราคา</span>
      </h1>

          <!-- <a href="<?php echo SITE_URL('Quotation/quotationform'); ?>"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1> -->
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">

            <div class="row">
              <div class="col-lg-12">

            <div class="row">
              <div class="col-md-2">
              <div class="form-group">
                <label></label>
                <button type="submit" class="btn btn-defualt btn-fill" ng-click="openModal()">เลือกลูกค้า</button>
              </div>
            </div>
                <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" disabled ng-model="name">
                  <button type="submit" class="btn btn-defualt btn-fill" ng-click="CheckName()">เช็คชื่อ</button>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                <!-- /.panel-heading -->
                  <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th width="5%" class="text-center">ลำดับ</th>
                        <th width="25%" class="text-center">รายการ</th>
                        <th width="5%" class="text-center">จำนวน</th>
                        <th width="10%" class="text-center">หน่วยนับ</th>
                        <th width="10%" class="text-center">ราคา/หน่วย</th>
                        <th width="10%" class="text-center">ส่วนลด/หน่วย</th>
                        <th width="10%" class="text-center">รวม</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-left">Hotel TV รุ่น 75UV340C ความละเอียด 4k</td>
                          <td class="text-center">1</td>
                          <td class="text-center">เครื่อง</td>
                          <td class="text-right">75,000</td>
                          <td class="text-right">5,000</td>
                          <td class="text-right">
                            70,000
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center" colspan="7"><a href="#" > <i class="glyphicon glyphicon-plus"></i>เพิ่มสินค้า</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
              </div>


            <button type="submit" class="btn btn-info btn-fill" disabled>สร้างใบเสนอราคา</button>
            <div class="clearfix"></div>

            <br>
            <br>

          </div>
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

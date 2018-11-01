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
              </div>

              <div ng-if="SelectCustomer">

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>เรียน :</label>
                      <input class="form-control" placeholder="กรอก โปรเจค" ng-model="SelectCustomer.customerName">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>ชื่อหน่วยงาน :</label>
                      <input class="form-control" placeholder="กรอก โปรเจค" ng-model="SelectCustomer.customerCompany">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>**โปรเจค :</label>
                      <input class="form-control" placeholder="กรอก โปรเจค" ng-model="SelectCustomer.customerProject">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>โทรศัพท์ : </b> <input class="form-control" placeholder="กรอก โปรเจค" ng-model="SelectCustomer.customerMainPhone">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <b>E-Mail : </b> <input class="form-control" placeholder="กรอก โปรเจค" ng-model="SelectCustomer.customerEmail">
                    </div>
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
                        <th width="7%" class="text-center">จำนวน</th>
                        <th width="8%" class="text-center">หน่วยนับ</th>
                        <th width="8%" class="text-center">ราคา/หน่วย</th>
                        <th width="8%" class="text-center">ส่วนลด/หน่วย</th>
                        <th width="8%" class="text-center">รวม</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="item in SelectProduct">
                        <td class="text-center">{{$index+1}}</td>
                        <td class="text-left">{{item.productBrand}} {{item.productCategory}} รุ่น {{item.productModel}}</td>
                        <td class="text-center"><input class="form-control" type="number" min="0" max="999" placeholder="" value="0" ng-model="item.productQty"></td>
                        <td class="text-center">เครื่อง</td>
                        <td class="text-right"><input class="form-control" type="number" min="0" max="999" placeholder="" value="0" ng-model="item.productRetail"></td>
                        <td class="text-right"><input class="form-control" type="number" min="0" max="999" placeholder="ส่วนลด" ng-model="item.productDiscount"></td>
                        <td class="text-right">
                          {{(item.productRetail - item.productDiscount) * item.productQty | number}}
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" colspan="7"><button type="submit" class="btn btn-defualt btn-fill btn-link" ng-click="openProductModal()"> <i class="glyphicon glyphicon-plus"></i>เพิ่มสินค้า</button></td>
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

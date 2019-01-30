<div id="wrapper" ng-controller="QuotationCtrl">

  <div id="page-wrapper">
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
              <div ng-if="Forms.SelectCustomer != ''">

                <table class="table">
                  <tr>
                    <td width="10%">ชื่อหน่วยงาน</td>
                    <td width="60%"> : <input placeholder="กรอก ชื่อหน่วยงาน" ng-model="Forms.SelectCustomer.customerCompany" ></td>
                    <td width="10%"></td>
                    <td></td>
                  </tr>

                  <tr>
                    <td width="10%">เรียน</td>
                    <td> : <input placeholder="กรอก ชื่อลูกค้า" ng-model="Forms.SelectCustomer.customerName" ></td>
                    <td width="10%">เลขที่</td>
                    <td class="text-success"> : อัตโนมัติ</td>
                  </tr>

                  <tr>
                    <td width="10%">โทรศัพท์</td>
                    <td> : <input placeholder="กรอก ชื่อหน่วยงาน" ng-model="Forms.SelectCustomer.customerMainPhone"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                    <td width="10%">ยื่นราคาภายใน</td>
                    <td> : <input placeholder="กรอก จำนวนวันที่" ng-model="Forms.SelectCustomer.quoReachDay"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                  </tr>

                  <tr>
                    <td width="10%">E-mail</td>
                    <td> : <input placeholder="กรอก ชื่อหน่วยงาน" ng-model="Forms.SelectCustomer.customerEmail" ></td>
                    <td width="10%">ส่งสินค้าภายใน</td>
                    <td> : <input placeholder="กรอก จำนวนวันที่" ng-model="Forms.SelectCustomer.quoTransportDay"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                  </tr>

                  <tr>
                    <td width="10%">โปรเจค</td>
                    <td> : <input placeholder="กรอก ชื่อโปรเจค" ng-model="Forms.SelectCustomer.quoProject" ></td>
                    <td width="10%">เงื่อนไขการเงิน</td>
                    <td> : <input placeholder="กรอก เงื่อนไขการเงิน" ng-model="Forms.SelectCustomer.quoPayments" ></td>
                  </tr>
                </table>

              </div>


              <div class="row">
                <div class="col-lg-12">
                  <!-- /.panel-heading -->
                  <span class="pull-right" style="color:#cc0000">*หมายเหตุ : เมื่อกรอกราคาลดเหลือจะใช้ราคาลดเหลือแทนราคาปกติ</span>
                  <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th width="3%"></th>
                        <th width="5%" class="text-center">ลำดับ</th>
                        <th width="25%" class="text-center">รายการ</th>
                        <th width="7%" class="text-center">จำนวน</th>
                        <th width="8%" class="text-center">หน่วยนับ</th>
                        <th width="8%" class="text-center">ราคา/หน่วย</th>
                        <th width="8%" class="text-center">เหลือ/หน่วย</th>
                        <th width="8%" class="text-center">รวม</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="item in Forms.SelectProduct">
                        <td class="text-center"><button class="btn btn-danger btn-xs" ng-click="remove(item)">X</button></td>
                        <td class="text-center">{{$index+1}}</td>
                        <td class="text-left" ng-if="!item.productId">
                          <input type="text" ng-model="item.productName" class="form-control input-sm">
                        </td>
                        <td class="text-left" ng-if="item.productId">
                          {{item.productName}}
                          <p style="color:gray">{{item.productDetail}}</p>
                        </td>
                        <td class="text-center"><input class="form-control text-right input-sm" type="tel" min="0" max="999" placeholder="จำนวน" value="0" ng-model="item.productQty"></td>
                        <td class="text-center"> <input class="form-control text-center input-sm" type="text" ng-model="item.productUnit"> </td>
                        <td class="text-right"><input class="form-control text-right input-sm" type="tel" placeholder="ราคา" ng-model="item.productRetail" autocomplete="off"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                        <td class="text-right"><input class="form-control text-right input-sm" type="tel" min="0" placeholder="ส่วนลด" ng-model="item.productDiscount"></td>
                        <td class="text-right">
                          <span ng-if="item.productDiscount != 0 && item.productDiscount">{{item.productDiscount * item.productQty | number}}</span>
                          <span ng-if="item.productDiscount == 0 || !item.productDiscount">{{item.productRetail * item.productQty | number}}</span>
                        </td>
                      </tr>
                      <tr ng-if="Forms.SelectProduct.length != 10">
                        <td  class="text-center"  colspan="8">
                          <button type="submit" class="btn btn-defualt btn-fill btn-link" ng-click="openProductModal()"> <i class="glyphicon glyphicon-plus"></i> เพิ่มสินค้า</button>
                        <button class="btn btn-defualt btn-fill btn-link" ng-click="addBlankProduct()"> <i class="glyphicon glyphicon-plus"></i> เพิ่มสินค้า (ค่าว่าง)</button></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <button class="btn btn-defualt btn-fill" ng-click="checkproduct()">เช็ค Log</button> -->
                  <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
              </div>

              <div ng-if="Forms.SelectCustomer != ''">

                <table class="table" border="0">
                  <tr>
                    <td width="40%" style="border-top: 0px solid #ddd;"><input class="form-control" placeholder="หมายเหตุที่ 1" ng-model="Forms.SelectCustomer.quoRemark1" ></td>
                    <td width="10%" style="border-top: 0px solid #ddd;"></td>
                    <td style="border-top: 0px solid #ddd;"></td>
                  </tr>
                  <tr>
                    <td width="40%" style="border-top: 0px solid #ddd;"><input class="form-control" placeholder="หมายเหตุที่ 2" ng-model="Forms.SelectCustomer.quoRemark2" ></td>
                    <td width="10%" style="border-top: 0px solid #ddd;"></td>
                    <td style="border-top: 0px solid #ddd;"></td>
                  </tr>
                  <tr>
                    <td width="40%" style="border-top: 0px solid #ddd;"> <input class="form-control" placeholder="หมายเหตุที่ 3" ng-model="Forms.SelectCustomer.quoRemark3" ></td>
                    <td width="10%" style="border-top: 0px solid #ddd;"></td>
                    <td style="border-top: 0px solid #ddd;"></td>
                  </tr>

                  <tr>
                    <td width="40%" style="border-top: 0px solid #ddd;"><textarea rows="4" class="form-control" placeholder="บันทึกช่วยจำ" ng-model="Forms.SelectCustomer.quoNote"></textarea></td>
                    <td width="10%" style="border-top: 0px solid #ddd;"></td>
                    <td style="border-top: 0px solid #ddd;"></td>
                  </tr>

                  <tr >
                    <td width="40%" style="border-top: 0px solid #ddd;"></td>
                    <td width="10%" style="border-top: 0px solid #ddd;"></td>
                    <td style="border-top: 0px solid #ddd;"></td>
                  </tr>

                </table>

              </div>


              <span class="text-center">
              <p style="color: #00b300" ng-if="Forms.SelectCustomer.length != 0 && Forms.SelectProduct.length != 0">กรุณาตรวจสอบข้อมูลอีกครั้ง</p>
              <button ng-click="submit()" class="btn btn-success btn-fill btn-block loading" data-loading-text="<i class='fa fa-spinner fa-spin'></i>"
                ng-disabled="(
                Forms.SelectCustomer.length == 0
                || Forms.SelectProduct.length == 0
                || Forms.SelectCustomer.customerCompany === undefined
                || Forms.SelectCustomer.customerName === undefined
                || Forms.SelectCustomer.customerMainPhone === undefined
                || Forms.SelectCustomer.customerEmail === undefined
                || Forms.SelectCustomer.quoPayments === undefined
                || Forms.SelectCustomer.quoReachDay === undefined
                || Forms.SelectCustomer.quoTransportDay === undefined
                )">สร้างใบเสนอราคา</button>
            </span>

              <div class="clearfix"></div>

              <br>
              <br>

            </div>
          </div>

          <!-- <pre>{{Forms.SelectProduct | json}}</pre> -->


          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.col-lg-12 -->
    </div>




  </div>
  <!-- /#page-wrapper -->
</div>

<div id="wrapper" ng-controller="ProductExportFormCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">นำออกสินค้า</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">

            <div class="rows">

              <div class="col-md-2">
                <div class="form-group">
                  <label></label>
                  <button type="submit" class="btn btn-primary btn-fill" ng-click="onClickSelectCustomer()">เลือกลูกค้า</button>
                </div>
              </div>

              <table class="table" ng-if="Forms.Customer.customerId">
                <tr>
                  <td width="10%">ชื่อหน่วยงาน</td>
                  <td width="60%"> : <input placeholder="กรอก ชื่อผู้รับสินค้า" ng-model="Forms.Customer.customerCompany"></td>
                  <td width="10%"></td>
                  <td></td>
                </tr>

                <tr>
                  <td width="10%">เรียน</td>
                  <td> : <input placeholder="กรอก โทรศัพท์" ng-model="Forms.Customer.customerName"></td>
                  <td width="10%"></td>
                  <td></td>
                </tr>

                <tr>
                  <td width="10%">โทรศัพท์</td>
                  <td> : <input placeholder="กรอก E-mail" ng-model="Forms.Customer.customerMainPhone"></td>
                  <td width="10%"></td>
                  <td></td>
                </tr>

                <tr>
                  <td width="10%">E-mail</td>
                  <td> : <input placeholder="กรอก E-mail" ng-model="Forms.Customer.customerEmail"></td>
                  <td width="10%">เลขที่ใบสั่งซื้อ</td>
                  <td> : <input placeholder="กรอก เลขที่ใบสั่งซื้อ" ng-model="Forms.Document.QuoNo"></td>
                </tr>

              </table>


              <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="3%"></th>
                    <th width="5%" class="text-center">ลำดับ</th>
                    <th width="25%" class="text-center">รายการ</th>
                    <th width="7%" class="text-center">จำนวน</th>
                    <th width="8%" class="text-center">หน่วยนับ</th>
                    <th width="8%" class="text-center">ราคา/หน่วย</th>
                    <th width="8%" class="text-center">รวม</th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="data in Forms.SelectProduct">

                    <td class="text-center">
                      <button class="btn btn-danger btn-xs" ng-click="">X</button>
                    </td>

                    <td class="text-center"> <b>{{$index+1}}</b> </td>

                    <td class="text-left" ng-if="!data.productId">
                      <input class="form-control  input-sm" ng-model="data.productName">
                    </td>

                    <td class="text-left" ng-if="data.productId">
                      {{data.productName}}
                      <p style="color:gray">{{data.productDetail}}</p>
                    </td>

                    <td class="text-center">
                      <input class="form-control text-right input-sm" type="tel" placeholder="จำนวน"
                      value="1" ng-model="data.productQty"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    </td>

                    <td class="text-center">
                      <input class="form-control text-center input-sm" type="text" ng-model="data.productUnit">
                    </td>

                    <td class="text-right">
                      <input class="form-control text-right input-sm" type="tel" placeholder="ราคา"
                      ng-model="data.productRetail" autocomplete="off"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    </td>

                    <td class="text-right">
                      <span>{{data.productRetail * data.productQty | number}}</span>
                    </td>

                  </tr>

                  <tr>
                    <td class="text-center"  colspan="8">
                      <button type="submit" class="btn btn-defualt btn-fill btn-link" ng-click="onClickSelectProduct()">
                         <i class="glyphicon glyphicon-plus"></i> เลือกสินค้า
                       </button>
                       <button class="btn btn-defualt btn-fill btn-link" ng-click="addBlankProduct()">
                         <i class="glyphicon glyphicon-plus"></i> เพิ่มสินค้า (ค่าว่าง)
                       </button>
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

      <div class="">
        <table class="table" border="0">
          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"><input class="form-control" placeholder="หมายเหตุที่ 1" ng-model="Forms.Document.stockRemark1" ></td>
            <td width="10%" style="border-top: 0px solid #ddd;"></td>
            <td style="border-top: 0px solid #ddd;"></td>
          </tr>
          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"><input class="form-control" placeholder="หมายเหตุที่ 2" ng-model="Forms.Document.stockRemark2" ></td>
            <td width="10%" style="border-top: 0px solid #ddd;"></td>
            <td style="border-top: 0px solid #ddd;"></td>
          </tr>
          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"> <input class="form-control" placeholder="หมายเหตุที่ 3" ng-model="Forms.Document.stockRemark3" ></td>
            <td width="10%" style="border-top: 0px solid #ddd;"></td>
            <td style="border-top: 0px solid #ddd;"></td>
          </tr>

          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"><textarea rows="4" class="form-control" placeholder="บันทึกช่วยจำ" ng-model="Forms.Document.stockNote"></textarea></td>
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

      <!-- <div class="col-md-2">
        <div class="form-group">
          <label></label>
          <button type="submit" class="btn btn-warning btn-fill" ng-click="onClickSelectEmployee()">เลือกพนักงานส่งสินค้า</button>
        </div>
      </div>

      <table class="table">
        <tr>
          <td width="10%">ชื่อพนักงาน</td>
          <td width="60%"> : <input placeholder="กรอก ชื่อผู้รับสินค้า" ng-model="Forms.Employee"></td>
          <td width="10%"></td>
          <td></td>
        </tr>
      </table> -->

      <span class="">
        <p style="color: #00b300" ng-if="Forms.SelectProduct.length != 0">กรุณาตรวจสอบข้อมูลอีกครั้ง</p>
        <button type="submit" class="btn btn-success btn-fill btn-block loading" ng-Click="onClickExport()"
        ng-disabled="(
        Forms.SelectProduct.length == 0 ||
        Forms.Document.QuoNo == undefined ||
        Forms.Customer.customerCompany == undefined ||
        Forms.Customer.customerName === undefined ||
        Forms.Customer.customerMainPhone == undefined ||
        Forms.Customer.customerEmail == undefined
        )">สร้างใบนำออกสินค้า</button>
      </span>

      <br><br><br>




    </div>
    <!-- /#page-wrapper -->
  </div>

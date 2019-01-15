<div id="wrapper" ng-controller="ProductImportFormCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">นำเข้าสินค้า</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">

            <div class="rows">

              <table class="table">
                <tr>
                  <td width="10%">ชื่อผู้รับสินค้า</td>
                  <td width="60%"> : <input placeholder="กรอก ชื่อผู้รับสินค้า" ng-model="Forms.Profile[0].stockReciveName" ></td>
                  <td width="10%"></td>
                  <td></td>
                </tr>

                <tr>
                  <td width="10%">โทรศัพท์</td>
                  <td> : <input placeholder="กรอก โทรศัพท์" ng-model="Forms.Profile[0].profilePhone" ></td>
                  <td width="10%"></td>
                  <td></td>
                </tr>

                <tr>
                  <td width="10%">E-mail</td>
                  <td> : <input placeholder="กรอก E-mail" ng-model="Forms.Profile[0].profileEmail"></td>
                  <td width="10%">เลขที่ใบรับสินค้า</td>
                  <td> : <input placeholder="กรอก เลขที่ใบรับสินค้า" ng-model="Forms.Document[0].stockRef"></td>
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
            <td width="40%" style="border-top: 0px solid #ddd;"><input class="form-control" placeholder="หมายเหตุที่ 1" ng-model="Forms.Document[0].stockRemark1" ></td>
            <td width="10%" style="border-top: 0px solid #ddd;"></td>
            <td style="border-top: 0px solid #ddd;"></td>
          </tr>
          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"><input class="form-control" placeholder="หมายเหตุที่ 2" ng-model="Forms.Document[0].stockRemark2" ></td>
            <td width="10%" style="border-top: 0px solid #ddd;"></td>
            <td style="border-top: 0px solid #ddd;"></td>
          </tr>
          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"> <input class="form-control" placeholder="หมายเหตุที่ 3" ng-model="Forms.Document[0].stockRemark3" ></td>
            <td width="10%" style="border-top: 0px solid #ddd;"></td>
            <td style="border-top: 0px solid #ddd;"></td>
          </tr>

          <tr>
            <td width="40%" style="border-top: 0px solid #ddd;"><textarea rows="4" class="form-control" placeholder="บันทึกช่วยจำ" ng-model="Forms.Document[0].stockNote"></textarea></td>
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

      <span class="">
        <p style="color: #00b300" ng-if="Forms.SelectProduct.length != 0">กรุณาตรวจสอบข้อมูลอีกครั้ง</p>
        <button type="submit" class="btn btn-success btn-fill btn-block loading" ng-Click="onClickImport()"
        ng-disabled="(
        Forms.SelectProduct.length == 0 ||
        Forms.Document[0].stockRef == undefined ||
        Forms.Profile[0].stockReciveName == undefined ||
        Forms.Profile[0].profilePhone === undefined ||
        Forms.Profile[0].profileEmail == undefined
        )">สร้างใบนำเข้าสินค้า</button>
      </span>

      <br><br><br>




    </div>
    <!-- /#page-wrapper -->
  </div>

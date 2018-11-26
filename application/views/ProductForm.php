<div id="wrapper" ng-controller="ProductFormCtrl">

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">รายละเอียดสินค้า
            <a href="#" style="font-size:11px;padding-left:10px;color:red;" ng-show="{{delete}}"
            onClick="javascript: return confirm('ต้องการทำสิ่งนี้ใช่หรือไม่')" ng-Click="onClickDelete()"><b>ลบ</b></i> </a></h1>
          </div>
        <!-- /.col-lg-12 -->
      </div>

      <form>

        <div class="row" style="padding-top:2em">
          <div class="col-lg-9 col-lg-offset-1">

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>รหัสสินค้า <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productCode"
                  placeholder="ตัวอย่าง : DS-0001-LG" autocomplete="off" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ประเภทสินค้า <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <button class="btn btn-defualt btn-fill" ng-click="openCategoryModal()">เลือกประเภท</button> <span ng-if="form.productCategory" style="color:green;"> {{CategoryName}} <i class="fa fa-check-circle"></i> </span>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-2"><b>ยี่ห้อ (แบรนด์) <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <button class="btn btn-defualt btn-fill" ng-click="openBrandModal()">เลือกยี่ห้อ</button> <span ng-if="form.productBrand" style="color:green;"> {{BrandName}} <i class="fa fa-check-circle"></i> </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ชื่อสินค้า (รุ่น) <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productModel"
                  placeholder="ตัวอย่าง : 55SE3KD" autocomplete="off" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>รายละเอียด <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <textarea rows="4" class="form-control" ng-Model="form.productDetail"
                  placeholder="ตัวอย่าง : Full HD / HDMIx4 / Audio:Stereo" autocomplete="off" required></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>หน่วยนับ <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productUnit"
                  placeholder="ตัวอย่าง : เครื่อง" autocomplete="off" required>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">ราคาสินค้า </h1>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ราคาทุน <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productCost" autocomplete="off" required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ราคาปลีก <small style="color:red">*</small></b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productRetail" autocomplete="off" required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ราคา User1</b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productUser1" autocomplete="off"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ราคา User2</b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productUser2" autocomplete="off"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ราคา Dealer1</b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productDealer1" autocomplete="off"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group row">
                <div class="col-md-2"><b>ราคา Dealer2</b></div>
                <div class="col-md-6">
                  <input type="text" class="form-control" ng-Model="form.productDealer2" autocomplete="off"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </div>
              </div>
            </div>

            <!-- <div class="row" style="padding:3em" ng-show="{{insert}}"> -->
            <div class="row" style="padding:3em">
              <button type="submit" class="btn btn-info btn-lg btn-block" ng-Click="onClickInsert()">เพิ่มสินค้า</button>
            </div>

            <div class="row" style="padding:3em" ng-show="{{update}}">
            <!-- <div class="row" style="padding:3em"> -->
              <button type="submit" class="btn btn-warning btn-lg btn-block" ng-Click="onClickUpdate()">แก้ไขสินค้า</button>
            </div>

          </div>
        </div>
      </form>
    </div>


    <!-- /#page-wrapper -->
  </div>

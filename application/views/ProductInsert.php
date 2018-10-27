<div id="wrapper">

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">การจัดการสินค้า</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <?php echo form_open_multipart('Product/ProductInsert') ?>

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

            <h3 class="page-header" style="color:blue">รายละเอียดสินค้า</h3>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>รหัสสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productCode" autocomplete="off">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ประเภทสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productCategory" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>รุ่นสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productModel" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>แบรนด์สินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productBrand" required>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>รายละเอียดสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productDetail" required>
            </div>
          </div>
        </div>

          <h3 class="page-header" style="color:blue">ราคาสินค้า</h3>

        <div class="row">

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคาทุน <small style="color:red">* </small> </label>
              <input type="number" class="form-control" name="productCost" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคาปลีก <small style="color:red">* </small> </label>
              <input type="number" class="form-control" name="productRetail" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา User1 <small style="color:red"> </small></label>
              <input type="number" class="form-control" name="productUser1">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา User2 <small style="color:red"> </small> </label>
              <input type="number" class="form-control" name="productUser2">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา Dealer1 <small style="color:red"> </small></label>
              <input type="number" class="form-control" name="productDealer1">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา Dealer2 <small style="color:red"> </small> </label>
              <input type="number" class="form-control" name="productDealer2">
            </div>
          </div>

        </div>

        <button type="submit" class="btn btn-info btn-fill pull-right">เพิ่มสินค้า</button>
        <div class="clearfix"></div>

        <br>
        <br>

      </div>
    </div>

        <?php echo form_close() ?>





    </div>
    <!-- /#page-wrapper -->
</div>

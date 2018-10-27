<div id="wrapper">

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">การจัดการสินค้า
                  <a href="<?php echo SITE_URL('Product/ProductDelete/'.$dataUpdate[0]['productId']); ?>"
                    style="font-size:11px;padding-left:10px;color:red;"
                    onClick="javascript: return confirm('ต้องการทำสิ่งนี้ใช่หรือไม่')"><b>ลบ</b></i> </a></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <?php echo form_open_multipart('Product/ProductUpdate') ?>

        <div class="row">
          <div class="col-lg-9 col-lg-offset-1">

            <h3 class="page-header" style="color:blue">รายละเอียดสินค้า</h3>

            <input type="hidden" name="productId" value="<?php echo $dataUpdate[0]['productId'] ?>">

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>รหัสสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productCode" autocomplete="off"
              value="<?php echo $dataUpdate[0]['productCode'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ประเภทสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productCategory" required
              value="<?php echo $dataUpdate[0]['productCategory'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>รุ่นสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productModel" required
              value="<?php echo $dataUpdate[0]['productModel'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>แบรนด์สินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productBrand" required
              value="<?php echo $dataUpdate[0]['productBrand'] ?>">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>รายละเอียดสินค้า <small style="color:red">* </small></label>
              <input type="text" class="form-control" name="productDetail" required
              value="<?php echo $dataUpdate[0]['productDetail'] ?>">
            </div>
          </div>
        </div>

          <h3 class="page-header" style="color:blue">ราคาสินค้า</h3>

        <div class="row">

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคาทุน <small style="color:red">* </small> </label>
              <input type="number" class="form-control" name="productCost" required
              value="<?php echo $dataUpdate[0]['productCost'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคาปลีก <small style="color:red">* </small> </label>
              <input type="number" class="form-control" name="productRetail" required
              value="<?php echo $dataUpdate[0]['productRetail'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา User1 <small style="color:red"> </small></label>
              <input type="number" class="form-control" name="productUser1"
              value="<?php echo $dataUpdate[0]['productUser1'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา User2 <small style="color:red"> </small> </label>
              <input type="number" class="form-control" name="productUser2"
              value="<?php echo $dataUpdate[0]['productUser2'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา Dealer1 <small style="color:red"> </small></label>
              <input type="number" class="form-control" name="productDealer1"
              value="<?php echo $dataUpdate[0]['productDealer1'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>ราคา Dealer2 <small style="color:red"> </small> </label>
              <input type="number" class="form-control" name="productDealer2"
              value="<?php echo $dataUpdate[0]['productDealer2'] ?>">
            </div>
          </div>

        </div>

        <button type="submit" class="btn btn-info btn-fill pull-right">แก้ไขสินค้า</button>
        <div class="clearfix"></div>

        <br>
        <br>

      </div>
    </div>

        <?php echo form_close() ?>





    </div>
    <!-- /#page-wrapper -->
</div>

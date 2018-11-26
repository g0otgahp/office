<div id="wrapper" ng-controller="ProductCategoryCtrl">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการประเภทสินค้า
          <a href="#" style="font-size:18px;padding-left:10px;color:#00b300;" ng-Click="onClickInsert()"> เพิ่ม <i class="fa fa-plus"></i>
        </a>
      </h1>
    </div>

    <!-- /.col-lg-12 -->
  </div>


  <div class="row">
    <div class="col-lg-12">

      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-hover dataTable">
          <thead>
            <tr>
              <th width="10%" class="text-center">ลำดับ</th>
              <th>ประเภทสินค้า</th>
              <th width="20%" class="text-center">ตัวเลือก</th>
            </tr>
          </thead>
          <tbody>

            <tr ng-repeat="product_category in ProductCategory">
              <td class="text-center"><b>{{$index+1}}</b></td>
              <td><b>{{product_category.product_categoryName}}</b></td>
              <td class="text-center"><b> <a href="#" ng-Click="onClickUpdate(product_category)">รายละเอียด</a> </b></td>
            </tr>

          </tbody>
        </table>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.col-lg-12 -->
  </div>




</div>
<!-- /#page-wrapper -->
</div>

    <div class="modal-header">
      <h3 class="modal-title">ฐานข้อมูลยี่ห้อสินค้า
        <a target="_blank" href="<?php echo SITE_URL('ProductBrand'); ?>" style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่มใหม่   <i class="fa fa-plus"></i> </a>
        <button ng-click="loadBrand()" class="btn btn-link pull-right loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i>"><i class="fa fa-refresh"></i></button>
      </h3>
    </div>

    <div class="modal-body">

      <table width="100%" class="table table-striped table-bordered table-hover" datatable="ng" dt-options="dtOptions" dt-instance="dtInstance">
        <thead>
          <tr>
            <th width="10%" class="text-center">ลำดับ</th>
            <th>ยี่ห้อสินค้า</th>
            <th width="20%" class="text-center">ตัวเลือก</th>
          </tr>
        </thead>
        <tbody>

          <tr ng-repeat="product_brand in ProductBrand">
            <td class="text-center"><b>{{$index+1}}</b></td>
            <td><b>{{product_brand.product_brandName}}</b></td>
            <td class="text-left"> <button class="btn btn-link btn-xs" ng-click="ok(product_brand)"> <b>เลือก</b> </button> </td>
          </tr>

          </tbody>
        </table>
    </div>


<script>
//Button Loading
$('.loading').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 5000);
});
</script>

    <!-- <div class="modal-footer">
      <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
      <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
    </div> -->

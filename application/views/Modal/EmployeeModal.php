    <div class="modal-header">
      <h3 class="modal-title">ฐานข้อมูลพนักงาน
        <a target="_blank" href="<?php echo SITE_URL('Employee/EmployeeForm'); ?>" style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่มใหม่   <i class="fa fa-plus"></i> </a>
        <button ng-click="loadEmployee()" class="btn btn-link pull-right loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i>"><i class="fa fa-refresh"></i></button>
      </h3>
    </div>

    <div class="modal-body">

      <table width="100%" class="table table-striped table-bordered table-hover" datatable="ng" dt-options="dtOptions" dt-instance="dtInstance">
        <thead>
          <tr>
            <th width="3%" class="text-center">ลำดับ</th>
            <th class="text-center">ชื่อผู้ติดต่อ</th>
            <th class="text-center" width="8%">ชื่อเล่น</th>
            <th class="text-center">ตำแหน่งงาน</th>
            <th class="text-center">เบอร์ติดต่อ</th>
            <th class="text-center" width="5%">ตัวเลือก</th>
          </tr>
        </thead>
        <tbody>

          <tr ng-repeat="data in employee">
            <td class="text-center"> <b>{{$index+1}}</b></td>
            <td> <b>คุณ {{data.profileName}} {{data.profileSurname}}</b> </td>
            <td class="text-left"> <b>คุณ {{data.profileNickname}}</b> </td>
            <td class="text-left"> <b>{{data.positionName}}</b> </td>
            <td class="text-left"> <b>{{data.profilePhone.substr(0,3)}}-{{data.profilePhone.substr(3,3)}}-{{data.profilePhone.substr(6,4)}}</b> </td>
            <td class="text-left"> <button class="btn btn-link btn-xs" ng-click="ok(item)"> <b>เลือก</b> </button> </td>
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

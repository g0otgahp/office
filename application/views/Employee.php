<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการพนักงาน <a href="<?php echo SITE_URL('Employee/EmployeeFormInsert'); ?>"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" datatable="ng" dt-options="dtOptions" dt-instance="dtInstance">
              <thead>
                <tr>
                  <th width="10%" class="text-center">ลำดับ</th>
                  <th class="text-center">ชื่อ - นามสกุล</th>
                  <th class="text-center">ตำแหน่ง</th>
                  <th class="text-center">เบอร์ติดต่อ</th>
                  <th class="text-center">สถานะ</th>
                  <th class="text-center" width="15%">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>

                <?php $i = 1; foreach ($dataShow as $dataShow): ?>

                  <tr>
                    <td class="text-center"> <b><?php echo $i ?></b> </td>

                    <td> <b><?php echo $dataShow['profilePrefix'] . " " .
                                        $dataShow['profileName'] . " " .
                                        $dataShow['profileSurname'] ?></b> </td>

                    <td class="text-center"> <b><?php echo $dataShow['positionName'] ?></b> </td>
                    <td class="text-center"> <b><?php echo substr($dataShow['profilePhone'],0,3) . "-" .
                                        substr($dataShow['profilePhone'],3,3) . "-" .
                                        substr($dataShow['profilePhone'],6,4)?></b> </td>
                    <td class="text-center"><?php

                    if($dataShow['profileStatus'] == 1){
                      echo "<b style='color:green'>ปกติ</b>";
                    }else if($dataShow['profileStatus'] == 2){
                      echo "<b style='color:red'>พ้นสภาพ</b>";
                    }else{
                      echo "<b style='color:#e6e600'>พักงาน</b>";
                    }
                      ?></td>

                    <td class="text-center">

                      <a href="<?php echo SITE_URL('Employee/EmployeeFormUpdate/'.$dataShow['profileId']); ?>"
                         style="font-size:13px;padding-left:10px;color:blue;"
                         <?php // if($_SESSION['permission'] <= 2){echo "hidden";} ?>><b>จัดการพนักงาน </b><i
                         class="fa fa-pencil"></i></a>
                    </td>

                  </tr>

                  <?php $i++; endforeach; ?>

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

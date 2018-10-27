<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">การจัดการตำแหน่ง
          <a href="#" style="font-size:18px;padding-left:10px;color:#00b300;"
          data-toggle="modal" data-target="#PositionInsert"> เพิ่ม <i class="fa fa-plus"></i>
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
              <th>ตำแหน่ง</th>
              <th width="20%" class="text-center">ตัวเลือก</th>
            </tr>
          </thead>
          <tbody>

            <?php $i = 1; foreach ($dataShow as $data): ?>
            <tr>
              <td align="center"><b><?php echo $i ?></b></td>
              <td><b style="color:black"><?php echo $data['positionName'] ?></b></td>
              <td class="text-center" >
                <a href="#" style="font-size:13px;padding-left:10px;color:blue;"
                <?php //if($_SESSION['permission'] <= 2){echo "hidden";} ?>
                  data-toggle="modal" data-target="#PositionUpdate<?php echo $data['positionId'] ?>">
                   <b>จัดการตำแหน่ง</b> <i class="fa fa-pencil"></i>
                 </a>
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

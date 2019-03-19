<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">ใบเสนอราคา <a href="<?php echo SITE_URL('Quotation/quotationform/'.$_SESSION['profileId'].'?sid='.$_SESSION['profileId']); ?>"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <div class="row">
        <div class="col-lg-12">
          <h3><span style="color:green;"><i class="fa fa-volume-up"></i> อัพเดทใหม่</span> : ระบบแก้ไขใบเสนอราคาคลิกที่ปุ่ม</a>  <a class="btn btn-info btn-xs" href="#"><b>แก้ไขบิล </b></a>
            <h4 style="color:red">คำเตือน : เมื่อแก้ไขใบเสนอราคาแล้ว ใบเสนอราคาเก่าจะถูกยกเลิกและสร้างใบใหม่ขึ้นมาแทนที่ด้วยเลขที่บิลเดิมและจะเติม - หลังเลขที่บิล</h4>
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover dataTable">
              <thead>
                <tr>
                  <th width="7%" class="text-center">#</th>
                  <th width="14%" class="text-center">วันที่เสนอราคา</th>
                  <th width="12%" class="text-center">เลขที่</th>
                  <th width="20%" class="text-center">ชื่อลูกค้า</th>
                  <!-- <th width="10%" class="text-center">ผู้เสนอ</th>
                  <th width="8%" class="text-center">ติดต่อ</th> -->
                  <th width="8%"class="text-center">สถานะ</th>
                  <th width="8%" class="text-center">บันทึก</th>
                  <th class="text-center">พิมพ์</th>
                  <th width="20%" class="text-center">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($QuotationList as $item): ?>
                  <tr>
                    <td class="text-center"><?php echo $i ?></td>
                    <td class="text-left">
                      <?php
                      $date = new DateTime($item['quoDate']);
                      echo $date->format('d/m/Y H:i:s');
                      ?>
                    </td>

                    <td class="text-left"><?php echo $item['quoNo'] ?></td>
                    <td class="text-left"><?php echo $item['quoCompany'] ?></td>
                    <!-- <td class="text-center"><?php echo $item['profileNickname']?></td>
                    <td class="text-center"><?php echo $item['quoTel'] ?></td> -->
                    <td class="text-center">
                      <?php if ($item['quoStatus'] == 2) {
                        echo "<span class='text-warning'>รออนุมัติ</span>";
                      } elseif ($item['quoStatus'] == 1) {
                        echo "<span class='text-success'>อนุมัติแล้ว</span>";
                      } elseif ($item['quoStatus'] == 4) {
                        echo "<span class='text-warning'>แก้ไขแล้ว</span>";
                      } else {
                        echo "<span class='text-danger'>ยกเลิก</span>";
                      } ?>
                    </td>
                    <td class="text-center">
                      <a href="#" class="btn btn-xs btn-warning"
                      data-toggle="modal" data-target="#Note<?php echo $item['quoId'] ?>">
                      รายละเอียด
                    </a>
                  </td>
                  <td class="text-center">
                    <?php if ($item['quoStatus'] == 3): ?>
                      <a disabled class="btn btn-primary btn-xs" href="<?php echo SITE_URL('Quotation/Document/'.$item['quoNo']."/".base64_encode($item['quoId']));?>" target="_blank"><b>พิมพ์ </b><i class="fa fa-print"></i></a>
                    <?php else: ?>
                      <a class="btn btn-primary btn-xs" href="<?php echo SITE_URL('Quotation/Document/'.$item['quoNo']."/".base64_encode($item['quoId']));?>" target="_blank"><b>พิมพ์ </b><i class="fa fa-print"></i></a>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <?php if ($item['quoStatus'] == 2): ?>
                      <a class="btn btn-success btn-xs" href="<?php echo SITE_URL('Quotation/Accept/'.$item['quoNo']."/".base64_encode($item['quoId']));?>"><b>อนุมัติ </b></a>
                      <a class="btn btn-info btn-xs" onclick="return confirm('ต้องการแก้ไขใบเสนอราคานี้ใช่หรือไม่ ?')" href="<?php echo SITE_URL('Quotation/Edit/'.$_SESSION['profileId'].'?sid='.$_SESSION['profileId'].'&no='.$item['quoNo'].'&quoid='.$item['quoId']);?>"><b>แก้ไขบิล </b></a>
                      <a class="btn btn-danger btn-xs" onclick="return confirm('ต้องการลบรายการนี้ใช่หรือไม่ ?')" href="<?php echo SITE_URL('Quotation/Cancel/'.$item['quoNo']."/".base64_encode($item['quoId']));?>"><b>ยกเลิก </b></a>
                    <?php elseif ($item['quoStatus'] == 4): ?>
                        <a class="btn btn-warning btn-xs" href="#" disabled><b>ได้ทำการแก้ไขแล้ว </b></a>
                    <?php else: ?>
                      <a class="btn btn-success btn-xs" href="#" disabled><b>ผ่านการอนุมัติแล้ว </b></a>
                      <!-- <a class="btn btn-success btn-xs" href="#" disabled><b>อนุมัติ </b></a>
                      <a class="btn btn-danger btn-xs" href="#" disabled><b>ยกเลิก </b></a>
                      <a class="btn btn-info btn-xs" href="#" disabled><b>แก้ไขบิล </b></a> -->
                    <?php endif; ?>
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

    <?php foreach ($QuotationList as $modal): ?>
      <div id="Note<?php echo $modal['quoId'] ?>" class="modal fade">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">บันทึกช่วยจำ</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-offset-1 col-md-10">
                  <p>ผู้เสนอ : <span style="color:blue;"><?php echo $modal['profileName']." ".$modal['profileSurname']." (".$modal['profileNickname'].")" ?></span></p>
                  <p>เบอร์ติดต่อ : <span style="color:blue;"><?php echo $modal['quoTel'] ?></span></p>
                  <?php if ($modal['quoNote'] != ''): ?>
                    <pre> <?php echo $modal['quoNote'] ?> </pre>
                  <?php else: ?>
                    <center><h3>ไม่ได้จดบันทึกช่วยจำ</h3></center>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- /#page-wrapper -->
  </div>
<?php endforeach; ?>

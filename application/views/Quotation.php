<div id="wrapper">

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">ใบเสนอราคา <a target="_blank" href="<?php echo SITE_URL('Quotation/quotationform/'.$_SESSION['profileId'].'?sid='.$_SESSION['profileId']); ?>"
          style="font-size:18px;padding-left:10px;color:#00b300;"> เพิ่ม   <i class="fa fa-plus"></i> </a></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>


      <div class="row">
        <div class="col-lg-12">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover dataTable">
              <thead>
                <tr>
                  <th width="10%" class="text-center">ลำดับ</th>
                  <th class="text-center">วันที่เสนอราคา</th>
                  <th class="text-center">เลขที่ใบเสนอราคา</th>
                  <th class="text-center">ชื่อลูกค้า</th>
                  <th class="text-center">เบอร์ติดต่อ</th>
                  <th class="text-center">สถานะ</th>
                  <th class="text-center">พิมพ์</th>
                  <th class="text-center">ตัวเลือก</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($QuotationList as $item): ?>
                  <tr>
                    <td class="text-center"><?php echo $i ?></td>
                    <td class="text-center"><?php echo $item['quoDate'] ?></td>
                    <td class="text-center"><?php echo $item['quoNo'] ?></td>
                    <td class="text-center"><?php echo $item['quoCompany'] ?></td>
                    <td class="text-center"><?php echo $item['quoTel'] ?></td>
                    <td class="text-center">
                      <?php if ($item['quoStatus'] == 2) {
                        echo "<span class='text-warning'>รออนุมัติ</span>";
                      } elseif ($item['quoStatus'] == 1) {
                        echo "<span class='text-success'>อนุมัติแล้ว</span>";
                      } else {
                        echo "<span class='text-danger'>ยกเลิก</span>";
                      } ?>
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
                        <a class="btn btn-danger btn-xs" href="<?php echo SITE_URL('Quotation/Cancel/'.$item['quoNo']."/".base64_encode($item['quoId']));?>"><b>ยกเลิก </b></a>
                        <?php else: ?>
                          <a class="btn btn-success btn-xs" href="#" disabled><b>อนุมัติ </b></a>
                          <a class="btn btn-danger btn-xs" href="#" disabled><b>ยกเลิก </b></a>
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
      <!-- /#page-wrapper -->
    </div>

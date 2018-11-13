
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo BASE_URL('assets'); ?>/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
*{ margin: 0; padding: 0; }
body{
  font-family: 'THSarabunNew', sans-serif !important;
  font-size: 11pt;
  line-height: 22pt;
  background: #e1e1e1;
}
h1,h2,h3,h4,h5{
  line-height: 2em; clear: both; font-family: 'THSarabunNew', sans-serif !important; }
  h1{
    font-size: 13pt;
    font-weight: bold;

  }

  h2{ background: #0F7AC2; padding: 0 10px; color: #FFF; margin: 20px 0 10px; }
  p{ padding: 0 0 10px 0; }
  .n{ font-weight: normal; font-style: normal; }
  .b{ font-weight: bold; font-style: normal; }
  .i{ font-weight: normal; font-style: italic; }
  .bi{ font-weight: bold; font-style: italic; }
  ul,ol{padding: 0 0 10px 0;}
  li{ margin: 0 0 0 2em; padding: 0 0 5px 0; }
  code{ background: #FFF; }
  #container{ width: 900px; margin: 20px auto 0; border: 1px solid #333; padding: 20px; background: #FFF; }
  #instruction{ padding: 10px 10px 0; background: #e6e6e6; }
  #footer{ width: 940px; margin: 0 auto; padding: 10px 0 20px; }
  .right{text-align: right;}
  .type{ font-family: 'THSarabunNew', sans-serif; height: 5em; width: 98%;font-size: 1em;clear: both;margin: 20px auto 10px;padding: 5px 1%; }
  body {
    background: rgb(204,204,204);
  }
  page {
    background: white;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
  }
  page[size="A4"] {
    width: 21cm;
    height: 29.7cm;
    padding: 25px;
  }
  page[size="A4"][layout="portrait"] {
    width: 29.7cm;
    height: 21cm;
  }
  page[size="A3"] {
    width: 29.7cm;
    height: 42cm;
  }
  page[size="A3"][layout="portrait"] {
    width: 42cm;
    height: 29.7cm;
  }
  page[size="A5"] {
    width: 14.8cm;
    height: 21cm;
  }
  page[size="A5"][layout="portrait"] {
    width: 21cm;
    height: 14.8cm;
  }
  .col-sm-offset-0.col-md-6.col-sm-8 font #id1 {
    border: 1px solid #000000;
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
  }


  @media print {
    .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
      float: left;
    }
    .col-sm-12 {
      width: 100%;
    }
    .col-sm-11 {
      width: 91.66666667%;
    }
    .col-sm-10 {
      width: 83.33333333%;
    }
    .col-sm-9 {
      width: 75%;
    }
    .col-sm-8 {
      width: 66.66666667%;
    }
    .col-sm-7 {
      width: 58.33333333%;
    }
    .col-sm-6 {
      width: 50%;
    }
    .col-sm-5 {
      width: 41.66666667%;
    }
    .col-sm-4 {
      width: 33.33333333%;
    }
    .col-sm-3 {
      width: 25%;
    }
    .col-sm-2 {
      width: 16.66666667%;
    }
    .col-sm-1 {
      width: 8.33333333%;
    }
    .col-sm-pull-12 {
      right: 100%;
    }
    .col-sm-pull-11 {
      right: 91.66666667%;
    }
    .col-sm-pull-10 {
      right: 83.33333333%;
    }
    .col-sm-pull-9 {
      right: 75%;
    }
    .col-sm-pull-8 {
      right: 66.66666667%;
    }
    .col-sm-pull-7 {
      right: 58.33333333%;
    }
    .col-sm-pull-6 {
      right: 50%;
    }
    .col-sm-pull-5 {
      right: 41.66666667%;
    }
    .col-sm-pull-4 {
      right: 33.33333333%;
    }
    .col-sm-pull-3 {
      right: 25%;
    }
    .col-sm-pull-2 {
      right: 16.66666667%;
    }
    .col-sm-pull-1 {
      right: 8.33333333%;
    }
    .col-sm-pull-0 {
      right: auto;
    }
    .col-sm-push-12 {
      left: 100%;
    }
    .col-sm-push-11 {
      left: 91.66666667%;
    }
    .col-sm-push-10 {
      left: 83.33333333%;
    }
    .col-sm-push-9 {
      left: 75%;
    }
    .col-sm-push-8 {
      left: 66.66666667%;
    }
    .col-sm-push-7 {
      left: 58.33333333%;
    }
    .col-sm-push-6 {
      left: 50%;
    }
    .col-sm-push-5 {
      left: 41.66666667%;
    }
    .col-sm-push-4 {
      left: 33.33333333%;
    }
    .col-sm-push-3 {
      left: 25%;
    }
    .col-sm-push-2 {
      left: 16.66666667%;
    }
    .col-sm-push-1 {
      left: 8.33333333%;
    }
    .col-sm-push-0 {
      left: auto;
    }
    .col-sm-offset-12 {
      margin-left: 100%;
    }
    .col-sm-offset-11 {
      margin-left: 91.66666667%;
    }
    .col-sm-offset-10 {
      margin-left: 83.33333333%;
    }
    .col-sm-offset-9 {
      margin-left: 75%;
    }
    .col-sm-offset-8 {
      margin-left: 66.66666667%;
    }
    .col-sm-offset-7 {
      margin-left: 58.33333333%;
    }
    .col-sm-offset-6 {
      margin-left: 50%;
    }
    .col-sm-offset-5 {
      margin-left: 41.66666667%;
    }
    .col-sm-offset-4 {
      margin-left: 33.33333333%;
    }
    .col-sm-offset-3 {
      margin-left: 25%;
    }
    .col-sm-offset-2 {
      margin-left: 16.66666667%;
    }
    .col-sm-offset-1 {
      margin-left: 8.33333333%;
    }
    .col-sm-offset-0 {
      margin-left: 0%;
    }
    .visible-xs {
      display: none !important;
    }
    .hidden-xs {
      display: block !important;
    }
    table.hidden-xs {
      display: table;
    }
    tr.hidden-xs {
      display: table-row !important;
    }
    th.hidden-xs, td.hidden-xs {
      display: table-cell !important;
    }
    .hidden-xs.hidden-print {
      display: none !important;
    }
    .hidden-sm {
      display: none !important;
    }
    .visible-sm {
      display: block !important;
    }
    table.visible-sm {
      display: table;
    }
    tr.visible-sm {
      display: table-row !important;
    }
    th.visible-sm, td.visible-sm {
      display: table-cell !important;
    }
  }
  .p_body div {
    margin-top: 10px;
    text-indent: 50px;
  }
  #border {
    border: 1px solid #000000;
    border-top-right-radius: 0px;
  }

  body {
    font-size: 11px;
  }

  p {
    font-size: 11px;
    padding:0px;
    margin:0px;
    font-weight: bold;
  }

  .head-quo{
    margin-bottom: -10px;
  }
</style>
<body>
  <div class="row" style="    position: fixed;
  right: 5%;
  top: 0%;">
  <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ' style="margin-top:20px">

    <form class='form-group'>

      <button type='button' class='btn btn-lg btn-primary no-print' id="printpagebutton" onclick="printpage()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์เอกสาร</button>
    </form>

  </div>
</div>
<div class='row '>
  <page size="A4" style="color: #000;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-8" style="margin-top:50px;">
                  <h4 style="margin:0px;" class="head-quo">บริษัท นิวซีโน (ประเทศไทย) จำกัด</h4>
                  <p class="head-quo">185/4 ถนนสมเด็ถนนสมเด็จพระปิ่นเกล้า แขวงอรุณอัมรินทร์</p>
                  <p class="head-quo">เขตบางกอกน้อย จังหวัดกรุงเทพมหานคร 10700</p>
                  <p class="head-quo">โทรศัพท์ : 095-449-5229 แฟกซ์ : 02-435-5899</p>
                </div>
                <div class="col-sm-4" style="padding:0px;">
                  <img src="<?php echo base_url('uploads/Login/logonewzeno.png')?>" width="220"  class="img-responsive" alt=""/>
                  <div class="row">
                    <div class="col-sm-6 head-quo" style="padding-right:0px;">
                      <p>เลขประจำตัวผู้เสียภาษี</p>
                    </div>
                    <div class="col-sm-6 head-quo" style="padding-right:0px;">
                      <p>0105552086618</p>
                    </div>
                    <div class="col-sm-6 head-quo" style="padding-right:0px;">
                      <p>สาขาที่ออกเอกสาร</p>
                    </div>
                    <div class="col-sm-6 head-quo" style="padding-right:0px;">
                      <p>สำนักงานใหญ่</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-sm-4" style="margin-bottom:20px">
            <p class="text-center" id="border"><strong style="font-size:32px"><br>
            ใบเสนอราคา</strong></br>
            <strong><br>
            เลขที่ QO611019-1</strong><br>
            <strong>วันที่ใบเสนอราคา</strong> 19/10/2561 </p>
          </div> -->
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <h4 class="text-center">ใบเสนอราคา</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="row">
          <div class="col-sm-3 head-quo"><b>ชื่อหน่วยงาน</b>
          </div>
          <div class="col-sm-9 head-quo">: <?php echo $Select['quotation'][0]['quoCompany'] ?>
          </div>
          <div class="col-sm-3 head-quo"><b>เรียน</b>
          </div>
          <div class="col-sm-9 head-quo">: <?php echo $Select['customer'][0]['customerName'] ?>
          </div>
          <div class="col-sm-3 head-quo"><b>โทร/Fax</b>
          </div>
          <div class="col-sm-9 head-quo">: <?php echo $Select['quotation'][0]['quoTel'] ?>
          </div>
          <div class="col-sm-3 head-quo"><b>E-mail/ID Line</b>
          </div>
          <div class="col-sm-9 head-quo">: <?php echo $Select['quotation'][0]['quoEmail'] ?>
          </div>
          <div class="col-sm-3 head-quo"><b>โปรเจค</b>
          </div>
          <div class="col-sm-9 head-quo">: <?php echo $Select['quotation'][0]['quoProject'] ?>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-5 head-quo"><b>เลขที่</b>
          </div>
          <div class="col-sm-7 head-quo">: <?php echo $Select['quotation'][0]['quoNo'] ?>
          </div>
          <div class="col-sm-5 head-quo"><b>วันที่</b>
          </div>
          <div class="col-sm-7 head-quo">: <?php echo $Select['quotation'][0]['quoDate'] ?>
          </div>
          <div class="col-sm-5 head-quo"><b>ยื่นราคาภายใน</b>
          </div>
          <div class="col-sm-7 head-quo">: <?php echo $Select['quotation'][0]['quoReachDay'] ?> วัน
          </div>
          <div class="col-sm-5 head-quo"><b>ส่งสินค้าภายใน</b>
          </div>
          <div class="col-sm-7 head-quo">: <?php echo $Select['quotation'][0]['quoTransportDay'] ?> วัน
          </div>
          <div class="col-sm-5 head-quo"><b>เงื่อนไขการเงิน</b>
          </div>
          <div class="col-sm-7 head-quo">: <?php echo $Select['quotation'][0]['quoPayments'] ?>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top:20px;">
      <div class="col-sm-12">
        ทางบริษัทฯ มีความยินดีในการเสนอราคาสินค้าและบริการ ตามราคาและเงื่อนไขที่ระบุไว้ดังนี้
      </div>
      <div class="col-md-12 table-responsive col-sm-12">
        <table width="100%" class="table invoice">
          <thead>
            <tr>
              <th width="5%" class="text-center">ลำดับ</th>
              <th width="25%" class="text-center">รายการ</th>
              <th width="7%" class="text-center">จำนวน</th>
              <th width="8%" class="text-center">หน่วยนับ</th>
              <th width="8%" class="text-center">ราคาปกติ/หน่วย</th>
              <th width="8%" class="text-center">ลดเหลือ/หน่วย</th>
              <th width="8%" class="text-center">รวม</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; $total=0; foreach ($Select['quotation_order'] as $item): ?>
            <tr>
              <td class="text-center" scope="row"><?php echo $i ?></td>
              <td class="text-left"><?php echo $item['orderName'] ?>
                <p style="color:gray"><?php echo $item['orderDetail'] ?></p>
              </td>
              <td class="text-right"><?php echo number_format($item['orderQty']) ?></td>
              <td class="text-right"><?php echo $item['orderUnit'] ?></td>
              <td class="text-right"><?php echo number_format($item['orderPrice']) ?></td>
              <td class="text-right"><?php echo number_format($item['orderDiscount']) ?></td>
              <?php if ($item['orderDiscount'] != 0): ?>
                <td class="text-right"><?php $resultPrice = $item['orderDiscount'] * $item['orderQty']; echo number_format($resultPrice) ?></td>
                <?php else: ?>
                  <td class="text-right"><?php $resultPrice = $item['orderPrice'] *  $item['orderQty'];  echo number_format($resultPrice) ?></td>
              <?php endif; ?>

              <!-- <td class="text-right"><?php //echo $PurchaseOrder['material_po_quantity']; ?> <?php //echo $PurchaseOrder['material_unit']; ?></td> -->
            </tr>
          <?php $i++; $total += $resultPrice; endforeach; ?>
            <?php //if (count($AccountingDetail)<10): ?>
              <?php
              $row = 9 - count($Select['quotation_order']);
              for ($i=0; $i < $row; $i++) { ?>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              <?php } ?>
              <?php //endif; ?>
            </tbody>
          </table>
        </div>
        <!-- <div class="col-md-2 col-sm-offset-8 col-sm-2"><b>ราคาสุทธิ</div>
        <div class="col-md-2 col-sm-2">2,000 บาท</b></div> -->
      </div>
      <div class="row">
        <div class="col-sm-offset-7 col-sm-5">
          <div class="row">
            <!-- <div class="col-sm-6 head-quo"><b>ส่วนลดการค้า</b></div>
            <div class="col-sm-6 text-right head-quo">0.00</div> -->
            <div class="col-sm-6 head-quo"><b>มูลค่าสินค้า</b></div>
            <div class="col-sm-6 text-right head-quo"><?php echo number_format($total); ?></div>
            <div class="col-sm-6 head-quo"><b>ภาษีมูลค่าเพิ่ม(7%)</b></div>
            <div class="col-sm-6 text-right head-quo"><?php $tax = ($total * 7)/100; echo number_format($tax); ?></div>
            <div class="col-sm-6 head-quo"><b>รวมทั้งสิ้น</b></div>
            <div class="col-sm-6 text-right head-quo"><u><b class="h5"><?php echo number_format($total + $tax); ?></b></u></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          ***ขอสงวนสิทธิในการเปลี่ยนแปลงรายละเอียดและราคาของสินค้าตลอดจนรายการส่งเสริมการขายและการลงทะเบียนโดยไม่ต้องแจ้งให้ทราบล่วงหน้า
        </div>
        <div class="col-sm-12 text-center">
          <table class="table" border="2">
            <tbody>
              <tr>
                <th class="text-center" colspan="5" width="100%">สามารถชำระเงินผ่านธนาคารในนาม บริษัท นิวซีโน่ (ประเทศไทย) จำกัด</th>
              </tr>
              <tr>
                <th class="text-center" colspan="2">ธนาคาร</th>
                <th class="text-center">สาขา</th>
                <th class="text-center">ประเภทบัญชี</th>
                <th class="text-center">เลขที่บัญชี</th>
              </tr>
              <tr>
                <td class="text-center" width="4%"><img src="<?php echo base_url('uploads/Login/ktc.png')?>" width="15"  class="img-responsive" alt=""/></td>
                <td class="text-center">กรุงเทพ</td>
                <td class="text-center">เดอะเซอร์เคิล</td>
                <td class="text-center">กระแสรายวัน</td>
                <td class="text-center">089-7028999</td>
              </tr>
              <tr>
                <td class="text-center"><img src="<?php echo base_url('uploads/Login/kbank.png')?>" width="15"  class="img-responsive" alt=""/></td>
                <td class="text-center">กสิกรไทย</td>
                <td class="text-center">ปิ่นเกล้า</td>
                <td class="text-center">กระแสรายวัน</td>
                <td class="text-center">706-241-3888</td>
              </tr>
              <tr>
                <td class="text-center"><img src="<?php echo base_url('uploads/Login/scb.png')?>" width="15"  class="img-responsive" alt=""/></td>
                <td class="text-center">ไทยพาณิชย์</td>
                <td class="text-center">บางโคล่</td>
                <td class="text-center">กระแสรายวัน</td>
                <td class="text-center">089-7028999</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>


      <div class="row">
        <div class="col-sm-4">
          <div class="row text-center">
            <div class="col-sm-12">ลงชื่อ ..........................................</div>
            <div class="col-sm-12">(...................................................)<div>
              <div class="col-sm-12">ผู้เสอนราคา<div>
                <div class="col-sm-12">วันที่ ............/............/............</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row text-center">
        <div class="col-sm-12">ลงชื่อ ..........................................</div>
        <div class="col-sm-12">(...................................................)<div>
          <div class="col-sm-12">ผู้อนุมัติเสนอราคา<div>
            <div class="col-sm-12">วันที่ ............/............/............</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="row text-center">
    <div class="col-sm-12">ลงชื่อ ..........................................</div>
    <div class="col-sm-12">(...................................................)<div>
      <div class="col-sm-12">ผู้อนุมัติสั่งซื้อ<div>
        <div class="col-sm-12">วันที่ ............/............/............</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</page>
</div>
</body>

<script>
function printpage() {
  //Get the print button and put it into a variable
  var printButton = document.getElementById("printpagebutton");
  //Set the print button visibility to 'hidden'
  printButton.style.visibility = 'hidden';
  //Print the page content
  window.print();
  printButton.style.visibility = 'visible';
}
</script>

</html>

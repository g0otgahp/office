
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
	padding: 50px;
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
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-4" style="align:center;">
                  <img src="<?php echo base_url('uploads/Login/newzeno_logo.jpg')?>" width="150"  class="img-responsive" alt=""/>
                </div>
                <div class="col-sm-8" style="padding-top: 20px;">
                  <h3 class="text-center">บริษัท นิวซีโน (ประเทศไทย) จำกัด</h3>
                </p>
              </div>
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-md-2 col-sm-2"><strong>ที่อยู่</strong><br>
                  </div>
                  <div class="col-md-10 col-sm-10">1/4 ถนนสมเด็จพระปิ่นเกล้า แขวงบางยี่ขัน เขตบางพลัด กทม. 10700
                  </div>
                  <div class="col-md-8 col-sm-8"><strong>เบอร์ติดต่อ</strong> 099-3254289
                  </div>
                  <div class="col-sm-12 col-md-12"><strong>&nbsp;</strong><br>
                  </div>
                  <div class="col-md-3 col-sm-3"><strong>ชื่อผู้สั่งซื้อ</strong><br>
                  </div>
                  <div class="col-md-6 col-sm-6">สมชาย ชาติไทย<br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4" style="margin-bottom:20px">
            <p class="text-center" id="border"><strong style="font-size:32px"><br>
              ใบเสนอราคา</strong></br>
              <strong><br>
                เลขที่ QO611019-1</strong><br>
                <strong>วันที่ใบเสนอราคา</strong> 19/10/2561 </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 table-responsive col-sm-12">
            <table width="100%" class="table invoice">
              <thead>
                <tr>
                  <th class="text-center" width="5%">ลำดับ</th>
                  <th width="15%">รหัสสินค้า</th>
                  <th>ชื่อสินค้า</th>
                  <th class="text-right" width="5%">จำนวน</th>
                  <th class="text-right" width="20%">ราคาต่อหน่วย</th>
                  <th class="text-right" width="15%">ราคารวม</th>
                </tr>
              </thead>
              <tbody>
                  <tr >
                    <td class="text-center" scope="row">1</td>
                    <td>IT0001</td>
                    <td>ชุดเม้า คีบอร์ด Logitec</td>
                    <td class="text-right">1</td>
                    <td class="text-right">2,000</td>
                    <td class="text-right">2,000</td>
                    <!-- <td class="text-right"><?php //echo $PurchaseOrder['material_po_quantity']; ?> <?php //echo $PurchaseOrder['material_unit']; ?></td> -->
                  </tr>

                        <!-- <?php //if (count($AccountingDetail)<10): ?>
                          <?php
                          //$row = 10 - count($AccountingDetail);
                          //for ($i=0; $i < $row; $i++) { ?>
                            <tr>
                              <td><span class="empty"></span></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>

                            </tr>
                          <?php //endif; ?> -->
                </tbody>
              </table>
            </div>
            <div class="col-md-2 col-sm-offset-8 col-sm-2"><b>ราคาสุทธิ</div>
                <div class="col-md-2 col-sm-2">2,000 บาท</b></div>
            </div>
          </div>
          <div class="row" style="margin-top:50px">
            <div class="col-sm-6">
              <div class="row text-center">
                <div class="col-sm-12">ลงชื่อ......................................................ผู้รับเงิน</div>
                <div class="col-sm-12">(.....................................................................)</div>
                <div class="col-sm-12">วันที่…...…เดือน……………..พ.ศ…………</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row text-center">
                <div class="col-sm-12">ลงชื่อ.....................................................ผู้สั่งซื้อ</div>
                <div class="col-sm-12">(.....................................................................)</div>
                <div class="col-sm-12">วันที่…...…เดือน……………..พ.ศ…………</div>
              </div>
            </div>
          </div>
          <div class="col-sm-12" style="margin-top:50px">
            <div class="row">
              <div class="col-md-12 col-sm-12" style="overflow-wrap:break-word;">
                **หมายเหตุ ผู้จำหน่ายมีสิทธิ์ เลิกสัญญา ได้ภายใน 30 วัน นับแต่วันที่เสนอราคา
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

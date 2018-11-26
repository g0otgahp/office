<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
        <!-- /input-group -->
      </li>

      <li>
        <a href="<?php echo SITE_URL('Dashboard'); ?>" onclick="Reload();"><i class="fa fa-dashboard fa-fw"></i> ภาพรวม</a>
      </li>

      <li>
        <a href="<?php echo SITE_URL("Quotation"); ?>" onclick="Reload();"><i class="glyphicon glyphicon-book"></i>&nbsp; ใบเสนอราคา</a>
      </li>

      <!-- แบ่งสิทธิ์ การเข้าถึง -->


        <li>
          <a href="#"><i class="fa fa-money fa-fw"></i> ผู้ผลิต/ลูกค้า<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="<?php echo SITE_URL('Supplier'); ?>" onclick="Reload();"> - การจัดการผู้ผลิต</a>
            </li>
            <li>
              <a href="<?php echo SITE_URL('Customer'); ?>" onclick="Reload();"> - การจัดการลูกค้า</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>

        <li>
          <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> สินค้า<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="<?php echo SITE_URL('Product'); ?>" onclick="Reload();"> - การจัดการสินค้า</a>
            </li>
            <li>
              <a href="<?php echo SITE_URL('ProductCategory'); ?>" onclick="Reload();"> - การจัดการประเภทสินค้า</a>
            </li>
            <li>
              <a href="<?php echo SITE_URL('ProductBrand'); ?>" onclick="Reload();"> - การจัดการยี่ห้อสินค้า</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>

        <li>
          <a href="#"><i class="fa fa-inbox fa-fw"></i> ฝ่ายสต็อก<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">

            <li>
              <a href="#"> - ใบนำสินค้าเข้า</a>
            </li>
            <li>
              <a href="#"> - ใบนำสินค้าออก</a>
            </li>
            <li>
              <a href="#"> - ใบยืมสินค้า</a>
            </li>
            <li>
              <a href="#"> - ใบเปลี่ยนสินค้า</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>

        <?php  if ($_SESSION['permission'] >= 3): ?>

          <li>
            <a href="#"><i class="fa fa-user fa-fw"></i> ฝ่ายบุคคล<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="<?php echo SITE_URL('Employee'); ?>" onclick="Reload();"> - การจัดการพนักงาน</a>
              </li>
              <li>
                <a href="<?php echo SITE_URL('Position'); ?>" onclick="Reload();"> - การจัดการตำแหน่ง</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>

          <?php  endif; ?>

        <!-- <li>
        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li>
        <a href="flot.html">Flot Charts</a>
      </li>
      <li>
      <a href="morris.html">Morris.js Charts</a>
    </li>
  </ul> -->
  <!-- /.nav-second-level -->
  <!-- </li> -->

  <!-- <li>
  <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
</li> -->

<!-- <li>
<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
</li> -->

<!-- <li>
<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="panels-wells.html">Panels and Wells</a>
</li>
<li>
<a href="buttons.html">Buttons</a>
</li>
<li>
<a href="notifications.html">Notifications</a>
</li>
<li>
<a href="typography.html">Typography</a>
</li>
<li>
<a href="icons.html"> Icons</a>
</li>
<li>
<a href="grid.html">Grid</a>
</li>
</ul> -->
<!-- /.nav-second-level -->
<!-- </li> -->

<!-- <li>
<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="#">Second Level Item</a>
</li>
<li>
<a href="#">Second Level Item</a>
</li>
<li>
<a href="#">Third Level <span class="fa arrow"></span></a>
<ul class="nav nav-third-level">
<li>
<a href="#">Third Level Item</a>
</li>
<li>
<a href="#">Third Level Item</a>
</li>
<li>
<a href="#">Third Level Item</a>
</li>
<li>
<a href="#">Third Level Item</a>
</li>
</ul> -->
<!-- /.nav-third-level -->
<!-- </li>
</ul> -->
<!-- /.nav-second-level -->
<!-- </li> -->

<!-- <li>
<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="blank.html">Blank Page</a>
</li>
<li>
<a href="login.html">Login Page</a>
</li>
</ul> -->
<!-- /.nav-second-level -->
<!-- </li> -->


</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

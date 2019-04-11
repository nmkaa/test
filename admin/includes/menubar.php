<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">MANAGE</li>
 <!--      <li class="treeview">
        <a href="#">
          <i class="fa fa-refresh"></i>
          <span>Transaction</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="borrow.php"><i class="fa fa-circle-o"></i> Borrow</a></li>
          <li><a href="return.php"><i class="fa fa-circle-o"></i> Return</a></li>
          <li><a href="butsaah.php"><i class="fa fa-circle-o"></i> Butsaah</a></li>
          <li><a href="awsan.php"><i class="fa fa-circle-o"></i> Awsan</a></li>
        </ul>
      </li> -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-tasks"></i>
          <span>Үйлчилгээ</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="torol.php"><i class="fa fa-circle-o"></i> Төрөл</a></li>
          <li><a href="olgolt.php"><i class="fa fa-circle-o"></i> Тэтгэмж</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> 
          <!-- fa fa-graduation-cap -->
          <span>Иргэний бүртгэл</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="irgen.php"><i class="fa fa-circle-o"></i> Иргэн</a></li>
          <li><a href="sum.php"><i class="fa fa-circle-o"></i> Сум</a></li>
          <li><a href="bag.php"><i class="fa fa-circle-o"></i> Баг</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-circle"></i>
          <span>Ажилтан</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="user.php"><i class="fa fa-circle-o"></i> Ажилтан</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
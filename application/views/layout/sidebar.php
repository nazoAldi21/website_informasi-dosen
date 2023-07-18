<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <ul class="sidebar-menu">
        <li  <?php if(isset($dash)) echo $dash; ?>>
            <a href="<?php echo site_url('admin/dashboard'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-windows"></i> <span>Master</span>
            <i class="fa fa-angle-left pull-right"></i>    
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('dosen/adminpenelitian'); ?>"><i class="fa fa-table"></i>Penelitian</a></li>
                <li><a href="<?php echo site_url('dosen/admindosen'); ?>"><i class="fa fa-reorder"></i>Dosen</a></li>
            </ul>
        </li>
        <li class="treeview">
           <a href="#">
               <i class="fa fa-bank"></i> <span>Perkuliahan</span>
           <i class="fa fa-angle-left pull-right"></i>    
           </a>
           <ul class="treeview-menu">
               <li><a href="<?php echo site_url('dosen/adminruangan'); ?>"><i class="fa fa-reorder"></i>Daftar Ruangan</a></li>
               <!-- <li><a href="<?php echo site_url('admin/matakuliah'); ?>"><i class="fa fa-reorder"></i>Mata Kuliah</a></li> -->
               <li><a href="<?php echo site_url('dosen/adminjadwalkuliah'); ?>"><i class="fa fa-table"></i>Jadwal Kuliah</a></li>
               <!-- <li><a href="<?php echo site_url('dosen/penelitian'); ?>"><i class="fa fa-table"></i>Penelitian</a></li> -->
           </ul>
        </li>
        <!-- <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Akademik</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/krs'); ?>"><i class="fa fa-outdent"></i> KRS </a></li>
                <li><a href="<?php echo site_url('admin/khs'); ?>"><i class="fa fa-tasks"></i> KHS </a></li>
            </ul>
        </li> -->
        <li <?php if(isset($akun)) echo $akun; ?>>
            <a href="<?php echo site_url('admin/account'); ?>">
                <i class="fa fa-cogs"></i> <span>User Account</span>
            </a>
        </li>
       
    </ul>
</section>
<!-- /.sidebar -->
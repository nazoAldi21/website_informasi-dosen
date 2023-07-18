
    <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('auth/index');?>">STT Nurul Fikri</a>
        </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('home/penelitian'); ?>" class="btn btn-default btn-simple">Penelitian</a></li>
                <li><a href="<?php echo base_url('home/jadwalmatkul'); ?>" class="btn btn-default btn-simple">Jadwal Kuliah</a></li>
                        <!-- <a href="#" class="btn btn-default btn-simple">Ruangan</a>
                        <a href="#" class="btn btn-default btn-simple">Penelitian TA</a> -->
                        <!-- <a href="#" target="_blank" class="btn btn-danger btn-fill">Button</a> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo base_url('auth/login'); ?>">
                        <i class="fa fa-user"></i>
                        Login
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset ($site_title)?$site_title.' | '.$this->config->item('site_title'):$this->config->item('site_title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="<?php echo $this->config->item('meta_desc');?>" name="description" />
    <meta content="<?php echo $this->config->item('meta_key');?>" name="keywords" />
    <meta content="<?php echo $this->config->item('meta_author');?>" name="author" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-switch.min.css?v=3.3.2" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/ladda-themeless.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/dropdowns-enhancement.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/select2-bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="wsclient.ico" title="Favicon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
        $temp_pecah =$this->session->userdata('mode');
    ?>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top <?php echo $temp_pecah=='on'?"":"navbar-inverse" ?>">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fa fa-code"></i> Mulya Gemilang</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-university"></i> Pengiriman <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url('barang.html') ?>"><i class="fa fa-folder-o"></i> Barang</a></li>
                    <li><a href="<?php echo base_url('tracking.html') ?>"><i class="fa fa-graduation-cap"></i> Tracking</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-university"></i> Ekspedisi <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url('Mobil.html') ?>"><i class="fa fa-graduation-cap"></i> Mobil</a></li>
                    <li><a href="<?php echo base_url('Expedisi.html') ?>"><i class="fa fa-graduation-cap"></i> Expedisi</a></li>

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-university"></i> Karyawan <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url('kariawan.html') ?>"><i class="fa fa-graduation-cap"></i> Karyawan</a></li>
                    <?php if ($this->session->userdata('level')=='C'): ?>

                    <?php else: ?>
                      <li><a href="<?php echo base_url('User.html') ?>"><i class="fa fa-graduation-cap"></i> Pengguna</a></li>
                    <?php endif; ?>
                  </ul>
                </li>
                <?php if ($this->session->userdata('level')=='C'): ?>

                <?php else: ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-university"></i> Data Master <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo base_url('exp.html') ?>"><i class="fa fa-graduation-cap"></i> Kode Expedisi</a></li>
                      <li><a href="<?php echo base_url('harga.html') ?>"><i class="fa fa-graduation-cap"></i> Harga</a></li>
                      <li><a href="<?php echo base_url('cabang.html') ?>"><i class="fa fa-graduation-cap"></i> Cabang</a></li>
                    </ul>
                  </li>
                <?php endif; ?>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-gears"></i> <?php echo strtoupper($this->session->userdata('username')); ?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-gears"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid ws-container">
        <?php echo $view; ?>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>var top_url = '<?php echo base_url();?>'; </script>
    <script src="<?php echo base_url();?>assets/js/jquery.js?v=2.1.3"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js?v=3.3.4"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-switch.min.js?v=3.3.2"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2.full.min.js?v=3.5.4"></script>
    <script src="<?php echo base_url(); ?>assets/js/spin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ladda.min.js?v=0.9.4"></script>
    <script src="<?php echo base_url(); ?>assets/js/dropdowns-enhancement.js?v=3.1.1"></script>
    <script src="<?php echo base_url();?>assets/js/back-to-top.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-typeahead.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <?php
        //echo $assign_js;
        if ($assign_js != '') {
            $this->load->view($assign_js);
        }
    ?>
  </body>
</html>

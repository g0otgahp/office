<!DOCTYPE html>
<html lang="en" ng-app="App">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="<?php echo BASE_URL('uploads/Login/newzeno_icon.ico') ?>"/>

    <title>Newzeno : นิวซีโน่ ประเทศไทย</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo BASE_URL('assets/startbootstrap-sb-admin'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL('assets/bootstrap-select'); ?>/dist/css/bootstrap-select.min.css"> -->


    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <!-- <script src="<?php echo BASE_URL('assets/bootstrap-select'); ?>/dist/js/i18n/defaults-*.min.js"></script> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    * {
      font-family: 'Prompt', sans-serif;
    }

    table {
      font-size: 12px;
    }
    </style>

    <script>
    function Reload() {
        location.reload();
    }
    </script>

    <!-- Navigation -->

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <b>ระบบการจัดการ : บริษัท นิวซีโน่ ประเทศไทย</b></a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li> -->
                    <li><a href="<?php echo SITE_URL('Employee/SignatureForm') ?>"><i class="fa fa-line-chart"></i> ลายเซ็นของคุณ</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo SITE_URL('Login/Logout') ?>" onclick="Reload()"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>


</head>

<body>

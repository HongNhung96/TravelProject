<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Admin';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?> -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/datepicker.css" rel="stylesheet" />
    <link href="/css/datepicker.less" rel="stylesheet" />
    <link href="/css/waves.min.css" type="text/css" rel="stylesheet">
    <!--        <link rel="stylesheet" href="css/nanoscroller.css">-->
    <link href="/css/menu-light.css" type="text/css" rel="stylesheet">
    <link href="/css/style3.css" type="text/css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>
    <!--page scripts-->
    <script src="/js/data-tables/jquery.dataTables.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/data-tables/dataTables.tableTools.js"></script>
    <script src="/js/data-tables/dataTables.bootstrap.js"></script>
    <script src="/js/data-tables/dataTables.responsive.js"></script>
    <script src="/js/data-tables/tables-data.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-default yamm navbar-fixed-top">
            <div class="container-fluid">
                <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>
                <span class="search-icon"><i class="fa fa-search"></i></span>
                <div class="search" style="display: none;">
                    <form role="form">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                        <span class="search-close"><i class="fa fa-times"></i></span>
                    </form>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                   
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <section class="page">

            <nav class="navbar-aside navbar-static-side" role="navigation">
                <div class="sidebar-collapse nano">
                    <div class="nano-content">
                       <ul class="nav metismenu" id="side-menu">
                            <li class="nav-header">
                                <div class="dropdown side-profile text-left"> 
                                    <span style="display: block;">
                                        <img alt="image" class="img-circle" src="/img/avtar-1.jpg" width="40">
                                    </span>
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <span class="clear" style="display: block;"> <span class="block m-t-xs"> <strong class="font-bold">John Doe  <b class="caret"></b></strong>
                                            </span></span> </a>
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>                         
                                        <li><a href="#"><i class="fa fa-envelope"></i>My Inbox</a></li>
                                        <li><a href="#"><i class="fa fa-barcode"></i>My Task</a></li>
                                        <li class="divider"></li>
                                       
                                        <li><a href="#"><i class="fa fa-key"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Thống kê</span><span class="fa arrow"></span></a>
                               
                            </li>
                           
                            <li class="">
                                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Quản lý các tour</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="#">Loại tour</a></li>
                                    <li><a href="#">Chương trình tour</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-calendar"></i>  <span class="nav-label">Quản lý đặt tour</span></a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>  <span class="nav-label">Quản lý địa điểm du lịch </span><span class="fa arrow"></a>
                                 <ul class="nav nav-second-level collapse">
                                    <li><?php echo $this->Html->link(
                                      'Quốc gia',
                                      ['controller' => 'Quocgias', 'action' => 'list' ,null]
                                  )?></li>
                                    <li><?php echo $this->Html->link(
                                      'Điểm du lịch',
                                      ['controller' => 'Diemdulich', 'action' => 'list' ,null]
                                  )?></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-users"></i>  <span class="nav-label">Quản lý khách hàng</span></a></li>
                            <li><a href="#"><i class="fa fa-files-o"></i>  <span class="nav-label">Quản lý tin tức</span><span class="fa arrow"></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="#">Tin tức</a></li>
                                    <li><a href="#">Loại tin tức</a></li>
                                </ul>
                            </li>
                           
                        </ul>

                    </div>
                </div>
            </nav>

            <?= $this->Flash->render() ?>
            <div id="wrapper">
                <div class="content-wrapper container">
                     <?= $this->fetch('content') ?>
                </div>
            </div>
            
        </section>
    
    <footer>
    </footer>
</body>
</html>

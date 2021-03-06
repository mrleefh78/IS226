
<html>
    <head>
        <title>MediCount Online</title>
        <link rel="stylesheet" href = "https://bootswatch.com/4/yeti/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://medicount.brightcare-assist.com/application/bootstrap/css/yeti/bootstrap.min.css">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
    <script type='text/javascript' src="http://medicount.brightcare-assist.com/application/bootstrap/js/bootstrap.min.js"></script>
   
       
      
        <!-- <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>/application/bootstrap/css/yeti/bootstrap.min.css"/> -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">MediCount Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="Inventory">

                    <a class="nav-link" href="<?php echo base_url(); ?>items/item">Inventory Items</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>requests">Item Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>release">Item Release</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>pr">Purchase Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>po">Purchase Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>ro">Receieve Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>suppliers">Suppliers</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"  href="#" role="button" aria-haspopup="true" aria-expanded="false">Tools</a>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" style="font-size:14px" href="<?php echo base_url(); ?>departments">Departments</a>
                        <a class="dropdown-item" style="font-size:14px" href="<?php echo base_url(); ?>locations">Locations</a>                    
                        <a class="dropdown-item" style="font-size:14px" href="<?php echo base_url(); ?>items/item_class">Item Class</a>
                        <a class="dropdown-item" style="font-size:14px" href="<?php echo base_url(); ?>items/item_subclass">Item Sub-Class</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="font-size:14px" href="<?php echo base_url(); ?>pages/register_view">Users</a>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>login">Logout</a>
                </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    <div class="container">

    


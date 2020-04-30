<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lucky Laundry </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    </head>

<body style="background:#F7F7F7;">
    
      <div class="">

        <div id="wrapper">
            <div id="login" class="animate form">


            <section class="login_content">
                    <?php echo form_open("auth/cek_login"); ?>
                        <h1>Lucky Laundry</h1>
                        <div >
                            <input type="text" name="username" id="username" class="form-control"  size="25" placeholder="Username" required="" />
                        </div><br/>
                        <div>
                            <input type="password" name="password" id="password"  class="form-control" size="25" placeholder="Password" required="" />
                        </div><br/>
								<?php
                                                                    $info = $this->session->flashdata('info');
                                                                    if(!empty($info))
                                                                    {
                                                                        echo $info;
                                                                    }
                                                                ?>						
                        <div>
                            <button type="submit" class="btn btn-default submit">Log in</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Lucky Laundry</h1>

                                <p>©2017 All Rights Reserved. Lucky Laundry! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                       
                    <?php echo form_close(); ?>
                    <!-- form -->
                </section>
            </div>

        </div>
    </div>
  </body>

</html>

<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Detail Pengguna</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                        <div class="profile_img">
                                            <!-- end of image cropping -->
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <div class="avatar-view" title="Change the avatar">
                                                    <img src="<?php echo base_url();?>assets/images/picture.jpg" alt="Avatar">
                                                </div>
                                                <!-- Loading state -->
                                                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                            </div>
                                            <!-- end of image cropping -->

                                        </div>
                                        </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                              
                                                 <!-- start user projects -->
                                                    <table class="data table table-striped no-margin">
                                                        <tbody>
                                                            <tr>                                                             
                                                                <th>Kode</th>   
                                                                <th>:</th> 
                                                                <td ><?php echo $kode; ?></td>
                                                            </tr>
                                                             <tr>                                                             
                                                                <th>Username</th>   
                                                                <th>:</th> 
                                                                <td ><?php echo $username; ?></td>
                                                            </tr>
                                                             <tr>                                                             
                                                                <th>Nama Pengguna </th>   
                                                                <th>:</th> 
                                                                <td ><?php echo $nama; ?></td>
                                                            </tr>
                                                             <tr>                                                             
                                                                <th>Level</th>   
                                                                <th>:</th> 
                                                                <td ><?php echo $level; ?></td>
                                                            </tr>
                                                                                                                                                                                 
                                                        </tbody>
                                                    </table>
                                                    <!-- end user projects -->

                                                </div>
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
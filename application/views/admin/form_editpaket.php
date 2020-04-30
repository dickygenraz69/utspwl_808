<script type="text/javascript">
        function cekform()
        {
            if(!$("#nama_paket").val())
            {
                alert('maaf nama paket tidak boleh kosong');
                $("#nama_paket").focus();
                return false;
            }
            
            if(!$("#harga").val())
            {
                alert('maaf harga tidak boleh kosong');
                $("#harga").focus();
                return false;
            }
            
            
        }
        </script>
<!--form input mask --> <!-- form color picker -->
                        <div class="col-md-5 col-sm-5 col-xs-6">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Input Paket Laundry</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url();?>admin/simpanadmin" onsubmit = "return cekform();">

                                         <div class="form-group" >
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="id_paket" id="id_paket" value="<?php echo $id_paket; ?>" class="demo1 form-control"  />
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paket</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="nama_paket" id="nama_paket" value="<?php echo $nama_paket; ?>" class="demo1 form-control"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga/Kg</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="number" name="harga" id="harga"  value="<?php echo $harga; ?>"  class="demo1 form-control"  />
                                            </div>
                                        </div>
                                        <br/><br/><br/>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="<?php echo base_url();?>admin/paket" class="btn btn-primary">Cancel</button></a>
                                            </div>
                                        </div>

                                        
                                        

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /form color picker -->
                        
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Paket</h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    
                                </div>
                            </div>
                        </div>
                        <!-- /form input mask -->

                       
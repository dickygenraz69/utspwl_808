<script type="text/javascript">
        function cekform()
        {
            
            
            if(!$("#pass_lama").val())
            {
                alert('maaf password lama tidak boleh kosong');
                $("#pass_lama").focus();
                return false;
            }
            if(!$("#pass_baru").val())
            {
                alert('maaf pass_baru tidak boleh kosong');
                $("#pass_baru").focus();
                return false;
            }
            
            
        }
        </script>


<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Tambah Admin</h2>
                                   <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />

                                    <?php 
    $info = $this->session->flashdata('info');
    if(!empty($info))
    {
        echo $info;
    }
?>
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="<?php echo base_url();?>admin/simpan_akun" onsubmit = "return cekform();">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Password lama :</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" name="pass_lama" id="pass_lama"  class="form-control col-md-7 col-xs-12" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Password baru :</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" name="pass_baru" id="pass_baru"  class="form-control col-md-7 col-xs-12" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi password baru :</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input name="ulangi_pass" id="ulangi_pass" class="form-control col-md-7 col-xs-12" type="password"  >
                                            </div>
                                        </div>

                                       
                                       </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="<?php echo base_url();?>member" class="btn btn-primary">Cancel</button></a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
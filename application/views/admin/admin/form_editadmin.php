<script type="text/javascript">
        function cekform()
        {
            if(!$("#kode").val())
            {
                alert('maaf kode tidak boleh kosong');
                $("#kode").focus();
                return false;
            }
             if(!$("#username").val())
            {
                alert('maaf username tidak boleh kosong');
                $("#username").focus();
                return false;
            }
            if(!$("#password").val())
            {
                alert('maaf password tidak boleh kosong');
                $("#password").focus();
                return false;
            }
            if(!$("#nama").val())
            {
                alert('maaf nama tidak boleh kosong');
                $("#nama").focus();
                return false;
            }
            
            
            if(!$("#level").val())
            {
                alert('maaf level tidak boleh kosong');
                $("#level").focus();
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
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="<?php echo base_url();?>admin/simpanadmin" onsubmit = "return cekform();">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Kode </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="kode" id="kode" class="form-control col-md-7 col-xs-12" value="<?php echo $kode; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Username </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="username" id="username"  class="form-control col-md-7 col-xs-12" value="<?php echo $username; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Password </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" name="password" id="password"  class="form-control col-md-7 col-xs-12" value="<?php echo $password; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pengguna</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input name="nama_usr" id="nama_usr" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $nama_usr; ?>" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="level" id="level" class="form-control col-md-7 col-xs-12">
                                                <option value="">--Pilih Jenis User--</option>
                                                <option>Admin</option>
                                                <option>Member</option>
                                                </select>
                                            </div>
                                        </div>
                                       </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="<?php echo base_url();?>admin" class="btn btn-primary">Cancel</button></a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
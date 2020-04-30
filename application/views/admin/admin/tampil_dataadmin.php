<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>User Sistem Dinas Pemuda dan Olahraga</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <a href="<?php echo base_url();?>pengunjung/downloaduser"  class="btn btn-dark">Download Excel</a>
                                    <li><a class="close-link"></a></li>
                                    <a href="<?php echo base_url();  ?>admin/tambahadmin" class="btn btn-dark">Tambah</a>                                           </ul>  
                                    <div class="clearfix"></div>
                                </div>
                                                    
                                           
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th>No </th>
                                                <th>Username</th>
                                                <th>Nama Pengguna</th>
                                                <th>Level</th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
            <?php
            $no = 1;
            foreach ($data->result() as $row) {
            ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->nama_usr; ?></td>
            <td><?php echo $row->level; ?></td>
            <td>
                <a href="<?php echo base_url();?>admin/editadmin/<?php echo $row->id_user; ?>"> <i class="fa fa-pencil"></i></a> &nbsp; 
                <a href="<?php echo base_url();?>admin/deleteadmin/<?php echo $row->id_user; ?>" onclick="return confirm('anda yakin akan menghapus data ini');"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                         <!-- Datatables -->
        <script src="<?php echo base_url();?>assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url();?>('assets/assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); "
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
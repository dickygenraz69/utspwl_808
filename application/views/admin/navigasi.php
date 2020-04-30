<div class="row top_tiles">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                </div>
                                <div class="count"><?php $query = $this->db->query("SELECT laundry.id_laundry, laundry.nama_konsumen, laundry.berat, laundry.`status`, laundry.tgl_masuk, laundry.bayar, paket.nama_paket FROM laundry INNER JOIN paket ON laundry.paket_id_paket = paket.id_paket WHERE `status` = 'masuk'"); echo $query->num_rows(); ?></div>
                                <br/>

                                <h3>Laundry Masuk</h3>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="count"><?php $query = $this->db->query("SELECT laundry.id_laundry, laundry.nama_konsumen, laundry.berat, laundry.`status`, laundry.tgl_masuk, laundry.bayar, paket.nama_paket FROM laundry INNER JOIN paket ON laundry.paket_id_paket = paket.id_paket WHERE `status` = 'keluar'"); echo $query->num_rows(); ?></div><br/>

                                <h3>Laundry Keluar</h3>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-comments-o"></i>
                                </div>
                                <div class="count">OTW</div><br/>

                                <h3>Total Berat Laundry</h3>
                            </div>
                        </div>
                        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">OTW</div><br/>

                                <h3>Total Uang Masuk</h3>
                            
                        </div>
                    </div>
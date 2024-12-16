<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Transaksi</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Transaksi</h5>
                                <div class="table-responsive">
                                <a href="<?= base_url('home/tambah_transaksi')?>">
                                          <button type="button" class="btn btn-success m-2">Tambah</button>
                                          </a>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Foto Kendaraan</th>
                                                <th>Lama Sewa</th>
                                                <th>Total Harga</th>
                                                <th>Bayar</th>
                                                <th>Kembalian</th>
                                                <th>Waktu Pengembalian</th>
                                                <!-- <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
      $no=1;
      foreach ($clara as $nelson ) {
?>
                                            <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $nelson->username ?></td>
                                        <td><img src="<?= base_url('foto/' . $nelson->foto) ?>" width="120px"></td>
                                        <td><?= $nelson->jam_sewa ?></td>
                                        <td><?= $nelson->total_harga ?></td>
                                        <td><?= $nelson->bayar ?></td>
                                        <td><?= $nelson->kembalian ?></td>
                                        <td><?= $nelson->tanggal_waktu ?></td>
                                        <!-- <td> -->
                                          <?php if( $nelson->status=='disewa'){?>
                                          <!-- <a href="<?= base_url('home/kembali/'.$nelson->id_kendaraan)?>">
                                          <button type="button" class="btn btn-info m-2">Di Kembalikan</button>
                                          </a>
                                          <?php } ?>
                                          <?php if( session()->get('level')==1){?>
                                          <a href="<?= base_url('home/hapus_kendaraan/'.$nelson->id_kendaraan)?>">
                                          <button type="button" class="btn btn-danger m-2">Hapus</button>
                                          </a> -->
                                          <?php } ?>
                                          
                                          
                                          <!-- <?php if(session()->get('level')==2 ){?>
                                          <a href="<?= base_url('home/buka_lelang/'.$nelson->id_barang)?>">
                                          <button type="button" class="btn btn-danger m-2">Membuka Lelang</button>
                                          </a>
                                          <?php } ?> -->
                                        <!-- </td> -->
                                    </tr>
                                    <?php } ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->




            




<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Detail</h4>
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
                                <h5 class="card-title">Detail Pesanan</h5>
                                <div class="table-responsive">
                                <!-- <a href="<?= base_url('home/tambah_masy')?>">
                                          <button type="button" class="btn btn-success m-2">Tambah</button>
                                          </a> -->
                                    <table  class="table table-striped table-bordered">
                                        <!-- <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Nomor Telepon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                        
                                        <tr>
                                        <td>Kode Pesanan</td>
                                        <td><?= $clara->kode_pesan ?></td>
                                        </tr>

                                        <tr>
                                        <td>Tanggal</td>
                                        <td><?= $clara->tgl ?></td>
                                        </tr>

                                        <tr>
                                        <td>Jenis Pesanan</td>
                                        <td><?= $clara->nama_jenis ?></td>
                                        </tr>

                                        <tr>
                                        <td>Harga</td>
                                        <td><?= $clara->harga ?></td>
                                        </tr>

                                        <tr>
                                        <td>Deskripsi</td>
                                        <td><?= $clara->deskripsi ?></td>
                                        </tr>

                                        <tr>
                                        <td>Username</td>
                                        <td><?= $clara->username ?></td>
                                        </tr>

                                        <tr>
                                        <td>Status</td>
                                        <td><?= $clara->status ?></td>
                                        </tr>

                                        <?php if(session()->get('level')==1){ ?>
                                        <tr>
                                        <td>Gambar</td>
                                        <td><img src="<?= base_url('komisi/'.$clara->gambar)?>" class="light-logo" style="width: 200px;" /></td>
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




            




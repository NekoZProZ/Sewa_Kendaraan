<style>
    .custom-dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-selected {
      padding: 10px;
      border: 1px solid #ccc;
      cursor: pointer;
      width: 200px;
    }

    .dropdown-options {
      display: none;
      position: absolute;
      background-color: white;
      border: 1px solid #ccc;
      width: 100%;
      z-index: 1000;
    }

    .dropdown-options .option {
      display: flex;
      align-items: center;
      padding: 10px;
      cursor: pointer;
    }

    .dropdown-options .option img {
      width: 30px;
      height: 30px;
      margin-right: 10px;
    }

    .dropdown-options .option:hover {
      background-color: #f0f0f0;
    }

    .custom-dropdown.open .dropdown-options {
      display: block;
    }
  </style>

<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tambah</h4>
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
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url('home/aksi_tambah_transaksi')?>">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Lama Sewa</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="lama" name="lama" min="0" value="0">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Kendaraan</label>
                                        <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="level">
                                        <option value="">Pilih</option>
                                        <?php foreach ($clara as $nelson ) {?>
                                            <option value="<?= $nelson->id_kendaraan ?>"><?= $nelson->harga_per_jam ?> <img src="<?= base_url('foto/' . $nelson->foto) ?>" width="10px"></option>
                                            <!-- <option value="2">Murid</option> -->
                                        <?php } ?>
                                        <!-- </select>
                                        </div> -->
                                    <!-- </div> -->

                                    <div class="form-group row">
                                    <div class="custom-dropdown" id="customDropdown" style="margin-left: 140px;">
                                        <div class="dropdown-selected">Pilih Kendaraan</div>
                                        <div class="dropdown-options">
                                            <?php foreach ($clara as $nelson ) {?>
                                            <div class="option" data-value="<?= $nelson->id_kendaraan ?>" data-price="<?= $nelson->harga_per_jam ?> ">
                                                <img src="<?= base_url('foto/' . $nelson->foto) ?>" alt="Option 1">
                                                <?= $nelson->harga_per_jam ?> / Jam
                                            </div>
                                            <?php } ?>
                                            
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Total Harga</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="total" min="0" value="0" name="total" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Bayar</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="bayar" min="0" value="0" name="bayar">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Kembalian</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="kembalian" min="0" value="0" name="kembalian">
                                        </div>
                                    </div>

                                    <input type="hidden" name="selected_option" id="selectedOption" value="">
                                    
                                    
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        

                    </div>
                    
                </div>
                <!-- editor -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->





                <script>
    const dropdown = document.getElementById('customDropdown');
    const selected = dropdown.querySelector('.dropdown-selected');
    const options = dropdown.querySelector('.dropdown-options');
    const hiddenInput = document.getElementById('selectedOption');
    const lamaInput = document.getElementById('lama');
    const totalInput = document.getElementById('total');
    const bayarInput = document.getElementById('bayar');
    const kembalianInput = document.getElementById('kembalian');
    let selectedPrice = 0; // Store the selected price

    // Toggle dropdown
    selected.addEventListener('click', () => {
      dropdown.classList.toggle('open');
    });

    // Handle option click
    options.addEventListener('click', (e) => {
      const option = e.target.closest('.option');
      if (option) {
        // Update the visible selected value
        selected.textContent = option.textContent.trim();
        // Set the hidden input value
        hiddenInput.value = option.dataset.value;
        // Update the selected price
        selectedPrice = parseFloat(option.dataset.price);
        // Recalculate the total
        calculateTotal();
        // Close the dropdown
        dropdown.classList.remove('open');
      }
    });

    // Update total when duration input changes
    lamaInput.addEventListener('input', calculateTotal);

    function calculateTotal() {
      const lama = parseFloat(lamaInput.value) || 0; // Get the duration value
      const total = lama * selectedPrice; // Calculate total
      totalInput.value = total.toFixed(2); // Update total input
      updateKembalian(); // Recalculate kembalian when total changes
    }

    // Handle Bayar input
    bayarInput.addEventListener('input', () => {
      const bayar = parseFloat(bayarInput.value) || 0;
      const total = parseFloat(totalInput.value) || 0;

      // Prevent bayar from being less than total
      if (bayar < total) {
        bayarInput.value = total; // Reset bayar to total if it's less
      }
      updateKembalian();
    });

    function updateKembalian() {
      const bayar = parseFloat(bayarInput.value) || 0;
      const total = parseFloat(totalInput.value) || 0;
      const kembalian = bayar - total;

      // Update the kembalian input
      kembalianInput.value = kembalian > 0 ? kembalian.toFixed(2) : 0;
    }

    // Close dropdown if clicked outside
    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('open');
      }
    });
  </script>
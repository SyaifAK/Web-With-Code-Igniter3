<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    
    <!--tambah data modal -->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdataModal">
  <i class="fa fa-plus">
Tambah data</i>
</button>

<a class="btn btn-primary" href="<?php echo base_url('admin/print') ?>"><i class="fa fa-print">Print</i></a>

<!-- Modal -->
<div class="modal fade" id="tambahdataModal" tabindex="-1" role="dialog" aria-labelledby="tambahdataModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdataModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(),'admin/tambah_data' ?>" method="post">

          <div class="form-group">
            <label for="nama">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
          </div>
          
          <div class="form-group">
            <label for="no_telp">No Telepon</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan Nomor telepon">
          </div>

          <div class="form-group">
            <label for="id_barang">Id Barang</label>
            <input type="text" class="form-control" id="id_barang" name="id_barang" placeholder="Masukkan Id Barang">
          </div>

          <div class="form-group">
            <label for="QTY">Stok</label>
            <input type="text" class="form-control" id="QTY" name="QTY" placeholder="Masukkan sisa stok">
          </div>

          
        </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div style="height: 20px; width: 100%;"></div>
    <table class="table">
      <thead class="table-primary">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telp</th>
        <th scope="col">Id Barang</th>
        <th scope="col">Stok</th>
        <th  colspan="2" scope="col">Opsi</th>
      </tr>
      </thead>
      <?php
      $no=1;
      foreach ($jual as $jl) : 
      
      ?>
      <tr>
        <td><?php echo  $no++; ?></td>
        <td><?php echo $jl->nama;?></td>
        <td><?php echo $jl->alamat;?></td>
        <td><?php echo $jl->no_telp;?></td>
        <td><?php echo $jl->id_barang;?></td>
        <td><?php echo $jl->QTY;?></td>
        <td onclick="return confirm ('apakah mau dihapus?')"><?php echo anchor('admin/hapus/' .$jl->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        <td><?php echo anchor('admin/edit/' .$jl->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      </tr>
        <?php endforeach;  ?>

    </table>


  
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
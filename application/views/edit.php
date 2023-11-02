<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Pembeli</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
        <?php foreach($jual as $jl): ?> 
            <form action="<?php echo base_url(),'admin/update' ?>" method="post">
                
                <div class="form-group">
                    <!--<label for="nama">id</label>-->
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $jl->id; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Nama Pembeli</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $jl->nama; ?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $jl->alamat; ?>">
                </div>
                
                <div class="form-group">
                    <label for="no_telp">No Telepon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $jl->no_telp; ?>">
                </div>

                <div class="form-group">
                    <label for="id_barang">Id Barang</label>
                    <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $jl->id_barang; ?>">
                </div>

                <div class="form-group">
                    <label for="QTY">Sisa stok</label>
                    <input type="text" class="form-control" id="QTY" name="QTY" value="<?php echo $jl->QTY; ?>">
                </div>
            
                    <button type="reset" class="btn btn-danger" >Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
    
          <?php endforeach ?>
    

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 align="center">DATA PEJUALAN</h2>
    <table class="table" border="1px"  width="100%" cellspacing="0" cellpadding="10"  align="center" >
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telp</th>
        <th scope="col">Id Barang</th>
        <th scope="col">Stok</th>
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
        
        </tr>
          <?php endforeach;  ?>

    </table>
    <script type="text/javascript">window.print();</script>
</body>
</html>
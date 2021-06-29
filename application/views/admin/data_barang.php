<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"> Tambah Barang</i></button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php 
		$no=1;
		foreach($barang as $brg):?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_barang ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stok ?></td>
				<td>
					<?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?>
					
				</td>
				<td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?>
					
				</td>
				<td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
					
				</td>
			</tr>
		<?php endforeach;?>
	</table>
</div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Modal -->
<div class="modal" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_barang" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
        			<option>Elektronik</option>
        			<option>Pakaian Pria</option>
        			<option>Pakaian Wanita</option>
        			<option>Pakaian Anak-Anak</option>
        			<option>Peralatan Olahraga</option>
        		</select>
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
	    </form>
	   </div>
    </div>
  </div>
</div>
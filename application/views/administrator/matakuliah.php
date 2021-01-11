<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> Mata Kuliah
    </div>
	
	<?php echo $this->session->flashdata('pesan') ?>

  	<?php echo anchor('adm/matakuliah/tambah_matakuliah','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Matakuliah</button>') ?>
	
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>KODE MATAKULIAH</th>
			<th>NAMA MATAKULIAH</th>
			<th>PROGRAM STUDI</th>
			<th colspan="3">AKSI</th>
		</tr>

	<?php 
  	$no = 1;
  	foreach ($matakuliah as $mk) : ?>
  		<tr>
  			<td width="20px"><?php echo $no++ ?></td>
  			<td><?php echo $mk->kode_matakuliah ?></td>
  			<td><?php echo $mk->nama_matakuliah ?></td>
  			<td><?php echo $mk->nama_prodi ?></td>
  			<td width="20px"><?php echo anchor('adm/matakuliah/detail/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')  ?></td>
  			<td width="20px"><?php echo anchor('adm/matakuliah/update/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')  ?></td>
  			<td width="20px"><?php echo anchor('adm/matakuliah/delete/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')  ?></td>
  		</tr>
  	<?php endforeach; ?>
		
	</table>
</div>
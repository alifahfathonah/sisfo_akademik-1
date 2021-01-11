<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> Dosen
    </div>
	
	<?php echo $this->session->flashdata('pesan') ?>

  	<?php echo anchor('adm/dosen/tambah_dosen','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Dosen</button>') ?>

	<table class="table table-bordered table-striped table-hover">
  	<tr>
  		<th>NO</th>
  		<th>NIDN</th>
      <th>NAMA DOSEN</th>
  		<th>ALAMAT</th>
  		<th colspan="3">AKSI</th>
  	</tr>

  	<?php 
  	$no = 1;
  	foreach ($dosen as $dsn) : ?>
  		<tr>
  			<td width="20px"><?php echo $no++ ?></td>
  			<td><?php echo $dsn->nidn ?></td>
  			<td><?php echo $dsn->nama_dosen ?></td>
  			<td><?php echo $dsn->alamat ?></td>
  			<td width="20px"><?php echo anchor('adm/dosen/detail/'.$dsn->nidn,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')  ?></td>
        <td width="20px"><?php echo anchor('adm/dosen/update/'.$dsn->nidn,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')  ?></td>
        <td width="20px"><?php echo anchor('adm/dosen/delete/'.$dsn->nidn,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')  ?></td>
  		</tr>
  	<?php endforeach; ?>
  </table>
</div>
<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fa fa-eye"></i> Detail Dosen
    </div>

    <table class="table table-bordered table-hover table-striped">

    	<?php foreach ($detail as $dt) : ?>

    	<img class=" mb-3" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 15%" >

		<tr>
			<th>NIDN</th>
			<td><?php echo $dt->nidn; ?></td>
		</tr>

		<tr>
			<th>NAMA DOSEN</th>
			<td><?php echo $dt->nama_dosen; ?></td>
		</tr>

		<tr>
			<th>ALAMAT</th>
			<td><?php echo $dt->alamat; ?></td>
		</tr>

		<tr>
			<th>JENIS KELAMIN</th>
			<td><?php echo $dt->jenis_kelamin; ?></td>
		</tr>

		<tr>
			<th>EMAIL</th>
			<td><?php echo $dt->email; ?></td>
		</tr>

		<tr>
			<th>NO. TELP</th>
			<td><?php echo $dt->telp; ?></td>
		</tr>


	<?php endforeach; ?>
	</table>

	<?php echo anchor('adm/dosen', '<div class="btn btn-sm btn-primary">Kembali</div>') ?><br><br>
</div>
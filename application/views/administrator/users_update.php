<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> Form Update Users
    </div>

    <?php foreach ($users as $user) : ?>

    <form method="post" action="<?php echo base_url('adm/users/update_aksi') ?>">
		<div class="form-group">
			<label>Username</label>
			<input type="hidden" name="id" placeholder="masukkan username" class="form-control" value="<?php echo $user->id ?>">
			<input type="text" name="username" placeholder="masukkan username" class="form-control" value="<?php echo $user->username ?>">
			<?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" placeholder="masukkan password" class="form-control" value="<?php echo $user->password ?>">
			<?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="masukkan email" class="form-control" value="<?php echo $user->email ?>">
			<?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Level</label>
			<select name="level" class="form-control">
				<?php 
					if($level == 'admin'){
				 ?>
				 <option value="admin" selected>Admin</option>
				 <option value="mahasiswa">Mahasiswa</option>

				 <?php 
				 	}elseif($level == 'mahasiswa'){
				  ?>
				  <option value="admin">Admin</option>
				  <option value="mahasiswa" selected>Mahasiswa</option>

				  <?php 
				  	}else{
				   ?>
				   <option value="admin">Admin</option>
				  <option value="mahasiswa">Mahasiswa</option>

				<?php } ?>
			</select>
			<?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Blokir</label>
			<select name="blokir" class="form-control">
				<?php 
					if($blokir == 'Y'){
				 ?>
				 <option value="Y" selected>Ya</option>
				 <option value="N">Tidak</option>

				 <?php 
				 	}elseif($blokir == 'N'){
				  ?>
				  <option value="Y">Ya</option>
				  <option value="N" selected>Tidak</option>

				  <?php 
				  	}else{
				   ?>
				   <option value="Y">Ya</option>
				  <option value="N" selected>Tidak</option>

				<?php } ?>
			</select>
			<?php echo form_error('blokir', '<div class="text-danger small" ml-3>') ?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
<?php endforeach; ?>
</div>
<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-university"></i> Form Masuk Halaman Input Nilai
    </div>

    <form method="post" action="<?php echo base_url('adm/nilai/input_nilai_aksi') ?>">

    	<div class="form-group">
			<label>Tahun Akademik (Semester)</label>
			<?php 
			$query = $this->db->query('SELECT id_thn_akad, semester, CONCAT(tahun_akademik,"/") AS thn_semester FROM tahun_akademik');

			$dropdowns = $query->result();

				 foreach($dropdowns as $dropdown){

				 	if($dropdown->semester == 'Ganjil')
				 	{
						$tampilSemester = "Ganjil";
						
					}else if($dropdown->semester == 'Genap')
					{
						$tampilSemester = "Genap";
					}
					$dropDownList[$dropdown->id_thn_akad] = $dropdown->thn_semester . " " .$tampilSemester;
				}

				echo form_dropdown('id_thn_akad',$dropDownList,'', 'class="form-control" id="id_thn_akad"');
			?>
		</div>

		<div class="form-group">
			<label>Kode Mata Kuliah</label>
			<input type="text" name="kode_matakuliah" placeholder="Masukkan kode matakuliah" class="form-control">	
		</div>

		<button type="submit" class="btn btn-primary">Proses</button>

    </form>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mahasiswa</h1>
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
    	<div class="container-fluid">
			<div style="text-align: right;">
				<a class="btn btn-primary" href="<?php echo base_url().'mahasiswa/index'; ?>"><i class="fas fa-chevron-left"></i> Kembali</a>
			</div>
			<div class="modal-header">
				<h5 class="modal-title" id="insertDataLabel">Edit Data Mahasiswa</h5>
			</div>
			<div class="modal-body">
				<?php foreach($mahasiswa as $mhsiswa) {?>
				<?php echo form_open_multipart('mahasiswa/update_data');?>
					<div class="form_group">
						<label for="mahasiswa_nama">Nama Mahasiswa</label>
						<input type="text" name="mahasiswa_nama" id="mahasiswa_nama" class="form-control" value="<?php echo $mhsiswa->mahasiswa_nama?>">
					</div>
					<div class="form_group">
						<label for="mahasiswa_ic">IC Mahasiswa</label>
						<input type="text" name="mahasiswa_ic" id="mahasiswa_ic" class="form-control" value="<?php echo $mhsiswa->mahasiswa_ic?>">
					</div>
					<div class="form_group">
						<label for="mahasiswa_tarikh_lahir">Tarikh Lahir Mahasiswa</label>
						<input type="text" name="mahasiswa_tarikh_lahir" id="mahasiswa_tarikh_lahir" class="form-control" value="<?php echo $mhsiswa->mahasiswa_tarikh_lahir?>">
					</div>
					<div class="form_group">
						<label for="mahasiswa_desc">Deskripsi Mahasiswa</label>
						<input type="text" name="mahasiswa_desc" id="mahasiswa_desc" class="form-control" value="<?php echo $mhsiswa->mahasiswa_desc?>">
					</div>
					<div class="form_group">
						<label for="mahasiswa_tel">No Telefon Mahasiswa</label>
						<input type="text" name="mahasiswa_tel" id="mahasiswa_tel" class="form-control" value="<?php echo $mhsiswa->mahasiswa_tel?>">
					</div>
					<div class="form_group">
						<label for="mahasiswa_pic">Gambar Mahasiswa</label>
						<div class="mb-2">
							<img class="border" src="<?php echo base_url().'assets/gambar/'.$mhsiswa->mahasiswa_pic; ?>" alt="" width="250">
						</div>
						<input type="file" name="mahasiswa_pic" id="mahasiswa_pic" class="form-control">
					</div>
					<input type="hidden" name="id_mahasiswa" id="id_mahasiswa" class="form-control" value="<?php echo $mhsiswa->id_mahasiswa?>">
					<div class="modal-footer">
						<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
				<?php echo form_close();?>
				<?php }?>
			</div>
    	</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

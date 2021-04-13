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
				<h5 class="modal-title" id="insertDataLabel">Lihat Data Mahasiswa</h5>
			</div>
			<div class="modal-body">
				<div class="form_group">
					<label for="mahasiswa_nama">Nama Mahasiswa</label>
					<input type="text" id="mahasiswa_nama" class="form-control" value="<?php echo $mahasiswa->mahasiswa_nama?>" readonly>
				</div>
				<div class="form_group">
					<label for="mahasiswa_ic">IC Mahasiswa</label>
					<input type="text" id="mahasiswa_ic" class="form-control" value="<?php echo $mahasiswa->mahasiswa_ic?>" readonly>
				</div>
				<div class="form_group">
					<label for="mahasiswa_tarikh_lahir">Tarikh Lahir Mahasiswa</label>
					<input type="text" id="mahasiswa_tarikh_lahir" class="form-control" value="<?php echo $mahasiswa->mahasiswa_tarikh_lahir?>" readonly>
				</div>
				<div class="form_group">
					<label for="mahasiswa_desc">Deskripsi Mahasiswa</label>
					<input type="text" id="mahasiswa_desc" class="form-control" value="<?php echo $mahasiswa->mahasiswa_desc?>" readonly>
				</div>
				<div class="form_group">
					<label for="mahasiswa_tel">No Telefon Mahasiswa</label>
					<input type="text" id="mahasiswa_tel" class="form-control" value="<?php echo $mahasiswa->mahasiswa_tel?>" readonly>
				</div>
				<div class="form_group">
					<label for="mahasiswa_pic">Gambar Mahasiswa</label>
					<div>
						<img class="border" src="<?php echo base_url().'assets/gambar/'.$mahasiswa->mahasiswa_pic; ?>" alt="" width="250">
					</div>
				</div>
			</div>
    	</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

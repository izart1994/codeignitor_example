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
			<button class="btn btn-primary" data-toggle="modal" data-target="#insertData"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
    		<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>No IC</td>
						<td>Tarikh Lahir</td>
 						<td colspan="2" align="center" style="width: 10%;">TIndakan</td>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
					foreach ($mahasiswa as $mhsiswa) : ?>
					<tr>
						<td><?php echo $i++?></td>
						<td><?php echo $mhsiswa->mahasiswa_nama; ?></td>
						<td><?php echo $mhsiswa->mahasiswa_ic; ?></td>
						<td><?php echo $mhsiswa->mahasiswa_tarikh_lahir; ?></td>
						<td align="center" onclick="javascript: return confirm('Confirm untuk menghapus data?');"><?php echo anchor('mahasiswa/padam/'.$mhsiswa->id_mahasiswa, "<button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>");?></td>
						<td align="center"><?php echo anchor('mahasiswa/edit/'.$mhsiswa->id_mahasiswa, "<button class='btn btn-primary btn-sm'><i class='fa fa-edit'></i></button>");?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
    	</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

	<!-- Modal -->
	<div class="modal fade" id="insertData" tabindex="-1" role="dialog" aria-labelledby="insertDataLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="insertDataLabel">Tambah Data Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'mahasiswa/tambah'; ?>" method="POST">
						<div class="form_group">
							<label for="mahasiswa_nama">Nama Mahasiswa</label>
							<input type="text" name="mahasiswa_nama" id="mahasiswa_nama" class="form-control">
						</div>
						<div class="form_group">
							<label for="mahasiswa_ic">IC Mahasiswa</label>
							<input type="text" name="mahasiswa_ic" id="mahasiswa_ic" class="form-control">
						</div>
						<div class="form_group">
							<label for="mahasiswa_tarikh_lahir">Tarikh Lahir Mahasiswa</label>
							<input type="text" name="mahasiswa_tarikh_lahir" id="mahasiswa_tarikh_lahir" class="form-control">
						</div>
						<div class="form_group">
							<label for="mahasiswa_desc">Deskripsi Mahasiswa</label>
							<input type="text" name="mahasiswa_desc" id="mahasiswa_desc" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-danger" value="Reset">Reset</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  </div>

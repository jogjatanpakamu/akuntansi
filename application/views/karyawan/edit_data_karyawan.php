<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">TAMBAH DATA KARYAWAN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<?php foreach ($data->result() as $key => $row) {
					?>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_edit_karyawan" method="POST">
						 	<div class="form-group"> 
								<label class="col-sm-2 control-label">Nik</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="nik" value="<?php echo $row->nik ?>"> 
									<input type="hidden" value="<?php echo $row->id_karyawan ?>" class="form-control" name="id_karyawan"> 
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="nama" value="<?php echo $row->nama ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Jabatan</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="jabatan" value="<?php echo $row->jabatan ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">No Hp</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="no_hp" value="<?php echo $row->no_hp ?>"> 
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Tanggal Masuk</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="tanggal_masuk" value="<?php echo $row->tanggal_masuk ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Tanggal Keluar</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="tanggal_keluar" value="<?php echo $row->tanggal_keluar ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Alamat</label> 
								<div class="col-sm-10"> 
								<textarea class="form-control" name="alamat"><?php echo $row->alamat ?></textarea>
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">SAVE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_karyawan" class="btn btn-warning">KEMBALI</a>
									
								</div> 
							</div>
						</form>
											<?php
					} ?>

					</div>
				</div>
			</div>
		</div>
		
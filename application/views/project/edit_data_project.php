<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">EDIT DATA PROJECT</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
					<?php foreach ($data->result() as $key => $row) {
						# code...
					} ?>
						 <form class="form-horizontal" action="site/proses_edit_project" method="POST">
						 	

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama Karyawan</label> 
								<div class="col-sm-10"> 
									<select name="id_karyawan" class="form-control">
											<option value="<?php echo $row->id_karyawan ?>"><?php echo $row->nama ?></option>

										<?php 
										$data_karyawan = $this->db->query("SELECT * FROM tbl_karyawan");
										foreach ($data_karyawan->result() as $key => $v) {
											?>	
											<option value="<?php echo $v->id_karyawan ?>"><?php echo $v->nama ?></option>
											<?php	
										} 

										?>
									</select>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">KLien</label> 
								<div class="col-sm-10"> 
									<select name="id_klien" class="form-control">
											<option value="<?php echo $row->id_klien ?>"><?php echo $row->nama_klien ?></option>

										<?php 
										$data_klien = $this->db->query("SELECT * FROM tbl_klien");
										foreach ($data_klien->result() as $key => $vs) {
											?>	
											<option value="<?php echo $vs->id_klien ?>"><?php echo $vs->nama_klien ?></option>
											<?php	
										} 

										?>
									</select>
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Project</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="project" value="<?php echo $row->nama_project ?>"> 
									<input type="hidden"  class="form-control" name="id_project" value="<?php echo $row->id_project ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Jenis</label> 
								<div class="col-sm-10"> 
									<select name="jenis" class="form-control">

										<option value="perbaikan">PERBAIKAN</option>
										<option value="skripsi">SRIPSI</option>
										<option value="full">FULL</option>
									</select>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Tanggal Mulai</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="tanggal_mulai" value="<?php echo $row->tanggal_mulai ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Tanggal Selesai</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="tanggal_selesai" value="<?php echo $row->tanggal_selesai ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Harga</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="harga" value="<?php echo $row->harga ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">DP</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="dp" value="<?php echo $row->dp ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Selesai DP</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="selesai_dp" value="<?php echo $row->selesai_dp ?>"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Selesai Project</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="selesai_project" value="<?php echo $row->selesai_project ?>"> 
								</div> 
							</div>

								<div class="form-group"> 
								<label class="col-sm-2 control-label">Status</label> 
								<div class="col-sm-10"> 
									<select name="status" class="form-control">

										<option value="1">Selesai</option>
										<option value="0">Belum</option>
									</select>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_project" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
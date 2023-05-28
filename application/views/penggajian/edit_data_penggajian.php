<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">EDIT DATA PENGGAJIAN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_edit_pengajian" method="POST">
						 	

						<?php foreach ($data->result() as $key => $row) {
							# code...
						} ?>
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
								<label class="col-sm-2 control-label">Hari Kerja</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="hari_kerja" value="<?php echo $row->hari_kerja ?>"> 
									<input type="hidden"  class="form-control" name="id_gaji" value="<?php echo $row->id_gaji ?>"> 
								</div> 
							</div>
							

								<div class="form-group"> 
								<label class="col-sm-2 control-label">Jumlah Project</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="jumlah_project" value="<?php echo $row->jumlah_project ?>"> 
								</div> 
							</div>

								<div class="form-group"> 
								<label class="col-sm-2 control-label">Total Gaji</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="total_gaji" value="<?php echo $row->total_gaji ?>"> 
								</div> 
							</div>
							

						
							
							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_penggajian" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
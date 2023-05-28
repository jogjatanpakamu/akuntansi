<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">TAMBAH DATA PENGGAJIAN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_add_pengajian" method="POST">
						 	

						
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama Karyawan</label> 
								<div class="col-sm-10"> 
									<select name="id_karyawan" class="form-control">
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
									<input type="text"  class="form-control" name="hari_kerja"> 
								</div> 
							</div>
							

								<div class="form-group"> 
								<label class="col-sm-2 control-label">Jumlah Project</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="jumlah_project"> 
								</div> 
							</div>

								<div class="form-group"> 
								<label class="col-sm-2 control-label">Total Gaji</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="total_gaji"> 
								</div> 
							</div>
							

						
							
							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">SAVE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_penggajian" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
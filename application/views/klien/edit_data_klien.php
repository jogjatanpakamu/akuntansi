<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">EDIT DATA KLIEN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<?php foreach ($data->result() as $key => $row) {
						# code...
					} ?>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_edit_klien" method="POST">
						 	

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="nama" value="<?php echo $row->nama_klien ?>"> 
									<input type="hidden"  class="form-control" name="id_klien" value="<?php echo $row->id_klien ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Email</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="email" value="<?php echo $row->email ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">No Hp</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="no_hp" value="<?php echo $row->no_hp ?>"> 
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Tanggal Order</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="tgl_gabung" value="<?php echo $row->tgl_gabung ?>"> 
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
							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_klien" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
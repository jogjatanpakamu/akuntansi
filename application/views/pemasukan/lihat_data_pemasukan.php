 <!-- Main content -->
	 <div class="main-content">
			 <h1 class="page-title"><center>DATA PEMASUKAN</center> </h1>
			 <hr> 
			<!-- Breadcrumb -->
			<!-- <ol class="breadcrumb breadcrumb-2"> 
				<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
				<li><a href="basic-tables.html">Tables</a></li> 
				<li class="active"><strong>Data Tables</strong></li> 
			</ol> --><center>
			<a href="site/tambah_data_pemasukan" class="btn btn-success">TAMBAH DATA</a>
			<a href="site/p_pemasukan/p" class="btn btn-warning">PRINT PDF</a>
			<a href="site/p_pemasukan/e" class="btn btn-default">PRINT EXCEL</a>
			<br>
			</center>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- <div class="panel-heading clearfix">
							<h4 class="panel-title">Basic Data Tables with responsive Plugin</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div> -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>No</th>
											<th>Karyawan</th>
											<th>klien</th>
											<th>Project</th>
											<th>Harga</th>
											<th>DP</th>
											<th>Pilihan</th>
										</tr>
									</thead>
									<?php $no=1; foreach ($data->result() as $key => $value) {
										?>
									<tbody>
										<tr class="gradeX">
											<td><?php echo $no++ ?></td>
											<td><?php 
													$data_karyawan=$this->db->query("SELECT * FROM tbl_karyawan where id_karyawan='$value->id_karyawan'");
													foreach ($data_karyawan->result() as $key => $v) {
														echo $v->nama;
													}

											?></td>
											<td><?php
											$data_klien=$this->db->query("SELECT * FROM tbl_klien where id_klien='$value->id_klien'");
													foreach ($data_klien->result() as $key => $vs) {
														echo $vs->nama_klien;
													}

											 ?></td>
											<td><?php echo $value->nama_project ?></td>
											<td>Rp. <?php echo number_format($value->harga,2) ?></td>
											<td>Rp. <?php echo number_format($value->dp,2) ?></td>

																						<td>
												<a href="site/detail_pemasukan/<?php echo $value->id_pemasukan ?>" class='btn btn-warning'>DETAIL</a>
												<a href="site/edit_pemasukan/<?php echo $value->id_pemasukan ?>" class='btn btn-success'>EDIT</a>
												<a href="site/hapus_pemasukan/<?php echo $value->id_pemasukan ?>" class='btn btn-danger'>HAPUS</a>
											</td>
										</tr>
										
									</tbody>

									<?php
									} 
									?>

									<tfoot>
										
											<th>No</th>
											<th>Karyawan</th>
											<th>klien</th>
											<th>Project</th>
											<th>
												
												<?php 
	
                                    $sql = "SELECT * FROM tbl_project   ";
                                    $rs = $this->db->query($sql);
                                    $total=0;
                                    foreach ($rs->result() as $key => $value) {
                                    	$donasi = $value->harga;
                                    	$total+=$donasi;
                                    }
                                    echo number_format($total);
                                   
                                 

 ?>
											</th>
											<th>
												<?php 
	
                                    $sql = "SELECT * FROM tbl_project   ";
                                    $rs = $this->db->query($sql);
                                    $total=0;
                                    foreach ($rs->result() as $key => $value) {
                                    	$donasi = $value->dp;
                                    	$total+=$donasi;
                                    }
                                    echo number_format($total);
                                   
                                 

 ?>
											</th>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
<div class="row-fluid">
	<!-- NOTIFICATION -->
	<?php echo $this->session->flashdata('notif'); ?>
	<!-- END NOTIFICATION -->
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			</div>
			<div class="panel-body">

					<div class="boxbody table-responsive"> 

						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Ruangan ID</th>
									<th>Nama Ruangan</th>
									<th class="text-center">Tipe Ruangan</th>
                                    <th class="text-center">Detail Ruangan</th>
									<th class="text-center">Status</th>
                                    <th class="text-center">Option</th>
								</tr>	
							</thead>

							<tbody>
								<?php $no=1;
									foreach ($get_ruangan as $result) : ?>
									<tr>
										<td class="text-center"> <?php echo $no++; ?></td>

										<td> <?php echo $result['id_ruang']; ?></td>
										<td> <?php echo $result['nama_ruang']; ?></td>
										<td class="text-center"> <?php echo $result['type_ruang']; ?></td>
                                        <td> <?php echo $result['detail_ruang']; ?></td>
										<td class="text-center"> <?php echo $result['status_ruang']; ?></td>
										<td align="center">
											<i class="glyphicon glyphicon-edit" title="Edit Matakuliah" rel="tooltip"></i> |
											<a href="#"
											onclick="return confirm('Anda Yakin untuk menghapus data mata kuliah ini?')"><i class="glyphicon glyphicon-trash text-danger" title="Delete Prodi" rel="tooltip"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
								
							</tbody>	

						</table>

					</div>
								 
			</div>
			<!-- <div class="panel-footer">
				<i><strong>Total : <?php if(isset($sks)) echo $sks; ?> SKS</strong></i>
			</div> -->
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function() {
		$("#example1").dataTable();
	});
</script>


<div class="row-fluid">
	<!-- NOTIFICATION -->
	<?php echo $this->session->flashdata('notif'); ?>
	<!-- END NOTIFICATION -->
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a class="btn btn-sm btn-success" href="<?php echo base_url('dosen/penelitian/add_penelitian');?>"><span class="fa fa-plus-circle"></span> Tambahkan Penelitian Dosen</a>
			</div>
			<div class="panel-body">

					<div class="boxbody table-responsive"> 

						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Nama Penelitian</th>
									<th class="text-center">Nama Dosen</th>
                                    <th class="text-center">Tahun</th>
									<th class="text-center">Deskripsi</th>
                                    <th>Action</th>
								</tr>	
							</thead>

							<tbody>
								<?php $no=1;
									foreach ($get_penelitian as $result) : ?>
									<tr>
										<td class="text-center"> <?php echo $no++; ?></td>
										<td> <?php echo $result['nama_penelitian']; ?></td>
										<td class="text-center"> <?php echo $result['nama_lengkap']; ?></td>
										<td class="text-center"> <?php echo $result['tahun']; ?></td>
                                        <td class="text-center"> <?php echo $result['deskripsi']; ?></td>
										<td align="center">
                                            <a href="<?php echo site_url('dosen/penelitian/edit_penelitian/'.$result['id_penelitian']) ?>" class="btn btn-primary">Edit</a>
											<a href="<?php echo site_url('dosen/penelitian/del_penelitian/'.$result['id_penelitian']) ?>"
											onclick="return confirm('Anda Yakin untuk menghapus data mata kuliah ini?')" class="btn btn-danger">Hapus</a>
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


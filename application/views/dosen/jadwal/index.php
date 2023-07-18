<div class="row-fluid">
	<!-- NOTIFICATION -->
	<?php echo $this->session->flashdata('notif'); ?>
	<!-- END NOTIFICATION -->
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a class="btn btn-sm btn-success" href="<?php echo base_url('dosen/jadwalkuliah/add_jadwal');?>"><span class="fa fa-plus-circle"></span> Tambahkan Jadwal Kuliah</a>
			</div>
			<div class="panel-body">

					<div class="boxbody table-responsive"> 

						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>Nama Matkul</th>
									<th class="text-center">Dosen</th>
									<th class="text-center">Ruang</th>
									<th class="text-center">Kelas</th>
									<th class="text-center">Tahun</th>
									<th class="text-center">Prodi</th>
                                    <th class="text-center">Waktu Dimulai</th>
									<th class="text-center">Waktu Berakhir</th>
                                    <th>Option</th>
								</tr>	
							</thead>

							<tbody>
								<?php $no=1;
									foreach ($get_jadwal as $result) : ?>
									<tr>
										<td class="text-center"> <?php echo $no++; ?></td>
										<td> <?php echo $result['title']; ?></td>
										<td class="text-center"> <?php echo $result['dosen']; ?></td>
										<td class="text-center"> <?php echo $result['ruang']; ?></td>
										<td class="text-center"> <?php echo $result['kelas']; ?></td>
										<td class="text-center"> <?php echo $result['tahun']; ?></td>
										<td class="text-center"> <?php echo $result['prodi']; ?></td>
										<td class="text-center"> <?php echo $result['to_events_date']; ?></td>
                                        <td class="text-center"> <?php echo $result['from_events_date']; ?></td>
										<td align="center">
											<a href="<?php echo site_url('dosen/jadwalkuliah/edit_jadwal/'.$result['id']) ?>" class="btn btn-primary">Edit</a>
											<a href="<?php echo site_url('dosen/jadwalkuliah/del_jadwal/'.$result['id']) ?>"
											onclick="return confirm('Anda Yakin untuk menghapus data jadwal matkul ini?')" class="btn btn-danger">Hapus</a>	
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


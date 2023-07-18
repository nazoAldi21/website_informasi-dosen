<div class="row-fluid">
    <div class="alert alert-info"><p><span class="fa fa-info-circle"></span> <i>Pastikan data tahun Ajaran tidak terjadi duplikasi untuk menghindari ketidakvalidan data.</i></p></div>
    <div class="col-md-8">
        <div class="box box-info"> 
        
            <?php echo form_open('dosen/jadwalkuliah/auth_add_jadwal'); ?>
             <div class="box-body">
                  <div class="row">  
                    <div class="col-md-6">
						<input type="hidden" name="id" value="<?php echo $this->uri->segment(4); ?>" >
						<div class="form-group">
							<label>Nama Matakuliah</label>
							<input type="text" name="title" class="form-control" id="title" placeholder="Nama Matakuliah">
						</div>

						<div class="form-group">
                            <label>Nama Dosen</label>
                            <input type="text" name="dosen" class="form-control" id="dosen" placeholder="Nama Dosen"> 
                        </div>
                        <div class="form-group">
                            <label>Ruang</label>
                            <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Ruangan"> 
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="kelas" class="form-control">
                                <option value="Reguler">Reguler</option>
                                <option value="Sore">Sore</option>
                                <option value="Weekend">Weekend</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="ruang" placeholder="Tahun"> 
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select name="prodi" class="form-control">
                                <option value="Bisnis Digital">Bisnis Digital</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Waktu Mulai Matkul</label>
                            <input type="datetime-local" name="to_events_date" class="form-control" id="to_events_date" placeholder="Waktu Mulai Perkuliahan">
                        </div>
                        <div class="form-group">
                            <label>Waktu Berakhir Matkul</label>
                            <input type="datetime-local" name="from_events_date" class="form-control" id="from_events_date" placeholder="Waktu Berakhir Kuliah">
                        </div>
                    </div>
                  </div>          
             </div>
             <div class="box-footer">
                  <div class="row">
                        <div class="col-md-12">
                              <button class="btn btn-sm btn-success" name="submit" type="submit"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      
                  </div>
                 
             </div>
            <?php echo form_close(); ?>           
        </div>
    </div>    
</div>

<script type="text/javascript">
        $(function () {
          //Money Euro
          $("[data-mask]").inputmask();
     
        });
     </script>

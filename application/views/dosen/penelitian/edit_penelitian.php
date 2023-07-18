<div class="row-fluid">
    <div class="alert alert-info"><p><span class="fa fa-info-circle"></span> <i>Pastikan data tahun Ajaran tidak terjadi duplikasi untuk menghindari ketidakvalidan data.</i></p></div>
    <div class="col-md-8">
        <div class="box box-info"> 
        
            <?php echo form_open('dosen/penelitian/auth_edit_penelitian'); ?>
            <?php foreach($penelitian_by_id as $result):?>
             <div class="box-body">
                  <div class="row">  
                    
					<div class="col-md-6">
						<input type="hidden" name="id_penelitian" value="<?php echo $this->uri->segment(4); ?>" >
						<div class="form-group">
							<label>Nama Penelitian</label>
							<input type="text" name="nama_penelitian" class="form-control" id="nama_penelitian" value="<?php echo $result['nama_penelitian']; ?>" placeholder="Nama Matakuliah">
						</div>

						<div class="form-group">
                            <label>Nama Dosen</label>
                                <div class="input-group col-sm-6">
                                    <select name="nama_dosen_id" id="" class="form-control" required>
                                        <option value="">Pilih dosen :</option>
                                        <?php foreach($nama_dosen_id as $rs): ?>
                                        <option value="<?php echo $rs['id']; ?>" <?php if($rs['id']==$result['nama_dosen_id']) echo 'selected'; ?>><?php echo ucwords($rs['nama_lengkap']); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?php echo $result['tahun']; ?>" id="tahun" placeholder="Waktu Mulai Perkuliahan">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea rows="3" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi"><?php echo $result['deskripsi']; ?></textarea>
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
             <?php endforeach; ?>
            <?php echo form_close(); ?>           
        </div>
    </div>  


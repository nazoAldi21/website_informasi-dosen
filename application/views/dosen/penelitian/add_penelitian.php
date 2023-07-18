<div class="row-fluid">
    <div class="alert alert-info">
        <p><span class="fa fa-info-circle"></span> 
            <i>Pastikan data penelitian dosen tidak terjadi duplikasi untuk menghindari ketidakvalidan data.</i>
        </p>
    </div>
    <div class="col-md-8">
        <div class="box box-info"> 
        
            <?php echo form_open('dosen/penelitian/auth_add_penelitian'); ?>
             <div class="box-body">
                  <div class="row">  
                    <div class="col-md-8">
						<div class="form-group">
							<label>Nama Penelitian</label>
							<input type="text" name="nama_penelitian" class="form-control" id="nama_penelitian" placeholder="Nama Penelitian">
						</div>

                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <select name="nama_dosen_id" class="form-control">
                                <option value="1">Sirojul Munir, S.Si, M.Kom.</option>
                                <option value="2">Ahmad Rio Adriansyah, S.Si, M.Si</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea rows="3" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
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

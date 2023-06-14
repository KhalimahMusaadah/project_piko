<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Form Data komik</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

			<!-- START DEFAULT DATATABLE -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Form Data komik</h3>
				</div>
				<form class="form-horizontal" method="POST" id="komik_form" action="<?php if($data!=null) echo base_url('admin_system/komik_update'); else echo base_url('admin_system/komik_add'); ?>">
				<input type="hidden" name="id_komik" value="<?php if($data!=null) echo $data->id_komik; ?>">
				<div class="panel-body">
					<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

<!--				-------------------------------------------------------------------------------------------------------->
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">ID</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" class="form-control" value="<?php if($data!=null) echo $data->id_komik; else echo'AUTO' ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Judul</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="name" class="form-control" value="<?php if($data!=null) echo $data->name; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Pengarang</label>
					<div class="col-md-5 col-xs-12">
						<input type="text" name="desc" class="form-control" value="<?php if($data!=null) echo $data->desc; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">stock</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="stock" class="form-control" value="<?php if($data!=null) echo $data->stock; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label"></label>
					<div class="col-md-6 col-xs-12">
						<div class="radio">
            	<label>
              	
              </label>
              <label>
                
              </label>
            </div>
					</div>
				</div>

				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-default" type="reset">Reset</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
				</form>
			</div>

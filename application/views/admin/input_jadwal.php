<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="di di-calendar"></i> Jadwal</h3>
            </div>
			<div class="panel-body">
				<div class="col-sm-12">
				<h3>Input Jadwal</h3>
					<form method="post" action="<?php echo base_url(); ?>index.php/jadwal/do_input">
					<div class="form-group">
						<label for="exampleInputEmail1">ID Jadwal</label>
						<input type="text" class="form-control" placeholder="Jadwal" name="id_registrasi">
						<a href="<?php echo base_url(); ?>index.php/registrasi/registrasi_list" target="_blank">Show ID Registration</a>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label>With Date Format</label>
							<input type="text" name="date" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

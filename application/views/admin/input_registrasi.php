<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="di di-welcome-write-blog"></i> Registrasi</h3>
            </div>
			<div class="panel-body">
				<div class="col-sm-12">
				<h3>Input Registrasi</h3>
					<form method="post" action="<?php echo base_url(); ?>index.php/registrasi/do_input">
					<div class="form-group">
						<label for="exampleInputEmail1">ID Patient</label>
						<input type="text" class="form-control" placeholder="Patient" name="id_patient">
						<a href="<?php echo base_url(); ?>index.php/patient/patient_list" target="_blank">Show ID Patient</a>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Service</label>
						<select class="form-control" name="service">
						<?php foreach($service as $data){ ?>
						<option value="<?php echo $data['idservice']; ?>"><?php echo $data['servicename']; ?></option>
						<?php } ?>
						</select>
					</div>
					<button class="btn btn-primary" type="submit">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

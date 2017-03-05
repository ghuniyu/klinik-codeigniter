<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="di di-welcome-write-blog"></i> Patient</h3>
            </div>
			<div class="panel-body">
				<div class="col-sm-12">
				<h3>Input Patient</h3>
					<form method="post" action="<?php echo base_url(); ?>index.php/patient/do_input">
					<div class="form-group">
						<label for="exampleInputEmail1">Patient Name</label>
						<input type="text" class="form-control" placeholder="Patient Name" name="name">
					</div>
					
					<div class="form-group">
							<label>Patient Gender</label> <br>
							<div class="radio radio-inline">
								<input type="radio" id="inlineRadio2" value="L" name="gender" checked>
								<label for="inlineRadio2"> Male </label>
							</div>
							<div class="radio radio-inline">
								<input type="radio" id="inlineRadio3" value="P" name="gender">
								<label for="inlineRadio3"> Female </label>
							</div>
					</div>
					
					<div class="form-group">
						<label>Patient Birthday</label>
						<input name="birthday" type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Address</label>
						<textarea class="form-control" name="address" placeholder="Address"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Phone</label>
						<input type="text" class="form-control" placeholder="Patient Phone" name="phone">
					</div>
					
					<button class="btn btn-primary" type="submit">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

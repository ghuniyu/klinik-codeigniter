<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-calendar"></i> Patient - <?php echo $this->session->flashdata('message');?></h3>
                                
                            </div>
                            <div class="panel-body">
                                
								<a href="<?php echo base_url(); ?>index.php/patient/input"><button class="btn btn-primary">Input Patient</button></a>
								<br><br>
                                <div class="col-md-12">
                                    <table class="table table-bordered table-dataTable">
										<thead>
											<tr>
												<th>ID Patient</th>
												<th>Patient Name</th>
												<th>Gender</th>
												<th>Address</th>
												<th>Phone</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($patient as $data){ ?>
											<tr>
												<td><?php echo $data['idpatient'];?></td>
												<td><?php echo $data['patientname'];?></td>
												<td><?php echo $data['gender'];?></td>
												<td><?php echo $data['address'];?></td>
												<td><?php echo $data['phone'];?></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>
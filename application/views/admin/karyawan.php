<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-calendar"></i> Karyawan - <?php echo $this->session->flashdata('message');?></h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-12">
                                    <table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Employee</th>
                                            <th>Employee Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
											<th>Address</th>
											<th>Photo</th>
											<th>NPWP</th>
											<th>PTKP</th>
											<th>Degree</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;foreach($karyawan as $data){ ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['iduser']; ?></td>
											<td><?php echo $data['name']; ?></td>
											<td><?php echo $data['gender']; ?></td>
											<td><?php echo $data['phone']; ?></td>
											<td><?php echo $data['address']; ?></td>
											<td><img src="<?php echo base_url(); ?>assets/images/user_profile/<?php echo $data['photo']; ?>" class="img-responsive" style="width : 80px" /></td>
											<td><?php echo $data['npwp']; ?></td>
											<td><?php echo $data['name_status']; ?></td>
											<td><?php echo $data['salaryname']; ?></td>
										</tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>
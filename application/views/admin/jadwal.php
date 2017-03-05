<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-calendar"></i> Jadwal - <?php echo $this->session->flashdata('message');?></h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-12">
									<?php if($this->session->userdata('status') == 4){?>
									<a href="<?php echo base_url(); ?>index.php/jadwal/input"><button class="btn btn-primary">Tambah Jadwal</button></a>
									<?php } ?>
                                    <table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Patient Name</th>
                                            <th>Employee Name</th>
                                            <th>Service</th>
                                            <th>Date</th>
											<th>Extra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;foreach($jadwal as $data){ ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['patientname']; ?></td>
											<td><?php echo $data['name']; ?></td>
											<td><?php echo $data['servicename']; ?></td>
											<td><?php echo DATE($data['date_time']); ?></td>
											<td><?php echo $data['extra']; ?></td>
										</tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>
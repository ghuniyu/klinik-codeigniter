<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-desktop"></i> Gaji - <?php echo $this->session->flashdata('message');?></h3>
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="col-md-12">
                                    <table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Employee Name</th>
                                            <th>Date</th>
											<th>Salary</th>
											<th>Total</th>
											<!--
                                            <th>Honor/schedule</th>
                                            <th>Total Honor</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <?php $no = 1;foreach($gaji as $data){ ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['name']; ?></td>
											<td><?php echo $data['bulan'].' - '.$data['tahun']; ?></td>
											<td><?php echo "Rp " . number_format($data['nominal'],2,',','.');?></td>
											<td><?php if($data['extra'] == 0){
												$gaji = $data['total_hadir']*$data['nominal'];
											}else{
												echo "(BONUS) : ";
												$gaji = $data['total_hadir']*$data['nominal']/10;
											}
											echo "Rp " . number_format($gaji,2,',','.');?></td>
										</tr>
										<?php } ?>
										
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>
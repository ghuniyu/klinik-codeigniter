<?php var_dump($honor); ?>
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
                                            <th>Date</th>
                                            <th>Honor per Schedule</th>
											<th>Total Honor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;foreach($honor as $data){ ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php $time=strtotime($data['reg_date']);echo date("F Y",$time); ?></td>
											<td><?php echo $data['nominal']; ?></td>
											<td><?php ?></td>
										</tr>
										<?php } ?>
                                    </tbody> 
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="di di-calendar"></i> PTKP - <?php echo $this->session->flashdata('message');?></h3>
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
                                            <th>ID PTKP</th>
                                            <th>PTKP Name</th>
                                            <th>Tarif</th>
                                            <th>Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;foreach($ptkp as $data){ ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['idptkp']; ?></td>
											<td><?php echo $data['name_status']; ?></td>
											<td><?php echo $data['tarif']; ?></td>
											<td><?php echo $data['year']; ?></td>
										</tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
	</div>
</div>
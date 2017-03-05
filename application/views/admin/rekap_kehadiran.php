<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="di di-welcome-write-blog"></i> Absent - <?php echo $this->session->flashdata('status'); ?></h3>
			</div>
			<div class="panel-body">
				
				<div class="col-md-12">
				<h3><?php echo $this->session->flashdata('status_1') ?></h3>
					<?php if($this->session->userdata('status') == 3){ ?>
					<table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Employee</th>
                                            <th>Name</th>
                                            <th>Date</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;foreach($kehadiran as $data){ ?>
										<tr>
											<td><?php echo $no++;?></td>
											<td><?php echo $data['iduser'];?></td>
											<td><?php echo $data['name'];?></td>
											<td><?php echo $data['date'];?></td>
											<td><?php echo $data['approve'];?></td>
										</tr>
										<?php } ?>
                                    </tbody>
                                </table>
					<?php }?>
				</div>
				
			</div>
		</div>
	</div>
</div>
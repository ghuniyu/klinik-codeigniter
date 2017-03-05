<?php echo count($kehadiran)." - ".count($kehadiran_karyawan)." - ". $this->session->userdata('status'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="di di-welcome-write-blog"></i> Absent - <?php echo $this->session->flashdata('status'); ?></h3>
			</div>
			<div class="panel-body">
				
				<div class="col-md-12">
				<h3><?php echo $this->session->flashdata('status_1') ?></h3>
					<?php if(count($kehadiran) == 0 && $this->session->userdata('status') == 3){ ?>
						<a href="<?php echo base_url(); ?>index.php/kehadiran/absen"><button class="btn btn-warning">Absent</button></a>
					<?php }else if(count($kehadiran) == 0 && count($kehadiran_karyawan) == 0 && $this->session->userdata('status') == 4){ ?>
					<a href="<?php echo base_url(); ?>index.php/kehadiran/absen"><button class="btn btn-warning">Absent</button></a>
					<?php }else{echo "<h3>Already Absent This Day.</h3>";} ?>
					<?php if($this->session->userdata('status') == 3){ ?>
					<table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Employee</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;foreach($kehadiran_admin as $data){ ?>
										<tr>
											<td><?php echo $no++;?></td>
											<td><?php echo $data['iduser'];?></td>
											<td><?php echo $data['name'];?></td>
											<td><?php echo $data['date'];?></td>
											<td>
											<a href="<?php echo base_url(); ?>index.php/kehadiran/acc/<?php echo $data['idattendance']; ?>/1"><button class="btn btn-success"><i class="fs-checkmark-2"></i></button></a>
											<a href="<?php echo base_url(); ?>index.php/kehadiran/acc/<?php echo $data['idattendance']; ?>/0"><button class="btn btn-danger"><i class="fs-close-2"></i></button></a>
											</td>
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
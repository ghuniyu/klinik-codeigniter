<aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
					
                    <li class="has-submenu">
                        <a href="#submenuMaster" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-docs"></i> 
                            <span class="nav-text">Master Data</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuMaster">
                            <ul>
                                <li><a href="page-blank.html">Chart of Account</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/karyawan">Data Karyawan</a></li>
                                <li><a href="page-404.html">Data Psikolog</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/patient/">Data Pasien</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/ptkp/">Data PTKP</a></li>
                            </ul>
                        </div>
                    </li>
					<!--
					<li>
                        <a href="<?php echo base_url(); ?>index.php/kehadiran/">
							<i class="di di-desktop"></i> <span class="nav-text">Kehadiran</span>
						</a>
                    </li>
                    -->
					
					<li class="has-submenu">
                        <a href="#submenuAbsen" data-toggle="collapse" aria-expanded="false">
                            <i class="di di-desktop"></i> 
                            <span class="nav-text">Absen</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuAbsen">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>index.php/kehadiran/">Konfirmasi Absen</a></li>
                                
                            </ul>
                        </div>
                    </li>
					
					<li>
                        <a href="<?php echo base_url(); ?>index.php/jadwal/">
							<i class="di di-calendar"></i> <span class="nav-text">Jadwal</span>
						</a>
                    </li>
					
					<li>
                        <a href="<?php echo base_url(); ?>index.php/registrasi/">
							<i class="di di-welcome-write-blog"></i> <span class="nav-text">Registrasi</span>
						</a>
                    </li>
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->
<div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        
                        <li class="nav-label">Hello admin <?php echo $username; ?></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">User </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url()."index.php/Dashboard/admin" ?>">Chart</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">User</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User Management</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url()."index.php/Dashboard/user" ?>">Super Admin & Admin</a></li>
                            </ul>
                        </li>
                      
                        <li class="nav-label">Features</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive"></i><span class="hide-menu">Data Surat Masuk</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url()."index.php/Dashboard/surat_masuk" ?>">Surat Masuk</a></li>
                                
                                
                            </ul>
                        </li>
					
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Data Surat Keluar</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Surat Keluar</a></li>
                             
                            </ul>
                        </li>
                       
                   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
<!-- page sidebar -->
        <div class="dev-page-sidebar">
            
            <ul class="dev-page-navigation">
                <li class="title">Navigation</li>

                <li>
                    <a href="<?php echo SERVER_ADMIN."dashboard"; ?>"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
                </li>   
                <?php if (is_admin() OR is_user($data['user'],'editor') ) : ?>                     
                <li>
                    <a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a>
                    <ul>                               
                        <li><a href="<?php echo SERVER_ADMIN."pages"; ?>">All Pages</a></li>                                
                        <li><a href="<?php echo SERVER_ADMIN."pages"; ?>?add">Add New</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-file-text-o"></i> <span>Posts</span></a>
                    <ul>                               
                        <li><a href="<?php echo SERVER_ADMIN."posts"; ?>">All Posts</a></li>                                
                        <li><a href="<?php echo SERVER_ADMIN."posts"; ?>?add">Add New</a></li>
                        <!-- <li><a href="<?php echo SERVER_ADMIN."category"; ?>">Category</a></li> -->
                    </ul>
                </li>
                

                 <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span>Media</span></a>
                    <ul>                               
                        <li><a href="<?php echo SERVER_ADMIN."media"; ?>">All Medias</a></li>                                
                        <li><a href="<?php echo SERVER_ADMIN."media"; ?>?add">Add New</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (is_admin() OR is_user($data['user'],'hrm') ) : ?>
                 <li>
                    <a href="#"><i class="fa fa-group"></i> <span>Career</span></a>
                    <ul>                               
                        <li><a href="<?php echo SERVER_ADMIN."career"; ?>">All Career</a></li>                                
                        <li><a href="<?php echo SERVER_ADMIN."career"; ?>?add">Add New</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (is_admin()) : ?>
                 <li>
                    <a href="#"><i class="fa  fa-cogs"></i> <span>Settings</span></a>
                    <ul>                               
                        <li><a href="<?php echo SERVER_ADMIN."setting"; ?>">Generals</a></li>
                        <li>
                            <a href="#">Users</a>
                            <ul>
                                <li>
                                <li><a href="<?php echo SERVER_ADMIN."user"; ?>">All Users</a></li>
                                <li><a href="<?php echo SERVER_ADMIN."user"; ?>?add">Add New</a></li>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
            
        </div>
        <!-- ./page sidebar
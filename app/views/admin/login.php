<?php require_once 'header.php';?>
<!-- page wrapper -->
        <div class="dev-page dev-page-login">
                      
            <div class="dev-page-login-block">
                <a class="dev-page-login-block__logo">Intuitive</a>
                <div class="dev-page-login-block__form">
                    <div class="title"><strong>Welcome</strong>, please login</div>
                    <form id="form-login" method="post">                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Login">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group no-border margin-top-20">
                            <button id="btn-login" class="btn btn-success btn-block">Login</button>
                        </div>
                        <!-- <div class="form-group no-border margin-top-20">
                            <a id="btn-login" href="javascript:void(0)" class="btn btn-success btn-block">Login</a>
                        </div> -->
                        <p><a href="#">Forgot Password?</a></p>                        
                    </form>
                </div>
                <div class="dev-page-login-block__footer">                    
                    © 2015 <strong>IT PBT</strong>. All rights reserved.
                </div>
            </div>
            
        </div>
        <!-- ./page wrapper -->  	

<?php require_once 'footer.php' ?>
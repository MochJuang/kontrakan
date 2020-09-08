
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Login Pemilik </h3>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="<?php echo base_url() ?>panel">
                <?php if($message): ?>
                    <div class="alert alert-danger alert-dismissible">
                        <?php echo $message ?> <span class="close" data-dismiss="alert">x</span>
                    </div>
                <?php endif; ?>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" value="<?php echo (isset($user)) ? $user : set_value('email') ?>" required="" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" value="<?php echo (isset($pass)) ? $pass : set_value('password') ?>" required="" placeholder="Password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" name="remember" value="true" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form> 
            
            </div>   
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url() ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.scrollTo.min.js"></script>


        <script src="<?php echo base_url() ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.app.js"></script>
	
	</body>
</html>
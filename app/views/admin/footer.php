
<?php if (logged_in()) : ?>
		    <!-- page footer -->    
		    <div class="dev-page-footer">
		        <ul class="dev-page-footer-controls dev-page-footer-controls-auto pull-right">
		            <li><a class="dev-page-footer-fix tip" title="Fixed footer"><i class="fa fa-thumb-tack"></i></a></li>
		            <li><a class="dev-page-footer-collapse dev-page-footer-control-stuck"><i class="fa fa-dot-circle-o"></i></a></li>
		        </ul>
		    </div>
		    <!-- ./page footer -->  
<?php endif; ?>        
		</div>
		<!-- ./page wrapper -->

        <!-- javascript -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>       
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/moment/moment.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="js/plugins/summernote/summernote.min.js"></script>
		
		<script src="js/plugins/blueimp-jquery-file-upload/vendor/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/plugins/blueimp-jquery-file-upload/jquery.fileupload.js"></script>

        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
		
		<script type="text/javascript" src="js/plugins/isotope/isotope.pkgd.min.js"></script>        
        <script type="text/javascript" src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>      
        <script type="text/javascript" src="js/plugins/unveil/jquery.unveil.js"></script>      

        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
        <script type="text/javascript" src="js/dev-app.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
		
        <?php if (isset($closed)) : ?>
           <script>
            $(document).ready(function () {
                if ( $('#career-closed').length > 0) {
                    $('#career-closed').val('<?php echo $closed; ?>');
                };
            });         
            </script>
        <?php endif; ?>
        
        <!-- ./javascript -->
         <script>
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            
            if ($("#gallery") > 0) {
                		 $(function(){                
			                setTimeout(function(){
			                    
			                    /*$("img").unveil(200);
			                
			                    $('.gallery.isotope').isotope({
			                        itemSelector: '.gallery-item',
			                        percentPosition: true,
			                        masonry: {                 
			                          columnWidth: '.gallery-sizer',
			                          gutter: '.gallery-gutter'
			                        }                
			                    });                

			                    $(".dev-page-sidebar-collapse, .dev-page-sidebar-minimize").on("click",function(){
			                        setTimeout(function(){
			                            $('.gallery.isotope').isotope('layout');
			                            dev_layout_alpha_content.init(dev_layout_alpha_settings);
			                        },300);                    
			                    });*/
			                    document.getElementById('gallery').onclick = function (event) {
			                        event = event || window.event;
			                        var target = event.target || event.srcElement,
			                            link = target.src ? target.parentNode : target,
			                            options = {index: link, event: event},
			                            links = this.getElementsByTagName('a');
			                        blueimp.Gallery(links, options);
			                    };
			                    
			                },200);
			                
			            });
                	};
        </script>

    </body>
</html>
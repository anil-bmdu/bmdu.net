<script src="<?php echo base_url('assets/js/vendors/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/additional-methods.min.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/js/vendors/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/swiper-bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/parallax.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendors/aos.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
<script>
    $(function(){
           $('#ad_form').validate({
               rules:{
                   user:{
                       required:true,
                       minlength:6
                   },
                   pass:{
                       required:true,
                       minlength:6
                   }
               },
               highlight:function(element){
                    $(element).addClass("c1");
                    $(element).removeClass("c2");
                },
                unhighlight:function(element){
                    $(element).addClass("c2");
                }
           });
       });
       
       $( function () {
    $('.table').DataTable();
} );
</script>
</body>
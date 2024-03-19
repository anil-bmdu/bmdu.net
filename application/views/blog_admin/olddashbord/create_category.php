<!-- <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script> -->
<section class="contact-us-form pt-60 pb-120" style="background: url(<?php //echo base_url('assets/img/shape/contact-us-bg.svg'); ?>)no-repeat center bottom">
   <div class="container">
      <div class="row justify-content-lg-between align-items-center">
          
          <div class="col-md-8 mx-auto text-center">
              <div class="section-heading">
               <h2>Create Category Blog Page</h2>
               <!-- <p>Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via
                  standardized infrastructures.
               </p> -->
            </div>
            </div>
<center>  
 <div class="col-lg-12 col-md-12">
              <div class="contact-form">
                <div class="form-php">
           
<form  id="blogForm"  action="<?php echo base_url('blog-category-code'); ?>" method="POST" enctype="multipart/form-data" >
    <div class="row">
        <div class="col-sm-6">
            <label for="category_name" class="mb-1 text-bol">Blog Category <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="category_name" name="blog_category" placeholder="Category Name" aria-label="category_name" >
                <p id="category_nameError" class="text-danger"></p>
            </div>
        </div>
               <button type="submit"  name="submit" class="btn btn-primary mt-4">Get in Create Blog</button>
            </form>
         </div>
              </div>
          </div>
      </div>
   </div>
      </div>
   </div>
</section>
</center>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    $('#blogForm').submit(function(e) {
        // Reset any previous error messages
        $('.text-danger').text('');

        // Validate meta title
        var category_name = $('#category_name').val();
        if (category_name.trim() === '') {
            $('#category_nameError').text('Category Name is required');
            e.preventDefault();
        }
    });
});
</script> 

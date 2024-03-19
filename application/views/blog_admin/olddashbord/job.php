<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<section class="contact-us-form pt-60 pb-120" style="background: url(<?php //echo base_url('assets/img/shape/contact-us-bg.svg'); ?>)no-repeat center bottom">
   <div class="container">
      <div class="row justify-content-lg-between align-items-center">
          
          <div class="col-md-8 mx-auto text-center">
              <div class="section-opening">
               <h2>Create Job Page</h2>
               <p>Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via
                  standardized infrastructures.
               </p>
            </div>
            </div>
<center>  
 <div class="col-lg-12 col-md-12">
              <div class="contact-form">
                <div class="form-php">
           
<form  id="jobForm"  action="<?php echo base_url('job_apply'); ?>" method="POST" enctype="multipart/form-data" >
    <div class="row">
        <div class="col-sm-6">
            <label for="requirement" class="mb-1 text-bol">Job Title <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="requirement" name="requirement" placeholder=" job Title" aria-label="requirement" >
                <p id="requirementError" class="text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <label for="positions" class="mb-1 text-bol"> Job Positions <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="positions" name="positions" placeholder="Job Positions" aria-label="positions" >
                <p id="positionsError" class="text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <label for="job_type" class="mb-1 text-bol">Job Type<span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="job_type" name="job_type" placeholder="Full-Time/Part-Time/Remote" aria-label="job_type" >
                <p id="job_typeError" class="text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <label for="experience" class="mb-1 text-bol">Experience <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="experience" name="experience" placeholder="Fresher/Experience" aria-label="experience" >
                <p id="experienceError" class="text-danger"></p>
            </div>
        </div>
                  <div class="col-sm-6">
                     <label for="opening" class="mb-1"> number of opening <span class="text-danger">*</span> </label>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control"   id="opening" name="opening" placeholder="Number of Opening" aria-label="opening" autocomplete="off"  />
                        <p id="openingError" class="text-danger"></p>
                     </div>
                     </div>
                  <div class="col-sm-6">
                     <label for="salary" class="mb-1">Salary<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="salary" class="form-control"   name="salary" id="salary"  placeholder="Salary" aria-label="salary" autocomplete="off" >
                        <p id="salaryError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <label for="editor" class="mb-1">Job  Descriptions <span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <textarea name="job_desc" id="job_desc" cols="100" rows="200"></textarea>
                        <p id="job_descError" class="text-danger"></p>
                     </div>
                  </div>
               <button type="submit"  name="submit" class="btn btn-primary mt-4">Get in Create Job</button>
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
    $('#jobForm').submit(function(e) {
        // Reset any previous error messages
        $('.text-danger').text('');

        // Validate meta title
        var metaTitle = $('#requirement').val();
        if (metaTitle.trim() === '') {
            $('#requirementError').text('Job title is required');
            e.preventDefault();
        }

        //Validate blog title
        var blogTitle = $('#positions').val();
        if (blogTitle.trim() === '') {
            $('#positionsError').text('Positions is required');
            e.preventDefault();
        }

        var metaKeywords = $('#job_type').val();
        if (metaKeywords.trim() === '') {
            $('#job_typeError').text('job Type is required');
            e.preventDefault();
        }

        var blogTitle = $('#experience').val();
        if (blogTitle.trim() === '') {
            $('#experienceError').text('Experience is required');
            e.preventDefault();
        }
        // Validate blog opening
        var opening = $('#opening').val();
        if (opening.trim() === '') {
            $('#openingError').text('Numbre is Opening is required');
            e.preventDefault();
        }

        // Validate salary
        var salary = $('#salary').val();
        if (salary.trim() === '') {
            $('#salaryError').text('Salary details are required');
            e.preventDefault();
        }
        
        var blogEditor = $('#job_desc').val();
        if (blogEditor.trim() === '') {
            $('#job_descError').text('Job Descriptions is required');
            e.preventDefault();
        }
    });
});
</script> 
        
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#job_desc' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

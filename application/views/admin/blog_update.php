<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<section class="contact-us-form pt-60 pb-120" style="background: url(<?php //echo base_url('assets/img/shape/contact-us-bg.svg'); ?>)no-repeat center bottom">
   <div class="container">
      <div class="row justify-content-lg-between align-items-center">
          
          <div class="col-md-8 mx-auto text-center">
              <div class="section-heading">
               <h2>Update Blog Page</h2>
               <p>Collaboratively promote client-focused convergence vis-a-vis customer directed alignments via
                  standardized infrastructures.
               </p>
            </div>
            </div>
<center>  
    
 <div class="col-lg-12 col-md-12">
              <div class="contact-form">
                <div class="form-php">

<form  id="blogForm"  action="<?php echo base_url('blog-update-code'); ?>" method="POST" enctype="multipart/form-data" >
    <div class="row">
        <div class="col-sm-6">
            <label for="meta_title" class="mb-1 text-bol">Meta Title <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="meta_title" aria-label="meta_title" value="<?php echo $post->meta_title; ?>" >
                <p id="meta_titleError" class="text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <label for="meta_desc" class="mb-1 text-bol">Meta Description <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="meta_desc" name="meta_desc" placeholder="Meta Descriptions" aria-label="meta_desc" value="<?php echo $post->meta_desc; ?>" >
                <p id="meta_descError" class="text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <label for="meta_keywords" class="mb-1 text-bol">Meta Keywords <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords" aria-label="meta_keywords" value="<?php echo $post->meta_keywords; ?>">
                <p id="meta_keywordsError" class="text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <label for="blog_titile" class="mb-1 text-bol">Blog Tags <span class="text-danger">*</span></label>
            <div class="form-group mb-3">
                <input type="text" class="form-control" id="blog_titile" name="blog_title" placeholder="blog Tags" aria-label="blog_titile"value="<?php echo $post->blog_title; ?>" >
                <p id="blog_titileError" class="text-danger"></p>
            </div>
        </div>
                  <div class="col-sm-6">
                     <label for="heading" class="mb-1">Blog Heading <span class="text-danger">*</span> </label>
                     <div class="form-group mb-3">
                        <input type="text" class="form-control"   id="heading" name="heading" placeholder="heading" aria-label="heading" autocomplete="off" value="<?php echo $post->heading; ?>" />
                        <p id="headingError" class="text-danger"></p>
                     </div>
                     </div>
                  <div class="col-sm-6">
                     <label for="paragraph" class="mb-1">Blog Short Descriptions<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="paragraph" class="form-control"   name="paragraph" id="paragraph"  placeholder="Short Descriptions" aria-label="paragraph" autocomplete="off"value="<?php echo $post->paragraph; ?>" >
                        <p id="paragraphError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <label for="file" class="mb-1">Upload Image<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <input type="file" class="form-control"   name="image" id="image_id" accept="jpg|png|jpeg|gif"   value="<?= $post->image ?>" aria-label="image" autocomplete="OFF" />
                        <p id="imageError" class="text-danger"></p>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <label for="file" class="mb-1">Upload Image<span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <?php if(!empty($post->id)){ ?>
                        <td> <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="" width="300" height="200"></td>
                        <?php } ?>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <label for="editor" class="mb-1">Blog Details <span class="text-danger">*</span></label>
                     <div class="form-group mb-3">
                        <textarea name="blog_editor" id="editor" cols="100" rows="200"><?php echo $post->blog_editor;?></textarea>
                        <p id="editorError" class="text-danger"></p>
                     </div>
                  </div>
                  <input type="hidden" value="<?= $post->id ?>"  name="id" >
               <button type="submit"  name="submit" class="btn btn-primary mt-4">Get in Update Blog</button>
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
        var metaTitle = $('#meta_title').val();
        if (metaTitle.trim() === '') {
            $('#meta_titleError').text('Meta title is required');
            e.preventDefault();
        }

        //Validate blog title
        var blogTitle = $('#meta_desc').val();
        if (blogTitle.trim() === '') {
            $('#meta_descError').text('Meta Description is required');
            e.preventDefault();
        }

        var metaKeywords = $('#meta_keywords').val();
        if (metaKeywords.trim() === '') {
            $('#meta_keywordsError').text('Meta Keywords is required');
            e.preventDefault();
        }

        var blogTitle = $('#blog_titile').val();
        if (blogTitle.trim() === '') {
            $('#blog_titileError').text('Blog title is required');
            e.preventDefault();
        }
        // Validate blog heading
        var heading = $('#heading').val();
        if (heading.trim() === '') {
            $('#headingError').text('Blog heading is required');
            e.preventDefault();
        }

        // Validate paragraph
        var paragraph = $('#paragraph').val();
        if (paragraph.trim() === '') {
            $('#paragraphError').text('Blog details are required');
            e.preventDefault();
        }

        // Validate image
        // var image = $('#image').val();
        // if (image.trim() === '') {
        //     $('#imageError').text('Image is required');
        //     e.preventDefault();
        // } else {
        //     // You can add additional image type validation if needed
        //     var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.svg|\.webp)$/i;
        //     if (!allowedExtensions.exec(image)) {
        //         $('#imageError').text('Invalid file type. Allowed types: jpg, jpeg, png, gif, svg, webp');
        //         e.preventDefault();
        //     }
        // }
        var blogEditor = $('#editor').val();
        if (blogEditor.trim() === '') {
            $('#editorError').text('Blog Details Editor is required');
            e.preventDefault();
        }
    });
});
</script> 
        
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-12">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Table</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<div class="add_button ms-2">
<a href="<?php echo base_url('create_blog') ?>" class="btn_1">Add New</a>
</div>
</div>
</div>
<div class="QA_table ">

<table class="table lms_table_active">
<thead>
<tr>
<th scope="col">Sn.</th>
<th scope="col">Image</th>
<th scope="col">Category</th>
<!-- <th scope="col">Meta Title</th>
<th scope="col">Meta Keyword</th>
<th scope="col">Meta Description</th> -->
<th scope="col">Blog Heading</th>
<!-- <th scope="col">Blog Of Paragrph</th> -->
<th scope="col">Time</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
<!-- <th scope="col">Status</th> -->
</tr>
</thead>
<tbody>
   <?php $sr=1;
        if(count($show) > 0){
          foreach($show as $post){ ?>
<tr>
<th scope="row"> <a href="#" class="question_content"> <?= $sr++; ?></a></th>
<th scope="row"> <a href="#" class="question_content"> <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="image insert" width="50" height="50"></a></th>
<td><?= $post->blog_category;?></td>
<!-- <td><?= $post->meta_title;?></td>
<td><?= $post->meta_keywords;?></td>
<td><?= $post->meta_desc;?></td> -->
<td><?= $post->heading; ?></td>
<!-- <td><?= $post->paragraph; ?></td> -->
<td><?= date('d-m-Y ', strtotime($post->create_at)); ?></td>

<td><a href="<?php echo base_url('blog_update/'.$post->id) ?>" class="status_btn">Upadte</a></td>
<td><a href="#" class="status_btn" onclick="confirmDelete('<?php echo base_url('blog_de/'.$post->id); ?>');">Delete</a></td>
<!-- <td><a href="#" class="status_btn">Active</a></td> -->
</tr>

<?php } ?>
    <?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
  <script>
    function confirmDelete(deleteUrl) {
        var isConfirmed = confirm('Are you sure you want to delete?');

        if (isConfirmed) {
            window.location.href = deleteUrl;
        }else{
            window.location.href ='<?= base_url('blog-details'); ?>';
        }
        
    }
</script>

<body>
<!-- <a href="<?php //echo base_url('create-blog-category') ?>" class="nav-link mx-3 text-light fs-4">Create Blog Category</a> -->

    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
                <thead class="bg-info text-light">
                    <tr>
                        <th>Sn.</th>
                        <th>Blog Category</th>
                        <!-- <th>Edit</th>
                        <th>Delete</th> -->
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($blog_category) > 0){
                        foreach($blog_category as $category){ ?>
                            <tr>
                                <td><?= $sr++;?></td>
                                
                                <td><?= $category->blog_category; ?></td>
                                <!-- <td>
                                    <a href="<?php echo base_url('blog_update/'.$category->id) ?>" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-solid fa-user-pen fs-4 text-success"></i></a>
                                </td>
                                <td>
                                    <a href="#" onclick="confirmDelete('<?php echo base_url('blog_de/'.$category->id); ?>');">
                                   <i class="fa-solid fa-trash-can fs-4 text-danger"></i>
                                      </a>
                                </td> -->
                            </tr>
                        <?php } ?>
                    <?php }
                    ?>
                </tbody>
            </table>
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
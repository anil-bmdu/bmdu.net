<body>
    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
                <thead class="bg-info text-light">
                    <tr>
                        <th>Sn.</th>
                        <th>Image</th>
                        <th>Blog Title</th>
                        <th>Blog Heading</th>
                        <th>Blog Of Paragrph</th>
                        <th>Time</th>
                        <th>Staus</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($show) > 0){
                        foreach($show as $post){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td> <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="Paris" width="50" height="50"></td>
                                <td><?= $post->blog_title;?></td>
                                <td><?= $post->heading; ?></td>
                                <td><?= $post->paragraph; ?></td>
                                <td><?= date('d-m-Y h:i:s a', strtotime($post->create_at)); ?></td>
                                <td>Pending</td>
                                <td>
                                    <a href="<?php echo base_url('blog_update/'.$post->id) ?>" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-solid fa-user-pen fs-4 text-success"></i></a>
                                </td>
                                <td>
                                    <a href="#" onclick="confirmDelete('<?php echo base_url('blog_de/'.$post->id); ?>');">
                                   <i class="fa-solid fa-trash-can fs-4 text-danger"></i>
                                      </a>
                                </td>
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
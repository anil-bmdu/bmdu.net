<body>
    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
                <thead class="bg-info text-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">URL</th>
                        <th scope="col">Industry Name</th>
                        <th scope="col">Keywords</th>
                        <th scope="col">Backlinks</th>
                        <th scope="col">On Page</th>
                        <th scope="col">Total Price</th>
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
                                <!-- <td> <img src="<?= base_url('uploads/blog/'.$post->image); ?>" alt="Paris" width="50" height="50"></td> -->
                                <td><?= $post->name;?></td>
                                <td><?= $post->email; ?></td>
                                <td><?= $post->number; ?></td>
                                <td><?= $post->url; ?></td>
                                <td><?= $post->industryName; ?></td>
                                <td><?= $post->numberOfKeywords; ?></td>
                                <td><?= $post->numberOfBacklinks; ?></td>
                                <td><?= $post->levelOfOnPage; ?></td>
                                <td><?= $post->total; ?></td>
                                <td>
                                    <a href="<?php echo base_url('seo_de/'.$post->id); ?>" >
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
//     function confirmDelete(deleteUrl) {
//         var isConfirmed = confirm('Are you sure you want to delete?');

//         if (isConfirmed) {
//             window.location.href = deleteUrl;
//         }else{
//             window.location.href ='<?= base_url('blog-details'); ?>';
//         }
        
//     }
// </script>
<body>
    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
                <thead class="bg-info text-light">
                    <tr>
                        <th>Sn.</th>
                        <th>job Title</th>
                        <th>Positions</th>
                        <th>Job Type</th>
                        <th>Salary</th>
                        <th>Experience</th>
                        <th>Opening</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($job_post) > 0){
                        foreach($job_post as $cc){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td><?= $cc->requirement?></td>
                                <td><?= $cc->positions; ?></td>
                                <td><?= $cc->job_type; ?></td>
                                <td><?= $cc->salary; ?></td>
                                <td><?= $cc->experience;?></td>
                                <td><?= $cc->opening;?></td>
                                <td>`
                                    <a href="<?php echo base_url('post-edit/'.$cc->job_id); ?>" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-solid fa-user-pen fs-4 text-success"></i></a>
                                </td>
                                <td>
                                    <a href="#" onclick="confirmDelete('<?php echo base_url('job_post_delete/'.$cc->job_id); ?>');">
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
    
    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
                <h4 class="text-center">Edit Form</h4>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="status" id="status" class="form-control" placeholder="Update status message">
                    </div>
                    
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info">Save changes</button>
                    </div>
                </form>
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
            window.location.href ='<?= base_url('post-details'); ?>';
        }
        
    }
</script>
<body>
    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
            <!--<h2 class="text-center bg-info text-light">Request data</h2>-->
                <thead class="bg-info text-light">
                    <tr>
                        <th>Sn.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Website Name</th>
                        <th>Budget</th>
                        <th>Countary</th>
                        <th>About Project</th>
                        <th>Time</th>
                        <th>Status</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($req_d) > 0){
                        foreach($req_d as $rr){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td><?= $rr->name; ?></td>
                                <td><?= $rr->email; ?></td>
                                <td><?= $rr->mobile; ?></td>
                                <td><?= $rr->website_name; ?></td>
                                <td><?= $rr->budget; ?></td>
                                <td><?= $rr->country; ?></td>
                                <td><?= $rr->about_project; ?></td>
                                <td><?= date('d-m-Y h:i:s a', strtotime($rr->create_at)); ?></td>
                                <td>Pending</td>
                                
                                <td>
                                    <a href="#" onclick="confirmDelete('<?php echo base_url('request_de/'.$rr->id); ?>');">
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
            window.location.href ='<?= base_url('Request-details'); ?>';
        }
        
    }
</script>
<body>
    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
                <thead class="bg-info text-light">
                    <tr>
                        <th>Sn.</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Project Details</th>
                        <th>Time</th>
                        <th>Status</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($hi_d) > 0){
                        foreach($hi_d as $hh){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td><?= $hh->name; ?></td>
                                <td><?= $hh->mobile; ?></td>
                                <td><?= $hh->email; ?></td>
                                <td><?= $hh->project_details; ?></td>
                                <td><?= date('d-m-Y h:i:s a', strtotime($hh->create_at)); ?></td>
                                <td>Pending</td>
                                <td>
                                <a href="#" onclick="confirmDelete('<?php echo base_url('hire_de/'.$hh->id); ?>');">
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
            window.location.href ='<?= base_url('Hire-details'); ?>';
        }
        
    }
</script>
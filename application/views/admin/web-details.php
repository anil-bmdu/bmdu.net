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
                        <th>Adddress</th>
                        <th>View PDF</th>
                        <!--<th>Time</th>-->
                        <!--<th>Status</th>-->
                        <!-- <th>Edit</th> -->
                        <!--<th>Delete</th>-->
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($web) > 0){
                        foreach($web as $hh){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td><?= $hh->name; ?></td>
                                <td><?= $hh->phone; ?></td>
                                <td><?= $hh->email; ?></td>
                                <td><?= $hh->city; ?></td>
                                <td><a href="<?php echo base_url("/uploads/{$hh->pdf}") ?>" class="form-control btn btn-info">PDF</a></td>
                                <!--<td><?= date('d-m-Y h:i:s a', strtotime($hh->create_at)); ?></td>-->
                                <!--<td>Pending</td>-->
                                <!--<td>-->
                                <!--<a href="#" onclick="confirmDelete('<?php echo base_url('hire_de/'.$hh->id); ?>');">-->
                                <!--   <i class="fa-solid fa-trash-can fs-4 text-danger"></i>-->
                                <!--      </a>-->
                                <!--</td>-->
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
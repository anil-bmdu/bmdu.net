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
                        <th>Message</th>
                        <th>Time</th>
                        <th>Staus</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($ct_d) > 0){
                        foreach($ct_d as $cc){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td><?= $cc->first_name." ".$cc->last_name; ?></td>
                                <td><?= $cc->phone; ?></td>
                                <td><?= $cc->email; ?></td>
                                <td><?= $cc->message; ?></td>
                                <td><?= date('d-m-Y h:i:s a', strtotime($cc->create_at)); ?></td>
                                <td>Pending</td>
                                <!-- <td>
                                    <a href="<?php //echo base_url('contact-edit/'.$cc->id); ?>" data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-solid fa-user-pen fs-4 text-success"></i></a>
                                </td> -->
                                <td>
                                    <a href="#" onclick="confirmDelete('<?php echo base_url('contact_de/'.$cc->id); ?>');">
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
            window.location.href ='<?= base_url('contacts-details'); ?>';
        }
        
    }
</script>
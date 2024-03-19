<body>
    <div class="container-fluid mt-5">
        <div class="tbl">
            <table class="table table-reponsive compact display table-bordered">
                <thead class="bg-info text-light">
                    <tr>
                        <th>Sn.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Skills</th>
                        <th>Experience</th>
                        <th>Message</th>
                        <th>Resume</th>
                        <th>View Resume</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $sr=1;
                    if(count($career_d) > 0){
                        foreach($career_d as $cc){ ?>
                            <tr>
                                <td><?= $sr++; ?></td>
                                <td><?= $cc->name ?></td>
                                <td><?= $cc->phone; ?></td>
                                <td><?= $cc->email; ?></td>
                                <td><?= $cc->position; ?></td>
                                <td><?= $cc->skills; ?></td>
                                <td><?= $cc->experience;?></td>
                                <td><?= $cc->message; ?></td>
                                <td>
                                <iframe id="pdfFrame" src="<?= $cc->resume ?>"></iframe>
                                </td>
                                <td>
                                <a id="pdfLink" href="<?= $cc->resume ?>" target="_blank" rel="noopener noreferrer">View/Download Resume</a>
                                </td>
                                <td>
                                <a href="#" onclick="confirmDelete('<?php echo base_url('career_delete/'.$cc->id); ?>');">
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
            window.location.href ='<?= base_url('career-details'); ?>';
        }
        
    }
    </script>
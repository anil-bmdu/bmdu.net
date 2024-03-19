<body style="background-color:#808080;">
<div class="container" style="margin-top: 13rem;">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Admin Login</h3>
                </div>
                <!-- login message start-->
                    <?php
                    if ($this->session->flashdata('login_failed')) { ?>
                        <div class="text-center alert alert-danger">
                            <h6 class="text-danger"><?php echo $this->session->flashdata('login_failed'); ?></h6>
                        </div>
                    <?php } ?>
                    <!-- login message end -->
                <div class="card-body">
                    <form action="<?php echo base_url('adminLogin'); ?>" method="post" id="ad_form">
                        <div class="form-group">
                            <input type="text" name="user" id="user" placeholder="Username" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        
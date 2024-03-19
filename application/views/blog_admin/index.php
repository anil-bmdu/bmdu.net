<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="modal-content cs_modal">
<div class="modal-header">
<!-- <h5 class="modal-title">Log in</h5> -->
</div>
<div class="modal-body">
<div class="row social_login_btn">
<div class="form-group col-md-12 text-center">
<h4>Welcome to Blog Admin Log in</h4>
</div>
                    <?php
                    if ($this->session->flashdata('login_failed')) { ?>
                        <div class="text-center alert alert-danger">
                            <h6 class="text-danger"><?php echo $this->session->flashdata('login_failed'); ?></h6>
                        </div>
                    <?php } ?>
                    <!-- login message end -->
                <div class="card-body">
                    <form action="<?php echo base_url('blogLogin'); ?>" method="post" id="ad_form">
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
</div>
</div>
</div>

        
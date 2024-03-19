    <body>
    <div class="container mt-5">
        <div class="row">
                    <div class="four col-5 bg-info p-5 m-3">
                        <a href="<?php echo base_url('career-details') ?>" class="text-decoration-none">
                            <h3 class="text-center text-light">Career</h3>
                            <h4 class="text-center text-light">
                                <?php
                                    $career_show=$this->BMDU_modal->career_ad1();
                                    echo $career_show;
                                ?>
                            </h4>
                        </a>
                    </div>
                    <div class="four col-5 bg-info p-5 m-3">
                        <a href="<?php echo base_url('post-details') ?>" class="text-decoration-none">
                            <h3 class="text-center text-light">Job Post Details</h3>
                            <h4 class="text-center text-light">
                                <?php
                                    $career_show=$this->BMDU_modal->career_post();
                                    echo $career_show;
                                ?>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
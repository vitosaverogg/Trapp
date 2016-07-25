<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row" >
                <div class="col-sm-3">
                    <div id="logo">
                        <!-- <h1><a href=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Everest"/></a></h1> -->
                    </div>
                </div>
                <?php 
                    $this->load->view($this->session->navbar);
                ?>
            </div>
        </div>
    </div>
    <div class="pixel-header">
    </div>
</header>

<!-- col -->
<div class="col-md-12 col-sm-12 col-xs-12">
    <!-- x_panel -->
    <div class="x_panel">
        <!-- x_content -->
        <div class="x_content">
            <!-- tab panel -->
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#pesawat" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><span class="fa fa-plane fa-rotate-45 col-md-2 col-sm-2 col-xs-12 "></span>Pesawat</a>
                    </li>
                    <li role="presentation" class=""><a href="#kereta" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><span class="fa fa-train col-md-5 col-sm-5 col-xs-12"></span>Kereta</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">dll</a>
                    </li>
                </ul>
                <!-- tab content -->
                <div id="myTabContent" class="tab-content">
                    <!-- content pesawat -->
                    <div role="tabpanel" class="tab-pane fade active in" id="pesawat" aria-labelledby="home-tab">
                        <?php 
                            $this->load->view('form_wizard/transportasi/pesawat/pencarian_tiket_pesawat'); 
                        ?>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end content pesawat -->
                    <div role="tabpanel" class="tab-pane fade" id="kereta" aria-labelledby="profile-tab">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk </p>
                    </div>
                </div>
                <!-- end tab content -->
            </div>
            <!-- end tab panel -->
        </div>
        <!-- end x_content -->
    </div>
    <!-- end x_panel -->
</div>
<!-- end col -->

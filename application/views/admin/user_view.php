        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Потребители
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="text-align:center;">
                                Учители
                            </div>
                            <div class="panel-body">
                                <div class="col-md-5">
                                    <img src="<?php echo base_url();?>assets/img/teacher_icon.png" align="center" />
                                </div>
                                <div class="col-md-5 col-md-offset-2">
                                    <!-- Indicates a successful or positive action -->
                                    <?php
                                    echo anchor('user/show_teacher/', '<button type="button" style="width: 100%;" class="btn btn-info">Прегледай</button>');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-danger">
                            <div class="panel-heading" style="text-align:center;">
                                Администратори
                            </div>
                            <div class="panel-body">
                                <div class="col-md-5">
                                    <img src="<?php echo base_url();?>assets/img/admin_icon.png" align="center" />
                                </div>
                                <div class="col-md-5 col-md-offset-2">
                                    <!-- Indicates a successful or positive action -->
                                    <?php
                                    echo anchor('user/show_admin/', '<button type="button" style="width: 100%;" class="btn btn-info">Прегледай</button>');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

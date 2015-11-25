        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Редактиране на администратор
                        </h1>
                    </div>
                </div>
                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                Изтриване на администратор?
                            </div>
                            <div class="modal-body">
                                <img src="<?php echo base_url();?>assets/img/warning.png" align="left">
                                <h4>Сигурни ли сте, че искате да изтриете администратор?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Откажи</button>
                                <a class="btn btn-danger btn-ok">ИЗТРИЙ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                 <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Редактирай администратор
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                    // show success msg
                                    $success_msg = $this->session->flashdata('success_msg');
                                    if (isset($success_msg)) {
                                        echo '<div class="alert alert-success" role="alert">'.$success_msg.'</div>';
                                    }

                                    // show error msg
                                    $error_msg = $this->session->flashdata('error_msg');
                                    if (isset($error_msg)) {
                                        echo '<div class="alert alert-danger" role="alert">'.$error_msg.'</div>';
                                    }

                                    // show form errors inputs
                                    echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');

                                    // open form
                                    echo form_open('user/update_admin_validate', array('role'=>'form'));
                                    ?>
                                    <input type="hidden" name="user_id" value="<?php echo $admin_info['user_id'];?>">
                                    <div class="form-group">
                                        <label>Име</label>
                                        <?php
                                        echo form_input('firstname', set_value('firstname', $admin_info['firstname']), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Фамилия</label>
                                        <?php
                                        echo form_input('lastname', set_value('lastname', $admin_info['lastname']), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Имейл</label>
                                        <?php
                                        echo form_input('email', set_value('email', $admin_info['email']), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>*** НОВА Парола ***</label>
                                        <?php
                                        echo form_password('new_password', set_value('new_password'), 'class="form-control" id="password"');
                                        ?>
                                    </div>
                                    <button type="submit" class="btn btn-default">Редактирай</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<script>
$(document).ready(function(){
   $('#password').tooltip({'trigger':'focus', 'title': 'ВАЖНО!!! ТОВА ПОЛЕ НЕ Е ЗАДЪЛЖИТЕЛНО!!! Добавете нова парола само ако сте 100% сигурни, че това искате!!!'});
});
</script>
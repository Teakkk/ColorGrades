        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Редактиране на учител
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                 <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Редактирай учител
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
                                    echo form_open('user/update_teacher_validate', array('role'=>'form'));
                                    ?>
                                    <input type="hidden" name="user_id" value="<?php echo $teacher_info['user_id'];?>">
                                    <div class="form-group">
                                        <label>Име</label>
                                        <?php
                                        echo form_input('firstname', set_value('firstname', $teacher_info['firstname']), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Фамилия</label>
                                        <?php
                                        echo form_input('lastname', set_value('lastname', $teacher_info['lastname']), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <?php
                                        echo form_input('phone', set_value('phone', $teacher_info['phone']), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Имейл</label>
                                        <?php
                                        echo form_input('email', set_value('email', $teacher_info['email']), 'class="form-control"');
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
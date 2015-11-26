        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Учители
                        </h1>
                    </div>
                </div>
                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                Изтриване на Учител?
                            </div>
                            <div class="modal-body">
                                <img src="<?php echo base_url();?>assets/img/warning.png" align="left">
                                <h4>Сигурни ли сте, че искате да изтриете Учител?</h4>
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
                            Добави Учител
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
                                    echo form_open('user/add_teacher_validate', array('role'=>'form'));
                                    ?>
                                    <div class="form-group">
                                        <label>Име</label>
                                        <?php
                                        echo form_input('firstname', set_value('firstname'), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Фамилия</label>
                                        <?php
                                        echo form_input('lastname', set_value('lastname'), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <?php
                                        echo form_input('phone', set_value('phone'), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Имейл</label>
                                        <?php
                                        echo form_input('email', set_value('email'), 'class="form-control"');
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Парола</label>
                                        <?php
                                        echo form_password('password', set_value('password'), 'class="form-control"');
                                        ?>
                                    </div>
                                    <button type="submit" class="btn btn-default">Добави</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Учители
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Име</th>
                                            <th>Фамилия</th>
                                            <th>Телефон</th>
                                            <th>Имейл</th>
                                            <th>Редактирай</th>
                                            <th>Изтрий</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($all_teachers)) {
                                            $br = 1;
                                            foreach ($all_teachers as $key => $value) {
                                                echo '<tr>
                                                <td>'.$br.'</td>
                                                <td>'.$value['firstname'].'</td>
                                                <td>'.$value['lastname'].'</td>
                                                <td>'.$value['phone'].'</td>
                                                <td>'.$value['email'].'</td>
                                                <td><a href="'.base_url().'user/update_teacher/'.$value['user_id'].'"><button class="btn btn-warning">Редактирай</button></a></td>
                                                <td><button class="btn btn-danger" data-href="'.base_url().'user/delete_teacher/'.$value['user_id'].'" data-toggle="modal" data-target="#confirm-delete">Изтрий</button></td>
                                                </tr>';
                                                $br++;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>
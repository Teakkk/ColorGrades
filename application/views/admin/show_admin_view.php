        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Администратори
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                 <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Добави администратор
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                    // show success msg for adding
                                    $msg = $this->session->flashdata('msg');
                                    if (isset($msg)) {
                                        echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
                                    }

                                    // show form errors inputs
                                    echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');

                                    // open form
                                    echo form_open('user/add_admin_validate', array('role'=>'form'));
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
                            Администратори
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
                                            <th>Имейл</th>
                                            <th>Обнови</th>
                                            <th>Изтрий</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $br = 1;
                                    foreach ($all_admins as $key => $value) {
                                        echo '<tr>
                                            <td>'.$br.'</td>
                                            <td>'.$value['firstname'].'</td>
                                            <td>'.$value['lastname'].'</td>
                                            <td>'.$value['email'].'</td>
                                            <td><button class="btn btn-warning">Обнови</button></td>
                                            <td><button class="btn btn-danger">Изтрий</button></td>
                                        </tr>';
                                        $br++;
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

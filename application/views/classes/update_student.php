<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Редактирай ученика
                        </h1>
                        <?php

echo validation_errors();
 echo form_open('classes/update_student');
 $first_name=array(
    'type'=>'text',
    'name'=>'first_name',
    'placeholder' => 'Име',
    'value'=>"$student_info[first_name]");
 $last_name=array(
    'type'=>'text',
    'name'=>'last_name',
    'placeholder' => 'Фамилия',
    'value'=>"$student_info[last_name]");
 $number_of_student=array(
    'type'=>'text',
    'name'=>'number',
    'placeholder' => '№',
    'value'=>"$student_info[number]");
 $id_of_student=array(
     'type'  => 'hidden',
     'name'  => 'id_of_student',
     'value'  => "$student_info[student_id]");
 $submit=array(
    'type'=>'submit',
    'name'=>'submit_button',
    'value'=>"Промени");
    echo form_input($first_name);
    echo form_input($last_name);
    echo form_input($number_of_student);
    echo form_input($submit);
    echo form_input($id_of_student);
 ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="col-lg-12">
                </div>
            </div>
</div>

        <!-- /. PAGE WRAPPER  -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>

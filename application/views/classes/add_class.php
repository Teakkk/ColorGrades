<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Класове
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="col-lg-12">
                    <?php
                     echo validation_errors();
    $this->output->enable_profiler(TRUE);
    $this->benchmark->mark('code_start');
     echo form_open('classes/insert_new_class');
     //Dropdown за класа
     echo "Клас";
     echo "<select name='class' class='form-control'>";
     echo "<option value=''></option>";
    $i = 0;
    while($i <= count($n_class)){
      $val= $n_class[$i]['value'];
      $des = $n_class[$i]['n_class'];
      echo "<option value='$i'>$des</option>";
      $i++;
    }
    echo "</select>";
    //Dropdown за паралелката
    echo "Паралелка";
    echo "<select name='classs' class='form-control'>";
    echo "<option value=''></option>";
    $i = 0;
    while($i < count($n_class_classes)){
      $val= $n_class_classes[$i]['value'];
      $des = $n_class_classes[$i]['class_class'];
      echo "<option value='$i'>$des</option>";
      $i++;
    }
    echo "</select>";
    //Dropdown за учебната година
    echo "Учебна година";
    echo "<select name='school_year' class='form-control'>";
    echo "<option value=''></option>";
    $i = 0;
    while($i < count($n_year)){
      $val= $n_year[$i]['value'];
      $des = $n_year[$i]['year'];
      echo "<option value='$i'>$des</option>";
      $i++;
    }
    echo "</select>";
    //Dropdown за класен пъководител
    echo "Класен пъководител";
    echo "<select name='leader_teacher' class='form-control'>";
    echo "<option value=''></option>";
    $i = 0;
    while($i < count($leader_teacher)){
      $val= $leader_teacher[$i]['value'];
      $des = $leader_teacher[$i]['firstname'];
      $des2 = $leader_teacher[$i]['lastname'];
      echo "<option value='$leader_teacher[$i]['teacher_id']'>$des $des2</option>";
      $i++;
    }
    echo "</select>";
    $submit=array(
        'type'=>'submit',
        'name'=>'send',
        'value'=>'Готово!!!'
    );
     $num=array(
    'type'=>'text',
    'name'=>'num');
    echo "Брой на учениците";
    echo form_input($num);




    echo form_input($submit);
    $this->benchmark->mark('code_end');
    echo $this->benchmark->elapsed_time('code_start','code_end');

?>
                     </div>
        <!-- /. PAGE WRAPPER  -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>

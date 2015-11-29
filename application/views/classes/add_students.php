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
 echo form_open('classes/insert_new_students');
 for($i=0;$i<$_SESSION['num'];$i++)
 {
        $h=$i+1;
     $first_name=array(
        'type'=>'text',
        'name'=>"first_name[$i]"
        );
     $last_name=array(
        'type'=>'text',
        'name'=>"last_name[$i]"
        );
     $number_in_class=array(
        'type'=>'text',
        'value'=>"$h",
        'name'=>"number_in_class[$i]"
        );
 echo "Име: "; echo form_input($first_name);
 echo "Фамилия: "; echo form_input($last_name);
 echo "Номер в класа: "; echo form_input($number_in_class);
 echo "<br/>";
} 
$submit=array(
        'type'=>'submit',
        'name'=>'send',
        'value'=>'Запиши'
        );

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

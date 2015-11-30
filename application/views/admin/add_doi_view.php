        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Добави ДОЙ категория
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   <div class="col-md-4" >
   <div class="panel panel-primary">
    <div class="panel-heading">Добави нова категория :</div>
     <div class="panel-body">
      <?php echo form_open('doi/add_new_doi'); 
      echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>');
      ?>
      <label>Профил :</label><?php echo form_input(array( 'class'=>'form-control','name' => 'profile')); ?>

      <label>Критерия : </label><?php echo form_input(array( 'class'=>'form-control','name' => 'criteria')); ?>
     
      <?php echo "
      <label>Клас : </label>
      <select name='class' class='form-control'>";
 echo "<option value=''></option>";
$i = 0;
while($i <= count($n_class)){
  $val= $n_class[$i]['value'];
  $des = $n_class[$i]['n_class'];
  echo "<option value='$i'>$des</option>";
  $i++;
}
echo "</select>";

echo "<label>Предмет : </label>
<select name='subject' class='form-control'>";
 echo "<option value=''></option>";
$i = 0;
while($i <= count($n_subject)){
  $val= $n_subject[$i]['value'];
  $des = $n_subject[$i]['subject_type'];
  echo "<option value='$i'>$des</option>";
  $i++;
}
echo "</select>"; 

 ?>
 <br/>
        <button type="submit" class="btn btn-primary">Добави</button>
<?php echo form_close(); ?>
    </div>
   </div>
  </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
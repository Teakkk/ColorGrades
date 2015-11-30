        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Редактирай ДОЙ категория
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   <div class="col-md-4" >
   <div class="panel panel-primary">
    <div class="panel-heading">Промени :<?php echo " $doi[profile]"; ?></div>
     <div class="panel-body">
     <?php  echo form_open('doi/update_single_doi'); 
echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); 
 $profile=array(
  'type'=>'text',
  'class'=>'form-control',
  'name'=>'profile',
  'value'=>"$doi[profile]");
 $criteria=array(
  'type'=>'text',
  'class'=>'form-control',
  'name'=>'criteria',
  'value'=>"$doi[criteria]");
 $class=array(
  'type'=>'text',
  'class'=>'form-control',
  'name'=>'class',
  'value'=>"$doi[class]");
 $subject=array(
  'type'=>'text', 
  'class'=>'form-control',
  'name'=>'subject',
  'value'=>"$doi[subject_type]");
 $id_of_doi=array(
   'type'  => 'hidden',
   'name'  => 'id_of_doi',
     'value'  => "$doi[doi_id]");
 $submit=array(
  'type'=>'submit',
  'name'=>'submit_button',
  'value'=>"Промени");
?>
      <label>Профил</label><?php echo form_input($profile); ?> </br>

      <label>Критерия : </label><?php  echo form_input($criteria); ?> </br>
      <label>Клас : </label><?php  echo form_input($class); ?> </br>
      <label>Предмет : </label><?php  echo form_input($subject); ?> </br>
 <br/>
        <button type="submit" class="btn btn-primary">Редактирай</button>
<?php 
echo form_input($id_of_doi);
echo form_close(); ?>
    </div>
   </div>
  </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
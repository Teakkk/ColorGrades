<head>
<meta charset='UTF-8' >
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="all_doi.css">
	<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>

<script src="jquery/jquery-2.0.3.min.js"></script>
        <script src="bootstrap/bootstrap-2.3.1.min.js"></script>
</head>

<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
<?php  echo form_open('doi/update_single_doi'); 

echo validation_errors();
 
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
<div class="container">
 <div class="row">
  <div class="col-md-4" >
   <div class="panel panel-primary">
    <div class="panel-heading">Промени :<?php echo " $doi[profile]"; ?></div>
     <div class="panel-body">
	  
	  <label>Профил</label><?php echo form_input($profile); ?> </br>

      <label>Критерия : </label><?php  echo form_input($criteria); ?> </br>
      <label>Клас : </label><?php  echo form_input($class); ?> </br>
      <label>Предмет : </label><?php  echo form_input($subject); ?> </br>
	 	 
      <?php 
 	// echo " <label>Клас : </label>
	  //<select name='class' class='form-control'>";
// $i = 0;
// while($i <= count($n_class)){
//   $val= $n_class[$i]['value'];
//   $des = $n_class[$i]['n_class'];
//   echo "<option value='$i'>$des</option>";
//   $i++;
// }
// echo "</select>";

// echo "<label>Предмет : </label>
// <select name='subject' class='form-control'>";
//  echo "<option value='$i'></option>";
// $i = 0;
// while($i <= count($n_subject)){
//   $val= $n_subject[$i]['value'];
//   $des = $n_subject[$i]['subject_type'];
//   echo "<option value='$i'>$des</option>";
//   $i++;
// }
// echo "</select>"; 

 ?>
		<?php  echo form_input($submit); ?>
      
    </div>
   </div>
  </div>
 </div>
</div>


<?php 
echo form_input($id_of_doi);

echo form_close(); ?>



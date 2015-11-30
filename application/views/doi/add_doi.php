
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
<?php echo form_open('doi/add_new_doi'); ?>
<div class="container">
 <div class="row">
  <div class="col-md-4" >
   <div class="panel panel-primary">
    <div class="panel-heading">Добави нова категория :</div>
     <div class="panel-body">
	  
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
		<?php echo form_submit(array('id' => 'submit', 'value' => 'Добави')); ?>
<?php echo form_close(); ?><br/>
      
    </div>
   </div>
  </div>
 </div>
</div>




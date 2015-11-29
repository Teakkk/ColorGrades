
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
<script type="text/javascript"> 
$(function () {
  $('[data-toggle="popover"]').popover({html:true})
})</script>
</head>
<body>

   
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="add_form" class="btn btn-primary btn-xs pull-right"><b>+</b> Добави нови категории</a>
        <tr>
            <th>Профил</th>
            <th>Критерия</th>
             <th>Предмет</th>
              <th>Клас</th>
            <th class="text-center">Настройки</th>
        </tr>
    </thead>
          <?php foreach ($all_doi as $key => $value) 
          {
          	echo "<tr>
                <td> $value[profile]</td>
                <td> $value[criteria] </td>
				        <td> $value[subject_type] </td>
				        <td> $value[class] </td>
                <td class='text-center'>
                <a class='btn btn-info btn-xs' href='show_single_doi/$value[doi_id]' ><span class='glyphicon glyphicon-edit'></span> Промени</a> 
                  ";?> 
               <button type="button" class="btn btn-danger btn-xs" data-toggle="popover" title="Сигурни ли сте, че искате да премахнете записа?" data-content="<a href='<?php echo " delete/$value[doi_id]"; ?>' title='изтриване'> <h4>Да </h4></a>"><span class='glyphicon glyphicon-edit'></span>Изтрий</button>

             <?php  echo"  </td>
      
            </tr> "; 
        }
            ?>
            
    </table>
    </div>
</div>
</body>

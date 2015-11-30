        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            ДОЙ Категории
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   
            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12"><a href="add_form" class="btn btn-primary btn-xs pull-right"><b>+</b> Добави нови категории</a><br/>
                                    <table class="table table-striped table-bordered table-hover custab">
    <thead>
    
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
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<script type="text/javascript"> 
$(function () {
  $('[data-toggle="popover"]').popover({html:true})
})</script>
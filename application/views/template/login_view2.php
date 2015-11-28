<!--Admin Panel Login -->
<html>
<head> 
 <meta charset="UTF-8">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/darkly/bootstrap.min.css" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/e80ee214-c8c1-41fb-81a6-1c75af3b37a5.css"/>
<title> ColorGrades - Вход </title>
<style type="text/css">
    
    body{
    background-color: white;
    }
    #logo 
    {
        position: fixed;
        margin-left: 540px;
        width: 300px;
        height: auto;
        
    }
    #slider{
        z-index: -2;
    position:fixed;
         width:100%;
          height:auto;
          
    }
    .form-group
    {
        background-color: rgba(0, 0, 0, 0.5);
        background-size: 20px 60px;
        width: 500px;
        height: auto;
        position: fixed;
        margin-top: 190px;
        margin-left: 440px;
        padding-bottom: 10px;
        border-radius: 25px;
        text-align: center;

    }
    #email 
    {
        width: 300px;
        height: auto;
        padding-top: 10px;
        padding-left: 40px;
        padding-bottom: 20px;
    }
    #password 
    {
        width: 300px;
        height: auto;
        padding-left: 40px;
        margin-top: 10px;


    }
  
    #submit_btn
    {
        
        width: 140px;
        height: auto;
        padding-left: 40px;
         margin-top: 20px;
         margin-left: 130px;

    }

</style>
</head>
<body>
        <img  id='logo'src='http://prikachi.com/images/471/8488471G.png'>
        <img id ="slider"src="http://prikachi.com/images/458/8488458P.png ">
<!--- LOGIN FORM-->
        <?php echo form_open('login/validate', array('role'=>'form')); ?>   
        <div class="form-group" >
            <h3>Вход</h3>
            <div  id="email">        
                <input class=" col-xs-3 col-xs-offset-4 form-control" placeholder="Имейл" name="email" type="text">
            </br>
            </div>
            <div id="password">
                <input class=" col-xs-3 col-xs-offset-4 form-control" placeholder="Парола" name="password" type="password"  value="">
            </br>
            </div>
            </br>
            <div id="submit_btn">
            </br>
                <input class=" col-xs-3 col-xs-offset-4 btn btn-md  btn-block btn-danger"   type="submit" value="Влез">
            </div>
            <?php
                    $err = $this->session->flashdata('err_login');
                    if (isset($err)) 
                    {
                        echo '<br/><br/><br/> <div class="alert alert-danger" role="alert">'.$this->session->flashdata('err_login').'</div>';
                    }
                    echo '<br/><br/><br/>'.validation_errors('<div class="alert alert-danger" role="alert">', '</div>');
                    ?>
        </div>
        </form>

          

                    <!--End of Form -->

<?php
/*echo $this->session->flashdata('err_login');
echo validation_errors();
echo form_open('login/validate');
echo 'Email: '.form_input('email', set_value('email')).'<br/>';
echo 'Парола: '.form_password('password', set_value('password')).'<br/>';
echo form_submit('submit', 'Login');
echo form_close();*/
?>
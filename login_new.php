<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="bootstrap/js/bootstrap.min.js"></script>
     
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>

        <link rel="stylesheet" href="css/style1.css">

    <style>
    body 
    {
      background: -webkit-linear-gradient(315deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), -webkit-linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);
  background: linear-gradient(135deg, #0e7fef 0%, #00a7c9 44%, #00d3a2 100%), linear-gradient(45deg, #f20e6d 0%, rgba(242, 14, 109, 0.93) 7%, rgba(0, 211, 162, 0) 100%);

    }
    .btn-btn-primary{
      font-family: "serif";

      font-style: italic;
      font-weight: bold;
    }
    </style>
    
    
  </head>

  <body>

    <section class="card">
  <figure class="panel meta">
    <picture>
      <!--<img class="avatar" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67516/Screen_Shot_2015-11-18_at_11.47.23_AM.png" width="128" height="128"/>-->
      <img class="avatar" src="profile.png" width="128" height="128"/>
      <img class="company-logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67516/b-01.png" alt="BigglesCodes" width="40" height="40"/>
    </picture>
    <figcaption>

      <h1 class="name"><?php  echo $_POST['user_name']?></h1>
      <h3 class="title">Welcome <?php  echo $_POST['user_name']?></h3>
    </figcaption>
  </figure>
  
  <div class="panel info">
    <dl class="skillz">
      
      <form action="view_details.php" method ="post">
        
        
        <input type="hidden"  name="user_name" value ='<?php  echo $_POST['user_name']?>' /> 
        <input type="hidden" name="password" value ='<?php  echo $_POST['password']?>'/> 
             
        <input type="submit" height= "500px" class='btn-btn-primary' value="View Details"/> 
      
            <br><br>

 </form>         


<form action="edit_details.php" method ="post">
        
        
        <input type="hidden"  name="user_name" value ='<?php  echo $_POST['user_name']?>' /> 
        <input type="hidden" name="password" value ='<?php  echo $_POST['password']?>'/> 
        
        
        <input type="submit" height= "500px" class='btn-btn-primary' value="Edit Details"/> 
         <br><br> 
  </form>
              
 <br><br> 
<form action="index.php" method ="post">
        
        <input type="submit" height= "500px" class='btn-btn-primary' value="Logout"/> 
          
  </form>
   


    
  </div>
  
</section>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
       
  </body>
</html>

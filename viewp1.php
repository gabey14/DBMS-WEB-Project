<?php include_once("connection1.php"); ?>
<!DOCTYPE html>
<html> 
       <head>
                <title>
                
                 </title>
                 
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                 



       </head>

       <body style="background-image: url(checkerboard-cross.png);">

              <div class="panel panel-default container">
              <div class="panel-heading">
              
                  <h1 style="text-align: center;"> Grade Management System</h1>

              </div>

              <div class="panel-body">
              
                  <!--    <a href="#" class="btn btn-primary">view</a>-->
                     
              
              <form method="post">

              <table class="table">
              
              <thread>
                         <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Subject</th>

                              <th>Email</th>
                              <th>Result</th>
                              

                         </tr>


              </thread>   

                        <?php


                        if($_GET['date']){

                            $date= $_GET['date'];
                        


                                $query="select distinct emp1.*,attendance1.* 
                                from attendance1
                                inner join emp1 on attendance1.emp_id=emp1.emp_id and attendance1.date=
                                '$date'";
                                ;
                                $result=$link->query($query);

                            if($result->num_rows>0){

                                $i=0;

                                while($val=$result->fetch_assoc()){
                                
                                    $i++;


                        ?>



              <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $val['Name']; ?></td>
                    <td><?php echo $val['Subject']; ?></td>
                    <td><?php echo $val['Email']; ?></td>
                    
                    <td>
                            Pass <input type="radio"
                            value="Pass"
                            <?php
                                    if($val['value']=='Pass')
                                    echo "checked";
                            ?>

                            >

                            Fail <input type="radio"
                            value="Fail"
                            <?php
                                    if($val['value']=='Fail')
                                    echo "checked";
                            ?>

                            >

                    </td>

                    
                   

              <?php } } }?>

              </div>

              <div class="panel-footer">
              
              </div>
       
              </div>
       


       </body>




</html>

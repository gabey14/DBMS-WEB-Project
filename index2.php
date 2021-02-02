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
              
                     <a href="view1.php" class="btn btn-primary">view</a>
                     <a href="add1.php" class="btn btn-primary pull-right">Add</a>
              
              <form method="post">

              <table class="table">
              
              <thread>
                         <tr>
                              <th>Name</th>
                              <th>Subject</th>
                              <th>Email</th>
                              <th>Grades</th>

                         </tr>


              </thread>   

              <tbody>


              <?php

                    $query="select * from emp1";
                    $result=$link->query($query);
                    while($show=$result->fetch_assoc()){

                    


              ?>

                     <tr>
                          <td><?php echo $show['Name']; ?></td>
                          <td><?php echo $show['Subject']; ?></td>
                          <td><?php echo $show['Email']; ?></td>
                          <td>
                          
                              Pass <input required type="radio" name="attendance1[<?php echo $show['emp_id'] ?>]" value="Pass">
                              Fail <input required type="radio" name="attendance1[<?php echo $show['emp_id']; ?>]" value="Fail">

                          </td>

                     </tr>
                 <?php } ?>

               


              </tbody>
            

        <?php

               if($_SERVER['REQUEST_METHOD']=='POST'){

                     $att=$_POST['attendance1'];

                $date=date('d-m-y');

                $query="select distinct date from attendance1";
                $result=$link->query($query);

                $b=false;

                if($result->num_rows>0){
                while($check=$result->fetch_assoc()){
                    
                    if($date==$check['date']){
                     $b=true;

                     echo "<div class='alert alert-danger'>

                     Grades Already taken Today!

                     </div>";

                }

              }

              }      
                   if(!$b){

                            foreach($att as $key => $value){

                                   if($value=="Pass"){

                                          $query="insert into attendance1(value,emp_id,date) values('Pass',$key,'$date')";
                                          $insertResult=$link->query($query);
                                   }

                                   else{
                                          $query="insert into attendance1(value,emp_id,date) values('Fail',$key,'$date')";
                                          $insertResult=$link->query($query);  
                                   }


                            }


                            if($insertResult){
                                   echo "<div class='alert alert-success'>

                                   Grades taken Sucessfully!
              
                                   </div>";
                            }

                     }
              
              
               }



       ?>
       

              </table>

              <input class="btn btn-primary" type="submit" value="Submit Grades">
               </form>

              </div>

              <div class="panel-footer">
              
              </div>
       
              </div>
       


       </body>




</html>

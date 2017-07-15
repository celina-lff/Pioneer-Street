<?php
   include "util/util.php";
   $sql2="select * from bloActivity";
   $result=mysqli_query($conn,$sql2);
   
   $queryArray = array();
   $data="";
   while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
   	   
      /* array_push($queryArray,$row);*/
        $title= $row["content"]; 
        $content= $row["title"];
   	  $date= $row["tm"];
         $data.="<li class='list-group-item'>
                            
                   <div class='row'>
                     <div class='col-md-10'>
                         <h4 style='color:blue;'>$title</h4> 
                         <h5>$content</h5> 
                       
                     </div>
                     <div class='col-md-2'> 
                        <span class='glyphicon glyphicon-calendar' aria-hidden='true'style='margin-top:20px;></span>
                        <p style='margin-top:20px;'>$date</p>
                     </div>
                   </div>
            </li>";
   }
  
   echo $data;
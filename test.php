

	<?php
	include("functions/init.php");





                $sql = "SELECT * FROM article WHERE id = 29";
                $res = query($sql);
                if (row_count($res) == "") {
                     echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;Write an Article</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
                	if($row['pix'] == '') {

                  	$a = "images/2.png";
                  } else{

                  	$a = 'artfile/'.$row['pix'];

                  } 

                  if($row['propix'] == '') {
                  	
                  	$b = "images/2.png";

                  } else {

                  	
                  	$b = 'artfile/dp/'.$row['propix'];

                  }


                  $Tag  = 'My Name is Gaurav'; 

                    $det = $row['details'];
                    $z = str_word_count($det);
                    


                     if($z <= 2500) {

                    	echo $y = substr($det,0,strpos($det,' ',250)) . " ...";

                    }

                    
                   
                }
            }
                ?>
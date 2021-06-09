<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
    
</head>
<body >
<p class = "heading">Result</p>
    <!-- <?php
        include("init.php");

        if(!isset($_GET['class']))
            $class=null;
        else
            $class=$_GET['class'];
        $rn=$_GET['rn']; -->

        // validation
//         if (empty($class) or empty($rn) or preg_match("/[a-z]/i",$rn)) {
//             if(empty($class))
//                 echo '<p class="error">Please select your class</p>';
//             if(empty($rn))
//                 echo '<p class="error">Please enter your roll number</p>';
//             if(preg_match("/[a-z]/i",$rn))
//                 echo '<p class="error">Please enter valid roll number</p>';
//             exit();
//         }

//         $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rn' and `class_name`='$class'");
//         while($row = mysqli_fetch_assoc($name_sql))
//         {
//         $name = $row['name'];
//         }

//         $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
//         while($row = mysqli_fetch_assoc($result_sql))
//         {
//             $p1 = $row['p1'];
//             $p2 = $row['p2'];
//             $p3 = $row['p3'];
//             $p4 = $row['p4'];
//             $p5 = $row['p5'];
//             $mark = $row['marks'];
//             $percentage = $row['percentage'];
//         }

//   if($percentage < 33)
//   {
//     $check_pass_fail = "Fail";
//   }
//   else
//   {
//     $check_pass_fail = "Pass";
//   }

//         if(mysqli_num_rows($result_sql)==0){
//             echo "no result";
//             exit();
//         }
//     ?>
<h1>aakash</h1>
  <!--  <div class="heading">  -->
        <p class = "heading">Result</p>
   <!-- </div>   -->
   <!-- <div class="lgt_btn">   -->
    <!-- <button class="lgt_btn button1">log out</button>
    </div>

 

           
            <table >
            <tr>
                    <th style="text-align:center"> Name :</th>
                    <th style="text-align:left"><?php echo $name ?></th>
            </tr>
            <tr>
                        <th style="text-align:center"> Class :</th>
                        <th style="text-align:left">  <?php echo $class; ?> </th>
            </tr>
            <tr>
                        <th  style="text-align:center"> Roll Number :</th>
                        <th  style="text-align:left"> <?php echo $rn; ?></th>
            </tr>
            <tr>
                        <th  style="text-align:center"> Status: </th>
                        <th  style="text-align:left"><?php echo $check_pass_fail; ?></th>
            </tr>
            
            </table>
        
         
          <!-- <?php  if ($mark < 50)
                                            {
                                            echo "<pre>";
                                            echo "<h3>status:</h3><h4>fail</h4>";
                                            echo "</pre>";
                                            } 
                                            else
                                            {
                                            echo "<pre>";
                                            echo "<h3>status:</h3><h4>pass</h4>";
                                            echo "</pre>";
                                            }
                                            
                                            
                                            ?>  -->
                                            
                                            <br>
<!-- 
        </div>

        <div class="main">
            <div class="s1">
                <p>Subjects</p>
                <p>Paper 1</p>
                <p>Paper 2</p>
                <p>Paper 3</p>
                <p>Paper 4</p>
                <p>Paper 5</p>
            </div>
            <div class="s2">
                <p>Marks</p>
                <?php echo '<p>'.$p1.'</p>';?>
                <?php echo '<p>'.$p2.'</p>';?>
                <?php echo '<p>'.$p3.'</p>';?>
                <?php echo '<p>'.$p4.'</p>';?>
                <?php echo '<p>'.$p5.'</p>';?>
            </div>



            <table bgcolor="gainsboro" border="0" align="center">
                <tr bgcolor="#DAA520">
                                <th width="150" style="text-align:center"> Subject Code </th><br>
                                <th width="97" style="text-align:center"> Total </th>
                                <th width="162" style="text-align:center"> Result </th>
                            </tr>
                <tr bgcolor="#FFFACD">
                                <td style="text-align:center"> ENV4B </td>
                                <td style="text-align:center"> <?php echo '<p>'.$p1.'</p>';?> </td>
                                <td style="text-align:center"> P </td>
                            </tr>
                <tr bgcolor="#EEE8AA">
                                <td style="text-align:center"> SAZ41 </td>
                                
                                <td style="text-align:center"><?php echo '<p>'.$p2.'</p>';?></td>
                                <td style="text-align:center"> P </td>
                            </tr>
                <tr bgcolor="#FFFACD">
                                <td style="text-align:center"> SAZ4A </td>
                                
                                <td style="text-align:center"><?php echo '<p>'.$p3.'</p>';?></td>
                                <td style="text-align:center"> P </td>
                            </tr>
                <tr bgcolor="#EEE8AA">
                                <td style="text-align:center"> SAZ4B </td>
                            
                                <td style="text-align:center"> <?php echo '<p>'.$p4.'</p>';?></td>
                                <td style="text-align:center"> P </td>
                            </tr>
                <tr bgcolor="#FFFACD">
                                <td style="text-align:center"> SAZ4C </td>
                                
                                <td style="text-align:center"> <?php echo '<p>'.$p5.'</p>';?></td>
                                <td style="text-align:center"> P </td>
                            </tr>

                </table>

        </div>
        <div class="abhimanyu1"></div>
        <div class="abhimanyu2"></div>

        <div class="result">
            <?php echo '<p>Total Marks:&nbsp'.$mark.'</p>';?>
            <?php echo '<p>Percentage:&nbsp'.$percentage.'%</p>';?>
        </div>

        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>  -->








































<!-- 
<table bgcolor=" gainsboro" border="0" align="center">
<tr bgcolor="#FFFACD">
            <th width="150" style="text-align:center"> Register Number </th>
            <th width="465" style="text-align:left"> 211704018 </th>
        </tr>
<tr bgcolor="#EEE8AA">
            <th style="text-align:center"> Name </th>
            <th style="text-align:left"> DINESH P </th>
        </tr>
<tr bgcolor="#FFFACD">
            <th style="text-align:center"> Date Of Birth </th>
            <th style="text-align:left"> 29/01/2000 </th>
        </tr>
</table> -->
<!-- <table bgcolor="gainsboro" border="0" align="center">
<tr bgcolor="#DAA520">
                <th width="150" style="text-align:center"> Subject Code </th><br>
                <th width="97" style="text-align:center"> Total </th>
                <th width="162" style="text-align:center"> Result </th>
            </tr>
<tr bgcolor="#FFFACD">
                <td style="text-align:center"> ENV4B </td>
                <td style="text-align:center"> <?php echo '<p>'.$p1.'</p>';?> </td>
                <td style="text-align:center"> P </td>
            </tr>
<tr bgcolor="#EEE8AA">
                <td style="text-align:center"> SAZ41 </td>
                
                <td style="text-align:center"><?php echo '<p>'.$p2.'</p>';?></td>
                <td style="text-align:center"> P </td>
            </tr>
<tr bgcolor="#FFFACD">
                <td style="text-align:center"> SAZ4A </td>
                
                <td style="text-align:center"><?php echo '<p>'.$p3.'</p>';?></td>
                <td style="text-align:center"> P </td>
            </tr>
<tr bgcolor="#EEE8AA">
                <td style="text-align:center"> SAZ4B </td>
               
                <td style="text-align:center"> <?php echo '<p>'.$p4.'</p>';?></td>
                <td style="text-align:center"> P </td>
            </tr>
<tr bgcolor="#FFFACD">
                <td style="text-align:center"> SAZ4C </td>
                
                <td style="text-align:center"> <?php echo '<p>'.$p5.'</p>';?></td>
                <td style="text-align:center"> P </td>
            </tr>

</table> -->


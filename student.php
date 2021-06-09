<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
    
</head>
<body class = "bg">
    <?php
        include("init.php");

        if(!isset($_GET['class']))
            $class=null;
        else
            $class=$_GET['class'];
        $rn=$_GET['rn'];

        // validation
        if (empty($class) or empty($rn) or preg_match("/[a-z]/i",$rn)) {
            if(empty($class))
                echo '<p class="error">Please select your class</p>';
            if(empty($rn))
                echo '<p class="error">Please enter your roll number</p>';
            if(preg_match("/[a-z]/i",$rn))
                echo '<p class="error">Please enter valid roll number</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rn' and `class_name`='$class'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }

  if($percentage < 33)
  {
    $check_pass_fail = "Fail";
  }
  else
  {
    $check_pass_fail = "Pass";
  }
        if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }
    ?>
    <div class="upperbody">
       
        <a href="logout.php" style="color: white">  <button class="lgt_btn">log out</button> </a>
        <img class="result" src="https://anima-uploads.s3.amazonaws.com/projects/60bb48419a41106765ce9704/img/result@1x.png" />
        
    </div>

    <div class="container">
        <div class="details">
        &nbsp &nbsp
            <span><b>Name:</b></span> <?php echo $name ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <span><b>Class:</b></span> <?php echo $class; ?>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <span><b>Roll No:</b></span> <?php echo $rn; ?>  &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<br><br>
            &nbsp &nbsp
             <span><b>Status:</b></span> <?php echo $check_pass_fail; ?> &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp  &nbsp&nbsp &nbsp&nbsp &nbsp
             <span><b>Total Marks:</b></span> <?php echo $mark; ?> &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp
             <span><b>Percentage:</b></span> <?php echo $percentage; ?> 



        </div>

        <div class="main">
          <table class="styled-table">
            <thead>
            <tr>
              <th>Subject</th>
               
              <th>Total Marks</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>computer Network</td>
            
              <td><?php   if($p1 < 33){print '<p>'.$p1."*".'</p>';} else{echo '<p>'.$p1.'</p>';}               ?></td>
            </tr>
            <tr>
              <td>Web Technology</td>
              
              <td><?php   if($p2 < 33){print '<p>'.$p2."*".'</p>';} else{echo '<p>'.$p2.'</p>';}               ?></td>
            </tr>
            <tr>
              <td>DBMS</td>
              
              <td><?php   if($p3 < 33){print '<p>'.$p3."*".'</p>';} else{echo '<p>'.$p3.'</p>';}               ?></td>
            </tr>
            <tr>
              <td>compiler design</td>
              
              <td><?php   if($p4 < 33){print '<p>'.$p4."*".'</p>';} else{echo '<p>'.$p4.'</p>';}               ?></td>
            </tr>
            <tr>
              <td>Operating System</td>
              <td><?php   if($p5 < 33){print '<p>'.$p5."*".'</p>';} else{echo '<p>'.$p5.'</p>';}               ?></td>
            </tr>
            </tbody>

          </table>
            
        </div>


        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>
<!-- here i have to update the result table according to semester show the result and subject -->
































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

        $result_sql=mysqli_query($conn,"SELECT `sub1`,`p1`,`sub2`, `p2`,`sub3`, `p3`,`sub4`, `p4`,`sub5`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];

            $s1 = $row['sub1'];
            $s2 = $row['sub2'];
            $s3 = $row['sub3'];
            $s4 = $row['sub4'];
            $s5 = $row['sub5'];


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
            echo "<h4>No Result found</h4>";
            echo "<br>";
            echo "<h2>Admin has deleted your result</h2>";
            echo "<br><br>";
            echo "<div class= nrf><a href = 'index.html'>Contact Admin</a></div>";

            exit();
        }
    ?>




    

    <?php

function grades($a) {


if($a>=91 and $a <= 100)
{
    echo "A+";
}
else if($a>=81 and $a <= 90)
{
    echo "A";
}
else if($a>=71 and $a <= 80)
{
    echo "B+";
}
else if($a>=61 and $a <= 70)
{
    echo "B";
}
else if($a>=51 and $a <= 60)
{
    echo "C+";
}
else if($a>=41 and $a <= 50)
{
    echo "C";
}
else if($a>=33 and $a <= 40)
{
    echo "D";
}
else
{
    echo "E";
}

}
#$a = 55;
#writeMsg($a);




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
             <span><b>Obtained Marks:</b></span> <?php echo $mark; ?> &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp
             <span><b>Percentage:</b></span> <?php echo $percentage; ?> 



        </div>

        <div class="main">
          <table class="styled-table">
            <thead>
            <tr>
              <th>Subject</th>
               <th>Total Marks</th>
              <th>Obtained Marks</th>
              <th>Grades</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $s1 ?></td>
                <td>100</td>
              <td><?php   if($p1 < 33){print '<p>'.$p1."*".'</p>';} else{echo '<p>'.$p1.'</p>';}               ?></td>
              <td><?php grades($p1);?>   </td>
            </tr>
            <tr>
              <td><?php echo $s2 ?></td>
              <td>100</td>
              <td><?php   if($p2 < 33){print '<p>'.$p2."*".'</p>';} else{echo '<p>'.$p2.'</p>';}               ?></td>
              <td><?php grades($p2);?>   </td>
            </tr>
            <tr>
              <td><?php echo $s3 ?></td>
              <td>100</td>
              <td><?php   if($p3 < 33){print '<p>'.$p3."*".'</p>';} else{echo '<p>'.$p3.'</p>';}               ?></td>
              <td><?php grades($p3);?>   </td>
            </tr>
            <tr>
              <td><?php echo $s4 ?></td>
              <td>100</td>
              <td><?php   if($p4 < 33){print '<p>'.$p4."*".'</p>';} else{echo '<p>'.$p4.'</p>';}               ?></td>
              <td><?php grades($p4);?>   </td>
            </tr>
            <tr>
              <td><?php echo $s5 ?></td>
              <td>100</td>
              <td><?php   if($p5 < 33){print '<p>'.$p5."*".'</p>';} else{echo '<p>'.$p5.'</p>';}               ?></td>
              <td><?php grades($p5);?>   </td>
            </tr>
            </tbody>

          </table>
            
        </div>


        <div>
            <br>
            <br><br>
        </div>
        <div>
            <table class="grade-table">
                <thead>
  <tr>
    <th>Marks</th>
    <th>Grades</th>
   
  </tr>
</thead>
  <tr>
    <td>91 - 100</td>
    <td>A+</td>
    
  </tr>
  <tr>
    <td>81 - 90</td>
    <td>A</td>

  <tr>
    <td>71 - 80</td>
    <td>B+</td>
    
  </tr>

  <tr>
    <td>61 - 70</td>
    <td>B</td>
    <tr>

    <td>51 - 60</td>
    <td>C+</td>
    
  </tr>
  <tr>
    <td>41 - 50</td>
    <td>C</td>

    <tr>
    <td>33 - 40</td>
    <td>D</td>
    </tr>
    <tr>
    <td>Below < 33</td>
    <td>E</td>
    </tr>
    

</table>
        </div>
                <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>
<!-- here i have to update the result table according to semester show the result and subject -->
































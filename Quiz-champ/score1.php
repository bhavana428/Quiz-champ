<?php
echo "score for out of 4 questions";
$conn=mysqli_connect('localhost','root','','logindetails');
$q3="select * from score;";
$re=mysqli_query($conn,$q3);
$row=mysqli_num_rows($re);
echo "
<a href='notes2.php' class='btn btn-danger'>go back</a>
<table border='1' cellpadding='10px' cellspacing='0' width='50%'>
<colgroup>
<col span='2' width='150'>
</colgroup>
<tr>
<th>Username</th><th>score</th>
</tr>
</table>
   </html>

";
if($row>0){
    
    while($record=mysqli_fetch_assoc($re)){
        echo "<table border='1' cellpadding='10px' cellspacing='0' width='50%'>
        <colgroup>
        <col span='2' width='150'>
        </colgroup>
<tr>
<td align='center'>".$record['username']."</td><td align='center'>".$record['score']."</td>
</tr>
</table>";
        
    }
}


?>
<html>
    <head>
    <link href="score.css" rel="stylesheet"> 
    </head>
    <body></body>
</html>
<?php 
include('config.php');
include('displayPost.php');
$ds = $_GET['id1'];
/*$fname = $mysqli->query('SELECT fname,lname,user_id FROM users WHERE email="'.$email.'"');
$a = $fname->fetch_array(MYSQLI_NUM);
$post = $mysqli->query('SELECT * from users_post WHERE user_id="'.$a[2].'" order by timestamp');
*/
$home="home.php";
$userID = $mysqli->query('select user_id from users where email="'.$email.'"');
$id1 = $userID->fetch_assoc();
$post = $mysqli->query('INSERT into users_post(user_id,post,timestamp) values("'.$id1['user_id'].'","'.$ds.'","'.time().'")')
?>
<html>
<head>
<meta http-equiv="refresh" content="2;URL=displayPost.php" /> 
</head>
</html>
<!-- 
while($p = $post->fetch_assoc()){
?>
<table border="1px">
<div align="box_left">
<tr><td><a href="">
<?php /*$name = $mysqli->query('SELECT fname,lname from users WHERE user_id="'.$p['user_id'].'"');
$name = $name->fetch_assoc();
echo $name['fname']; echo" "; echo $name['lname'];*/
 ?></a></td>
</div>
</td><tr>
<td></td><td></td>
<td> <?php/* echo $p['post']; */?> </td> </tr>
</table> --> 
<?php
/*}*/
?>
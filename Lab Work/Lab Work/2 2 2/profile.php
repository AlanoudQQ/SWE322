<?php require_once('header.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
<?php
  include('db_config.php');

  $id = $_SESSION['id'];

  $query = "SELECT * from profile WHERE u_id = '$id'";
  $result = mysqli_query($conn, $query);
  $result_row = mysqli_fetch_row($result); // get result row as an array

  // check connection and perform query
  if($result){
    if(mysqli_num_rows($result) > 0){
      echo (
        "<h3><table class='center'>
           <tr>
              <th> first_name </th>
              <th> last_name  </th>
              <th> contact_phone </th>
              <th> contact_email </th>
              <th> city </th>
              <th> country </th>
            </tr>
            <tr>
              <td> $result_row[1] </td>
              <td> $result_row[2] </td>
              <td> $result_row[3] </td>
              <td> $result_row[4] </td>
              <td> $result_row[5] </td>
              <td> $result_row[6] </td>
          </tr>");
    }else{
      header('Refresh: 0; URL=create_profile.php');
    }
  }


  // close connection
  mysqli_close($conn);


?>
</body>
</html>

<?php include('header_footer/headerL.php');?>
<?php include('header_footer/Adminsidebar.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Send Notice</title>
</head>
    <style>
      label
      {
        display: inline-block;
        width: 20%;
        padding: 1%; 
      }
      hr
      {
        style="border: 0.01px solid;
      }
    .error
    {
      color: RED;
    }
    .text
    {
      text-align: center;
    }
  </style>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px">
  <fieldset style="width: 96%;" align="left">
  
  <legend class="text"><b>SEND NOTICE TO A TEACHER</b></legend>

  <form action="#" method="POST">
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>Teacher</td>
        <td>:</td>
        
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Title</td>
        <td>:</td>
        <td><input name="title" type="text"></td>
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Notice Details</td>
        <td>:</td>
        <td> <textarea name="notice"></textarea></td>
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
    </table>
    <hr/>
  </form>
  
  <center><input type="submit" name="submit" value="Send" style="width: 60px">
  <input type="reset" name="reset" value="Reset" style="width: 60px">
  <br/><br>
  </form>
</fieldset>

</form>
</body>
</html>
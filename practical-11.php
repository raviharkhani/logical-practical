<!DOCTYPE html>
 <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 

   <table width="400px" border="1px black">

   <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=black></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=white></td>";
          }
          }
          echo "</tr>";
    }
          ?>   

  </table>
  </body>
  </html>

<form method="get">
    <h1>simple calculator </h1>
    <input type="text"name="val1" required> <br>
    <input type="text"name="val2" required> <br>
    <input type="text"name="val3" required> <br>
    <input type="submit"value="ANS"name=" sub" >

</form>

<?php
if(isset($_GET["sub"]))
{
  $a=$_GET["val1"];
  $b=$_GET["val3"];
  $c=$_GET["val2"];
  if($c=="+")
  {
    echo $a+$b;
  }
  elseif($c=="-")
  {
    echo $a-$b;
  }
  elseif($c=="*")
  {
    echo $a*$b;
  }
  elseif($c=="/")
  {
    echo $a/$b;
  }
  
  
}


?>
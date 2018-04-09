<!DOCTYPE html>
<html>
  <head>
    <style>
    /* Desktop */

body {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #574F4A;
}
/* OH! Hi, Mark! */
p {
    position: absolute;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    left: 25%;

    font-family: Roboto Slab;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    font-size: 100px;

    color: #F2994A;
}
/* Rectangle */
box {
    position: absolute;
    align-items: center;
    justify-content: center;
    left: 28%;
    top: 40%;
    font-size: 37px;
    color: white;
    padding: 30px;

    background: #000000;
}
</style>
    <title></title>
    <meta content="">
  </head>
  <body>
  <p>OH! Hi, Mark!</p>
  <box><?php
echo "Time is " . date("F j, Y, g:i a") . "<br>";
?>
</box>
  </body>
</html>

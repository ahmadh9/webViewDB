<?php
require_once 'config/database.php';
?>






<html >
<head>
    <style>
.button {
 background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 { display: inline-block;
  font-size: 24px;
     font-family: Impact, Charcoal, sans-serif;
  cursor: pointer;
  text-align: center;
  color: white;
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;

   position: absolute;
  top: 300px;
  right: 80px;
  width: 200px;
  height: 100px;

}
.button2 { display: inline-block;
  font-family: Impact, Charcoal, sans-serif;
  font-size: 24px;
  cursor: pointer;
  text-align: center;


   background-color: white;
  color: black;
  border: 2px solid #4CAF50;


  position: absolute;
  top: 180px;
  right: 300px;
  width: 200px;
  height: 100px;
}
.button3 { display: inline-block;
  font-size: 24px;
  font-family: Impact, Charcoal, sans-serif;
  cursor: pointer;
  text-align: center;
  text-decoration: none;

   background-color: white;
  color: black;
  border: 2px solid #4CAF50;

      position: absolute;
  top: 300px;
  right: 520px;
  width: 200px;
  height: 100px;

}
.button4 { display: inline-block;
   font-family: Impact, Charcoal, sans-serif;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: underline overline dotted white;
  outline: none;
   background-color: white;
  color: black;
  border: 2px solid #4CAF50;

  border-radius: 15px;
  position: absolute;
  top: 300px;
  right: 300px;
  width: 200px;
  height: 100px;
  border: 5px solid red;
}
.button5 { display: inline-block;
     font-family: Impact, Charcoal, sans-serif;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
    background-color: white;
  color: black;
  border: 2px solid #4CAF50;

  position: absolute;
  top: 420px;
  right: 300px;
  width: 200px;
  height: 100px;
}

.button1:hover {
  background: #ff9800;
  color: white;
}
button2 {
  color: RED;
}

.button2:hover {
  background: #9c27b0;
  color: white;
}


.button1:hover {
  background: #ff9800;
  color: white;
}


.button5:hover {
  background: #80D8FF;
  color: white;
}

.button4:hover {
  background: RED;
  color: white;
}

.button3:hover {
  background: blue;
  color: white;
}

body {
   background-image: url("Robot.jpg");

}
</style>
</head>
<body>
<form action="show.php" method="post">

<button type="submit" name="R" class="button button1" >right</button>
<button type="submit" name="F" class="button button2">forward</button>
<button type="submit" name="L" class="button button3">left</button>
<button type="submit" name="S" class="button button4">stop</button>
<button type="submit" name="B" class="button button5">backwards</button>
 </form>
   


</body>
</html>

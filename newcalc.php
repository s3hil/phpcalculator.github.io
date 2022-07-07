<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> CALCULATOR </title>
  <link rel="stylesheet" type=text/css href="style.css">
</head>

<body>

  <div class="app-form">
    <h1> CALCULATOR </h1>

    <form method="POST">

      <div class="app-form-group">
        <input type="text" name="num1" placeholder="Enter Number">
      </div>

      <div class="app-form-group">
        <input type="text" name="num2"  placeholder="Enter Number">
      </div>

      <div class="select-style">
        <select name="operation">
          <option value="add">ADD</option>
          <option value="sub">SUB</option>
          <option value="mult">MULT</option>
          <option value="div">DIV</option>
        </select>
      </div>

      <br>

      <div>
        <input type="submit" name="submit" value="submit">
      </div>

      <div class="app-form-new">
         <p>
          <?php
          if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];            
            $operation = $_POST['operation'];
            
            switch ($operation) {
              case "add":
                $sum = $num1 + $num2;
                echo "Answer is {$sum}";
                break;
                case "sub":
                $sum = $num1 - $num2;
                echo "Answer is {$sum}";
                break;
                case "mult":
                $sum = $num1 * $num2;
                echo "Answer is {$sum}";
                break; 
                case "div":
                $sum = $num1 / $num2;
                echo "Answer is {$sum}";
                break;
                default:
                echo "ERROR: Unknown";
                }
                  }
                  
                  ?>
          </p>
        </div>

      </form>
      </div>
      
      
      <div class="app-form-new">
         <p>
          <?php
          if (isset($_POST['submit'])) 
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];            
            $operation = $_POST['operation'];
                  
                  ?>
          </p>
        </div>
      
    </body>
    
</html>
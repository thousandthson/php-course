<html>
<head>
  <title>Math Flashcards</title>
  <style>
  .button {
  background-color: #ede59d;
  border: 2px solid #5d6ae1;
  color: #000000;
  border-radius: 5px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  width: 100px;
  font-family: Arial, Helvetica, sans-serif;
}
.button:hover {
  box-shadow: 0 6px 8px 0 rgba(0,0,0,0.24), 0 8px 25px 0 rgba(0,0,0,0.19);
}
.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}

h1 {
  font-family: Arial, Helvetica, sans-serif;
  color: #333333;
  font-size: 24px;
}

h2 {
  font-family: Arial, Helvetica, sans-serif;
  color: #333333;
  font-size: 16px;
}

p {
  font-family: Arial, Helvetica, sans-serif;
  color: #333333;
  font-size: 12px;
}


  </style>
</head>
<body bgcolor="#ede59d">
  <center>
    <br/>
    <h1>Addition</h1>

<h1>
<?php
$num1 = rand(1,10);
$num2 = rand(1,10);

echo $num1 . " + " . $num2;
?>
</h1>
<br/><br/>
<?php
if (!isset ($_POST['answer'])) {
  echo "";
}
  else {
$correct_answer = $_POST["num1"] + $_POST["num2"];

if ($correct_answer == $_POST["answer"]) {
echo "Correct! " . $_POST["num1"] . " + " . $_POST["num2"] . " = " . $_POST["answer"];
}
else {
  echo "Wrong! " . $_POST["num1"] . " + " . $_POST["num2"] . " = " . $correct_answer . ", not " . $_POST["answer"];
}

}

?>
<br/><br/><br/>

<form method="post" action= "">
<p>
  <input name="num1" type="hidden" value="<?php echo $num1 ?>">
    <input name="num2" type="hidden" value="<?php echo $num2 ?>">
Answer: <input name="answer">
</p>
<button class="button button2">Submit</button>
<button class="button button2">New Card</button>

</form>
</center>

  </body>
  </html>

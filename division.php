<?php
include "header.php";
require "random.php";
?>
    <h1>Division</h1>

<h1>
<?php

echo $num1 . " / " . $num2;

?>
</h1>
<br/><br/>
<?php
if (!isset ($_POST['answer'])) {}
  elseif (($_POST['answer']) == null) {}
  else {
$correct_answer = $_POST["num1"] / $_POST["num2"];

if ($correct_answer == $_POST["answer"]) {
echo "Correct! " . $_POST["num1"] . " / " . $_POST["num2"] . " = " . $_POST["answer"];
}
else {
  echo "Wrong! " . $_POST["num1"] . " / " . $_POST["num2"] . " = " . $correct_answer . ", not " . $_POST["answer"];
}

}

?>
<br/><br/><br/>

<form method="post" action= "/php-course/division.php">
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
<?php include "footer.php"; ?>

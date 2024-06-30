<?php
if (isset($_POST['cal'])) {
  $receivedVariable = $_POST['cal'];
  // Process the received variable or perform any other PHP logic
  echo "Received variable: " . $receivedVariable;
} else {
  echo "Variable not received";
}
?>

<?php 
  $email = '';
  $name = '';
  $gender = '';
  $color = '';
  $cars = array();
  $comments = '';
  $terms = '';
  
  if (isset($_POST['submit'])) {
    $ok = true;

    // requires each input and ensures valid data
    if (!isset($_POST['email']) || $_POST['email'] === '' ) {
      $ok = false;
    } else {
      $email = $_POST['email'];
    }
    if (!isset($_POST['name']) || $_POST['name'] === '' ) {
      $ok = false;
    } else {
      $name = $_POST['name'];
    }
    if (!isset($_POST['gender']) || $_POST['gender'] === '' ) {
      $ok = false;
    } else {
      $gender = $_POST['gender'];
    }
    if (!isset($_POST['color']) || $_POST['color'] === '' ) {
      $ok = false;
    } else {
      $color = $_POST['color'];
    }
    if (!isset($_POST['cars']) || !is_array($_POST['cars']) 
      || count($_POST['cars']) === 0) {
      $ok = false;
    } else {
      $cars = $_POST['cars'];
    }
    if (!isset($_POST['comments']) || $_POST['comments'] === '' ) {
      $ok = false;
    } else {
      $comments = $_POST['comments'];
    }
    if (!isset($_POST['terms']) || $_POST['terms'] === '' ) {
      $ok = false;
    } else {
      $terms = $_POST['terms'];
    }

    // prints results
    if ($ok) {
      printf(
        'Your Inputs:
        <br>Email - %s
        <br>User Name - %s
        <br>Gender - %s
        <br>Color - %s
        <br>Cars - %s
        <br>Comments - %s
        <br>Terms & Conditions - %s
        <br>
        <br>
        ',
          htmlspecialchars($email, ENT_QUOTES),
          htmlspecialchars($name, ENT_QUOTES),
          htmlspecialchars($gender, ENT_QUOTES),
          htmlspecialchars($color, ENT_QUOTES),
          htmlspecialchars(implode(' ', $cars), ENT_QUOTES),
          htmlspecialchars($comments, ENT_QUOTES),
          htmlspecialchars($terms, ENT_QUOTES)
      );
    }
  }
?>

<!-- html form -->
<form method='post' action=''>
  Email: <br>
    <input type='text' name='email' value="<?php 
      // retains values after page reload
      echo htmlspecialchars($email); 
    ?>"><br>
  User Name: <br>
    <input type='text' name='name' value="<?php 
      echo htmlspecialchars($name); 
    ?>"><br>
  Gender: <br>
    <input type="radio" name="gender" value="male" <?php 
      if ($gender === 'male') {
        echo 'checked';
      }
    ?>> Male<br>
    <input type="radio" name="gender" value="female" <?php 
      if ($gender === 'female') {
        echo 'checked';
      }
    ?>> Female<br>
    <input type="radio" name="gender" value="other" <?php 
      if ($gender === 'other') {
        echo 'checked';
      }
    ?>> Other<br>
  Favorite color: <br>
    <select name='color'>
      <option value=''>Select Color</option>
      <option value='#f00' <?php 
        if ($color === '#f00') {
          echo 'selected';
        }
      ?>>Red</option>
      <option value='#0f0' <?php 
        if ($color === '#0f0') {
          echo 'selected';
        }
      ?>>Green</option>
      <option value='#00f' <?php 
        if ($color === '#00f') {
          echo 'selected';
        }
      ?>>Blue</option>
    </select><br>
  Select all favorite cars: <br>
  (Hold Ctrl or Command to add multiple)<br>
    <select name='cars[]' multiple>
      <option value="volvo" <?php 
        if (in_array('volvo', $cars)) {
          echo 'selected';
        }
      ?>>Volvo</option>
      <option value="tesla" <?php 
        if (in_array('tesla', $cars)) {
          echo 'selected';
        }
      ?>>Tesla</option>
      <option value="hyundai" <?php 
        if (in_array('hyundai', $cars)) {
          echo 'selected';
        }
      ?>>Hyundai</option>
      <option value="audi" <?php 
        if (in_array('audi', $cars)) {
          echo 'selected';
        }
      ?>>Audi</option>
    </select><br>
  Comments: <br>
    <textarea name='comments' value="<?php 
      echo htmlspecialchars($comments); 
    ?>"></textarea><br>
    I accept Terms and Conditions<br>
    <input type='checkbox' name='terms' value='ok' <?php 
      if ($terms === 'ok') {
        echo 'checked';
      }
    ?>><br>
    <input type='submit' name='submit' value='Submit'>
</form>
<?php 
  
?>
<form method='post' action=''>
  Email: <br>
    <input type='text' name='email'><br>
  User Name: <br>
    <input type='text' name='name'><br>
  Gender: <br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br>
  Favorite color: <br>
    <select name='color'>
      <option value='#f00'>Red</option>
      <option value='#0f0'>Green</option>
      <option value='#00f'>Blue</option>
    </select><br>
  Select all favorite cars: <br>
  (Hold Ctrl or Command to add multiple)<br>
    <select name='cars[]' multiple>
      <option value="volvo">Volvo</option>
      <option value="tesla">Tesla</option>
      <option value="hyundai">Hyundai</option>
      <option value="audi">Audi</option>
    </select><br>
  Comments: <br>
    <textarea name='comments'></textarea><br>
    I accept Terms and Conditions<br>
    <input type='checkbox' name='terms' value='ok'><br>
    <input type='submit' name='submit' value='Submit'>
</form>
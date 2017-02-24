<?php
require('Calculate.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta name='author' content='Chen Shen'>
  <meta name='description' content='Assignment2-CapRateCalculator'>
  <meta name='keywords' content='real estate, caprate, square footage'>
  <title>Capitalization Rate of this Property</title>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
  <link href='styles.css' rel='stylesheet'>
</head>
<body>

  <h2>CapRate of your Property</h2>

  <p>This webpage will help the client to calculate the capitalization rate
    based on the value of the property and the net operating income (NOI)
    of the year.</p>

    <form method='GET' action='index.php'>
      <div class='form-group'>
        <label for='title'>Please input the following details:</label>
        <input type='number' id='value' required class='form-control'
        placeholder='Value of your Property (Numeric Value Only)' value='<?php echo $value;?>'>
        <input type='number' id='rent' name='rent' class='form-control' placeholder='Monthly Rent (Numeric Value Only)'>
        <label for='months'>The number of months rent was collected:</label>
        <select id='numberofmonth' name='rent' class='form-control'>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
        <label for='others'>Other Income or expenses</label>
        <input type='number' id='otherincome' class='form-control' placeholder='Other Income (Annual)'>
        <input type='number' id='expense' class='form-control' placeholder='Operating Expenses (Annual)'>
        <h5>Round up?&nbsp&nbsp<input type='checkbox' id='RoundNumbers'></h5>

        <button class='btn btn-lg btn-success' type='submit'> Calculate </button>
      </div>
    </form>

</body>
</html>

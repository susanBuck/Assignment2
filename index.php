<?php require('Calculate.php'); ?>

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

    <p>
        This webpage will help the client to calculate the capitalization rate
        based on the value of the property and the net operating income (NOI)
        of the year.
    </p>

    <div class='results'>
        <?php echo ($caprate) ? 'Caprate: '.$caprate : '' ?>
    </div>

    <form method='get' action='index.php'>
        <div class='form-group'>
            <label for='title'>Please input the following details:</label>
            <input type='number' name='value' required class='form-control' placeholder='Value of your Property (Numeric Value Only)' value='<?=$value;?>'>
            <input type='number' name='rent' class='form-control' placeholder='Monthly Rent (Numeric Value Only)' value='<?=$rent;?>'>

            <label for='months'>The number of months rent was collected:</label>
            <select name='months' class='form-control' value='<?=$months;?>'>
                <?php for($i = 1; $i < 13; $i++): ?>
                    <option value='<?=$i?>'><?=$i?></option>
                <?php endfor; ?>
            </select>

            <label for='others'>Other Income or expenses</label>
            <input type='number' name='otherincome' class='form-control' placeholder='Other Income (Annual)' value='<?=$otherincome;?>'>
            <input type='number' name='expense' class='form-control' placeholder='Operating Expenses (Annual)' value='<?=$expense;?>'>

            <h5>Please make sure to include all expenses and other income occurred this year related to this property.</h5>

            <button class='btn btn-lg btn-success' type='submit'> Calculate </button>

        </div>
    </form>

</body>
</html>

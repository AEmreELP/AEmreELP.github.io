<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>
                    From :
                </td>
                <td>
                    <input type="number" name="from">
                </td>
                <td>
                    Currency :
                </td>
                <td>
                    <select name="currency">
                        <option value="USD">US Dollar</option>
                        <option value="CAD">Canadian Dollar</option>
                        <option value="EUR">Euro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    To :
                </td>
                <td>
                    <input type="number" name="to">
                </td>
                <td>
                    Currency :
                </td>
                <td>
                    <select name="currency">
                        <option value="USD">US Dollar</option>
                        <option value="CAD">Canadian Dollar</option>
                        <option value="EUR">Euro</option>
                    </select>
                </td>
            </tr>

        </table>
    </form>

    <?php
    // Define the exchange rates in an associative array
    $exchange_rates = array(
        'USD-CAD' => 1.25,
        'USD-EUR' => 0.85,
        'CAD-USD' => 0.80,
        'CAD-EUR' => 0.68,
        'EUR-USD' => 1.18,
        'EUR-CAD' => 1.47,
    );

    // Check if the input values are valid
    if (!is_numeric($amount)) {
        $error_message = 'Please enter a valid amount';
    } elseif (!array_key_exists("$from_currency-$to_currency", $exchange_rates)) {
        $error_message = 'Unsupported currency conversion';
    } else {
        // Calculate the exchange rate
        $exchange_rate = $exchange_rates["$from_currency-$to_currency"];
        $converted_amount = $amount * $exchange_rate;
        echo "$amount&from_currency=$from_currency&to_currency=$to_currency&converted_amount=$converted_amount";
    }
    ?>

</body>

</html>
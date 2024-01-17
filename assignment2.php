<html>
    <head>
        <title>Assignment 2</title>
    </head>
    <style type="text/css">
        table,tr,th,td{
            border: 1px solid brown;
            border-collapse: collapse;
        }
        div{
            padding:5px;
        }
    </style>
    <body>
    <?php
    $budget=2500;
    $visitDay=5;
    $stayNight=4;
    $hotelFees=80*$stayNight;
    $meal=50*$visitDay;
    $tourGuide=70*$visitDay;
    $flight=250;
    $totalExpense=$hotelFees+$meal+$flight+$tourGuide;
    $totalLeft=$budget-$totalExpense;
    echo "<table>
            <tr>
                <th>Expenses</th>
                <th>Amount(US)</th>
            </tr>
            <tr>
                <td>Hotel</td>
                <td>".$hotelFees."
                </td>
            </tr>
            <tr>
                <td>Meal</td>
                <td>".$meal."
                </td>
            </tr>
            <tr>
                <td>Flight</td>
                <td>".$flight."</td>
            </tr>
            <tr>
                <td>Tour Guide</td>
                <td>".$tourGuide."
                </td>
            </tr>
        </table>
        <div>
            Total Expense:$ ".$totalExpense."
        </div>
        <div>
            Total Budget: $ ".$budget."
        </div>
        <div>
            Total Left Over: $ ".$totalLeft."
        </div>";

    ?> 
    </body>
</html>

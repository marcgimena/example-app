<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid #ddd; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    @foreach($calendar as $month => $weeks)
        <h2>{{ $month }}</h2>
        <table>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            @foreach($weeks as $week)
                <tr>
                    @foreach($week as $day)
                        <td>{{ $day }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    @endforeach
</body>
</html>

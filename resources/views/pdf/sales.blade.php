<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>Sales Report for {{ today()->format('Y-m-d') }}</h1>
<table>
    <thead>
    <tr>
        <th>Employee Name</th>
        <th>Total Sale</th>
        <th>Total Amount</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->employee->name }}</td>
            <td>{{ $sale->total_sales }}</td>
            <td>{{ $sale->total_amount }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

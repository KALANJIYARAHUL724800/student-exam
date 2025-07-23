<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>userId</th>
            <th>id</th>
            <th>title</th>
            <th>completed</th>
        </tr>
        @foreach ($res as $item)
            @dd($item);
            <tr>
                <td>{{ $item['userId'] }}</td>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['completed'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

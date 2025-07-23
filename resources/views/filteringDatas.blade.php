<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Sno</th>
            <th>Student Name</th>
            <th>Exam Type</th>
            <th>Subject Name</th>
            <th>Marks</th>
        </tr>
        <tr>
            @foreach ($data as $res)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->exam_type }}</td>
                <td>{{ $res->subject_name }}</td>
                <td>{{ $res->marks }}</td>
            @endforeach
        </tr>
    </table>
</body>

</html>

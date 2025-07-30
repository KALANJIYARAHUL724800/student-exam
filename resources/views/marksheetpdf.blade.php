{{-- <h1>{{ $results->first()->name }}</h1>
<h1>{{ $results->first()->exam_type }}</h1>
<h1>{{ $results->first()->totalmarks }}</h1>
 --}}


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Student Results</h1>
    <hr>
    <h3>Student Name : {{ $results['name'] }}</h3>
    <h3>Exam Type : {{ $results['exam_type'] }}</h3>
    <table>
        <tr>
            <th>Subjects</th>
            <th>Marks</th>
        </tr>
        @foreach ($results['subjects'] as $res)
            <tr>
                <td>{{ $res['subject_name'] }}</td>
                <td>{{ $res['marks'] }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <h1>Rank : {{ $results['rank'] }}</h1>
</body>

</html>

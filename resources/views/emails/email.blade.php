<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
    <h1>Hai {{Auth::user()->name}}!!! this is Student Examination Mail</h1>
        <h1>Hi {{Auth::user()->name}} You have Successfully Complete the Exam</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Hi {{Auth::user()->name}} You have Successfully Complete the Exam</h3>
                        <table style="border: 1px solid black; border-collapse: collapse; padding: 15px;">
                            <tr style="border: 1px solid black; border-collapse: collapse; padding: 15px;">
                                <th style="border: 1px solid black; border-collapse: collapse; padding: 15px;">S.no</th>
                                <th style="border: 1px solid black; border-collapse: collapse; padding: 15px;">Name</th>
                                <th style="border: 1px solid black; border-collapse: collapse; padding: 15px;">Subject</th>
                                <th style="border: 1px solid black; border-collapse: collapse; padding: 15px;">Marks</th>
                            </tr>
                            @foreach ($email_data as $res)
                            <tr style="border: 1px solid black; border-collapse: collapse; padding: 15px;">
                                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px;">{{Auth::user()->id}}</td>
                                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px;">{{Auth::user()->name}}</td>
                                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px;">{{$res->subject_name}}</td>
                                <td style="border: 1px solid black; border-collapse: collapse; padding: 15px;">{{$res->marks}}</td>
                            </tr>
                            @endforeach
                        </table><br>
                    <a href="{{route('exam-student')}}">Go back Exam</a><br><br>
                </div>
            </div>
        </div>
</body>
</html>
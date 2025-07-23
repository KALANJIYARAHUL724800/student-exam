<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SuperAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <style>
        input:hover {
            cursor: pointer;
        }
    </style>
</head>
<!-- background="{{ asset('images/dashboard.png') }}" style="background-repeat: no-repeat; background-size: cover;" -->

<body>
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="text-center well">
                <form>
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf" />
                    Start Date :<input type="date" name="sdate" id="sdate" required> End Date : <input
                        type="date" name="edate" id="edate" required>
                    <!-- Exam Type -->
                    <select name="exam_type" id="exam_type" style="width: 150px;">
                        <option value="">Select Exam Type</option>
                        @foreach ($exam_types as $type)
                            <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                        @endforeach
                    </select>
                    <!-- Class -->
                    <select name="class" id="class_id" style="width:120px">
                        <option value="">Select Class</option>
                    </select>
                    <!-- Subject -->
                    <select name="subjects" id="subjects" style="width: 140px;" class="subject_id">
                        <option value="">Select Subject</option>
                    </select>
                    <button class="btn btn-success" type="submit" onclick="showpage(event)"><i
                            class="glyphicon glyphicon-filter"></i>Submit</button>
                </form>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="div" style="display: none;">
                    <table id="table" style='border:1px solid black; border-collapse:collapse; padding:15px;'>
                        <tr>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Sno</th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Student Name
                            </th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Exam Type</th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Subject Name
                            </th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Marks</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Students list -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="usersdiv" style="display: none;">
                    <table id="studentstable" style='border:1px solid black; border-collapse:collapse; padding:15px;'>
                        <tr>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Sno</th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Student Name
                            </th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Exam Type</th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Subject Name
                            </th>
                            <th style='border:1px solid black; border-collapse:collapse; padding:15px;'>Marks</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        var count = 0;
        $(document).ready(function() {
            $('#exam_type').select2();
            $('#subjects').select2();
            $('#class_id').select2();
            var sdate = $('#sdate').on('change', function() {
                console.log('Start Date:', $(this).val());

            }).val();
            var edate = $('#edate').on('change', function() {
                console.log('End Date:', $(this).val());
            }).val();

            // class id found
            $('#exam_type').on('change', function() {
                count += 1;
                $.ajax({
                    url: '{{ route('class-name') }}',
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        $('#class_id').empty().append('<option value="">select class</option>');
                        $.each(response, function(index, class_id) {
                            $('#class_id').append('<option value="' + class_id.id +
                                '">' + class_id.class_name + '</option>');
                        });
                        $('#class_id').select2();
                    },
                    error: function() {
                        $('#class_id').empty().append(
                            '<option>Error loading subjects</option>');
                    }
                });

            });
            // subject found
            $('#class_id').on('change', function() {
                $.ajax({
                    url: '/getsubjects/subjects',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        exam_id: $('#exam_type').val(),
                        class_id: $('#class_id').val()
                    },
                    success: function(response) {
                        console.log(response);
                        $('#subjects').empty().append(
                            '<option value="">select subjects</option>');
                        $.each(response, function(index, subject) {
                            $('#subjects').append('<option value="' + subject.id +
                                '">' + subject.subject_name + '</option>');
                        });
                    },
                    error: function() {
                        $('#subjects').empty().append(
                            '<option>Error loading subjects</option>');
                    }
                });
            });
        });


        function showpage(event) {
            event.preventDefault();
            var sdate = $('#sdate').val();
            var edate = $('#edate').val();
            if (new Date(sdate) < new Date(edate)) {
                $.ajax({
                    url: 'filter/datas',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        sdate: $('#sdate').val(),
                        edate: $('#edate').val(),
                        exam_type: $('#exam_type').val(),
                        class_id: $('#class_id').val(),
                        subject_id: $('#subjects').val()
                    },
                    success: function(response) {
                        console.log(response);
                        var table = document.getElementById("table");
                        document.querySelector(".div").style.display = "block";
                        $('#table tr:not(:first)').remove();
                        $.each(response, function(index, res) {
                            var tr = document.createElement('tr');
                            tr.innerHTML = `
                <td style='border:1px solid black; border-collapse:collapse; padding:15px;'>${index + 1}</td>
                <td style='border:1px solid black; border-collapse:collapse; padding:15px;'>${res.name}</td>
                <td style='border:1px solid black; border-collapse:collapse; padding:15px;'>${res.exam_type}</td>
                <td style='border:1px solid black; border-collapse:collapse; padding:15px;'>${res.subject_name}</td>
                <td style='border:1px solid black; border-collapse:collapse; padding:15px;'>${res.marks}</td>
            `;
                            table.appendChild(tr);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(error);

                    }
                });
            } else {
                alert('Date is not Below please check your Date')

            }

        }
    </script>
</body>

</html>

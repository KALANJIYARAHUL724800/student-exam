<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Hi {{ Auth::user()->name }} You have Successfully Complete the Exam</h3>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>
                @foreach ($results as $res)
                    <tr>
                        <td>{{ Auth::user()->id }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ $res->subject_name }}</td>
                        <td>{{ $res->marks }}</td>
                    </tr>
                @endforeach
            </table><br>
            <a href="{{ route('exam-student') }}">Go back Exam</a><br><br>
            <div class="text-right">
                <button class="btn btn-success" onclick="">PDF</button>
            </div>
        </div>
    </div>
</div>

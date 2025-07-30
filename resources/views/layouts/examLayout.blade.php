    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table">
                    <form action="{{ route('question') }}" method="get">
                        <tr>
                            <th class="form-label">
                                <label>Choose Exam type</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select name="exam_type" id="exam_id" class="form-control" required>
                                    <option value="">--select exam--</option>
                                    @foreach ($exam_types as $type)
                                        <option value="{{ $type->id }}">{{ $type->exam_type }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>Choose Subject</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select id="subjects" name="subjects" class="form-control" required>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="form-control btn btn-primary">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>

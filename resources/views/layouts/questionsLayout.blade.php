    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table well">
                    <h1><strong>Question Paper</strong></h1>
                    <form action="{{ route('verify') }}" method="post">
                        @csrf
                        @php
                            $grouped = $question->groupBy('id');
                        @endphp
                        @foreach ($grouped as $qid => $items)
                            <tr>
                                <th>
                                    <p><b id="q">{{ $qid }}. {{ $items->first()->question_text }}</b>
                                    </p>
                                </th>
                            </tr>
                            @foreach ($items as $opt)
                                <tr>
                                    <td>
                                        <input type="radio" name="{{ $qid }}" value="{{ $opt->option_id }}"
                                            required>{{ $opt->options }}

                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-success form-control">
                            </td>
                        </tr>
                    </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        var ques = document.querySelectorAll('#q');
        ques.forEach((res, index) => {
            console.log(index, res);

        });
    </script>

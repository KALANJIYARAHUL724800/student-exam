@extends('login')
@section('title')
    login
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 well">
                <p id="error" style="color: red"></p>
                <h2 class="text-center">Login</h2>
                <table class="table table-borderedless">
                    <form action="{{ route('login-progress') }}" method="post">
                        @csrf
                        <tr>
                            <th class="form-label"><label>Email:</label></th>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="email" class="form-control" required
                                    placeholder="enter the email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th class="form-label">
                                <label>Password:</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="password" class="form-control" required minlength="8"
                                    maxlength="16" placeholder="enter the password" id="password">
                            </td>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary form-control"
                                    onclick="popup(event)">Login</button>
                            </td>
                        </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        function popup(event) {
            event.preventDefault();
            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                url: "{{ route('login-progress') }}",
                type: "POST",
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(JSON.stringify(response));
                    if (response.email == email && response.password == password && response.usertype ==
                        false) {
                        alert("Login successful");
                        window.location.href = "{{ route('exam-student') }}";
                    } else {
                        if (response.email == email && response.password == password && response.usertype ==
                            true) {
                            alert("Login Admin Successfully");

                            window.location.href = "{{ route('admin') }}";

                        } else {
                            alert("Login failed");
                        }
                    }
                },
                error: function(xhr, status, error) {
                    $('#error').empty().append(error);

                }
            });
        }
    </script>
@endsection

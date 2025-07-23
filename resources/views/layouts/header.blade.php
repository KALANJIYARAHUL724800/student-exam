<div class="container-fluid" style="background: lightblue; padding: 10px;">
    <div class="row">
        <div class="col-md-6">
            <h4>{{ $pageName }}</h4>
        </div>
        @if (empty($isLoginPage))
            <div class="col-md-6 text-right">
                <a href="{{ route('logout') }}" class="me-auto"><button class="btn btn-danger"><i
                            class="glyphicon glyphicon-off"></i> Logout</button></a>
        @endif
    </div>
</div>
</div>

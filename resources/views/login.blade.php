@extends('layout.mainlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            <form method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            Email / Username:
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="email" />
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Password:
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="password" name="password" />
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                    <div class="row">
                        <div class="col-9">
                            &nbsp;
                        </div>
                        <div class="col-3">
                            <input class="form-control btn btn-secondary" type="submit" name="Submit" />
                        </div>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

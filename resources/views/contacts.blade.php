@extends('layout.mainlayout')
@section('content')
@if (session('messageSent'))
    <div class="alert alert-success">Your message has been sent. We'll reply to you soon!</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <p>
                We welcome hearing from you - your suggestions, comments and/or questions.<br />If you have something to say,
                please use the form below to contact us regarding your interest and input.<br />We will review your comments and/or
                queries and get back to you at our earliest opportunity. Thanks for your feedback!
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-1">
                            Name
                        </div>
                        <div class="col-11">
                            <input class="form-control" type="text" name="name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            Email
                        </div>
                        <div class="col-11">
                            <input class="form-control" type="text" name="email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            Message
                        </div>
                        <div class="col-11">
                            <textarea class="form-control" rows="15" name="message"></textarea>
                        </div>
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
@endsection

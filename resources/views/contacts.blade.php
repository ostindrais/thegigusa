@extends('layout.mainlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <p>
                We welcome hearing from you - your suggestions, comments and/or questions. So, if you have something to say,
                please use the form below to contact us regarding your interest and input. We will review your comments and/or
                queries and get back to you at our earliest opportunity. Thanks for your feedback!
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-1">
                            Name
                        </div>
                        <div class="col-11">
                            <input class="form-control" type="text" name="name" placeholder="Eddie Vedder" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            Email
                        </div>
                        <div class="col-11">
                            <input class="form-control" type="text" name="email" placeholder="eddie@pearljam.com" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            Message
                        </div>
                        <div class="col-11">
                            <textarea class="form-control" rows="15" name="message" placeholder="With the lights out, it's less dangerous
Here we are now, entertain us
I feel stupid and contagious
Here we are now, entertain us
A mulatto, an albino, a mosquito, my libido
Yeah, hey"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">

                        </div>
                        <div class="col-2">
                            <input class="form-control btn btn-secondary" type="submit" name="Submit" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

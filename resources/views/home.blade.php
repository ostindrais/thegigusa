@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PLafL99ejFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1></h1>
                </div>
            </div>
            <div class="container">
            <div id="home-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/home1.png" style="height:600px;object-fit:cover;" class="d-block w-100" alt="Excitement">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Remember the excitement of attending live events?</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/home2.png" style="height:600px;object-fit:cover;" class="d-block w-100" alt="Virtual">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>We're bringing it back — virtually.</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/home3.png" style="height:600px;object-fit:cover;" class="d-block w-100" alt="Artists">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Audiences & fans can interact with artists, and so much more!</h1>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
    </div>
    <div class="jumbotron home-banner">
        <div class="container">
        <div class="row">
            <div class="col-6 align-self-center">
                <h1>Become Involved</h1>
                <ul>
                    <li>Want to sponsor?</li>
                    <li>Promote your brand?</li>
                    <li>Showcase your talent?</li>
                </ul>
                <p>
                    Click the button below to send us an email.
                    Tell us your interest so we can route it to the right place,
                    and we'll get back to you quickly.
                </p>
                <a href="mailto:key@thegigusa.com" class="btn btn-secondary">I Want to Help!</a>
            </div>
            <div class="col-6">
                <img src="/images/thegig_reporter.png" width="600" />
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <img src="/images/thegig_red.png" width="500" />
                    </div>
                    <div class="col-6 align-self-center">
                        <h1>Become a VIP</h1>
                        <p>Click the button below to request a spot on our exclusive VIP list. Receive alerts, show invites and other exclusive info.</p>
                        <a href="mailto:vip@thegigusa.com" class="btn btn-secondary">Sign Me Up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

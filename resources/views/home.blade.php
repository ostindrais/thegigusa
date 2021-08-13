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
                <!-- The HTML5 video element that will create the background video on the header -->
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="/video/promo.mp4" type="video/mp4">
                </video>
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

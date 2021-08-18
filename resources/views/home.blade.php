@extends('layout.mainlayout')
@section('content')
<?php
$random = rand(0, 3);
$promoNames = ['drum','flag','orb','splash'];
$filename = $promoNames[$random] . '_promo.mp4'
?>
    <div class="container">
        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/video/<?= $filename ?>" type="video/mp4">
        </video>
    </div>
    <div class="jumbotron">
        <div class="container">
            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/video/promo.mp4" type="video/mp4">
            </video>
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
                <button class="btn btn-secondary" data-toggle="modal" data-target="#partnerModal">I Want to Help!</button>
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
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#vipModal">Sign Me Up!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PLafL99ejFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="partnerModalLabel">Become Involved</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="partnerContactType">I am</label>
                        <select class="form-control" name="contactType" id="partnerContactType">
                            <option value="">A Human</option>
                            <option value="fan">A Fan</option>
                            <option value="artist">An Artist</option>
                            <option value="sponsor">A Sponsor</option>
                            <option value="promoter">A Promoter</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="partnerName">Your Name</label>
                        <input type="text" id="partnerName" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label for="partnerEmail">Email Address</label>
                        <input type="email" id="partnerEmail" class="form-control" name="email" />
                    </div>
                    <div class="form-group">
                        <label for="partnerComments">Anything you'd like to add?</label>
                        <textarea id="partnerComments" class="form-control" name="comments" placeholder="Tell us what's on your mind."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Never Mind</button>
                    <input type="submit" class="btn btn-primary" value="I Can Help" />
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="vipModal" tabindex="-1" aria-labelledby="vipModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                @csrf
                <input type="hidden" name="vip" value="1" />
                <div class="modal-header">
                    <h5 class="modal-title" id="vipModalLabel">Become a VIP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="vipContactType">I am</label>
                        <select class="form-control" name="contactType" id="vipContactType">
                            <option value="">A Human</option>
                            <option value="fan">A Fan</option>
                            <option value="artist">An Artist</option>
                            <option value="sponsor">A Sponsor</option>
                            <option value="promoter">A Promoter</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="vipName">Your Name</label>
                        <input type="text" id="vipName" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label for="vipEmail">Email Address</label>
                        <input type="email" id="vipEmail" class="form-control" name="email" />
                    </div>
                    <div class="form-group">
                        <label for="vipComments">Anything you'd like to add?</label>
                        <textarea id="vipComments" class="form-control" name="comments" placeholder="Tell us what's on your mind."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Never Mind</button>
                    <input type="submit" class="btn btn-primary" value="Make Me a VIP" />
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

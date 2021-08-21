<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
<div class="container">
    <div class="row">New The GIG USA Contact</div>
    <div class="row">
        A new contact has been added to The GIG USA's database:
    </div>
    <div class="row">
        <div class="col-sm">Name:</div>
        <div class="col-sm">{{ $contact->name }}</div>
    </div>
    <div class="row">
        <div class="col-sm">Email Address:</div>
        <div class="col-sm">{{ $contact->email }}</div>
    </div>
    <div class="row">
        <div class="col-sm">Contact Type:</div>
        <div class="col-sm">{{ ucwords($contact->contactType) }}</div>
    </div>
    <div class="row">
        <div class="col-sm">Comments:</div>
        <div class="col-sm">{{ $contact->comments }}</div>
    </div>
</div>
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html><?php

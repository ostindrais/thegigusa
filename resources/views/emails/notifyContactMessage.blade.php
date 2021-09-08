<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
<div class="container">
    <div class="row">New The GIG USA Contact Message</div>
    <div class="row">
        A new contact message has been added to The GIG USA's database:
    </div>
    <div class="row">
        <div class="col-sm">Name:</div>
        <div class="col-sm">{{ $contactMessage->name }}</div>
    </div>
    <div class="row">
        <div class="col-sm">Email Address:</div>
        <div class="col-sm">{{ $contactMessage->email }}</div>
    </div>
    <div class="row">
        <div class="col-sm">Message:</div>
        <div class="col-sm">{{ $contactMessage->message }}</div>
    </div>
</div>
@include('layout.partials.footer')
</body>
</html><?php

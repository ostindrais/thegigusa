<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
<div class="container">
    <div class="row">Welcome to The GIG USA!</div>
    <div class="row">
        Thank you for reaching out to us. We've got your email address on file now. We'll be sure to keep you posted on any future developments.
    </div>
    <div class="row">
        So we can make sure we've got the right email address, click this link to verify it: <a href="<?= $url . '/verify?email=' . $contact->email ?>">Verify Address</a>.
    </div>
    <div class="row">
        If you wish to opt out from any future emails, click this link to unsubscribe: <a href="<?= $url . '/unsubscribe?email=' . $contact->email ?>">Unsubscribe from Emails</a>.
    </div>
</div>
@include('layout.partials.footer')
</body>
</html><?php

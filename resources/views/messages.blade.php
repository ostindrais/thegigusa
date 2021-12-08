@extends('layout.mainlayout')
@section('content')
<div class="container">
    <form method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <table id="messages" class="display">
                <thead>
                    <tr>
                        <th>Mark as Spam</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        <td><input type="checkbox" class="checkSpam" name="isSpam[{{ $message->id }}]" /></td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td><label for="checkSpamAll">Select All&nbsp;<input type="checkbox" class="checkSpam" name="isSpamAll" id="checkSpamAll" /></label></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Mark Spam" /></div>
        </div>
    </div>
    </form>
</div>
@endsection
@section('javascripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#messages').DataTable();
        });
        $('#checkSpamAll').click(function () {
            if ($(this).prop('checked')) {
                $('.checkSpam').prop('checked', true);
            } else {
                $('.checkSpam').prop('checked', false);
            }
        });
    </script>
@endsection

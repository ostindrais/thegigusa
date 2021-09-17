@extends('layout.mainlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table id="messages">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('javascripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#messages').DataTable();
        });
    </script>
@endsection

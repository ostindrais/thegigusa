@extends('layout.mainlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table id="contacts">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Type</th>
                        <th>VIP</th>
                        <th>Verified Email</th>
                        <th>Subscribed</th>
                        <th>Comments</th>
                        <th>Create Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ ucwords($contact->contactType) }}</td>
                        <td>{{ $contact->vip == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $contact->emailIsVerified == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $contact->subscribed == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $contact->comments }}</td>
                        <td>{{ $contact->created_at }}</td>
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
            $('#contacts').DataTable();
        });
    </script>
@endsection

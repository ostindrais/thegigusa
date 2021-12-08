@extends('layout.mainlayout')
@section('content')
<div class="container">
    <form method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <table id="contacts" class="display">
                <thead>
                    <tr>
                        <th>Mark as Spam</th>
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
                        <td><input type="checkbox" class="checkSpam" name="isSpam[{{ $contact->id }}]" /></td>
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
                    <tr>
                        <td><label for="checkSpamAll"><input type="checkbox" class="checkSpam" name="isSpamAll" id="checkSpamAll" />&nbsp;Select All</label></td>
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
            $('#contacts').DataTable();
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

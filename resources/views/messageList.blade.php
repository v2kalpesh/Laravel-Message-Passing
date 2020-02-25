@extends('home')


@section('messageList')
<div class="container" style="margin-right:15px;">
                    <h3>Message List</h3>
                    <table border = "1">
                    <tr>
                    <td>Message</td>
                    <td>Category Id</td>
                    </tr>
                    @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->cat_id }}</td>
                    </tr>
                    @endforeach
                    </table>    
</div>
@endsection
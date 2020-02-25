@extends('home')


@section('addMessage')
        <div class="container" style="margin-right:15px;">       
            <form action="insert">
                <h3>Add Message</h3>
                Message : <input type="text" name="message" required /> <br />
                Category id : <input type="integer" name="catid" required /> <br />
                <input type="submit" value="Add Message" class="btn btn-outline-success" />
                <br /><br />
            </form>
        </div>
@endsection
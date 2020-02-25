@extends('home')


@section('addCategory')
            <div class="container" style="margin-right:15px;">
                    <form action="/create">
                    <h3>Add Category</h3>
                        Category Name : <input type="text" name="catname" required/> <br />
                        Category Parent_id : <input type="integer" name="cpid" required/> <br />
                        <input type="submit" value="Add Category" class="btn btn-outline-primary" />
                        <br /><br />
                        </form>
            </div>
@endsection
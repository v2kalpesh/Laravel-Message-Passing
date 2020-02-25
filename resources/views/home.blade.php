@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row border-between">
        <div class="col-sm-3 col-md-6 col-lg-4">
            <div>
                <h3 style="margin:30px;">Category</h3>                    
            </div>
            <div >
                <a href="/category" style="margin:50px;" onclick="mycategory()">List Category</a>
            </div>
            <div>
            <a href="/addcategory" style="margin:50px;" onclick="addcategory()">Add Category</a>
            </div>
            <div>
                <h3 style="margin:30px;">Message</h3>                    
            </div>
            <div>
                <a href="/message" style="margin:50px;" onclick="mymessage()">List Message</a>
            </div>
            <div>
                <a href="/addmessage" style="margin:50px;" onclick="addmessage()">Add Message</a>
            </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h2>Welcome to our site {{ Auth::user()->name }}</h2><br/>
                
                <div class="content">
                    @yield('categoryList')
                </div>


                <div class="content">
                    @yield('addCategory')
                </div>

                <div class="content">
                    @yield('messageList')
                </div>

                <div class="content">
                    @yield('addMessage')
                </div>

        </div>
    </div>
</div>
      
@endsection
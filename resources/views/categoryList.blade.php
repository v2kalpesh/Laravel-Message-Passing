@extends('home')


@section('categoryList')

                    <h3>Category List</h3> 
                    
                    <table border = "1">
                     <tr>
                     <td>Category Name</td>
                     <td>Category Parent Id</td>
                     </tr>
                       @foreach ($categorys as $category)
                       <tr>
                         <td>{{ $category->catname }}</td>
                         <td>{{ $category->cat_parent_id }}</td>
                        </tr>
                       @endforeach
                    <br />
@endsection               
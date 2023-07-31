@extends('layouts.main')
@section('MainContent')

@php
use App\Models\Category;
$categorys = Category::all();

@endphp
<div class="row form-container">
    <div class="col-md-3" >
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="name" id="name" class="form-control"  style="width: 400px; height: 40px;">
            </div>
            <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
        </form>
    </div>
    <div class="col-md-3" >
        <table class="table table-success table-striped" style="width: 400px ">
            <thead>
            <tr style="text-align: center;">
                <th>ID</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($categorys as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>   <a class="btn btn-primary" href="{{route('category.edit',$category->id)}}">
                   Edit
                 </a>
                </td>
                <td>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" id="btn-delete">
                           Delete
                        </button>
                     </form>
                </td>
                <script>

                    $(document).ready(function() {
                       $("#btn-delete").click(function() {
                          alert("Delete successfully");
                      });
                      $("#btn-primary").click(function() {
                         alert("Added successfully");
                        });
                    });
                 </script>
            </tr>
            @endforeach
        </tbody>
        </table>
        
 


    </div>

</div>


@stop
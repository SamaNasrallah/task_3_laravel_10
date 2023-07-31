@extends('layouts.main')
@section('MainContent')

<div class="row form-container">
    <div class="col-md-12" >
        <h2>Course Details {{$course->category->name}}  :</h2>
       <h4 style="color: rgb(48, 48, 175)"> Course Title  : <span style="color: black">{{$course->course_title}}</span> </h4>
       <h4 style="color: rgb(48, 48, 175)">Category Name : <span style="color: black"> {{$course->category->name}}</span></h4>
       <h4 style="color: rgb(48, 48, 175)">Hours : <span style="color: black">{{$course->hours}}</span></h4>
       <h4 style="color: rgb(48, 48, 175)">Teacher : <span style="color: black">{{$course->teacher}}</span></h4>
       <h4 style="color: rgb(48, 48, 175)">Details : {!! $course->details !!}</h4>
    </div>

</div>


@stop

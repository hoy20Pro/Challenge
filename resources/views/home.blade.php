@extends('layouts.app')
@section('content')
<div id="port" class="container-fluid border my-3 text-center shadow" style="width:80%;font-family:monospace; color:darkgreen">
    <h3>Click to One Button to Get Answer</h3>
   		<a href="class/1" role="button">
		<button type="button"  class="btn font-weight-bold" value="click">Count of students Bar class</button>
	</a>
      
    		<a href="class/2" role="button">
		<button type="button" class="btn font-weight-bold" value="click">Count of students per country</button>
	</a>
 		<a href="class/3" role="button">
		<button type="button" class="btn font-weight-bold" value="click">Average age of students</button>
	</a>

      



</div> 
<div id="port" class="container-fluid border my-3 text-center shadow" style="width:80%;font-family:monospace; color:darkgreen">
   <h3>Add New Students</h3>
 {!!Form::open(['action'=>['App\Http\Controllers\HomeController@store']
                  ,'method'=>'POST','class'=>'pull-right'])!!}
                     <div class="form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('sname','',['class'=>'form-control','placeholder'=>'Student Name'])}}
                </div>
                 <div class="form-group">
                    {{Form::label('DOB','Date of Birth')}}
                    {{Form::text('DOB','',['class'=>'form-control','placeholder'=>'Student Date of Birth'])}}
                </div>
                     <div class="form-group">
                    {{Form::label('class_id','Class id')}}
                    {{Form::text('class','',['class'=>'form-control','placeholder'=>'Select class Id from 1-25'])}}
                </div>
                 <div class="form-group">
                    {{Form::label('country_id','Country id')}}
                    {{Form::text('country','',['class'=>'form-control','placeholder'=>'Select country Id from 1-25'])}}
                </div>
                <div class="form-group">
                        {{Form::Submit('Add',['class'=>'btn btn-link btn-sm'])}}
                </div>    
                  {!!Form::close()!!}
</div>
       
  

@endsection
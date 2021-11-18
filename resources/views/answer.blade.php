@extends('layouts.app')
@section('content')
<div id="port" class="container-fluid border my-3 text-center shadow" style="width:80%;font-family:monospace; color:darkgreen">
@if ($id==1)              
   <h3>Count of students Bar class</h3>      
@elseif($id==2)
   <h3>Count of students per country</h3>    
   
@else
     <h3>Average age of students</h3>    
@endif
@if($data!=null && $id>0)
             <ul>
             
             @foreach ($data2 as $item2)
             
                @if ($id==1)   
                    @foreach ($data as $item)
                        @if($item2->id==$item->class_id)
                        <div class="row">
                            <div class="col-md-4"> </div>
                            <div class="col-md-2">
                               
                                <div class="row">Class Name :{{$item2->class_name}} = </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">{{$item->total}}</div>
                            </div>
                             <div class="col-md-4"> </div>
                        </div>
                        
                         
                        @endif
                    @endforeach
                
             @elseif($id==2)
             
             @foreach ($data as $item)
                        @if($item2->id==$item->country_id)
                        <div class="row">
                            <div class="col-md-2"> </div>
                            <div class="col-md-4">
                               
                                <div class="row">Country Name :{{$item2->name}} = </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">{{$item->total}}</div>
                            </div>
                             <div class="col-md-2"> </div>
                        </div>
                         
                        @endif
                    @endforeach
               
           
             @endif
             @endforeach

             </ul>
         @else
             {{$data}}
        @endif
       
            </div>
@endsection
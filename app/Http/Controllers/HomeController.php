<?php

namespace App\Http\Controllers;
use App\Models\Students;
use App\Models\Classes;
use App\Models\Countries;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Students::groupBy('class_id')
->selectRaw('count(*) as total, class_id')
->get();
                $data2=Classes::get();
      


               
                return view('welcome')->with('data',$data)->with('data2',$data2);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'sname'=>'required',
        'DOB'=>'required|date|date_format:Y-m-d|before:today|nullable',
        'class'=>'required',
        'country'=>'required'
            
      ]);
      $student_name=$request->sname;
      $sdob=$request->DOB;
      $classid=$request->class;
      $countryid=$request->country;
      $student=new Students;
      $student->class_id=$classid;
       $student->name=$student_name;
      $student->country_id=$countryid;
     
      $student->data_of_birth=$sdob;
      $student->save();
      return redirect('/')->with('success','Students Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id==1)
            {
                $data = Students::groupBy('class_id')
->selectRaw('count(*) as total, class_id')
->get();
                $data2=Classes::get();
      


               
                return view('answer')->with('data',$data)->with('id',$id)->with('data2',$data2);
            }
        elseif ($id ==2){
            $data = Students::groupBy('country_id')
->selectRaw('count(*) as total, country_id')
->get();
               
                 $data2=Countries::get();
                return view('answer')->with('data',$data)->with('id',$id)->with('data2',$data2);
        }
        else {
            $age=0;
          
          $data = Students::get('data_of_birth');
          $length=count($data);
           foreach ($data as $key => $value) {
                   $age+=Carbon::parse($value->data_of_birth)->age;
           
                }
            
            return view('answer')->with('data',$age/$length)->with('id',0);
        }
      

         
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

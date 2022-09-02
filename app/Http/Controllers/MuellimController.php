<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\subject;

class MuellimController extends Controller
{
    public function index()
    {
        $teacher = new teacher();
        //return subject::with('ders')->get();
        $teachers = teacher::join('subjects', 'teachers.subject_id', '=', 'subjects.id')
        ->select('teachers.*', 'subjects.subject')
        ->get();

        //$teachers = $teacher::all();
        //return $teachers = $teacher::find(2);
        //return $teachers = $teacher::Where('muellim','Hesen')->get();
        //return $teachers = $teacher::Where('muellim','!=','Hesen')->where('yas','>',20)->get();
        //return $teachers = $teacher::Where(['muellim'=>'Rasad','yas'=>25])->get();
        //return $teachers = $teacher::Where('muellim','Hesen')->orWhere('muellim','Rasad')->get();
        //return $teachers = $teacher::Select('muellim','tel as telefon')->get();
        //return $teachers = $teacher::orderBy('id','desc')->get();


        return view('teacher',compact('teachers'));

    }
    public function elave(Request $req){
        $teacher = new teacher();

        $teacher->muellim =$req->muellim;
        $teacher->haqqinda =$req->haqqinda;
        $teacher->yas =$req->yas;
        $teacher->tel =$req->telefon;

        $teacher->save();
        return redirect()->route('muellim')->with('ugur', 'Emeliyyat ugurla yerine yetirildi');
    }
    public function delete($id){
        teacher::find($id)->delete();
        return redirect()->route('muellim')->with('ugur', 'Ugurla silindi');


    }

    public function duzelt($id){
        $teacher = teacher::find($id);
        return view('editmuellime',compact('teacher'));
    }

    public function yenile(Request $req, $id){

        $teacher = teacher::find($id);

        $teacher->muellim =$req->muellim;
        $teacher->haqqinda =$req->haqqinda;
        $teacher->yas =$req->yas;
        $teacher->tel =$req->telefon;
        $teacher->status = $req->status;
        $teacher -> save();

        return redirect()->route('muellim')->with('ugur', 'Ugurla yenilendi');
    }
}

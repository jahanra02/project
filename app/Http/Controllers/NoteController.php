<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

use Auth;


class NoteController extends Controller
{
    public function Note(){
        $Note= Note::paginate(10); // paginate, simplePaginate,  cursorPaginate
        return view('admin.Note',[
            'Note'=>$Note,
        ]);
    }
    
}

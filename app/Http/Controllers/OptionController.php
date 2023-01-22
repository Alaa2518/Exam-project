<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    //

    public function destroy($id,$Qid)
    {

        Option::findOrFail($id)->delete();

        return redirect('question/show/' . $Qid);
    }
}

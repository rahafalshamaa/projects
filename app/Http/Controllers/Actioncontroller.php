<?php

namespace App\Http\Controllers;

use App\action;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Action as NotificationsAction;

class Actioncontroller extends Controller
{
    //
    public function index()
    {
        $customers = Customer::all();
        return view('action.add' , compact('customers'));
    }
    public function store(Request $request)
    {
        $action =new Action;
        $action->action_type = $request->action_type;
        $action->subject = $request->subject;
        $action->date = $request->date;
        $action->customers_id = $request->customers_id;
        if(isset( $request->image))
        {
            $image_name = rand() . time() . '.' . $request->image->getClientOriginalExtension();
        $action->image = $image_name;
        $request->image->move('upload/actions', $image_name);

        }
        $action->save();
        return back();

    }
    public function all($id)
    {
        // $c=Customer::find($id);
        // $actions=$c->actions;
        $actions =Action::where('customers_id' , '=' , $id)->get();
        return view('action.all' , compact('actions'));
    }
    // public function delete($id)
    // {
    //     $action=Action::find($id);
    //     $action->delete();
    //     return view('action.all');
    // }
    public function search()
    {
        $search_text=$_GET['query'];
        $actions=Action::where('action_type','LIKE','%'.$search_text.'%')->get();
        return view('action.search' , compact('actions'));
    }
    public function sort_type()
    {
        $actions = DB::table('actions')
        ->orderBy('action_type')
        ->get();
        return view('action.sort.sortType' , compact('actions'));

    }
    public function sort_date_desc()
    {
        $actions = DB::table('actions')
        ->orderBy('date', $direction='desc')
        ->get();
        return view('action.sort.sort_date_desc' , compact('actions'));

    }
    public function sort_date_asc()
    {
        $actions = DB::table('actions')
        ->orderBy('date', $direction='asc')
        ->get();
        return view('action.sort.sort_date_asc' , compact('actions'));
    }
    public function showbydate()
    {
        $first_date=$_GET['first_date'];
        $last_date=$_GET['last_date'];
        $actions=Action::whereBetween('date', [$first_date, $last_date])->get();
        return view('action.showbydate' , compact('actions'));
    }
    public function showTypeByDate()
    {
        $first_date=$_GET['fd'];
        $last_date=$_GET['ld'];
        $type=$_GET['typedate'];
        $actions=Action::whereBetween('date', [$first_date, $last_date])->where('action_type','LIKE','%'.$type.'%')->get();
        return view('action.showTypeByDate' , compact('actions'));

    }
}

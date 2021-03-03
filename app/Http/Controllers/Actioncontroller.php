<?php

namespace App\Http\Controllers;

use App\action;
use App\Customer;
use Illuminate\Http\Request;
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

        $action->save();
        return back();

    }
    public function all($id)
    {
        $c=Customer::find($id);
        // $actions=$c->actions;
        $actions =Action::where('customers_id' , '=' , $id)->get();
        return view('action.all' , compact('actions'));
    }
}
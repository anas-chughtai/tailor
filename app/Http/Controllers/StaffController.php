<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all()->where('staff_delete', '0');
        return view('staff/index')->with('staffs', $staffs);
    }

    public function create()
    {
        return view('staff/create');
    }

    public function store(Request $request)
    {
        $check = Staff::where('staff_phone', $request->staff_phone)->first();
        if ($check){
            Session::flash('message', 'Staff phone number already exist. Please enter a unique phone number');
            return redirect('staffs/create');
        }
        $staff = new Staff($request->all());

        if($staff->save())
        {
            Session::flash('notice','Staff was successfully created');
            return redirect('staffs');
        }
        else
        {
            Session::flash('alert','Staff was not successfully created');
        }
    }

    public function show($id)
    {
        $staff = Staff::find($id);
        $staff_salary = Salary::all()->where('staff_id', $id);
        return view('staff/show')->with('staff', $staff)->with('staff_salary', $staff_salary);
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff/edit')->with('staff', $staff);
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->update($request->all());

        if($staff->save())
        {
            Session::flash('notice','Staff was successfully updated');
            return redirect('staffs');
        }
        else
        {
            Session::flash('alert','Staff was not successfully updated');
            return redirect('staffs/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->staff_delete ='1';
        
        if ($staff->save())
        {
            return redirect('staffs');
        }   
    }
}

<?php

namespace App\Http\Controllers;

use App\Salary;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class SalaryController extends Controller
{
    public function index()
    {
        $salaries = Salary::all();
        return view('salary/index')->with('salaries', $salaries);
    }

    public function create()
    {
        $staff = Staff::where('staff_delete', '0')->pluck('staff_name', 'id');
        return view('salary/create')->with('staff', $staff);
    }

    public function store(Request $request)
    {
        $salary = new Salary($request->all());

        if ($salary->save()) {
            Session::flash('notice', 'Salary was successfully created');
            return redirect('salaries');
        } else {
            Session::flash('alert', 'Salary was not successfully created');
            return redirect('salaries/create');
        }
    }

    public function show($id)
    {
        $salary = Salary::find($id);
        return view('salary/show')->with('salary', $salary);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

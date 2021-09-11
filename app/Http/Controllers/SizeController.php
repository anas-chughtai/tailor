<?php

namespace App\Http\Controllers;

use App\Coat;
use App\Customer;
use App\KameezShalwar;
use App\KameezTrouser;
use App\Pant;
use App\PrinceCoat;
use App\SafariSuite;
use App\Sherwani;
use App\Shirt;
use App\Size;
use App\ThreePiece;
use App\TwoPiece;
use App\WaistCoat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SizeController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('sizes.index', compact('customers'));
    }

    public function create()
    {
        $customer = Customer::all()->pluck('phone', 'id');
        return view('sizes.create', compact('customer'));
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('sizes.show')->with('customer', $customer);
    }

    public function kameez_shalwar(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->kameez_shalwar_id == null) {
                $data = KameezShalwar::create($request->all());
                $customer->update(['kameez_shalwar_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = KameezShalwar::create($request->all());
            $newCustomer->update(['kameez_shalwar_id' => $data->id]);
            return 'success';
        }
    }

    public function kameez_shalwar_edit($id)
    {
        $kameez_shalwar = KameezShalwar::find($id);
        return view('sizes.edit.kameez_shalwar', compact('kameez_shalwar'));
    }

    public function kameez_shalwar_print($id)
    {
        $kameez_shalwar = KameezShalwar::find($id);
        return view('sizes.print.kameez_shalwar', compact('kameez_shalwar'));
    }

    public function kameez_shalwar_update(Request $request, $id)
    {
        $kameez_shalwar = KameezShalwar::find($id);
        $kameez_shalwar->update($request->all());
        Session::flash('notice', 'KameezShalwar was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function kameez_trouser(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->kameez_trouser_id == null) {
                $data = KameezTrouser::create($request->all());
                $customer->update(['kameez_trouser_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = KameezTrouser::create($request->all());
            $newCustomer->update(['kameez_trouser_id' => $data->id]);
            return 'success';
        }
    }

    public function kameez_trouser_edit($id)
    {
        $kameez_trouser = KameezTrouser::find($id);
        return view('sizes.edit.kameez_trouser', compact('kameez_trouser'));
    }

    public function kameez_trouser_print($id)
    {
        $kameez_trouser = KameezTrouser::find($id);
        return view('sizes.print.kameez_trouser', compact('kameez_trouser'));
    }

    public function kameez_trouser_update(Request $request, $id)
    {
        $kameez_trouser = KameezTrouser::find($id);
        $kameez_trouser->update($request->all());
        Session::flash('notice', 'KameezTrouser was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function shirt(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->shirt_id == null) {
                $data = Shirt::create($request->all());
                $customer->update(['shirt_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = Shirt::create($request->all());
            $newCustomer->update(['shirt_id' => $data->id]);
            return 'success';
        }
    }

    public function shirt_edit($id)
    {
        $shirt = Shirt::find($id);
        return view('sizes.edit.shirt', compact('shirt'));
    }

    public function shirt_print($id)
    {
        $shirt = Shirt::find($id);
        return view('sizes.print.shirt', compact('shirt'));
    }

    public function shirt_update(Request $request, $id)
    {
        $shirt = Shirt::find($id);
        $shirt->update($request->all());
        Session::flash('notice', 'Shirt was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function two_piece(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->two_piece_id == null) {
                $data = TwoPiece::create($request->all());
                $customer->update(['two_piece_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = TwoPiece::create($request->all());
            $newCustomer->update(['two_piece_id' => $data->id]);
            return 'success';
        }
    }

    public function two_piece_edit($id)
    {
        $two_piece = KameezShalwar::find($id);
        return view('sizes.edit.two_piece', compact('two_piece'));
    }

    public function two_piece_print($id)
    {
        $two_piece = KameezShalwar::find($id);
        return view('sizes.print.two_piece', compact('two_piece'));
    }

    public function two_piece_update(Request $request, $id)
    {
        $two_piece = TwoPiece::find($id);
        $two_piece->update($request->all());
        Session::flash('notice', 'TwoPiece was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function three_piece(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->three_piece_id == null) {
                $data = ThreePiece::create($request->all());
                $customer->update(['three_piece_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = ThreePiece::create($request->all());
            $newCustomer->update(['three_piece_id' => $data->id]);
            return 'success';
        }
    }

    public function three_piece_edit($id)
    {
        $three_piece = ThreePiece::find($id);
        return view('sizes.edit.three_piece', compact('three_piece'));
    }

    public function three_piece_print($id)
    {
        $three_piece = ThreePiece::find($id);
        return view('sizes.print.three_piece', compact('three_piece'));
    }

    public function three_piece_update(Request $request, $id)
    {
        $three_piece = ThreePiece::find($id);
        $three_piece->update($request->all());
        Session::flash('notice', 'ThreePiece was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function waist_coat(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->waist_coat_id == null) {
                $data = WaistCoat::create($request->all());
                $customer->update(['waist_coat_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = WaistCoat::create($request->all());
            $newCustomer->update(['waist_coat_id' => $data->id]);
            return 'success';
        }
    }

    public function waist_coat_edit($id)
    {
        $waist_coat = WaistCoat::find($id);
        return view('sizes.edit.waist_coat', compact('waist_coat'));
    }

    public function waist_coat_print($id)
    {
        $waist_coat = WaistCoat::find($id);
        return view('sizes.print.waist_coat', compact('waist_coat'));
    }

    public function waist_coat_update(Request $request, $id)
    {
        $waist_coat = WaistCoat::find($id);
        $waist_coat->update($request->all());
        Session::flash('notice', 'WaistCoat was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function sherwani(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->sherwani_id == null) {
                $data = Sherwani::create($request->all());
                $customer->update(['sherwani_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = Sherwani::create($request->all());
            $newCustomer->update(['sherwani_id' => $data->id]);
            return 'success';
        }
    }

    public function sherwani_edit($id)
    {
        $sherwani = Sherwani::find($id);
        return view('sizes.edit.sherwani', compact('sherwani'));
    }

    public function sherwani_print($id)
    {
        $sherwani = Sherwani::find($id);
        return view('sizes.print.sherwani', compact('sherwani'));
    }

    public function sherwani_update(Request $request, $id)
    {
        $sherwani = Sherwani::find($id);
        $sherwani->update($request->all());
        Session::flash('notice', 'Sherwani was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function coat(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->coat_id == null) {
                $data = Coat::create($request->all());
                $customer->update(['coat_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = Coat::create($request->all());
            $newCustomer->update(['coat_id' => $data->id]);
            return 'success';
        }
    }

    public function coat_edit($id)
    {
        $coat = Coat::find($id);
        return view('sizes.edit.coat', compact('coat'));
    }

    public function coat_print($id)
    {
        $coat = Coat::find($id);
        return view('sizes.print.coat', compact('coat'));
    }

    public function coat_update(Request $request, $id)
    {
        $coat = Coat::find($id);
        $coat->update($request->all());
        Session::flash('notice', 'Coat was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function prince_coat(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->prince_coat_id == null) {
                $data = PrinceCoat::create($request->all());
                $customer->update(['prince_coat_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = PrinceCoat::create($request->all());
            $newCustomer->update(['prince_coat_id' => $data->id]);
            return 'success';
        }
    }

    public function prince_coat_edit($id)
    {
        $prince_coat = PrinceCoat::find($id);
        return view('sizes.edit.prince_coat', compact('prince_coat'));
    }

    public function prince_coat_print($id)
    {
        $prince_coat = PrinceCoat::find($id);
        return view('sizes.print.prince_coat', compact('prince_coat'));
    }

    public function prince_coat_update(Request $request, $id)
    {
        $prince_coat = PrinceCoat::find($id);
        $prince_coat->update($request->all());
        Session::flash('notice', 'PrinceCoat was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function safari_suite(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->safari_suite_id == null) {
                $data = SafariSuite::create($request->all());
                $customer->update(['safari_suite_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = SafariSuite::create($request->all());
            $newCustomer->update(['safari_suite_id' => $data->id]);
            return 'success';
        }
    }

    public function safari_suite_edit($id)
    {
        $safari_suite = SafariSuite::find($id);
        return view('sizes.edit.safari_suite', compact('safari_suite'));
    }

    public function safari_suite_print($id)
    {
        $safari_suite = SafariSuite::find($id);
        return view('sizes.print.safari_suite', compact('safari_suite'));
    }

    public function safari_suite_update(Request $request, $id)
    {
        $safari_suite = SafariSuite::find($id);
        $safari_suite->update($request->all());
        Session::flash('notice', 'SafariSuite was successfully updated');
        return redirect(route('sizes.index'));
    }



    public function pant(Request $request)
    {
        $customer = Size::where('customer_id', $request->customer_id)->first();
        if ($customer) {
            if ($customer->pant_id == null) {
                $data = Pant::create($request->all());
                $customer->update(['pant_id' => $data->id]);
                return 'success';
            } else {
                return 'error';
            }
        } else {
            $newCustomer = Size::create(['customer_id' => $request->customer_id]);
            $data = Pant::create($request->all());
            $newCustomer->update(['pant_id' => $data->id]);
            return 'success';
        }
    }

    public function pant_edit($id)
    {
        $pant = Pant::find($id);
        return view('sizes.edit.pant', compact('pant'));
    }

    public function pant_print($id)
    {
        $pant = Pant::find($id);
        return view('sizes.print.pant', compact('pant'));
    }

    public function pant_update(Request $request, $id)
    {
        $pant = Pant::find($id);
        $pant->update($request->all());
        Session::flash('notice', 'Pant was successfully updated');
        return redirect(route('sizes.index'));
    }
}

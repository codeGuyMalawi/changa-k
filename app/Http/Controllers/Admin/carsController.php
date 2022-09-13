<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use Illuminate\Http\Request;
use Session;

class carsController extends Controller
{
    public function index()
    {

        $cars = Cars::all();

        return view('pages.admin.cars')
            ->with('cars', $cars);

    }

    public function store(request $request)
    {
        $car = new Cars;
        //Handling files
        if ($request->hasFile('file')) {
            //Storing file in folder//
            //Get Filename with its extension
            $file = $request->file('file');
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename

                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //Get Just Ext

                $extension = $file->getClientOriginalExtension();

                //Filename to store

                $imageNameToStore = $filename . '_' . time() . '.' . $extension;

                //upload file

                $path = $file->storeAs('public/vehicles', $imageNameToStore);

                $file->move(public_path('images/vehicles'), $imageNameToStore);

            

        } else {
            $imageNameToStore = "default.png";

        }
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->capacity = $request->input('capacity');
        $car->fuel = $request->input('fuel');
        $car->transmission = $request->input('transmission');
        $car->amount = $request->input('amount');
        $car->status = $request->input('status');
        $car->quantity = $request->input('quantity');
        $car->img = $imageNameToStore;
        $car->save();

        return back()->with('message', 'Vehicle Added Successfully!');
    }
    public function edit($id)
    {

        $cars= Cars::find($id);
        return view('pages.admin.edit-car')
            ->with('cars', $cars);

    }


    public function update(request $request, $id)
    {

        $car = Cars::findOrFail($id);
        //Handling files
        if ($request->hasFile('file')) {
            //Storing file in folder//
            //Get Filename with its extension
            $file = $request->file('file');
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename

                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //Get Just Ext

                $extension = $file->getClientOriginalExtension();

                //Filename to store

                $imageNameToStore = $filename . '_' . time() . '.' . $extension;

                //upload file

                $path = $file->storeAs('public/vehicles', $imageNameToStore);

                $file->move(public_path('images/vehicles'), $imageNameToStore);

            

        } else {
            $imageNameToStore = "default.png";

        }
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->capacity = $request->input('capacity');
        $car->fuel = $request->input('fuel');
        $car->transmission = $request->input('transmission');
        $car->amount = $request->input('amount');
        $car->status = $request->input('status');
        $car->quantity = $request->input('quantity');
        $car->img = $imageNameToStore;
        $car->update();

        return redirect("./cars")->with('message', 'Data updated Successfully');


    }

    public function delete($id)
    {

        $car= Cars::findOrFail($id);
        $car->delete();
        return back()->with('message', 'Vehicle Deleted Successfully!');

    }

}

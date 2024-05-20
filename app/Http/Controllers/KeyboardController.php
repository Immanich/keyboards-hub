<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyboard;
use Barryvdh\DomPDF\Facade\Pdf;

class KeyboardController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function index() {
        // $keyboards = Keyboard::orderBy('brand')->get();

        // return view('index', [
        //     'keyboards' => $keyboards
        // ]);
        $keyboards = Keyboard::all();

    return view('index', compact('keyboards'));
    }

    public function detail($model) {
        $keyboards = Keyboard::where('model', $model)->firstOrFail();

        return view('detail', compact('keyboards'));
    }

    public function importCSV(Request $request) {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        $csvData = array_map('str_getcsv', file($file));

        foreach($csvData as $row) {
            $brand = $row[0];
            $model = $row[1];
            $type = $row[2];
            $color = $row[3];
            $price = $row[4];

            Keyboard::create([
                'brand' => $brand,
                'model' => $model,
                'type' => $type,
                'color' => $color,
                'price' => $price,
            ]);
        }

        return redirect()->route('Keyboard.index')->with('success', 'New keyboards are imported successfully.');
    }

    public function store(Request $request) {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => ['required', 'string', 'max:50'],
            // 'type' => ['required', 'string', 'max:50', 'in:mechanical,membrane,ergonomic'],
            'color' => 'required',
            'price' => 'required|numeric',
        ]);

        Keyboard::create([
            'brand'=>$request->brand,
            'model'=>$request->model,
            'type'=>$request->type,
            'color'=>$request->color,
            'price'=>$request->price,
        ]);
    }

    public function generateCSV() {
        $keyboards = Keyboard::orderBy('brand')->get();

        $filename = '../storage/keyboards.csv';

        $file = fopen($filename, 'w+');

        foreach($keyboards as $k) {
            fputcsv($file, [
                $k->brand,
                $k->model,
                $k->type,
                $k->color,
                $k->price,
            ]);
        }

        fclose($file);

        return response()->download($filename);
    }

    public function pdf() {
        $keyboards = Keyboard::orderBy('brand')->get();

        $pdf = Pdf::loadView('index', compact('keyboards'));

        return $pdf->stream('index.pdf');
    }

    
}

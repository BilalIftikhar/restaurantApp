<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\category;

class CashierController extends Controller
{
    //
    public function index()
    {
        $categories = category::all();
        return view('cashier.index')->with('categories', $categories);
    }
    public function getTable()
    {
        $tables = Table::all();
        $html = '';
        foreach ($tables as $table) {
            $html .= '<div class="col-md-2">';
            $html .= '<button class="btn btn-primary">
            <img class="img-fluid" src="' . url('/images/table.png') . '" />
            <span class="badge badge-success"> ' . $table->name . ' </span>
            </button>';
            $html .= '</div>';
        }
        return $html;
    }
    public function getMenuTable($id)
    {
        return '<h1>helllo bilal </h1>';
    }
}

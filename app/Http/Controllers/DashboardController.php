<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\facades\DB;
use Session;

class DashboardController extends Controller
{
    public function index(){
    	$data = DB::table('items')
                        ->select('nama_items', 'items.picture', 'deskription', 'price')
                        ->get();
        return view('dashboard.dashboard', compact('data'));
}

}

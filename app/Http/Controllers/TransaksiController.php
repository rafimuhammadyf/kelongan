<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Transaksi;
use App\Models\Item;
use App\Models\Merchant;
use Illuminate\Support\facades\DB;
use Session;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = DB::table('transaksi')
                        ->select('transaksi.id', 'transaksi.id_items', 'items.nama_items', 'transaksi.qty','transaksi.total_price', 'items.id_merchant')
                        ->join('items', 'transaksi.id', '=', 'items.id')
                        ->get();
        
        return view('transaksi.transaksi', compact('data'));
    }

    public function create()
    {
        return view('transaksi.transaksi_create');
    }


    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'id' => 'required',
        //     'nama_items' => 'required',
        //     'qty' => 'required',
        //     'total_price' => 'required'
        // ]);
        // $picture = rand().$request->file('picture')->getClientOriginalName();
        // $request->file('picture')->move(base_path("./public/Uploads"), $picture);
    
   
        $transaksi = new transaksi();
        $transaksi->id_items = $request->id_items;
        $transaksi->nama_items = $request->items_name;
        $transaksi->qty = $request->qty;
        $transaksi->total_price = $request->total_price;
        $transaksi->id_merchant = $request->id_merchant;
        $transaksi->save();
        
        return redirect('/transaksi')->with('alert_pesan', 'Data telah disimpan');
            
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $data = transaksi::where('id', $id)->get();
        return view('Transaksi.transaksi_update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        DB::table('transaksi')->where('id',$request->id)->update ([
            'id_items' => $request->id_items,
            'nama_items' => $request->items_name,
            'qty' => $request->qty,
            'total_price' => $request->total_price,
            'id_merchant' => $request->id_merchant
            ]);
            // $picture = rand().$request->file('picture')->getClientOriginalName();
            // $request->file('picture')->move(base_path("./public/Uploads"), $picture);
            
            
        // $items = item::where('id', $id)->first();
        // $items->nama_items = $request->nama_items;
        // $items->picture = $picture;
        // $items->type = $request->type;
        // $items->deskription = $request->deskription;
        // $items->price = $request->price;
        // $items->stock = $request->stock;
        // $items->id_merchant = $request->id_merchant;
        // $items->save();
        
        return redirect('/transaksi')->with('alert_pesan', 'Data telah diubah');

    }
    public function destroy($id)
    {
        $data = transaksi::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('/transaksi')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('/transaksi')->with('alert_message', 'ID tidak ditemukan!');
    }



}
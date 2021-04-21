<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Validator;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Merchant;
use Illuminate\Support\facades\DB;
use Session;
 
class CartController extends Controller
{
    public function index()
    {

        $data = DB::table('cart')
                        ->select('items.nama_items', 'items.picture', 'items.price', 'cart.qty', 'merchant.nama_merchant', 'items.stock')
                        ->join('items', 'items.id', '=', 'cart.id_items')
                        ->join('merchant', 'merchant.id', '=', 'items.id_merchant')
                        ->get();
        
        return view('cart.cart', compact('data'));
    }

    // public function create()
    // {
    //     return view('item.item_create');
    // }


    public function store(Request $request)
    {
        $this->validate($request, [
            'id_items' => 'required',
            'id_users' => 'required',
            'qty' => 'required'
        ]);
        // $picture = rand().$request->file('picture')->getClientOriginalName();
        // $request->file('picture')->move(base_path("./public/Uploads"), $picture);
    
   
        $carts = new cart();
        $carts->id_items = $request->id_items;
        $carts->id_users = $request->id_users;
        $carts->qty = $request->qty;
        $carts->save();
        
        return redirect('/cart')->with('alert_pesan', 'Data telah disimpan');
            
    }
    // public function show($id)
    // {
    //     //
    // }
    // public function edit($id)
    // {
    //     $data = item::where('id', $id)->get();
    //     return view('Item.item_update', compact('data'));
    // }
    public function update(Request $request, $id)
    {
        DB::table('cart')->where('id',$request->id)->update ([
            'id_items' => $request->id_items,
            'id_users' => $request->id_users,
            'qty' => $request->qty
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
        
        return redirect('/cart')->with('alert_pesan', 'Data telah diubah');

    }
    public function destroy($id)
    {
        $data = cart::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('/cart')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('/cart')->with('alert_message', 'ID tidak ditemukan!');
    }



}
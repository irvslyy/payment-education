<?php

namespace App\Http\Controllers;
use App\Pembayaran;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;
use DB;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $request;

    public function __construct(Request $request)
    {
       $this->request = $request;

       Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
       Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
       Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
       Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    } 

    public function index()
    {
        return view('pembayaran.pembayaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function submitPembayaran(Request $request)
    {
        \DB::transaction(function(){
            // Save donasi ke database
            $pembayaran = Pembayaran::create([
                'name' => $this->request->name,
                'email' => $this->request->email,
                'amount' => floatval($this->request->amount),
                'note' => $this->request->note,
            ]);

            // $pembayaran = new Pembayaran;
            // $pembayaran->pembayaran_name = $request->$pembayaran_name;
            // $pembayaran->pembayaran_email = $request->$pembayaran_email;
            // $pembayaran->amount = $request->amount;
            // $pembayaran->note = $request->note;
 
            // Buat transaksi ke midtrans kemudian save snap tokennya.
            $payload = [
                'transaction_details' => [
                    'order_id'      => $pembayaran->id,
                    'gross_amount'  => $pembayaran->amount,
                ],
                'customer_details' => [
                    'first_name'    => $pembayaran->pembayaran_name,
                    'email'         => $pembayaran->pembayaran_email,
                    // 'phone'         => '08888888888',
                    // 'address'       => '',
                ],
             
            ];
            $snapToken = Veritrans_Snap::getSnapToken($payload);
            $pembayaran->snap_token = $snapToken;
            $pembayaran->save();
 
            // Beri response snap token
            $this->response['snap_token'] = $snapToken;
        });
 
        return response()->json($this->response);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

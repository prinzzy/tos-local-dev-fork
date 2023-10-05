<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Item;
use Carbon\Carbon;
use App\Models\User;
use GuzzleHttp\Client;
use Auth;

class GateRelokasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Gate Rlokasi';
        $item = Item::whereIn('order_service', ['sp2iks', 'sp2icon', 'sppsrelokasipelindo'])->whereIn('ctr_intern_status',  ['11', '15'] )->get();
        $item_confirmed = Item::whereiN('ctr_intern_status',  ['12','13'] )->get();
        return view('gate.relokasi.main', compact('item', 'title', 'item_confirmed'));
    }

    public function permit(Request $request)
    {
        $container_key = $request->container_key;
        $item = Item::where('container_key', $container_key)->first();

        if ($item) {
            if ($item->order_service === 'sp2iks') {
                $item->update([
                    'ctr_intern_status' => 12,
                    'ctr_status' => 'MTY',
                    'ctr_active_yn' => 'Y',
                ]);
                $client = new Client();
    
                $fields = [
                    "container_key" => $request->container_key,
                    "ctr_intern_status" => "12",
                ];
                var_dump($fields);
                die();
                $url = getenv('API_URL') . '/delivery-service/container/confirmGateIn';
                $req = $client->post(
                    $url,
                    [
                        "json" => $fields
                    ]
                );
                $response = $req->getBody()->getContents();
                $result = json_decode($response);
                // var_dump($result);
                // die();
                if ($req->getStatusCode() == 200 || $req->getStatusCode() == 201) {
                    // $item->save();
        
                    return response()->json([
                        'success' => true,
                        'message' => 'Silahkan Menuju Bagian Stripping',
                        'data'    => $item,
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'updated successfully!',
                    ]);
                }
            }elseif ($item->order_service === 'sppsrelokasipelindo') {
                $item->update([
                    'ctr_intern_status' => 12,
                ]);
                $client = new Client();
    
                $fields = [
                    "container_key" => $request->container_key,
                    "ctr_intern_status" => "12",
                ];
                // dd($fields, $item->getAttributes());
        
                $url = getenv('API_URL') . '/delivery-service/container/confirmGateIn';
                $req = $client->post(
                    $url,
                    [
                        "json" => $fields
                    ]
                );
                $response = $req->getBody()->getContents();
                $result = json_decode($response);
                // var_dump($result);
                // die();
                if ($req->getStatusCode() == 200 || $req->getStatusCode() == 201) {
                    // $item->save();
        
                    return response()->json([
                        'success' => true,
                        'message' => 'Silahkan Menuju Bagian Stripping',
                        'data'    => $item,
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'updated successfully!',
                    ]);
                }
            }elseif ($item->order_service === 'sp2icon') {
                $item->update([
                    'ctr_intern_status' => 13,
                ]);
                $client = new Client();
    
                $fields = [
                    "container_key" => $request->container_key,
                    "ctr_intern_status" => "13",
                ];
                // dd($fields, $item->getAttributes());
                // var_dump($fields);die();
        
                $url = getenv('API_URL') . '/delivery-service/container/confirmGateIn';
                $req = $client->post(
                    $url,
                    [
                        "json" => $fields
                    ]
                );
                $response = $req->getBody()->getContents();
                $result = json_decode($response);
                var_dump($result);
                die();
                if ($req->getStatusCode() == 200 || $req->getStatusCode() == 201) {
                    // $item->save();
        
                    return response()->json([
                        'success' => true,
                        'message' => 'Silahkan Menuju Bagian Placement',
                        'data'    => $item,
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'updated successfully!',
                    ]);
                }
            }
           
        }
    }
}

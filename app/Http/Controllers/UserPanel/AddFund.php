<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Product;
use App\Models\Seller_product;
use App\Models\Admin_product;
use App\Models\Seller_invoice;
use Log;
use Redirect;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
 \DB::statement("SET SQL_MODE=''");
$product = Product::orderBy('id','DESC')->get();
$this->data['product'] = $product;
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}


public function fundHistory(Request $request)
{

   
    $user=Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = Seller_product::where('user_id',$user->id);
    if($search <> null && $request->reset!="Reset"){
    $notes = $notes->where(function($q) use($search){
        $q->Where('product_id', 'LIKE', '%' . $search . '%')
     
        ->orWhere('activeStatus', 'LIKE', '%' . $search . '%');
    });

    }

    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

    $this->data['search'] =$search;
    $this->data['level_income'] =$notes;
    $this->data['page'] = 'user.fund.fundHistory';
    return $this->dashboard_layout();

}



public function add_cart(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'products' => 'required',
            'user_id' => 'required|exists:users,username',
            
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user=Auth::user();

            if (empty($request->products))
                {
                return Redirect::back()->withErrors(array('Something went wrong'));
                }
        

        $product = Product::whereIn('id',$request->products)->get();
   
        $this->data['product'] = $product;
        $this->data['user_id'] = $request->user_id;
        $this->data['page'] = 'user.fund.add_cart';
        return $this->dashboard_layout();


    
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}





public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'products' => 'required',      
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user_detail=Auth::user();

        $products = $request->products;
      
        
        if (empty($products)) 
        {
         return redirect()->route('user.AddFund')->withErrors(array('cart is empty'));
        }
        
            foreach ($products as $key => $value) 
            {                   
            $productReport= Product::where('id',$value)->first();
            $insertProduct['user_id']=$user_detail->id;
    
            $insertProduct['product_id']=$value;
            $insertProduct['activeStatus']=0;
            Seller_product::create($insertProduct);  
            }

        $notify[] = ['success', 'Product Request Submited successfully'];
        return redirect()->route('user.AddFund')->withNotify($notify);

    
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}

    public function ViewSellerInvoice($id)
    {

    try {
        $id = Crypt::decrypt($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        return back()->withErrors(array('Invalid User!'));
    }

    $investment = Seller_invoice::where('id',$id)->first();

    $this->data['investment'] =  $investment;
    $this->data['page'] = 'user.fund.view-invoice';
    return $this->dashboard_layout();

    }




public function sellerInvoice(Request $request){

    $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Seller_invoice::where('user_id',$user->id);
        
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.fund.my-invoice';
      return $this->dashboard_layout();


        }


}

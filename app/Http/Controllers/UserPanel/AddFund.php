<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\Product;
use App\Models\Vproduct;
use App\Models\Category;
use App\Models\Seller_product;
use App\Models\Vendor_product;

use App\Models\Admin_product;
use App\Models\Seller_invoice;
use App\Models\User_product;
use Log;
use Redirect;
class AddFund extends Controller
{
    public function index(Request $request)
    {
    
    $user=Auth::user();
     \DB::statement("SET SQL_MODE=''");
    $product = Vproduct::orderBy('id','DESC')->get();

    $this->data['product'] = $product;
    $this->data['page'] = 'user.fund.addFund';
    return $this->dashboard_layout();
    
    }

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
        

        $product = Vproduct::whereIn('id',$request->products)->get();
        dd($product);
   
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


public function fundActivation(Request $request)
    {
        try {
            // Validate request
            $validation = Validator::make($request->all(), [
                'products' => 'required|array',
                'quantity' => 'required|array',
                'cartTotal' => 'required|numeric',
                'grandTotal' => 'required|numeric',
                'DiscountTotal' => 'required|numeric',
                'CouponTotal' => 'required|numeric',
            ]);

            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());
                return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
            }

            $user_detail = Auth::user();
            $products = $request->products;
            $quantities = $request->input('quantity', []);
            $cartTotal = $request->input('cartTotal');
            $grandTotal = $request->input('grandTotal');
            $DiscountTotal = $request->input('DiscountTotal');
            $CouponTotal = $request->input('CouponTotal');

            if (empty($products)) {
                return redirect()->route('user.AddFund')->withErrors(['cart is empty']);
            }

            foreach ($products as $key => $productId) {
                $productReport = Vproduct::where('id', $productId)->first();

                $insertProduct = [
                    'user_id' => $user_detail->id,
                    'product_id' => $productId,
                    'quantity' => $quantities[$key] ?? 1, // Default to 1 if not provided
                    'productPrice' => $productReport->productPrice, // Default to 1 if not provided
                    'grandTotal' => ($productReport->productPrice*$quantities[$key]), // Default to 1 if not provided
                    'discount' => ($productReport->productPrice*$quantities[$key])-($productReport->productDiscountPrice*$quantities[$key]), // Default to 1 if not provided
                    'netAmount' => ($productReport->productDiscountPrice*$quantities[$key]), // Default to 1 if not provided
                    'activeStatus' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                Vendor_product::create($insertProduct);
            }

            // You can save the totals if needed or use them for further processing

            $notify[] = ['success', 'Product Request Submitted successfully'];
            return redirect()->route('user.AddFund')->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            return redirect()->route('user.AddFund')->withErrors(['error' => $e->getMessage()])->withInput();
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
            $productReport= Vproduct::where('id',$value)->first();
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


public function ecommerce_cart(Request $request)
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
            

            $product = Vproduct::whereIn('id',$request->products)->get();
       
            $this->data['product'] = $product;
            $this->data['user_id'] = $request->user_id;
            $this->data['page'] = 'user.fund.ecommerce_cart';
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

        public function agentindex(Request $request)
    {
    
    $user=Auth::user();
     \DB::statement("SET SQL_MODE=''");
    //  by category
    $categoryname = Category::orderBy('id','DESC')->get();
    $this->data['categoryname'] = $categoryname;
    // by product
    // $product = product::orderBy('category_id','DESC')->get();
    // $this->data['product'] = $product; 

    $this->data['page'] = 'user.agentselect.agentFund';
    return $this->dashboard_layout();   
    
    }
    public function getProductsByCategory(Request $request)
{
    $categoryIds = $request->input('categoryIds');
    $categoryIdsArray = explode(',', $categoryIds);
    $products = Product::whereIn('category_id', $categoryIdsArray)->get();

    return response()->json($products);
}

    public function agentActivation(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
    ]);

    $user_id = Auth::id();
    $name = $request->input('name');
    $email = $request->input('email');
    $address = $request->input('address');

    
        Seller_Invoice::create([
            'user_id' => $user_id,
            'activeStatus' => 0, // Default to pending
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'product_id' =>$request->product_id,
            'category_id' =>$request->category_id, 
        ]);
    

    return redirect()->route('user.invest')->with('success', 'Order placed successfully.');
}
    
    


}

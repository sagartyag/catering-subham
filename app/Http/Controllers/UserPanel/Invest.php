<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use App\Models\Seller_product;
use App\Models\Product;
use App\Models\User_product;
use App\Models\Club_a;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Log;
use Redirect;
use Hash;

class Invest extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  

 
    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
          \DB::statement("SET SQL_MODE=''");
        $product = Seller_product::where('user_id',$user->id)->where('activeStatus',1)->groupBy('product_id')->orderBy('id','DESC')->get();
        $this->data['product'] = $product;
        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
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
    
                return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
            }
    
            $user=Auth::user();

            if (empty($request->products))
                {
                  return Redirect::back()->withErrors(array('Something went wrong'));
                }
            

            $product = Product::whereIn('id',$request->products)->get();
       
            $this->data['product'] = $product;
            $this->data['user_id'] = $request->user_id;
            $this->data['page'] = 'user.invest.ecommerce_cart';
            return $this->dashboard_layout();


        
          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
        }
    
    }

    
    public function view_invoice($id)
    {

    try {
        $id = Crypt::decrypt($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
        return back()->withErrors(array('Invalid User!'));
    }

     $investment = Investment::where('id',$id)->first();

    $this->data['investment'] =  $investment;
    $this->data['page'] = 'user.invest.invoice';
    return $this->dashboard_layout();

   }

    

    public function fundActivation(Request $request)
    {

  try{
      $validation =  Validator::make($request->all(), [
          'products' => 'required',
          'quantity' => 'required',
          'cartTotal' => 'required',
          'grandTotal' => 'required',
          'DiscountTotal' => 'required',
          'CouponTotal' => 'required',
          'user_id' => 'required|exists:users,username',
      ]);


    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }

       $user=Auth::user();
       $user_detail=User::where('username',$request->user_id)->orderBy('id','desc')->limit(1)->first();
       $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
     
       if (!$invest_check) 
       {      
        if ($request->cartTotal<1000) 
        {
          return redirect()->route('user.invest')->withErrors(array('your minimum billing is &#8377; 1000'));
        }
       }


       $products = $request->products;
       $quantity = $request->quantity;
       
       if (empty($products)) 
       {
        return redirect()->route('user.invest')->withErrors(array('cart is empty'));
       }
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
        $data = [
          'plan' =>$invoice,
          'transaction_id' =>md5(uniqid(rand(), true)),
          'user_id' => $user_detail->id,
          'user_id_fk' => $user_detail->username,
          'amount' => $request->cartTotal,
          'payment_mode' => 'INR',
          'status' => 'Active',
          'sdate' => Date("Y-m-d"),
          'active_from' => $user->username,
          'grandTotal'=>$request->grandTotal,
          'discount'=>$request->DiscountTotal,
          'coupon'=>$request->CouponTotal,
        ];
        $paymentId =  Investment::insertGetId($data);
        
            foreach ($products as $key => $value) 
            {       
              $Totalquantity= $quantity[$key];
              $productReport= Product::where('id',$value)->first();
              $insertProduct['user_id']=$user_detail->id;
              $insertProduct['product_id']=$value;
              $insertProduct['productName']=$productReport->productName;
              $insertProduct['productPrice']=$productReport->productPrice;
              $insertProduct['productDiscountPrice']=$productReport->productDiscountPrice;
              $insertProduct['ProductCoupon']=$productReport->ProductCoupon;
              $insertProduct['ProductDiscription']=$productReport->ProductDiscription;
              $insertProduct['quantity']=$Totalquantity;
              $insertProduct['invest_id']=$paymentId;
              $insertProduct['active_from']=$user->username;
              User_product::create($insertProduct);
            }
          

            if ($user_detail->active_status=="Pending")
            {
      
              $userID= $user_detail->id;
              $userName=  $user_detail->username;
              $generatedUsername =substr(time(),-2).substr(rand(),-3).substr(mt_rand(),-2);
              $check_user=\DB::table('club_as')->where('username',$generatedUsername)->count();           
              if($check_user<=0)
              {          
                $Report= getTreeChildId('extras_matrix');
                $pos =$Report['position'];
                if($pos=="1")
                {
                    $pos = "Left";
                    $colunmUpdate= "paid_left";
                }
                elseif($pos=="2")
                {
                    $pos = "Left1";
                    $colunmUpdate= "paid_left1";
                }
                elseif($pos=="3")
                {
                    $pos = "Right";
                    $colunmUpdate= "paid_right";
                }
                else
                {
                    $pos = "Right1";
                    $colunmUpdate= "paid_right1";
                }
                $sponsor = $Report['parentId'];
                $sponsor= ($sponsor)?$sponsor:0;
                $userLevel = \DB::table('club_as')->where('username',$sponsor)->first();               
                $mxLevel= (!empty($userLevel)?$userLevel->level+1:0);      
          
                $data = [
                      'ParentId' =>$sponsor,
                      'level' => $mxLevel,
                      'user_id' => $userID,
                      'username' => $generatedUsername,
                      'name' => $user_detail->name,
                      'position' => $pos,
                      
                  ];
                Club_a::firstOrCreate(['username'=>$generatedUsername,'status'=>'Active'],$data);
                $extra_round='extras_matrix';
                if ($colunmUpdate=="paid_right1") 
                {
                 $status=1;
                }
                else
                {
                  $status=0;
                }
                \DB::table($extra_round)->where('user_id_fk',$sponsor)->update([$colunmUpdate=>1,'status'=>$status]);
               \DB::table($extra_round)->insert(['user_id_fk' =>$generatedUsername,'user_id'=>$userID]);

              } 
              $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->cartTotal);
              User::where('id',$user_detail->id)->update($user_update);       
            }
            else
            { 
              $total= $user_detail->package+$request->cartTotal;
              $user_update=array('active_status'=>'Active','package'=>$total);
              User::where('id',$user_detail->id)->update($user_update);
            }

            $notify[] = ['success', $user_detail->username.' Billing  successfully'];
            return redirect()->route('user.invest')->withNotify($notify);

          



  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }



        }



    
   

    public function invest_list(Request $request){

    $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
        if (Auth::user()->rank==1) 
        {
          $notes = Investment::where('user_id',$user->id)->orWhere('active_from',Auth::user()->username);
        }
      
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
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }


}

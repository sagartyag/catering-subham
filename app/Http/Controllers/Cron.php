<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
class Cron extends Controller
{


public function generate_roi()
{  

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");

if ($allResult) 
{
 foreach ($allResult as $key => $value) 
 {
  
  $userID=$value->user_id;
   $joining_amt = $value->amount;
 
  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($userDetails) 
  {
     $total_profit_b = Income::where('user_id', $userID)->where('invest_id', $value->id)->where('remarks','Roi Bonus')->sum("comm");
      $total_profit=($total_profit_b)?$total_profit_b:0;
        $sponsor_cnt=User::where('sponsor',$userID)->where('active_status','Active')->count();
       $total_get=$joining_amt*300/100;
        
        $percent= 0.5;
        if($sponsor_cnt>=2)
        {
           $percent= 1;  
        }
       $roi = $joining_amt*$percent/100; 
         $max_income=$total_get;
        $n_m_t = $max_income - $total_profit;
        // dd($total_received);
          if($roi >= $n_m_t)
          {
              $roi = $n_m_t;
          }  
      if ($total_profit<$total_get && $roi>0) 
      {

        echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
         $data['remarks'] = 'Roi Bonus';
        $data['comm'] = $roi;
        $data['amt'] = $joining_amt;
        $data['invest_id']=$value->id;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userDetails->username;
        $data['user_id']=$userDetails->id; 
      $income = Income::firstOrCreate(['remarks' => 'Roi Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);
      add_level_income($userDetails->id,$roi);
       
      }
      else
      {
      Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
      }



  }
  




 }
} 




}



public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      
      $username=$value->username;
      $days=100;
        $sponsor_cnt=User::where('sponsor',$user_id)->where('active_status','Active')->count();
       
       if($sponsor_cnt>=5)
       {
       $amount= 1;
       if($sponsor_cnt>=10)
       {
         $amount= 2;   
       }
       if($sponsor_cnt>=20)
       {
         $amount= 5;   
       }
          
     $check_level=Income::where('remarks','Reward Bonus')->where('amt',$amount)->count("id");
     if($check_level<$days)
     {
         
              echo "<br>";
          echo "ID : ".$username."<br>";
        //   echo "Level : ".$Level;
            $award['remarks'] = 'Reward Bonus';
            $award['amt'] = $amount;
            $award['comm'] = $amount;
            $award['level']=0;
            $award['ttime'] = date("Y-m-d");
            $award['user_id_fk'] =$username;
            $award['user_id']=$user_id; 
          $income = Income::firstOrCreate(['remarks' => 'Reward Bonus','ttime'=>date("Y-m-d"),'user_id'=>$user_id],$award);    
     }
   
     
       }
    
     
      
     
     }
    } 

}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\Cart;
use App\Models\Rent;
use App\Models\User;

use Session;
use Illuminate\Support\Facades\DB;
class BikeController extends Controller
{
    
    function index(){
        $data=Bike::all();

        return view('bike',['bike'=>$data]);
    }

    function detail($id){
    $data=Bike::find($id);
    return view('detail',['bike'=>$data]);
   
}
    function search(Request $req){
        $data =Bike::
        where('name','like','%'.req->input('query').'%')->get();
        return view('search',['Bike'=>$data]);
    }

    
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->bike_id=$req->bike_id;
            $cart->price=$req->price;
            $cart->quantity=$req->quantity;
            $cart->save();
            return redirect('/');
        }

        else{
            return redirect('/login');
        }
    
    }
    function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();

    }
    function rentcount(){
        $userId=Session::get('user')['id'];
        return Rent::where('user_id',$userId)->count();
    }
    function cartList(){
        $userId=Session::get('user')['id'];
        $bikes=DB::table('cart')
        ->join('bike','cart.bike_id','=','bike.id')
        ->where('cart.user_id',$userId)
        ->select('bike.*','cart.*','cart.id as cart_id')
        ->get();

        return view('cartList',['bike'=>$bikes]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect ("cartList");
    }
    
    function rentNow(){
        $userId=Session::get('user')['id'];
        $total=$bike= DB::table('cart')
        ->join('bike','cart.bike_id','=','bike_id')
        ->where('cart.user_id',$userId)
        ->sum('bike.price');
        
        return view('rentNow',['total'=>$total]);

    }
    function checkDispo(request $req){
        $userId=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$userId)->get();
        $total=[];
        $final=[];
        foreach($allcart as $rent){
            $allbikes=DB::table('bike')
            
            ->where('bike.total','>=',$rent['quantity'])
            ->where('bike.id','=',$rent['bike_id'])
            
            ->get();//yraje3lik il bike ella ella majoud w thajem tekreha 7asb il nombre elli 7addedtou 
            if ($allbikes!='[]'){
               
                array_push($total,$rent['bike_id']);//tlihoum fi table bech ta3ref enehi il bike ell aquentite te3ha a9al milli mawhjoud)
            }
          
            
        }
       
       
        foreach($total as $bikeunavailable){//assemi il bikes ella a9al mil mawjoud
            $allbikes=DB::table('bike')
            ->where('bike.id',$bikeunavailable)  
            ->select('bike.name')
            ->get();
            
            array_push($final, $allbikes['name']);
        }

        return view('check',['final'=>$final]);
    }

    function renttime(Request $req){
        $userId=Session::get('user')['id'];
        $allrent=Cart::where('user_id',$userId)->get();
        $userName=Session::get('user')['name'];
               
        foreach($allrent as $rent){
           $bikeRented=Bike::where('id',$rent['bike_id'])->get()->first();

           if($rent['quantity']<$bikeRented->total){
            
            $rent1=new Rent;
            $rent1->bike_id=$rent['bike_id'];
            $rent1->user_id=$rent['user_id'];
            $rent1->userName=$userName;
            $rent1->quantity=$rent['quantity'];
            $rent1->status="pending";
            $rent1->rent_date=$req->daterent;
            $rent1->rent_start_time=$req->start_hr;
            $rent1->rent_end_time=$req->end_hr;
            
            $rent1->rent_price=floatval(date('H',strtotime($req->end_hr)-strtotime($req->start_hr)))*$rent['quantity']*$rent['price'];
           
            
            $rent1->save();
            Cart::where('bike_id',$rent['bike_id'])->delete();
            
        }
    
    }
        $req->input();
        return redirect('/');



        }

        function cancelOrder($rent_id){
            Rent::where('rent_id',$rent_id)->delete();

            return redirect ("rentHistory");
        }

       

    function TotalPrice(){
        $userId=Session::get('user')['id'];
        $price=0;
        $allrent=DB::table('rents')
       
        ->where('user_id',$userId)
        ->where('status','pending')
        ->get();
        foreach($allrent as $rent){
          $time=floor(($rent['rent_start_time']->diff($rent['rent_end_time'])) / 60);
          $price=$price +$time*$rent['quantity'];

        }
        return($price);


        
    }

    public static function TotalProfit(){
       
        $price=0;
        $allrent=DB::table('rents')
       
        
        ->where('status','accomplished')
        ->get();
        foreach($allrent as $rent){
          
          $price=$price +$rent->rent_price;

        }
        return($price);


        
    }
   









   

    function myRents(){
        $userId=Session::get('user')['id'];
        $rents= DB::table('rents')
        ->join('bike','rents.bike_id','=','bike.id')
        ->where('rents.user_id',$userId)
        ->get();
       return view('rentHistory',['rents'=>$rents]);
    }
//ye7seb il total 
    //admin functions

    public static function usercounts(){
        
        return (User::all()->count());
        

    }
    public static function bikecounts(){
        
        return (Bike::all()->count());
        

    }
    public static function rentcounts_pending(){
        
        return (Rent::all()
        ->where('status','pending')
        ->count());
        

    }
    public static function rentcounts_onrent(){
        
        return (Rent::all()
        ->where('status','onRent')
        ->count());
        

    }
    public static function rentcounts_accomplished(){
        
        return (Rent::all()
        ->where('status','accomplished')
        ->count());
        

    }
    


    function addBike(Request $req){
        if($req->session()->has('user')){
            $bike=new Bike;
            $bike->id=$req->id;
            $bike->name=$req->name;
            $bike->model=$req->model;
            $bike->total=$req->total;
            $bike->price=$req->price;
            $bike->filePath=$req->filePath;
            $bike->description=$req->description;
            $bike->save();
            return redirect('/adminBikes');
        }

        else{
            return redirect('/adminBikes');
        }}
        function removeBike($id){
            Bike::destroy($id);
            return redirect ("adminBikes");
        }
        function removeUser($id){
            User::destroy($id);
           
           return  redirect ("adminUsers");
        }
        function changeRole($id){
           $user= DB::table('users')->where('id', $id);
           $test= DB::table('users')->where('id', $id)->value('role_id');
          if( $test==0){
         $user->update(array('role_id' =>'1'));  }
        else {
        $user->update(array('role_id' =>'0'));  
         }
          return  redirect ("adminUsers");
        }



        function updateStatustoOnrent($id){
            $rents=DB::table('rents')
            ->where('rent_id',$id)
            ->update(array('status' =>'onRent'));//pending or currently rented or checked




            $rentQte=DB::table('rents')
            ->where('rent_id',$id)
            ->value('quantity');


            $chosenBike=DB::table('rents')
            ->where('rent_id',$id)
            ->value('bike_id');

            $bikeTotal=DB::table('bike')
            ->where('id',$chosenBike)
            ->value('total');

            $bikeUpdate=DB::table('bike')
            ->where('id',$chosenBike)
            ->update(array('total' =>$bikeTotal-$rentQte));
           
            return redirect ("adminRents");

        }

        function updateStatustoPending($id){
            $rents=DB::table('rents')
           
            ->where('rent_id',$id)
            ->update(array('status' =>'pending'));//pending or currently rented or checked

           
            return redirect ("adminRents");

        }
        function updateStatustoAcco($id){
            $rents=DB::table('rents')
            ->where('rent_id',$id)
            ->update(array('status' =>'accomplished'));//pending or currently rented or checked


            
            $rentQte=DB::table('rents')
            ->where('rent_id',$id)
            ->value('quantity');


            $chosenBike=DB::table('rents')
            ->where('rent_id',$id)
            ->value('bike_id');

            $bikeTotal=DB::table('bike')
            ->where('id',$chosenBike)
            ->value('total');

            $bikeUpdate=DB::table('bike')
            ->where('id',$chosenBike)
            ->update(array('total' =>$bikeTotal+$rentQte));




            return redirect ("adminRents");

        }


    
  
    

   
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\famille;
use DB;
use Carbon\Carbon;


class Frontendcontroller extends Controller
{
    public function demande()
    {
        return view ('frontend.demande');
    }

    public function commission()
    {
        return view('frontend.commission');
    }
    
    public function dossier () {
   
        return view('frontend.dossier');
    }
    public function ajoutF () {
   
        return view('frontend.ajoutF');
    }

    public function ajoutAct () {
   
        return view('frontend.ajoutAct');
    }
    public function ajoutP () {
   
        return view('frontend.ajoutP');
    }
    public function savedemande (Request $req)
    {
        $mytime = Carbon\Carbon::now();
        $mytime = Carbon::parse($mytime)->format('Y-m-d H:i:s');
        $d_motif=$req->input('demande_motif'); 
        $d_type=$req->input('radio-type-demande'); 
        if($d_type=='obtention')
        {$d_type=1;}

        elseif($d_type=='renouvellement'){$d_type=3;}
        elseif($d_type=='modification'){$d_type=2;}
        elseif($d_type=='extension'){$d_type=4;}

        $data=array('demande_date'=>$mytime,"demande_motif"->$d_motif,'type_demande_id'->$d_type);
        DB::table('commercants_demande')->insert($data);
        
        return redirect('demande')->with('status',"Insert successfully");
        

    }
   public function saveF (Request $request)
    {
        // $data=$request->input();
        // $famille=new famille;
        // $famille->name= $data-['name'];
        // DB::table('commercants_family_activity');
        //  $famille->save();
        //  return redirect('insert')->with('status',"Insert success");
        $nom=$request->input('name'); 
        $data=array('name'=>$nom);
        DB::table('commercants_family_activity')->insert($data);
        // echo "Record inserted successfully.";
        return redirect('ajoutF')->with('status',"Insert successfully");
        
    }
   public function saveP (Request $req)
    {
    
        $country_name=$req->input('country_name'); 
        $data=array('country_name'=>$country_name);
        DB::table('commercants_country')->insert($data);
        // echo '<a href = "/cmm/public/ajoutP">Click Here</a> to go back.';
        // echo "Record inserted successfully.";
        return redirect('ajoutP')->with('status',"Insert successfully");
        

    }
    public function savecommission (Request $req)
    {
        $date_c=$req->input('commission_date'); 
        $date_c = Carbon::parse($date_c)->format('Y-m-d H:i:s');
        $motif_c=$req->input('commission_motif'); 

        $data=array('commission_motif'=>$motif_c,'commission_date'=>$date_c);
        DB::table('commercants_commission')->insert($data);
        return redirect('commission')->with('status',"Insert successfully");

    }
    public function commissionview(){
        $commissions = DB::select('select * from commercants_commission');
        return view('frontend.commissions_view',['commissions'=>$commissions]);
        }
    public function demandeview(){
            $demandes = DB::select('select * from commercants_demande');
            return view('frontend.demande_view',['demandes'=>$demandes]);
    }
    public function chart()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();
              
        return view('chart', compact('labels', 'data'));
    }
    public function edit($N°commission ){
       $commission=DB::table('commercants_commission')->where('N°commission',$N°commission)->first();
       return view('frontend.Edit',compact('commission'));
    }
    public function updatecommission(Request $req){
        DB::table('commercants_commission')->where('N°commission',$N°commission)->update
        ([
            $date_c=$req->input('commission_date'), 
        $date_c = Carbon::parse($date_c)->format('Y-m-d H:i:s'),
        $motif_c=$req->input('commission_motif')
        ]);
        // return back()->with('updatecommission',"commission updated successfully");
        echo "Record inserted successfully.";

        echo '<a href = "/cmm/public/update_commission">Click Here</a> to go back.';
    }

}

<?php

namespace App\Http\Controllers;

use App\Bf;
use App\Zaposleni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZaposleniController extends Controller
{
    public function index()
    {
        $zaposleni = Zaposleni::paginate(10);

        return view('index')->with('zaposleni',$zaposleni);
    }

    public function firme()
    {
        $firme = Bf::paginate(10);

        return view('firme')->with('firme',$firme);
    }

    public function proslaZaposlenja()
    {

        $zaposleni = Zaposleni::with('bf')->paginate(10);

        return view('proslaZaposlenja')
            ->with('zaposleni',$zaposleni);

    }

    public function unesi()
    {
        return view('unesi');
    }

 public function promeni($id)
 {
     $z= Zaposleni::find($id);

     return view('promeni')->with('zaposleni',$z);
 }


    public function obrisi($id)
    {

       $z = Zaposleni::find($id);

       $bf_z = DB::table('bf_zaposleni')
           ->where('zaposleni_id',$id)
            ->get();


       $ar=[];
       foreach($bf_z as $bfzz)
       {
           array_push($ar,$bfzz->bf_id);
       }

       $bf_z_c = DB::table('bf_zaposleni')
           ->whereIn('bf_id',$ar)->count();


    foreach ($ar as $arr)
    {
        $bfzn = DB::table('bf_zaposleni')->where('bf_id',$arr)->count();

        if($bfzn == 1)
        {
             Bf::where('id',$arr)->delete();
        }

    }

        $z->delete();

            DB::table('bf_zaposleni')
            ->where('zaposleni_id',$id)
            ->delete();


        return redirect()->back()->with('success','Izbrisan radnik iz baze podataka');

    }



    public function azuriraj(Request $request, $id)
    {
        $radnik = Zaposleni::find($id);

        $radnik->zanimanje = $request->input('zanimanje');
        $radnik->save();

        return redirect('promeni/'.$id)->with('success','Uspesno azuriranje');
    }


    public function kreiraj(Request $request){


        $nf=$request->input('arr');

        $firme = Bf::all();
        $arrFirme=[];
        foreach ($firme as $firma)
        {
            array_push($arrFirme,$firma->ime_firme);
        }

        $noveFirme = array_diff($nf,$arrFirme);

//dd($nf);die;

        foreach($noveFirme as $novef)
        {
            if($novef !== null)
            {
                $novaBivsaFirma = new Bf();
                $novaBivsaFirma->ime_firme=$novef;
                $novaBivsaFirma->save();

            }
        }

        $f = Bf::whereIn('ime_firme',$nf)->get();

        $zaposleni = new Zaposleni();
        $zaposleni->ime=$request->input('ime');
        $zaposleni->prezime=$request->input('prezime');
        $zaposleni->zanimanje=$request->input('zanimanje');
        $zaposleni->save();

        foreach ($f as $d)
        {
            $zaposleni->bf()->attach($d);
        }

        return redirect(route('unos'))->with('success','Podaci o novom zaposlenom uspesno uneti');

    }

}

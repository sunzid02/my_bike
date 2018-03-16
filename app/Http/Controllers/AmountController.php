<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cost_info;

class AmountController extends Controller
{
    //go to the input form page
    public function index($value='')
    {
      # code... load the input form view
      return view('amount.index');

    }

    //receive data and insert
    public function insert(Request $req)
    {
      # receive data
      $data = array('id' =>$req->id ,
                    'date' =>$req->date ,
                    'productName' =>$req->product ,
                    'description' =>$req->description ,
                    'octen_select' =>$req->octen_select ,
                    'amount' =>$req->amount ,
                    'otherPrice' =>$req->other_price ,
                    'totalPrice' =>$req->total_price ,
                  );
      //  var_dump($data);
      // die();

      // insert data to database
      if (isset($data))
      {
        DB::table('cost_infos')->insert($data);
        return redirect()->route('amount.info');
      }
      else
      {
        # code...
        echo "empty or not inserted";
      }

    }

    //see all informations
    public function info($value='')
    {
      # get all info
      // $datae = DB::table('cost_infos')->get();
      // echo "<pre>";
      // print_r($datae);
      // echo "</pre>";
      // die();
      $datae = Cost_info::all();

      //total sum of the month
      $allBalance = DB::table('cost_infos')->sum('totalPrice');

      //get Current month name
      $timeDetails = \Carbon\Carbon::now();
      // var_dump($timeDetails);
      // die();
      $currentMonthName=  $timeDetails->format('F,Y'); // F means months


      return view('information.index')->with('datae',$datae)->withAllBalance($allBalance)
                                      ->withCurrentMonthName($currentMonthName);
    }



    //delete
    public function delete($id)
    {
      # receiving id from route


      $informationOfSelectedId = DB::table('cost_infos')->where('id',$id)->first();

      //for object we use arrow sign ->
      $deleteId = $informationOfSelectedId->id;

      //executing delete query
      DB::table('cost_infos')->delete($deleteId);
      return redirect()->route('amount.info');

    }

    // search by date information
    public function searchByDate(Request $req)
    {
      $data = array('fromDate' => $req->fromDate,
                    'toDate' => $req->toDate);
      // print_r($data);
      $infoByDate = Cost_info::whereBetween('date', $data)->get();

      

      return view('information.by_date')->withInfoByDate($infoByDate);

      // echo "<pre>";
      // print_r($articles);
      // echo "</pre>";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use Carbon\Carbon;

class orderControler extends Controller
{
    //
    public function CreateOrder(Request $request){

//        $this->validate($request,[
//
//        ]);
        $mytime = Carbon::now();

        $order= new order ;

        $order->academicLevel=$request->input('academicLevel');
        $order->typeOfPaper=$request->input('typeOfPaper');
        $order->discipline=$request->input('discipline');
        $order->topic=$request->input('topic');
        $order->paperInstruction=$request->input('paperInstruction');
        $order->paperFormat=$request->input('paperFormat');
        $order->deadline=$request->input('deadline');
        $order->pages=$request->input('pages');
        $order->spacing=$request->input('spacing');
        $order->sources=$request->input('source');
        $order->charts=$request->input('charts');
        $order->slides=$request->input('sliders');
        $order->academicLevel=$request->input('academicLevel');
        $order->writerCategory=$request->input('writerCategory');
        $order->email=$request->input('email');
        $order->phoneNumber=$request->input('phoneNumber');
        $order->deadline=$mytime;

        $order->save();

        /**
         * return response
         */
     return  redirect('/paypall')->with(['topic'=> $request->input('topic'),'amount' => 12, 'order' => $order->id]);
    }
}

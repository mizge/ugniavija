<?php

namespace App\Http\Controllers;

use App\Film;
use App\Seanse;
use App\Ticket;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function show(){
        $id = auth()->user()->id;
        $tickets=User::find($id)->tickets;
        return view('tickets.show', ['tickets'=>$tickets]);
    }
    public function showDelete($id){
        $ticket=Ticket::find($id);
        if($ticket->user_id == auth()->user()->id){
            return view('tickets.delete',['ticket'=>$ticket]);
        }
        abort(Response::HTTP_FORBIDDEN);
    }
    public function showBuy($id){
        $seanse = Seanse::find($id);
        if($seanse == null){
            abort(Response::HTTP_NOT_FOUND);
        }
        return view('tickets.buy', ['seanse'=>$seanse]);
    }
    public function storeBuy($id)
    {
        $seanse=Seanse::find($id);
        $attributes = request()->validate([
            'amount' => 'required | integer |min:0|not_in:0|max:'.$seanse->free_amount,
        ]);
        $attributes['seanse_id']=$id;
        $attributes['user_id']=auth()->user()->id;
        Ticket::create($attributes);
        $free_amount = $seanse['free_amount']-$attributes['amount'];
        $bought_amount=$seanse['bought_amount']+$attributes['amount'];
        $seanse->update(['free_amount'=>$free_amount, 'bought_amount'=>$bought_amount]);
        return $this->show();
    }
    public function deleteTicket($id)
    {
        $ticket=Ticket::find($id);
        if($ticket->user_id == auth()->user()->id){
            $ticket->delete();
            $seanse=Seanse::find($ticket->seanse_id);
            $free_amount = $seanse['free_amount']+$ticket['amount'];
            $bought_amount=$seanse['bought_amount']-$ticket['amount'];
            $seanse->update(['free_amount'=>$free_amount, 'bought_amount'=>$bought_amount]);
            return $this->show();
        }
        abort(Response::HTTP_FORBIDDEN);
    }
}

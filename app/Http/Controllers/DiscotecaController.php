<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\client;
use Illuminate\Http\Request;

use App\Mail\ReciboMailable;
use Illuminate\Support\Facades\Mail;

class DiscotecaController extends Controller
{
    public function index(){
        return view('index');
    }
    public function carta(){
        return view('carta');
    }
    public function eventos(){
        return view('eventos');
    }
    public function formulario_pago(Request $request){
        $booking = new booking();
        $booking->n_mesa=$request->n_mesa;
        $booking->fecha_reserva=$request->fecha_reserva;
        $booking->n_personas=$request->n_personas;
        $booking->total_pagar=$request->total_pagar;
        $booking->save();
        return view('formulario_pago',compact('booking'));
    }
    public function reservar(){

        $bookings = booking::all();

        return view('reservar',compact('bookings'));
    }
    public function fotos(){
        return view('fotos');
    }
    public function contacto(){
        return view('contacto');
    }
    public function pasarela_pago(Request $request){
        $bookings = booking::all();
        $client =new client();
        $client->nombre=$request->nombre;
        $client->email=$request->email;
        $client->save();
        $id_reserva=$request->id;

        $correo= new ReciboMailable($request->nombre);
        Mail::to($request->email)->send($correo);
        return view('pasarela_pago',compact('client','bookings','id_reserva'));
    }

}

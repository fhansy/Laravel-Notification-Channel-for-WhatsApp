<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
  {
    $order = Order::factory()->create();


    return redirect()->route('home')->with('status', 'Order Placed!');
  }
}

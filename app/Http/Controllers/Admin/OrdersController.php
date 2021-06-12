<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list(Request $request)
    {
        $orders = Order::query()->orderBy('id', 'DESC')->paginate(30);

        return view('admin.orders.list', compact('orders'));
    }

    public function edit(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'status' => 'required',
            ]);

            $params = $request->all();

            $order->fill($params);
            if ($order->save()) {
                return redirect()->route('admin.orders.list')->with(['success' => 'Запись обновленна!']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось обновить запись']);
        }

        return view('admin.orders.edit', compact('order'));
    }

    public function delete(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        if ($order->delete()) {
            return redirect()->route('admin.orders.list')->with(['success' => 'Заявка удален!']);
        }

        return redirect()->route('admin.orders.list')->with(['error' => 'Не удалось заявку']);
    }
}

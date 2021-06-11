<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(Request $request)
    {
        $clients = Client::query()->paginate(50);

        return view('admin.clients.list', compact('clients'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'url' => 'required',
            ]);

            $params = $request->all();

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('clients', 'public');
                $params['image'] = $image;
            }

            $client = new Client();
            $client->fill($params);
            if ($client->save()) {
                return redirect()->route('admin.clients.list')->with(['success' => 'Запись создано']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось создать запись']);
        }

        return view('admin.clients.create');
    }

    public function edit(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'url' => 'required',
            ]);

            $params = $request->all();

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('clients', 'public');
                $params['image'] = $image;
            }

            $client->fill($params);
            if ($client->save()) {
                return redirect()->route('admin.clients.list')->with(['success' => 'Запись обновленна!']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось обновить запись']);
        }

        return view('admin.clients.edit', compact('client'));
    }

    public function delete(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        if ($client->delete()) {
            return redirect()->route('admin.clients.list')->with(['success' => 'Клиент удален!']);
        }

        return redirect()->route('admin.clients.list')->with(['error' => 'Не удалось клиента']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogger;
use Illuminate\Http\Request;

class BloggersController extends Controller
{
    public function list(Request $request)
    {
        $bloggers = Blogger::query()->paginate(50);

        return view('admin.bloggers.list', compact('bloggers'));
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

            $blogger = new Blogger();
            $blogger->fill($params);
            if ($blogger->save()) {
                return redirect()->route('admin.bloggers.list')->with(['success' => 'Запись создано']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось создать запись']);
        }

        return view('admin.bloggers.create');
    }

    public function edit(Request $request, $id)
    {
        $blogger = Blogger::findOrFail($id);

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

            $blogger->fill($params);
            if ($blogger->save()) {
                return redirect()->route('admin.bloggers.list')->with(['success' => 'Запись обновленна!']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось обновить запись']);
        }

        return view('admin.bloggers.edit', compact('blogger'));
    }

    public function delete(Request $request, $id)
    {
        $blogger = Blogger::findOrFail($id);
        if ($blogger->delete()) {
            return redirect()->route('admin.bloggers.list')->with(['success' => 'Блогер удален!']);
        }

        return redirect()->route('admin.bloggers.list')->with(['error' => 'Не удалось блогера']);
    }
}

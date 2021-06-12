<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteCase;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function list(Request $request)
    {
        $cases = SiteCase::query()->orderBy('id', 'DESC')->paginate(20);

        return view('admin.cases.list', compact('cases'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'gained_result' => 'required',
                'image' => 'mimes:svg,jpeg,jpg,png|max:10000',
                'logo' => 'mimes:svg,jpeg,jpg,png|max:10000',
            ]);

            $params = $request->all();

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('cases', 'public');
                $params['image'] = $image;
            }

            if ($request->hasFile('logo')) {
                $image = $request->file('logo')->store('cases', 'public');
                $params['logo'] = $image;
            }

            $case = new SiteCase();
            $case->fill($params);
            if ($case->save()) {
                return redirect()->route('admin.cases.list')->with(['success' => 'Запись создано']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось создать запись']);
        }

        return view('admin.cases.create');
    }

    public function edit(Request $request, $id)
    {
        $case = SiteCase::findOrFail($id);

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'gained_result' => 'required',
                'image' => 'mimes:svg,jpeg,jpg,png|max:10000',
                'logo' => 'mimes:svg,jpeg,jpg,png|max:10000',
            ]);

            $params = $request->all();

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('cases', 'public');
                $params['image'] = $image;
            }

            if ($request->hasFile('logo')) {
                $image = $request->file('logo')->store('cases', 'public');
                $params['logo'] = $image;
            }

            $case->fill($params);
            if ($case->save()) {
                return redirect()->route('admin.cases.list')->with(['success' => 'Запись обновленна!']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось обновить запись']);
        }

        return view('admin.cases.edit', compact('case'));
    }

    public function delete(Request $request, $id)
    {
        $case = SiteCase::findOrFail($id);
        if ($case->delete()) {
            return redirect()->route('admin.cases.list')->with(['success' => 'Кейс удален!']);
        }

        return redirect()->route('admin.cases.list')->with(['error' => 'Не удалось кейс']);
    }
}

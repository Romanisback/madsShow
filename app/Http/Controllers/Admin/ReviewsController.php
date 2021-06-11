<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function list(Request $request)
    {
        $reviews = Review::query()->paginate(50);

        return view('admin.reviews.list', compact('reviews'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'review' => 'required',
                'url' => 'required',
            ]);

            $params = $request->all();

            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar')->store('reviews', 'public');
                $params['avatar'] = $image;
            }

            $review = new Review();
            $review->fill($params);
            if ($review->save()) {
                return redirect()->route('admin.reviews.list')->with(['success' => 'Запись создано']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось создать запись']);
        }

        return view('admin.reviews.create');
    }

    public function edit(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'review' => 'required',
                'url' => 'required',
            ]);

            $params = $request->all();

            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar')->store('reviews', 'public');
                $params['avatar'] = $image;
            }

            $review->fill($params);
            if ($review->save()) {
                return redirect()->route('admin.reviews.list')->with(['success' => 'Запись обновленна!']);
            }

            return redirect()->back()->with(['danger' => 'Не удалось обновить запись']);
        }

        return view('admin.reviews.edit', compact('review'));
    }

    public function delete(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        if ($review->delete()) {
            return redirect()->route('admin.reviews.list')->with(['success' => 'Отзыв удален!']);
        }

        return redirect()->route('admin.reviews.list')->with(['error' => 'Не удалось отзыв']);
    }
}

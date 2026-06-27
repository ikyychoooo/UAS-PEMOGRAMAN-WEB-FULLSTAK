<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\room_categories;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {
        $dataCategory = room_categories::all();
        return view('admin.category.index', compact('dataCategory'));
    }

    public function view($id)
    {
        $view = room_categories::findOrFail($id);
        return view('admin.category.view', compact('view'));
    }

    public function showCreateForm()
    {
        return view('admin.category.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:room_categories,slug',
            'icon' => 'nullable',
            'color' => 'nullable',
            'description' => 'nullable',
            'max_booking_days_ahead' => 'required|integer',
            'max_duration_hours' => 'required|integer',
            'min_duration_minutes' => 'required|integer',
            'requires_approval' => 'required|boolean',
            'is_active' => 'required|boolean',
            'sort_order' => 'required|integer',
        ]);

        room_categories::create($request->all());

        return redirect()->route('index-category')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function showUpdateForm($id)
    {
        $room = \App\Models\room::findOrFail($id); 
        $category = room_categories::all();

        return view('admin.category.update', compact('room', 'category'));
    }

    public function update(Request $request, $id)
    {
        $room = \App\Models\room::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'code'        => 'required|string|unique:rooms,code,' . $room->id, 
            'category_id' => 'required|exists:room_categories,id',
            'building'    => 'required|string',
            'floor'       => 'required|integer',
            'capacity'    => 'required|integer',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', 
            'is_active'   => 'required|boolean',
            'open_time'   => 'required',
            'close_time'  => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/rooms');
            $image->move($destinationPath, $imgName);

            if ($room->image && file_exists(public_path('/uploads/rooms/' . $room->image))) {
                unlink(public_path('/uploads/rooms/' . $room->image));
            }

            $input['image'] = $imgName;
        }

        $room->update($input);

        return redirect()->route('index-rooms')->with('success', 'Data ruangan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $category = room_categories::findOrFail($id);
        $category->delete();

        return redirect()
            ->route('index-category')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
<?php

namespace App\Http\Controllers;

use App\Classes\ResponseClass;
use App\Interfaces\CategoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    private CategoryInterface $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->categoryInterface->index();

        return view('categories.index', compact('categories'));

        // return view('Categories.index', [
        //     // 'page' => 'categories',
        //     'categories' => $data,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create', [
            'page' => 'categories.create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "name" => $request->name,
            "description" => $request->description
        ];

        DB::beginTransaction();

        try {
            $this->categoryInterface->store($data);
            DB::commit();

            return ResponseClass::success();
        } catch (\Throwable $th) {
            return ResponseClass::rollback();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->categoryInterface->show($id);
        return view('categories.edit', [
            'page' => 'Les catégories',
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            "name" => $request->name,
            "description" => $request->description
        ];

        DB::beginTransaction();

        try {
            $this->categoryInterface->update($data, $id);
            DB::commit();

            return ResponseClass::success();
        } catch (\Throwable $th) {
            return ResponseClass::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryInterface->delete($id);
        return ResponseClass::success();
    }
}

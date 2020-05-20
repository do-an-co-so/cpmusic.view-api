<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('index', 'show');
        $this->authorizeResource(Category::class);
    }

    /** @noinspection PhpUndefinedMethodInspection */
    public function index(Request $request)
    {
        $categories = QueryBuilder::for(Category::class)
            ->allowedFields('name')
            ->allowedFilters('name')
            ->allowedIncludes('songsCount')
            ->allowedSorts('id');

        if ($request->has('page')) {
            $categories = $categories->jsonPaginate();
        } else {
            $categories = $categories->get();
        }

        return CategoryResource::collection($categories);
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Category $category)
    {
        return CategoryResource::make($category);
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return response()->json([
                'message' => "Xóa thành công thể loại $category->name"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Xóa thất bại thể loại $category->name"
            ], Response::HTTP_EXPECTATION_FAILED);
        }
    }
}

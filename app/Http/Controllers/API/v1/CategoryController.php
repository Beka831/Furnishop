<?php

namespace App\Http\Controllers\API\v1;

use Validator;
use Illuminate\Http\Request;
use App\Models\API\v1\Client;
use App\Models\API\v1\Category;
use Laravel\Passport\TokenGuard;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\API\BaseController as BaseController;

class CategoryController extends BaseController
{
    //register category
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'category_title' => 'required|max:50',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $validatedData = $request->all();
        $category = Category::create($validatedData);
        $success['category_title'] = $category->category_title;
        return $this->sendResponse($success, 'Category registered successfully.');
    }
    //update category
    public function update(Request $request, $category_id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'category_title' => 'required|max:50',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        //check if category exists
        $category = Category::find($category_id);
        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }

        $validatedData = $request->all();
        $category = Category::find($category_id);
        $category->update($validatedData);
        $success['category_title'] = $category->category_title;
        return $this->sendResponse($success, 'Category updated successfully.');
    }   
    //show all categories
    public function index(): JsonResponse
    {
        $categories = Category::all();
        $success['categories'] = $categories;
        return $this->sendResponse($success, 'Categories retrieved successfully.');
    }
    //show category by id
    public function show($category_id): JsonResponse
    {
        $category = Category::find($category_id);
        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }
        $success['category_title'] = $category->category_title;
        return $this->sendResponse($success, 'Category retrieved successfully.');
    }
    //delete category
    public function destroy($category_id): JsonResponse
    {
        $category = Category::find($category_id);
        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }
        $category->delete();
        $success['category_title'] = $category->category_title;
        return $this->sendResponse($success, 'Category deleted successfully.');
    }
}

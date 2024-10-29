<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodCategory;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FoodCategoryApiController extends Controller
{
    //repeating the restaurant with each Food category record
    // public function getFoodCategories()
    // {
    //     try {
    //         $restaurant = Auth::guard('restaurant-api')->user();

    //         if (!$restaurant) {
    //             return api_unauthorized('Restaurant not found. Please login again.');
    //         }

    //         $food_categories = FoodCategory::where('restaurant_id', $restaurant->id)
    //             ->with('restaurant')
    //             ->get();

    //         foreach ($food_categories as $category) {
    //             $category->image = asset("storage/foodCategory/images/{$category->image}");
    //         }

    //         return api_success('Food categories retrieved successfully', $food_categories);
    //     } catch (\Exception $e) {
    //         return api_exception($e, 'Failed to retrieve food categories');
    //     }
    // }

    // Reduces response size by not repeating restaurant data
    public function getFoodCategories()
    {
        try {
            $restaurant = Auth::guard('restaurant-api')->user();

            if (!$restaurant) {
                return api_unauthorized('Restaurant not found. Please login again.');
            }

            // Get categories without loading restaurant relationship for each
            $food_categories = FoodCategory::where('restaurant_id', $restaurant->id)
                ->select([
                    'id',
                    'name',
                    'image',
                    'status',
                    'restaurant_id',
                    'created_at',
                    'updated_at',
                    'deleted_at'
                ])
                ->get();

            // Process image URLs
            foreach ($food_categories as $category) {
                $category->image = $category->image ? asset("storage/foodCategory/images/{$category->image}") :null;


            }

            // Structure the response with restaurant details separate from categories
            $response_data = [
                'restaurant' => [
                    'id' => $restaurant->id,
                    'role' => $restaurant->role,
                    'name' => $restaurant->name,
                    'description' => $restaurant->description,
                    'speciality' => $restaurant->speciality,
                    'type' => $restaurant->type,
                    'priority' => $restaurant->priority,
                    'logo' => $restaurant->logo,
                    'address' => $restaurant->address,
                    'city' => $restaurant->city,
                    'state' => $restaurant->state,
                    'postal_code' => $restaurant->postal_code,
                    'country' => $restaurant->country,
                    'latitude' => $restaurant->latitude,
                    'longitude' => $restaurant->longitude,
                    'delivery_radius' => $restaurant->delivery_radius,
                    'phone' => $restaurant->phone,
                    'secondary_phone' => $restaurant->secondary_phone,
                    'email' => $restaurant->email,
                    'website' => $restaurant->website,
                    'opening_time' => $restaurant->opening_time,
                    'closing_time' => $restaurant->closing_time,
                    'days_of_operation' => $restaurant->days_of_operation,
                    'owner_name' => $restaurant->owner_name,
                    'owner_contact_number' => $restaurant->owner_contact_number,
                    'owner_email' => $restaurant->owner_email,
                    'average_cost_for_per_person' => $restaurant->average_cost_for_per_person,
                    'delivery_fee' => $restaurant->delivery_fee,
                    'delivery_time' => $restaurant->delivery_time,
                    'delivery_on_off' => $restaurant->delivery_on_off,
                    'restaurant_images' => $restaurant->restaurant_images,
                    'featured_image' => $restaurant->featured_image,
                    'status' => $restaurant->status,
                    'featured' => $restaurant->featured,
                    'tax_gst_number' => $restaurant->tax_gst_number,
                    'fssai_number' => $restaurant->fssai_number,
                    'bank_holder_name' => $restaurant->bank_holder_name,
                    'ifsc_code' => $restaurant->ifsc_code,
                    'bank_account_number' => $restaurant->bank_account_number,
                    'created_at' => $restaurant->created_at,
                    'updated_at' => $restaurant->updated_at,
                    'deleted_at' => $restaurant->deleted_at
                ],
                'categories' => $food_categories
            ];

            return api_success('Food categories retrieved successfully', $response_data);
        } catch (\Exception $e) {
            return api_exception($e, 'Failed to retrieve food categories');
        }
    }


    public function storeFoodCategory(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'status' => 'boolean',
            ]);

            $restaurant = Auth::guard('restaurant-api')->user();

            if (!$restaurant) {
                return api_unauthorized('Restaurant not found. Please login again.');
            }

            $foodCatImg = null;
            if ($request->hasFile('image')) {
                $foodCatImg = store_image($request->file('image'), 'foodCategory/images');
                $validated['image'] = $foodCatImg;
            }

            $validated['restaurant_id'] = $restaurant->id;
            $validated['status'] = 1;

            $food_category = FoodCategory::create($validated);

            return api_success(
                'Food category created successfully',
                $food_category,
                ['images' => ['image' =>  $food_category->image ? asset("storage/foodCategory/images/{$foodCatImg}") : null]]
                // ['images' => ['image' => $food_category->image ? asset("storage/foodCategory/images/{$food_category->image}") : null]]


            );
        } catch (\Exception $e) {
            return api_exception($e, 'Error creating food category');
        }
    }

    public function editFoodCategory($id)
    {
        try {
            $restaurant = Auth::guard('restaurant-api')->user();

            $food_category = FoodCategory::where('restaurant_id', $restaurant->id)
                ->findOrFail($id);

            if ($food_category) {
                return api_success(
                    'Food category retrieved successfully',
                    $food_category,
                    ['images' => ['image' => $food_category->image ? asset("storage/foodCategory/images/{$food_category->image}") : null]]
                );


            } else {
                return api_not_found('Food category not found.');
            }

            return view('restaurantOwner.foodCategory.edit', compact('category'));
        } catch (\Exception $e) {
            return api_exception($e, 'Failed to retrieve food categories');

        }
    }

    public function updateFoodCategory(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'status' => 'boolean',
            ]);

            $restaurant = Auth::guard('restaurant-api')->user();

            if (!$restaurant) {
                return api_unauthorized('Restaurant not found. Please login again.');
            }

            $foodCategory = FoodCategory::where('id', $id)
                ->where('restaurant_id', $restaurant->id)
                ->first();

            if (!$foodCategory) {
                return api_not_found('Food category not found.');
            }

            if ($request->hasFile('image')) {
                if ($foodCategory->image) {
                    Storage::delete('public/foodCategory/images/' . $foodCategory->image);
                }
                $validated['image'] = store_image($request->file('image'), 'foodCategory/images');
            }

            $foodCategory->update($validated);

            return api_success(
                'Food category updated successfully',
                $foodCategory,
                ['images' => ['image' => $foodCategory->image ? asset("storage/foodCategory/images/{$foodCategory->image}") : null]]
            );
        } catch (\Exception $e) {
            return api_exception($e, 'Error updating food category');
        }
    }

    public function deleteFoodCategory($id)
    {
        try {
            $foodCategory = FoodCategory::findOrFail($id);

            if ($foodCategory->image) {
                delete_image($foodCategory->image, 'foodCategory/images');
            }

            $foodCategory->delete();

            return api_success('Food category deleted successfully', $foodCategory);
        } catch (ModelNotFoundException $e) {
            return api_not_found('Food category not found');
        } catch (\Exception $e) {
            return api_exception($e, 'Error deleting food category');
        }
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodCategory;
use App\Models\Restaurant;
use App\Models\MenuItem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MenuItemApiController extends Controller
{

    // public function getMenuItems()
    // {
    //     try {
    //         $restaurant = Auth::guard('restaurant-api')->user();

    //         if (!$restaurant) {
    //             return api_unauthorized('Restaurant not found. Please login again.');
    //         }

    //         $menu_items = MenuItem::where('restaurant_id', $restaurant->id)
    //             ->with(['restaurant', 'foodCategory'])
    //             ->get();

    //         foreach ($menu_items as $menu_item) {
    //             // Add asset path to menu item image
    //             $menu_item->image = asset("storage/menuItem/images/{$menu_item->image}");

    //             // Check if restaurant has an image and add asset path
    //             if ($menu_item->restaurant && $menu_item->restaurant->featured_image) {
    //                 $menu_item->restaurant->featured_image = asset("storage/restaurants/featured/{$menu_item->restaurant->featured_image}");
    //             }

    //             // Check if food category has an image and add asset path
    //             if ($menu_item->foodCategory && $menu_item->foodCategory->image) {
    //                 $menu_item->foodCategory->image = asset("storage/foodCategory/images/{$menu_item->foodCategory->image}");
    //             }
    //         }

    //         return api_success('Menu Items retrieved successfully', $menu_items);
    //     } catch (\Exception $e) {
    //         return api_exception($e, 'Failed to retrieve Menu Items');
    //     }
    // }

    public function getMenuItems()
    {
        try {
            $restaurant = Auth::guard('restaurant-api')->user();

            if (!$restaurant) {
                return api_unauthorized('Restaurant not found. Please login again.');
            }

            // Get menu items with only food category relationship
            $menu_items = MenuItem::where('restaurant_id', $restaurant->id)
                ->with(['foodCategory:id,name,image,status,restaurant_id,created_at,updated_at,deleted_at'])
                ->select([
                    'id',
                    'name',
                    'description',
                    'price',
                    'image',
                    'status',
                    'category_id',
                    'restaurant_id',
                    'created_at',
                    'updated_at',
                    'deleted_at'
                ])
                ->get();

            // Process images for menu items and food categories
            foreach ($menu_items as $menu_item) {
                // Add asset path to menu item image
                $menu_item->image =$menu_item->image ? asset("storage/menuItem/images/{$menu_item->image}") : null;

                // Process food category image if exists
                if ($menu_item->foodCategory && $menu_item->foodCategory->image) {
                    $menu_item->foodCategory->image = $menu_item->foodCategory->image ? asset("storage/foodCategory/images/{$menu_item->foodCategory->image}") : null;
                }
            }

            // Structure the response with restaurant details separate from menu items
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
                    'featured_image' => $restaurant->featured_image ? asset("storage/restaurants/featured/{$restaurant->featured_image}") : null,
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
                'menu_items' => $menu_items
            ];

            return api_success('Menu Items retrieved successfully', $response_data);
        } catch (\Exception $e) {
            return api_exception($e, 'Failed to retrieve Menu Items');
        }
    }

}
<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Restaurant;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restraunts.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.restraunts.create');
    }


    // public function store(Request $request)
    public function store(RestaurantRequest $request)
    {
        try {
              // Generate random password for restaurant owner
              $password = generateStrongPassword(12);// 12 character random string

            // Store images
            try {
                // $logoFilename = store_image($request->file('logo'), 'restaurants/logos');
                $restaurantImage = store_image($request->file('restaurant_images'), 'restaurants/images');
                $featuredImage = store_image($request->file('featured_image'), 'restaurants/featured');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage());
            }


            $restaurant = Restaurant::create([
                'name' => $request->name,
                'description' => $request->description,
                'speciality' => $request->speciality,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'delivery_radius' => $request->delivery_radius,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'phone' => $request->phone,
                'secondary_phone' => $request->secondary_phone,
                'email' => $request->email,
                'password' => Hash::make($password),
                'website' => $request->website,
                'owner_name' => $request->owner_name,
                'owner_contact_number' => $request->owner_contact_number,
                'owner_email' => $request->owner_email,
                'opening_time' => $request->opening_time,
                'closing_time' => $request->closing_time,
                'days_of_operation' => $request->days_of_operation,
                'delivery_fee' => $request->delivery_fee,
                'delivery_time' => $request->delivery_time,
                'average_cost_for_per_person' => $request->average_cost_for_per_person,
                'tax_gst_number' => $request->tax_gst_number,
                'business_license' => $request->business_license,
                // 'logo' => $logoFilename,
                'restaurant_images' => $restaurantImage,
                'featured_image' => $featuredImage,
                'role' => 'restaurant_owner'
            ]);

            // Check if request is API
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'status' => true,
                    'message' => 'Restaurant created successfully',
                    'data' => $restaurant,
                    'images' => [
                        // 'logo' => asset("storage/restaurants/logos/{$logoFilename}"),
                        'restaurant_image' => asset("storage/restaurants/images/{$restaurantImage}"),
                        'featured_image' => asset("storage/restaurants/featured/{$featuredImage}")
                    ]
                ], 201);
            }

            // Web response
            // return redirect()
            //     ->route('restaurants.index')
            //     ->with('success', 'Restaurant created successfully');

            return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant created successfully');
        } catch (\Exception $e) {
            // Delete uploaded images if restaurant creation fails
            // delete_image($logoFilename, 'restaurants/logos');
            delete_image($restaurantImage, 'restaurants/images');
            delete_image($featuredImage, 'restaurants/featured');

            if ($request->expectsJson()|| $request->is('api/*')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create restaurant',
                    'error' => $e->getMessage()
                ], 500);
            }

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create restaurant: ' . $e->getMessage());
        }
    }


    // public function store(RestaurantRequest $request)
    // {
    //     try {
    //         // Generate random password for restaurant owner
    //         $password = Str::random(12); // 12 character random string

    //         // Store images
    //         try {
    //             $restaurantImage = store_image($request->file('restaurant_images'), 'restaurants/images');
    //             $featuredImage = store_image($request->file('featured_image'), 'restaurants/featured');
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage());
    //         }

    //         // Start database transaction
    //         DB::beginTransaction();

    //         // Create user account for restaurant owner
    //         $user = User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($password),
    //             'phone' => $request->phone,
    //             'role' => 'restaurant_owner' // Assuming you have roles defined
    //         ]);

    //         $restaurant = Restaurant::create([
    //             'name' => $request->name,
    //             'description' => $request->description,
    //             'speciality' => $request->speciality,
    //             'address' => $request->address,
    //             'city' => $request->city,
    //             'state' => $request->state,
    //             'postal_code' => $request->postal_code,
    //             'country' => $request->country,
    //             'delivery_radius' => $request->delivery_radius,
    //             'latitude' => $request->latitude,
    //             'longitude' => $request->longitude,
    //             'phone' => $request->phone,
    //             'secondary_phone' => $request->secondary_phone,
    //             'email' => $request->email,
    //             'website' => $request->website,
    //             'owner_name' => $request->owner_name,
    //             'owner_contact_number' => $request->owner_contact_number,
    //             'owner_email' => $request->owner_email,
    //             'opening_time' => $request->opening_time,
    //             'closing_time' => $request->closing_time,
    //             'days_of_operation' => $request->days_of_operation,
    //             'delivery_fee' => $request->delivery_fee,
    //             'delivery_time' => $request->delivery_time,
    //             'average_cost_for_per_person' => $request->average_cost_for_per_person,
    //             'tax_gst_number' => $request->tax_gst_number,
    //             'business_license' => $request->business_license,
    //             'restaurant_images' => $restaurantImage,
    //             'featured_image' => $featuredImage,
    //             'user_id' => $user->id // Link restaurant to user
    //         ]);

    //         // Commit transaction
    //         DB::commit();

    //         // Store credentials in session to display to admin
    //         session(['restaurant_owner_credentials' => [
    //             'email' => $user->email,
    //             'password' => $password
    //         ]]);

    //         // Check if request is API
    //         if ($request->expectsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'status' => true,
    //                 'message' => 'Restaurant created successfully',
    //                 'data' => $restaurant,
    //                 'owner_credentials' => [
    //                     'email' => $user->email,
    //                     'password' => $password
    //                 ],
    //                 'images' => [
    //                     'restaurant_image' => asset("storage/restaurants/images/{$restaurantImage}"),
    //                     'featured_image' => asset("storage/restaurants/featured/{$featuredImage}")
    //                 ]
    //             ], 201);
    //         }

    //         // Web response
    //         return redirect()
    //             ->route('admin.restaurants.index')
    //             ->with('success', 'Restaurant created successfully. Owner credentials have been generated.');
    //     } catch (\Exception $e) {
    //         // Rollback transaction
    //         DB::rollBack();

    //         // Delete uploaded images if restaurant creation fails
    //         delete_image($restaurantImage, 'restaurants/images');
    //         delete_image($featuredImage, 'restaurants/featured');

    //         if ($request->expectsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Failed to create restaurant',
    //                 'error' => $e->getMessage()
    //             ], 500);
    //         }

    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->with('error', 'Failed to create restaurant: ' . $e->getMessage());
    //     }
    // }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurant = Restaurant::find($id);
        return view('admin.restraunts.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {

        try {
            $data = $request->validated();
            // Handle image updates
            if ($request->hasFile('restaurant_images')) {
                try {
                    // Delete old image
                    delete_image($restaurant->restaurant_images, 'restaurants/images');
                    // Store new image
                    $data['restaurant_images'] = store_image($request->file('restaurant_images'), 'restaurants/images');
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Failed to upload restaurant image: ' . $e->getMessage());
                }
            } else {
                // Keep existing image
                unset($data['restaurant_images']);
            }

            if ($request->hasFile('featured_image')) {
                try {
                    // Delete old image
                    delete_image($restaurant->featured_image, 'restaurants/featured');
                    // Store new image
                    $data['featured_image'] = store_image($request->file('featured_image'), 'restaurants/featured');
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Failed to upload featured image: ' . $e->getMessage());
                }
            } else {
                // Keep existing image
                unset($data['featured_image']);
            }

            // Update restaurant
            $restaurant->update($data);

            // Prepare response data
            $responseData = [
                'restaurant' => $restaurant,
                'images' => [
                    'restaurant_image' => asset("storage/restaurants/images/{$restaurant->restaurant_images}"),
                    'featured_image' => asset("storage/restaurants/featured/{$restaurant->featured_image}")
                ]
            ];

            // Check if request is API
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'status' => true,
                    'message' => 'Restaurant updated successfully',
                    'data' => $responseData
                ], 200);
            }

            // Web response
            return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant updated successfully');
        } catch (\Exception $e) {
            // Rollback any new images if update fails
            if (isset($data['restaurant_images']) && $data['restaurant_images'] !== $restaurant->restaurant_images) {
                delete_image($data['restaurant_images'], 'restaurants/images');
            }
            if (isset($data['featured_image']) && $data['featured_image'] !== $restaurant->featured_image) {
                delete_image($data['featured_image'], 'restaurants/featured');
            }

            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to update restaurant',
                    'error' => $e->getMessage()
                ], 500);
            }

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update restaurant: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

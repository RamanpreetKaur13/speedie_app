<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['restaurant_owner'])->default('restaurant_owner');                        // Restaurant role
            $table->string('name');                         // Restaurant Name
            $table->text('description');                    // Restaurant Description
            $table->string('speciality')->nullable();                     // Cuisine speciality
            $table->enum('type', ['subscription_based', 'self'])->nullable();                     // Cuisine speciality
            $table->enum('priority', ['high', 'medium' , 'low'])->nullable();                     // Cuisine speciality
            $table->enum('pureVeg', ['yes', 'no'])->nullable();                     // Cuisine speciality
            $table->enum('deliveryIs', ['yes', 'no'])->nullable();                     // Cuisine speciality
            $table->string('logo')->nullable();             // Restaurant Logo
            $table->text('address');                      // Restaurant Address
            $table->string('city');                         // City
            $table->string('state')->nullable();            // State
            $table->string('postal_code');                  // Postal Code
            $table->string('country');                      // Country
            $table->decimal('latitude', 10, 7)->nullable(); // Geo-Coordinates: Latitude
            $table->decimal('longitude', 10, 7)->nullable();// Geo-Coordinates: Longitude
            $table->integer('delivery_radius')->nullable(); // Delivery Radius in km
            $table->string('phone');                        // Phone Number
            $table->string('secondary_phone')->nullable();  // Secondary Phone
            $table->string('email')->unique();              // Restaurant Email
            $table->string('password')->unique()->nullable();              // Restaurant auto generated password
            $table->string('website')->nullable();          // Restaurant Website
            $table->string('opening_time');                   // Opening Time
            $table->string('closing_time');                   // Closing Time
            $table->string('days_of_operation');              // Days of Operation
            $table->string('owner_name');                   // Owner Name
            $table->string('owner_contact_number');         // Owner Contact Number
            $table->string('owner_email')->unique();        // Owner Email
            $table->decimal('average_cost_for_per_person', 8, 2)->nullable();  // Average Cost for one
            $table->decimal('delivery_fee', 8, 2)->nullable();         // Delivery Fee
            $table->string('delivery_time')->nullable();               // Estimated Delivery Time
            // $table->enum('delivery_on_off', ['on', 'off'])->default('off');
            $table->string('restaurant_images')->nullable();                      // Restaurant Images
            $table->string('featured_image')->nullable();              // Featured Image
            $table->enum('status', ['active', 'inactive', 'block'])->default('inactive'); // Restaurant Status
            $table->boolean('featured')->default(false);               // Featured Status
            $table->string('tax_gst_number')->nullable();                      // Tax ID/GST Number
            $table->string('fssai_number')->nullable();            // fssai_number License Number
            $table->string('bank_holder_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('subscription_id')->nullable();
            $table->string('restaurant_subscription_id')->nullable();
            $table->enum('subscription_active', ['0', '1'])->default(0);
            $table->string('device_token')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
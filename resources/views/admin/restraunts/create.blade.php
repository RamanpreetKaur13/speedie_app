@extends('admin.layout.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Add Restraunt</h3>
                        <small class="text-body float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4>1. Basic Information:</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="name">Restaurant Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter restaurant name" name="name"
                                            value="{{ old('name') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="description">Description</label>
                                        <input type="text" class="form-control" id="description"
                                            placeholder="Brief description (e.g., cuisine or specialties)"
                                            name="description" value="{{ old('description') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                {{-- <div class="form-group col-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Category</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                                  </div>
                            </div> --}}
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="logo">Logo</label>
                                        <input type="file" class="form-control" id="logo" name="logo" />
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h4>2. Location Information:</h4>
                            <div class="row">
                                <div class="form-group col-6">

                                    <div class="mb-6">
                                        <label class="form-label" for="address">Address</label>
                                        <textarea id="address" class="form-control" p placeholder="Enter full address" name="address"
                                            value="{{ old('address') }}"></textarea>
                                    </div>

                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="city">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="Enter city"
                                            name="city" value="{{ old('city') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="state">State</label>
                                        <input type="text" class="form-control" id="state"
                                            placeholder="Enter state or province" name="state"
                                            value="{{ old('state') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="postal_code">Postal Code/Zip Code</label>
                                        <input type="text" class="form-control" id="postal_code"
                                            placeholder="Enter postal/zip code" name="postal_code"
                                            value="{{ old('postal_code') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="country">Country</label>
                                        <input type="text" class="form-control" id="country"
                                            placeholder="Enter country" name="country" value="{{ old('country') }}" />
                                        {{-- <select name="country" class="select2 form-select" id="country"
                                            placeholder="Select country">
                                            <option value="">Select country</option>
                                            <option value="">India</option>

                                        </select> --}}
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="delivery_radius">Delivery Radius </label>
                                        <input type="text" class="form-control" id="delivery_radius"
                                            placeholder="Enter delivery radius in km" name="delivery_radius"
                                            value="{{ old('delivery_radius') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="latitude">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude"
                                            placeholder="Enter latitude" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="longitude">Longitude </label>
                                        <input type="text" class="form-control" id="longitude"
                                            placeholder="Enter delivery radius in km" name="longitude"
                                            value="{{ old('longitude') }}" />
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="mb-6">
                          <label class="form-label" for="basic-default-message">Message</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div> --}}

                            <hr>

                            <h4>3. Contact Information:</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter primary phone number" name="phone"
                                            value="{{ old('phone') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="secondary_phone">Secondary Phone
                                            Number</label>
                                        <input type="text" class="form-control" id="secondary_phone"
                                            placeholder="Enter secondary phone number (optional)"
                                            name="secondary_phone" value="{{ old('secondary_phone') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="text" class="form-control" id="email"
                                            placeholder="Enter email address" name="email"
                                            value="{{ old('email') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="website">Website</label>
                                        <input type="text" class="form-control" id="website"
                                            placeholder="Enter website URL (optional)" name="website"
                                            value="{{ old('website') }}" />
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <h4>4. Restaurant Owner Information:</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="owner_name">Owner Name</label>
                                        <input type="text" class="form-control" id="owner_name"
                                            placeholder="Enter owner name" name="owner_name"
                                            value="{{ old('owner_name') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="owner_contact_number">Owner Contact Number</label>
                                        <input type="text" class="form-control" id="owner_contact_number"
                                            placeholder="Enter owner phone number" name="owner_contact_number"
                                            value="{{ old('owner_contact_number') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="owner_email">Owner Email</label>
                                        <input type="text" class="form-control" id="owner_email"
                                            placeholder="Enter owner email" name="owner_email"
                                            value="{{ old('owner_email') }}" />
                                    </div>
                                </div>

                            </div>


                            <hr>

                            <h4>5. Operating Hours:</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="opening_time">Opening Time</label>
                                        <input type="text" class="form-control" id="opening_time"
                                            placeholder="Select opening time" name="opening_time"
                                            value="{{ old('opening_time') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="closing_time">Closing Time:</label>
                                        <input type="text" class="form-control" id="closing_time"
                                            placeholder="Select closing time" name="closing_time"
                                            value="{{ old('closing_time') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="days_of_operation">Days of Operation</label>
                                        <input type="text" class="form-control" id="days_of_operation"
                                            placeholder="Select days of operation" name="days_of_operation"
                                            value="{{ old('days_of_operation') }}" />
                                    </div>
                                </div>
                                {{-- <div class="form-group col-6">
                                  <div class="mb-6">
                                    <label class="form-label" for="basic-default-company">Logo</label>
                                    <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                                  </div>
                            </div> --}}
                            </div>



                            {{-- Pricing and Offers: add in future if needed --}}

                            <hr>
                            <h4>6. Images and Media:</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="restraunt_images">Restaurant Images</label>
                                        <input type="file" class="form-control" id="restraunt_images"
                                            name="restraunt_images" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="featured_img">Featured Image</label>
                                        <input type="file" class="form-control" id="featured_img"
                                            name="featured_img" />
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h4>7. Tax and Legal Information:</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="tax_gst_number">Tax ID/GST Number</label>
                                        <input type="text" class="form-control" id="tax_gst_number"
                                            placeholder="Enter tax/GST number" name="tax_gst_number"
                                            value="{{ old('tax_gst_number') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="business_license_number">Business License
                                            Number</label>
                                        <input type="text" class="form-control" id="business_license_number"
                                            placeholder="Enter business license number" name="business_license_number"
                                            value="{{ old('business_license_number') }}" />
                                    </div>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

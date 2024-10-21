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
                        <form>
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
                                        <input type="text" class="form-control" id="address"
                                            placeholder="Enter full address" name="address" value="{{ old('address') }}" />
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="city">City</label>
                                        <input type="text" class="form-control" id="city"
                                            placeholder="Enter city" name="city" value="{{ old('city') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="state">State</label>
                                        <input type="text" class="form-control" id="state"
                                            placeholder="Enter state or province" name="state" value="{{ old('state') }}"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="zipcode">Postal Code/Zip Code</label>
                                        <input type="text" class="form-control" id="zipcode"
                                            placeholder="Enter postal/zip code" name="zipcode" value="{{ old('zipcode') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="country">Country</label>
                                        <select name="country" class="select2 form-select" id="country"
                                            placeholder="Select country">
                                            <option value="">Select country</option>
                                            <option value="">India</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="geo_coordinates">Geo-Coordinates: </label>
                                        <input type="text" class="form-control" id="geo_coordinates"
                                            placeholder="Enter latitude and Enter longitude" name="geo_coordinates" value="{{ old('geo_coordinates') }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="form-group col-6">
                                <div class="mb-6">
                                    <label class="form-label" for="basic-default-fullname">Country</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                                  </div>
                            </div> --}}
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="delivery_radius">Delivery Radius: </label>
                                        <input type="text" class="form-control" id="delivery_radius"
                                            placeholder="Enter delivery radius in km" name="delivery_radius" value="{{ old('delivery_radius') }}"/>
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

                            <h4>3. Contact Information::</h4>
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number"
                                            placeholder="Enter primary phone number" name="phone_number" value="{{ old('phone_number') }}"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="secondary_phone_number">Secondary Phone
                                            Number</label>
                                        <input type="text" class="form-control" id="secondary_phone_number"
                                            placeholder="Enter secondary phone number (optional)" name="secondary_phone_number" value="{{ old('secondary_phone_number') }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="text" class="form-control" id="email"
                                            placeholder="Enter email address" name="email" value="{{ old('email') }}"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="website">Website</label>
                                        <input type="text" class="form-control" id="website"
                                            placeholder="Enter website URL (optional)" name="website" value="{{ old('website') }}"/>
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
                                            placeholder="Enter owner name" name="owner_name" value="{{ old('owner_name') }}"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="owner_phone">Owner Contact Number</label>
                                        <input type="text" class="form-control" id="owner_phone"
                                            placeholder="Enter owner phone number" name="owner_phone" value="{{ old('owner_phone') }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="owner_email">Owner Email</label>
                                        <input type="text" class="form-control" id="owner_email"
                                            placeholder="Enter owner email" name="owner_email" value="{{ old('owner_email') }}"/>
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
                                            placeholder="Select opening time" name="opening_time" value="{{ old('opening_time') }}"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="closing_time">Closing Time:</label>
                                        <input type="text" class="form-control" id="closing_time"
                                            placeholder="Select closing time" name="closing_time" value="{{ old('closing_time') }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="day_of_operation">Days of Operation</label>
                                        <input type="text" class="form-control" id="day_of_operation"
                                            placeholder="Select days of operation" name="day_of_operation" value="{{ old('day_of_operation') }}"/>
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
                                        <input type="file" class="form-control" id="restraunt_images"  name="restraunt_images"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="featured_img">Featured Image</label>
                                        <input type="file" class="form-control" id="featured_img"  name="featured_img"/>
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
                                            placeholder="Enter tax/GST number" name="tax_gst_number" value="{{ old('tax_gst_number') }}"/>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <div class="mb-6">
                                        <label class="form-label" for="business_license_number">Business License
                                            Number</label>
                                        <input type="text" class="form-control" id="business_license_number"
                                            placeholder="Enter business license number" name="business_license_number" value="{{ old('business_license_number') }}"/>
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

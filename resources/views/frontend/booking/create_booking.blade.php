@include('branches.header')

<section id = "about-us" class = " page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <a href="{{route('vehiclesVendor')}}" class="btn btn-info form-control" style="color: white; background-color:#23b9ca;">Your Vehicles</a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="{{route('schedulesVendor')}}" class="btn btn-info form-control" style="color: white; background-color:#23b9ca;">Your Schedules</a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="{{route('bookingsVendor')}}" class="btn btn-info form-control" style="color: white; background-color:#23b9ca;">Your Bookings</a>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class = "section-title" data-animation = "fadeInUp">
            <h2 class ="title">Create Booking</h2>
        </div>
        <div class = "row text-center">

            <div class="panel-body">
                <form action="{{route('storeBookingsVendor')}}" method="post"  enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="rows">
                        <div class="col-md-3"><strong>Traveller Name : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" placeholder="Traveller Name">
                            <small class="text text-danger">{{$errors->first('name')}}</small>
                        </div>
                    </div>

                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Contact : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="contact" class="form-control" placeholder="Contact No:">
                            <small class="text text-danger">{{$errors->first('contact')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Bus : *</strong></div>
                        <div class="col-md-9">
                            <select name="buses_id" id="" class="form-control">
                                @foreach($buses as $key)
                                    <option value="{{$key->buses_id}}">{{$key->title}}</option>
                                @endforeach
                            </select>
                            <small class="text text-danger">{{$errors->first('buses_id')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows " >
                        <div class="col-md-3"><strong>Seat : *</strong></div>
                        <div class="col-md-9">

                            <input type="text" name="seat" class="form-control" placeholder="Select Your Seat" required >

                            <small class="text text-danger">{{$errors->first('seat')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows " >
                        <div class="col-md-3"><strong>Price : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="price" placeholder="Total Price " required>
                            <small class="text text-danger">{{$errors->first('price')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows " >
                        <div class="col-md-3"><strong>Profile : *</strong></div>
                        <div class="col-md-9">
                            <select name="profile" id="profile" class="form-control">
                                <option value="confirmed" selected>confirmed  </option>
                                <option value="cancelled">cancelled </option>
                                <option value="pending">pending </option>
                            </select>
                            <small class="text text-danger">{{$errors->first('profile')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>

                    <div class="row">&nbsp;
                        <div class="col-md-12">
                            <div align="center">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                    Save Changes
                                </button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

                  </div>
    </div>

</section>
<script type="text/javascript" src="{{ url('public/jasny/jasny-bootstrap.min.js') }}"></script>
@include('branches.footer')


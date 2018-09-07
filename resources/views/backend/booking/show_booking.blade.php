@extends('layouts.backend')
@section('title', 'View Bookings')
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Schedule
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit <strong style="color: #5fa7da">Schedule</strong>&nbsp &nbsp</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Traveller</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$booking->travellers->contact }}" class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Guest</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$booking->guests->contact }}" class="form-control"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bus Name : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$booking->buses->title}}"
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Seat : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" name="seat" class="form-control" value="{{$booking->seat}} "
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Bus Number : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$booking->buses->vehicle_no}}"
                                               disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Price : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="price" value="{{$booking->price}}"
                                               disabled>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Profile : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$booking->profile}}" disabled>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div align="center">
                                            <a href="{{route('bookings')}}" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                                Go Back
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
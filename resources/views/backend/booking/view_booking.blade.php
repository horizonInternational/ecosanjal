@extends('layouts.backend')
@section('title', 'View Bookings')
@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Hover Export Data Table</h3>
                            <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Traveller</th>
                                        <th>Guest</th>
                                        <th>Bus</th>
                                        <th>Seat</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($booking as $count =>$key)
                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->travellers->name}}</td>
                                            <td>{{$key->guests->contact}}</td>
                                            <td>{{$key->buses->name}}</td>
                                            <td>{{$key->seat}}</td>
                                            <td>{{$key->price}}</td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
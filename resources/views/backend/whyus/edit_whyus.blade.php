@extends('layouts.backend')

@section('title', 'Edit Why Choose Us')

@section('content')
    <div class="col-lg-9 main-chart">
        <div class="panel panel-default">
            <div class="panel-heading" align="center">
                <h3 class="panel-title">Edit Why Choose Us</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('updateWhyus')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$whyus->whyus_id}}">
                    <div class="rows" align="center">
                        <div class="col-md-12">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 160px; height:110px;">
                                            <img src="{{url('public/img/whyus/'.$whyus->image) }}" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="width: 160px; height:110px;"></div>
                                        <div>
												<span class="btn btn-file">
												<span class="fileupload-new btn btn-primary">Select image</span>
												<span class="fileupload-exists btn btn-info">Change</span>
                                                    <input type="file" name="image" value=""/>
                                                </span>
                                            {{--<a class="btn fileupload-exists btn btn-warning" data-dismiss="fileupload">Remove</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            {{--<div class="col-md-3"><strong>Title : *</strong></div>--}}
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="title" value="{{$whyus->title}}" placeholder="Name" required>
                            </div>
                            <div class="col-md-12">&nbsp;</div>
                            {{--<div class="col-md-3"><strong>Description : *</strong></div>--}}
                            <div class="col-md-12">
                                <textarea class="form-control ckeditor" name="description" rows="7" style="resize: none" maxlength="255" required>
                                    {{$whyus->description}}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div align="center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                Save Changes
                            </button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
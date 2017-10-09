@extends('admin.default')
@section('container')
<div class="row">
    <div class="col-sm-12">
        <form action="{{route('lists.save')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="file-input">File input</label>
                <div class="col-md-9">
                    <input type="file" id="file-input" name="file-input">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
            </div>
        </form>
    </div>
</div>

@endsection
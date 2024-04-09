@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3> ایجاد دسته بندی جدید </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="post">
                @csrf
                <div class="row m-0 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">عنوان دسته بندی</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>

                <div class="col-md-4 col-3">
                    <button class="btn btn-outline-success">
                        <i class="fa fa-save"></i>
                        ذخیره
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection

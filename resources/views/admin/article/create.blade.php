@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3> ایجاد مقاله جدید </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row m-0 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">عنوان </label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>

                <div class="row m-0 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">عکس </label>
                    </div>
                    <div class="col-auto">
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div>

                <div class="row m-0 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">دسته بندی </label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" name="category" aria-label="Default select example">
                            @foreach($categories as $row)
                                <option value="{{ $row->id }}">{{ $row->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row m-0 align-items-center mt-2">
                    <div class="col-auto">
                        <label class="col-form-label">نویسنده </label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" name="author" aria-label="Default select example">
                            @foreach($authors as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row m-0 align-items-center mt-2">
                    <div class="col-auto">
                        <label class="col-form-label">متن </label>
                    </div>
                    <div class="col-auto">
                        <textarea class="form-control" name="text"></textarea>
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

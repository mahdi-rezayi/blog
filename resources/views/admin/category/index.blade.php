@extends('layouts.panel')

@section('content')
    <div class="card">

        @include('notification.notification')

        <div class="card-header">
            <h3> لیست دسته بندی ها </h3>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $index=>$row)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $row->title }}</td>
                        <td class="d-flex flex-wrap">
                            <a href="{{ route('admin.category.edit',$row->id) }}" class="btn btn-outline-warning p-1"> <i class="fa fa-edit"></i> </a>
                            <form class="d-block" action="{{ route('admin.category.delete',$row->id) }}" method="post" style="width: max-content;display: block">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn bg-white text-danger p-1"> <i class="fa fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

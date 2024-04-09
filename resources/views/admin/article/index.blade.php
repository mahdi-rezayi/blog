@extends('layouts.panel')

@section('content')
    <div class="card">

        @include('notification.notification')

        <div class="card-header">
            <h3> لیست مقاله ها </h3>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">عنوان</th>
                    <th scope="col">تصویر</th>
                    <th scope="col">متن</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $index=>$row)
                    <tr>
                        <td>{{ $row->title }}</td>
                        <td><img src="/images/poster/{{ $row->photo }}" alt="poster" width="128"></td>
                        <td>{{ \Illuminate\Support\Str::limit($row->text,10) }}</td>
                        <td>
                            <select class="form-select" aria-label="Default select example" onchange="change(this,'{{ $row->id }}')">
                                    <option value="1" @if($row->status == 1) selected @endif>فعال</option>
                                    <option value="0" @if($row->status == 0) selected @endif>غیر فعال</option>
                            </select>
                        </td>
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

    <script>
        function change(tag,id){
            let val = tag.value

            let url = "{{ route('admin.article.status') }}"
            let data = {
                '_token': '{{ @csrf_token() }}',
                'id':id,
                'value' : val
            }

            $.post(url,data,function (response) {
                console.log(response)
                alert(response.message)
            })

        }
    </script>

@endsection

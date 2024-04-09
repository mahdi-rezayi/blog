<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> ادمین وب سایت </title>
<link href="/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/css/bootstrap.rtl.min.css" rel="stylesheet">
<link href="/admin/css/select2.min.css" rel="stylesheet">
<link href="/admin/css/font-awesome.css" rel="stylesheet">
<link href="/admin/css/admin.css" rel="stylesheet">


<body style="direction: rtl">
<div class="wrapper d-flex flex-wrap justify-content-start" style="min-height: 100%;position: relative;overflow: hidden;">
    <div class="flex-shrink-0 p-3 col-sm-12 col-md-3 border-primary border-3 border-start bg-light">
        <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom bg-info">
            <span class="fs-5 fw-semibold" style="margin: auto"> پنل مدیریت وبسایت </span>
        </a>
        <ul class="nav nav-pills flex-column mb-auto" id="navbar">
            <li class="nav-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#cat-collapse" aria-expanded="true">
                    داشبورد
                </button>
                <div class="collapse show" id="cat-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                        <li>
                            <a href="http://dp.mahdi/admin/category" class="link-dark d-inline-flex text-decoration-none rounded">
                                <i class="fa fa-dashboard mx-2" style="line-height:25px"></i>
                                مشاهده داشبورد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#cat-collapse" aria-expanded="true">
                    دسته بندی
                </button>
                <div class="collapse show" id="cat-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                        <li>
                            <a href="{{ route('admin.category.list') }}" class="link-dark d-inline-flex text-decoration-none rounded">
                                <i class="fa fa-eye mx-2" style="line-height:25px"></i>
                                مشاهده دسته بندی
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.category.create') }}" class="link-dark d-inline-flex text-decoration-none rounded">
                                <i class="fa fa-plus mx-2" style="line-height:25px"></i>
                                ایجاد دسته بندی
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="card col-sm-12 col-md-9 p-3" style="">
        @yield('content')
    </div>
</div>



<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/select2.min.js"></script>
<script src="/admin/js/jscolor.js"></script>



</body>
</html>

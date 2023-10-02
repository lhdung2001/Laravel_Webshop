@extends('layouts.admin')


@section('content')

    <div class="row">
      <div class="col-md-12 grid-margin">
        @if(session('message'))
          <h2>{{(session('message')) }}</h2>
        @endif
          <div class="me-md-3 me-xl-5">
            <h2>Dashboard,</h2>
            <p class="mb-md-0">Bảng thống kê của website.</p>
            <hr>
          </div>      

          <div class="row">
            <div class="col-md-3">
              <div class="card card-body bg-primary text-white mb-3">
                <label>Tổng Đơn Hàng </label>
                <h1>{{ $totalOrder }}</h1>
                <a href="{{ url('admin/orders') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-success text-white mb-3">
                <label>Đơn hàng trong ngày </label>
                <h1>{{ $todayOrder }}</h1>
                <a href="{{ url('admin/orders') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-warning text-white mb-3">
                <label>Đơn hàng trong tháng </label>
                <h1>{{ $thisMonthOrder }}</h1>
                <a href="{{ url('admin/orders') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-danger text-white mb-3">
                <label>Đơn hàng trong năm </label>
                <h1>{{ $thisYearOrder }}</h1>
                <a href="{{ url('admin/orders') }}" class="text-white">Xem</a>
              </div>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-md-3">
              <div class="card card-body bg-primary text-white mb-3">
                <label>Tổng Sản Phẩm </label>
                <h1>{{ $totalProducts }}</h1>
                <a href="{{ url('admin/products') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-success text-white mb-3">
                <label>Tổng Danh Mục </label>
                <h1>{{ $totalCategories }}</h1>
                <a href="{{ url('admin/category') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-warning text-white mb-3">
                <label>Tổng Nhãn Hiệu </label>
                <h1>{{ $totalBrands }}</h1>
                <a href="{{ url('admin/brands') }}" class="text-white">Xem</a>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3">
              <div class="card card-body bg-primary text-white mb-3">
                <label>Tổng Người </label>
                <h1>{{ $totalAllUsers }}</h1>
                <a href="{{ url('admin/users') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-success text-white mb-3">
                <label>Tổng Người Dùng</label>
                <h1>{{ $totalUser }}</h1>
                <a href="{{ url('admin/users') }}" class="text-white">Xem</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body bg-warning text-white mb-3">
                <label>Tổng Quản Trị </label>
                <h1>{{ $totalAdmin }}</h1>
                <a href="{{ url('admin/users') }}" class="text-white">Xem</a>
              </div>
            </div>
          </div>
      </div>
    </div>


@endsection
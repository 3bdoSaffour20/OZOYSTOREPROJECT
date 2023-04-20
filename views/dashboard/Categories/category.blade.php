@extends('dashboard.layout.layout')

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الأصناف </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{url('/index')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">لوحة التحكم</li>
                            <li class="breadcrumb-item active">إعدادات الموقع</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row product-adding">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>الأصناف</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <table class="table table-striped" style="background-color: #ff6131ea;">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">إسم الصنف</th>
                                        <th scope="col">عمليات</th>
                                      </tr>
                                    </thead>
                                    @foreach ($categories as $category)
                                    <tbody>
                                      <tr>
                                            <td>{{$category->id}}</th>
                                            <td>{{$category->name}}</td>
                                      
                                      <td>
                                        <a class="btn btn-success" href="{{url('/category-edit/'.$category->id)}}">تعديل</a>
                                        <a class="btn btn-danger" href="{{url('/category-delete/'.$category->id)}}">حذف</a>
                                    </td>
                                </tr>
                                       @endforeach
                                     </tbody>
                                     </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
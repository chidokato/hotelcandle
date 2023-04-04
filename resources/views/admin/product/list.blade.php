@extends('admin.layout.index')
@section('product') menu-item-active @endsection
@section('content')
@include('admin.layout.header')
@include('admin.errors.alerts')
<?php use App\articles_translations; ?>
<div class="d-sm-flex align-items-center justify-content-between mb-3 flex">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">Danh sách sản phẩm</h2>
    <a class="add-iteam" href="admin/product/add"><button class="btn-success form-control" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Thêm mới</button></a>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav nav-pills">
                    <li><a data-toggle="tab" class="nav-link active" href="#anh">Danh sách bài viết</a></li>
                    <!-- <li><a data-toggle="tab" class="nav-link " href="#viet">Tiếng Việt</a></li>
                    <li><a data-toggle="tab" class="nav-link" href="#nhat">Tiếng Nhật</a></li> -->
                </ul>
                <!-- <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
            </div>
            <div class="card-body mobile-hide">
                <form action="admin/product/search" class="search" method="post"><input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group mr-3">
                        <input value="{{ isset($key) ? $key : '' }}" name="key" type="text" class="form-control mr-3" placeholder="Tên bài viết...">
                    </div>
                    <div class="form-group mr-3">
                        <input type="text" class="form-control mr-3" name="datefilter" value="{{ isset($datefilter) ? $datefilter : '' }}" placeholder='Ngày đăng ...' />
                    </div>
                    <div class="form-group mr-3">
                        <select class="form-control mr-3" name="paginate">
                            <option <?php if(isset($paginate) && $paginate=='50'){echo "selected";} ?> value="50">50</option>
                            <option <?php if(isset($paginate) && $paginate=='100'){echo "selected";} ?> value="100">100</option>
                            <option <?php if(isset($paginate) && $paginate=='200'){echo "selected";} ?> value="200">200</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary form-control" type="submit">
                            <i class="fas fa-search fa-sm"></i> Tìm kiếm
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-content ">
                <div class="tab-pane overflow active" id="anh">
                    <table class="table">
                        <form method="post" action="admin/product/delete_all"> <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <thead>
                            <tr>
                                <th style="position: relative; width: 25px;padding-left: 15px;">
                                    <label class="container"><input onclick="toggle(this);" type="checkbox" id="checkbox"><span class="checkmark"></span></label>
                                    <button type="submit" onclick="dell()" class="btn btn-danger btn-sm  ml-2 delall"><i class="la la-trash"></i> Dell all</button>
                                </th>
                                <th></th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Trạng thái</th>
                                <th>Giá</th>
                                <th>Người đăng</th>
                                <th>Ngày đăng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                @foreach($article->articles_translations as $key => $val)
                                <tr id="articles">
                                    <input type="hidden" id="id" value="{{$val->id}}" />
                                    <td class="td_checkbox" style="padding-left: 15px;">
                                        <label class="container"><input type="checkbox" name="foo[]" value="{{$val->id}}"><span class="checkmark"></span></label>
                                    </td>
                                    <td class="thumbnail-img">
                                        {!! isset($val->articles->img) ? '<img data-action="zoom" src="data/product/'.$val->articles->img.'" />' : '' !!}
                                    </td>
                                    <td>
                                        <a class="line-1" href="admin/product/edit/{{$val->id}}" class="mr-2">[{{$val->locale}}] {{$val->name}}</a>
                                    </td>
                                    <td>{{ isset($val->category_translations->name) ? $val->category_translations->name : '' }}</td>
                                    @if($key==0)
                                    <td rowspan="3">
                                        <div class="checkboxes__item">
                                            <label class="checkbox style-e text-none">
                                                <input type="checkbox" <?php if($val->articles->status == 'true'){echo "checked";} ?> type="checkbox" id='status_articles'/>
                                                <div class="checkbox__checkmark"></div>
                                                <div class="checkbox__body"></div>
                                            </label>
                                        </div>
                                    </td>
                                    
                                    <td rowspan="3">{{ $val->articles->price }}</td>
                                    <td rowspan="3">{{ isset($val->articles->user->name) ? $val->articles->user->name : '' }}</td>
                                    <td rowspan="3">
                                        <!-- {{date('d/m/Y',strtotime($val->updated_at))}} <br>  -->
                                        <i style="font-size: 14px">{{date('d/m/Y',strtotime($val->created_at))}}</i>
                                    </td>
                                    <td rowspan="3">
                                        <a title="xóa" class="dell" href="admin/product/delete/{{$val->articles->id}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .table td, .table th {
        vertical-align: revert;border: 1px solid #e3e6f0;
    }
    .checkboxes__item{ text-align: center; }
    .line{ background: #e3e6f0; padding: 2px !important; }
</style>
@endsection
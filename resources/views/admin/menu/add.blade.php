@extends('admin.layout.index')
@section('product') show @endsection
@section('content')
@include('admin.errors.alerts')
<form action="admin/menu/{{ isset($data) ? 'edit/'.$data->id : 'add' }}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed">
    <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ">
        <li class="nav-item"> <a class="nav-link line-1" href="admin/menu/list" ><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="mobile-hide">Quay lại trang danh sách sản phẩm</span> </a> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mobile-hide">
            <a class="add-iteam" target="_blank" href="{{ isset($data) ? asset('').$data->slug : asset('') }}"><button class="btn-warning form-control" type="button"><i class="fa fa-share" aria-hidden="true"></i> {{ isset($data) ? 'Xem thực tế' : 'Trang chủ' }}</button></a>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item mobile-hide">
            <button type="reset" class="btn-danger mr-2 form-control"><i class="fas fa-sync"></i> Làm mới</button>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item">
            <button type="submit" class="btn-success form-control"><i class="far fa-save"></i> Lưu lại</button>
        </li>
    </ul>
</nav>

<div class="d-sm-flex align-items-center justify-content-between mb-3 flex" style="height: 38px;">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">{{ isset($data) ? $data->name : 'Thêm mới' }}</h2>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên menu [en]</label>
                            <input type="hidden" name="locale[]" value="en" />
                            <input name="name[]" placeholder="Tên danh mục" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên menu [vi]</label>
                            <input type="hidden" name="locale[]" value="vi" />
                            <input name="name[]" placeholder="Tên danh mục" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên menu [jp]</label>
                            <input type="hidden" name="locale[]" value="jp" />
                            <input name="name[]" placeholder="Tên danh mục" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="">Root</label>
                            <select id="parent" name='parent' class="form-control select2">
                                <option value="0">-- ROOT --</option>
                                @if(isset($data))
                                <?php addeditcat ($menu,0,$str='',$data['parent']); ?>
                                @else
                                <?php addeditcat ($menu,0,$str='',old('parent')); ?>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Slug</label>
                            <input value="{{ isset($data) ? $data->slug : '' }}" name="slug" placeholder="slug" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>View</label>
                            <input value="{{ isset($data) ? $data->view : '' }}" name="view" placeholder="View" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="">Phân loại</label>
                            <select name='classify' class="form-control select2">
                                <!-- <option value="">-- ROOT --</option> -->
                                <option <?php if(isset($data) && $data->classify == 'Main menu'){echo 'selected';} ?> value="Main menu">Main menu</option>
                                <option <?php if(isset($data) && $data->classify == 'Product menu'){echo 'selected';} ?> value="Product menu">Product menu</option>
                                <option <?php if(isset($data) && $data->classify == 'Menu top'){echo 'selected';} ?> value="Menu top">Menu top</option>
                                <option <?php if(isset($data) && $data->classify == 'Main botton'){echo 'selected';} ?> value="Main botton">Main botton</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" id="ckeditor">{{ isset($data) ? $data->content : '' }}</textarea>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3">
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Images</h6>
                <div class="dropdown no-arrow">
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
                </div>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="{{ isset($data) ? 'data/menu/'.$data->img : 'data/no_image.jpg' }}" />
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                    <label><input type="checkbox" name="dell_img">Xóa ảnh</label>
                </div>
            </div>

        </div> -->
    </div>
</div>
</form>
@endsection
@section('function')
<?php 
    function addeditcat ($data, $parent=0, $str='',$select=0)
    {
        foreach ($data as $value) {
            if ($value['parent'] == $parent) {
                if($select != 0 && $value['id'] == $select )
                { ?>
                    <option value="<?php echo $value['id']; ?>" selected> <?php echo $str.$value['name']; ?> </option>
                <?php } else { ?>
                    <option value="<?php echo $value['id']; ?>" > <?php echo $str.$value['name']; ?> </option>
                <?php }
                
                addeditcat ($data, $value['id'], $str.'___',$select);
            }
        }
    }
?>
@endsection


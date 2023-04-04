@extends('admin.layout.index')
@section('product') menu-item-active @endsection
@section('content')
@include('admin.errors.alerts')
<?php use App\section; ?>
<form id="validateForm" action="admin/product/edit/{{$data->id}}" method="POST" enctype="multipart/form-data" id="target">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed">
    <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ">
        <li class="nav-item"> <a class="nav-link line-1" href="admin/product/list" ><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="mobile-hide">Quay lại trang trước</span> </a> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mobile-hide">
            <a class="add-iteam" target="_blank" href="{{ isset($data) ? asset('').$data->category->slug.'/'.$data->slug : asset('') }}"><button class="btn-warning form-control" type="button"><i class="fa fa-share" aria-hidden="true"></i> {{ isset($data) ? 'Xem thực tế' : 'Trang chủ' }}</button></a>
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
    <div class="col-xl-9 col-lg-9">
        <div class="card shadow mb-4">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav nav-pills">
                    <li><a data-toggle="tab" class="nav-link active" href="#anh">Thông tin</a></li>
                </ul>
            </div>
            <div class="tab-content ">
                <div class="tab-pane overflow active" id="anh">
                    <input type="hidden" name="locale[]" value="en" />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title <span class="red">(*)</span></label>
                                    <input required value="{{ isset($data) ? $data->name : '' }}" name="name" placeholder="..." type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Short description</label>
                                    <textarea class="form-control" name="detail" rows="5">{{$data->detail}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control" id="ckeditor">{{ isset($data) ? $data->content : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header py-3 pr-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">SEO option</h6>
                    </div>
                    <div class="card-body add_to_me" id="add_to_me">
                        <div class="form-group" >
                            <label>SEO title</label>
                            <input value="{{$data->title}}" class="form-control" type="text" name="title" placeholder="...">
                        </div>
                        <div class="form-group" >
                            <label>SEO description</label>
                            <input value="{{$data->description}}" class="form-control" type="text" name="description" placeholder="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3">
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin bổ sung</h6>
            </div>
            <div class="card-body">
                <div class="form-group" style="position: relative;">
                    <label>Danh mục <span class="red">(*)</span></label>
                    <select name='category_id' class="form-control select2">
                        <option value="">-- Select --</option>
                        @if(isset($data))
                        <?php addeditcat ($category_translations,0, $str='',$data['category_translations_id']) ?>
                        @else
                        <?php addeditcat ($category_translations,0,$str='',old('parent')); ?>
                        @endif
                    </select>
                </div>
                <div class="form-group" >
                    <label>Giá phòng</label>
                    <div class="flex">
                        <input class="form-control" value="{{$data->articles->price}}" type="text" name="price" placeholder="...">
                        <select name="dvi" class="form-control">
                            <option value="Triệu/tháng">Triệu / tháng</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ảnh đại diện</h6>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="data/product/{{$data->articles->img}}" />
                        <span style="cursor: pointer;"><i class="fa fa-plus" aria-hidden="true"></i> Tải ảnh lên từ thiết bị</span>
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Chọn nhiều ảnh</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="file" name="imgdetail[]" multiple class="form-control">
                    <p>Nhấn giữ <i style="color: red">Ctrl</i> để chọn nhiều ảnh !</p>
                </div>
                <div class="row detail-img">
                    @foreach($data->articles->images as $val)
                    <div class="col-md-4" id="detail_img">
                        <img src="data/product/300/{{$val->img}}">
                        <button type="button" id="del_img_detail"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                        <input type="hidden" name="id_img_detail" id="id_img_detail" value="{{$val->id}}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card shadow mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="checkboxes__item">
                                <label class="checkbox style-e">
                                <input type="checkbox" name="wifi" <?php if($data->articles->product->wifi == 'on'){echo "checked";} ?> />
                                <div class="checkbox__checkmark"></div>
                                <div class="checkbox__body">Miễn phí Wifi</div>
                                </label>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="checkboxes__item">
                              <label class="checkbox style-e">
                                <input type="checkbox" name="breakfast" <?php if($data->articles->product->breakfast == 'on'){echo "checked";} ?> />
                                <div class="checkbox__checkmark"></div>
                                <div class="checkbox__body">Miễn phí ăn sáng</div>
                              </label>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="checkboxes__item">
                              <label class="checkbox style-e">
                                <input type="checkbox" name="pool" <?php if($data->articles->product->pool == 'on'){echo "checked";} ?> />
                                <div class="checkbox__checkmark"></div>
                                <div class="checkbox__body">Hồ bơi</div>
                              </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <div class="checkboxes__item">
                      <label class="checkbox style-e">
                        <input type="checkbox" name="parking" <?php if($data->articles->product->parking == 'on'){echo "checked";} ?> />
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Chỗ để xe</div>
                      </label>
                    </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <div class="checkboxes__item">
                      <label class="checkbox style-e">
                        <input type="checkbox" name="gym" <?php if($data->articles->product->gym == 'on'){echo "checked";} ?> />
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Gym</div>
                      </label>
                    </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <div class="checkboxes__item">
                      <label class="checkbox style-e">
                        <input type="checkbox" name="safe" <?php if($data->articles->product->safe == 'on'){echo "checked";} ?> />
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Két sắt an toàn</div>
                      </label>
                    </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <div class="checkboxes__item">
                      <label class="checkbox style-e">
                        <input type="checkbox" name="desk" <?php if($data->articles->product->desk == 'on'){echo "checked";} ?> />
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Bàn làm việc</div>
                      </label>
                    </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <div class="checkboxes__item">
                      <label class="checkbox style-e">
                        <input type="checkbox" name="spa" <?php if($data->articles->product->spa == 'on'){echo "checked";} ?> />
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Spa</div>
                      </label>
                    </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <div class="checkboxes__item">
                      <label class="checkbox style-e">
                        <input type="checkbox" name="tivi" <?php if($data->articles->product->tivi == 'on'){echo "checked";} ?> />
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Tivi</div>
                      </label>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<style type="text/css">
    .button_section{
        background: none; border: 2px solid #fff; border-radius: 5px;
    }
    .button_section:hover{
        border: 2px solid #ddd; border-radius: 5px;
    }
    /*.input_section{
        border: none;
        border-bottom: 1px solid #ddd;
        width: 100%;
        border-radius: 0px;
        padding-left: 0px;
    }
    .input_section:focus{
        box-shadow: none;
    }*/
    .chinhsach{
        display: flex;justify-content: space-between;
    }
    .chinhsach .checkbox.style-e .checkbox__checkmark{
        top: -14px;
    }
    .number_header{  }
    .number_header .number{ width: 50px; border-radius: 5px 0px 0px 5px; }
    .number_header .tab_heading{ border-radius: 0px 5px 5px 0px; }
</style>

<script>
    function addCode() {
        document.getElementById("add_to_me").insertAdjacentHTML("beforeend",
                '<div class="form-group d-flex align-items-center justify-content-between" id="section_list"><input class="form-control" type="text" name="name_section[]" placeholder="..."><button type="button" onClick="delete_row(this)" class="form-control w100"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></div>');
    }
    function delete_row(e) {
        e.parentElement.remove();
    }
</script>

@endsection

@section('function')
<?php 
    function addeditcat ($data, $parent=0, $str='',$select=0)
    {
        foreach ($data as $value) {
            if ($value['parent'] == $parent) {
                if($select != 0 && $value['id'] == $select )
                { ?>
                    <option value="<?php echo $value->category['id']; ?>" selected> <?php echo $str.$value['name']; ?> </option>
                <?php } else { ?>
                    <option value="<?php echo $value->category['id']; ?>" > <?php echo $str.$value['name']; ?> </option>
                <?php }
                
                addeditcat ($data, $value['id'], $str.'__',$select);
            }
        }
    }
?>
@endsection

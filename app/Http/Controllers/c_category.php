<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\seo;
use App\category;
use App\category_translations;
use Image;
use File;

class c_category extends Controller
{
    public function getlist()
    {
        $category_en = category_translations::where('locale','en')->get();
        $category_vi = category_translations::where('locale','vi')->get();
        $category_jp = category_translations::where('locale','jp')->get();
        return view('admin.category.list',[
            'category_en'=>$category_en,
            'category_vi'=>$category_vi,
            'category_jp'=>$category_jp,
        ]);
    }

    public function search(Request $Request)
    {
        $datefilter[] = '';
        $category = category::orderBy('view','asc')->where('id','!=' , 0);
        if($Request->key){
            $category->where('name','like',"%$Request->key%");
        }
        if(isset($Request->datefilter)){
            $datefilter = explode(" - ", $Request->datefilter);
            $day1 = date('Y-m-d',strtotime($datefilter[0]));
            $day2 = date('Y-m-d',strtotime($datefilter[1]));
            // $category->whereBetween('created_at', [$day1, $day2]);
            $category->whereDate('created_at','>=', $day1)->whereDate('created_at','<=', $day2);
        }
        $category = $category->paginate($Request->paginate);

        return view('admin.category.list',[
            'category'=>$category,
            'key'=>$Request->key,
            'datefilter'=>$Request->datefilter,
            'paginate'=>$Request->paginate,
        ]);
    }

    public function getadd()
    {
        $category_translations_en = category_translations::where('locale','en')->where('sort_by',1)->select('id','name','parent')->get();
        $category_translations_vi = category_translations::where('locale','vi')->where('sort_by',1)->select('id','name','parent')->get();
        $category_translations_jp = category_translations::where('locale','jp')->where('sort_by',1)->select('id','name','parent')->get();
        return view('admin.category.add',[
            'category_translations_en'=>$category_translations_en,
            'category_translations_vi'=>$category_translations_vi,
            'category_translations_jp'=>$category_translations_jp,
        ]);
    }

    public function postadd(Request $Request)
    {
        $category = new category;
        $category->user_id = Auth::User()->id;
        $category->sku = str_random(8);
        $category->status = 'true';
        if ($Request->hasFile('img')) {
            $file = $Request->file('img'); $filename = $file->getClientOriginalName();
            while(file_exists("data/category/".$filename)){$filename = str_random(4)."_".$filename;}
            $img = Image::make($file)->resize(120, 120, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/thumbnail/'.$filename));
            $img = Image::make($file)->resize(1000, 1000, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/'.$filename));
            $category->img = $filename;
        }
        $category->save();

        if ($Request->locale) {
            foreach ($Request->locale as $key => $value) {
                $category_translations = new category_translations;
                $category_translations->locale = $value;
                $category_translations->category_id = $category->id;
                $category_translations->view = $Request->view;
                $category_translations->slug = changeTitle($Request->name[0]);
                $category_translations->name = $Request->name[$key];
                $category_translations->sort_by = $Request->sort_by;
                $category_translations->content = $Request->content[$key];
                $category_translations->title = $Request->title[$key];
                $category_translations->description = $Request->description[$key];
                if ($Request->parent == 0) {
                    $category_translations->parent = 0;
                }else{
                    $parent = category_translations::find($Request->parent);
                    $parent_id = category_translations::where('category_id', $parent->category_id)->where('locale', $value)->first();
                    $category_translations->parent = $parent_id->id;
                }
                $category_translations->save();
            }
        }
        return redirect('admin/category/list')->with('Success','Thành công');
    }

    public function getedit($id)
    {
        $data = category_translations::findOrFail($id);
        $category_translations = category_translations::where('locale',$data->locale)->where('sort_by',$data->sort_by)->select('id','category_id','name','parent')->get();
        return view('admin.category.edit',[
            'data'=>$data,
            'category_translations'=>$category_translations,
        ]);
    }

    public function double($id)
    {
        $data = category::findOrFail($id);
        $category = category::where('sort_by',$data['sort_by'])->select('id','name','parent')->get();
        return view('admin.category.double',['data'=>$data, 'category'=>$category]);
    }

    public function postedit(Request $Request,$id,$cid)
    {
        $category_translations = category_translations::find($id);
        $category_translations->name = $Request->name;
        $category_translations->content = $Request->content;
        $category_translations->title = $Request->title;
        $category_translations->description = $Request->description;
        $category_translations->save();
        
        // category
        $category = category::find($cid);
        if ($Request->hasFile('img')) {
            // xóa ảnh cũ
            if(File::exists('data/category/thumbnail/'.$category->img)) { File::delete('data/category/'.$category->img); File::delete('data/category/thumbnail/'.$category->img); }
            // thêm ảnh mới
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/category/".$filename)){$filename = str_random(4)."_".$filename;}
            $img = Image::make($file)->resize(120, 120, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/thumbnail/'.$filename));
            $img = Image::make($file)->resize(1000, 1000, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/category/'.$filename));
            $category->img = $filename;
        }
        $category->save();
        // dd($Request->slug);
        if ($Request->parent == 0) {
            $parents = category_translations::where('category_id', $cid)->get();
            foreach ($parents as $key => $parent) {
                $editcattrans = category_translations::find($parent->id);
                $editcattrans->view = $Request->view;
                $editcattrans->slug = $Request->slug;
                $editcattrans->parent = 0;
                $editcattrans->save();
            }
        }else{
            $parents = category_translations::where('category_id', $Request->parent)->get();
            foreach ($parents as $key => $parent) {
                $editcattrans = category_translations::where('locale', $parent->locale)->where('category_id', $cid)->first();
                $editcattrans->view = $Request->view;
                $editcattrans->slug = $Request->slug;
                $editcattrans->parent = $parent->id;
                $editcattrans->save();
            }
        }
        
        return redirect()->back()->with('Success','Thành công');
    }

    public function getdelete($id)
    {
        $category = category::find($id);
        foreach ($category->category_translations as $key => $value) {
            $count_cat = category_translations::where('parent',$value->id)->count();
            if($count_cat > 0){
                return redirect('admin/category/list')->with('Error','Tồn tại danh mục con !');
            }else{
                if(File::exists('data/category/'.$value->img)) {
                    File::delete('data/category/'.$value->img);
                    File::delete('data/category/thumbnail/'.$value->img); }
                $value->delete();
            }
        }
        $category->delete();
        return redirect('admin/category/list')->with('Success','Success');
    }

       

}

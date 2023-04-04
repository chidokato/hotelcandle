<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\province;
use Image;
use File;

class c_province extends Controller
{
    public function getlist()
    {
        $province = province::orderBy('status','desc')->paginate(50);
        $count = province::orderBy('id','desc')->count();

        // $updateprovince = province::get();
        // foreach($updateprovince as $val){
        //     $provinceedit = province::where('id', $val->id)->first();
        //     $provinceedit->slug = changeTitle($provinceedit->name);
        //     $provinceedit->save();
        // }

    	return view('admin.province.list',[
            'province'=>$province,
            'count'=>$count,
        ]);
    }

    public function search(Request $Request)
    {

        $province = province::orderBy('status','desc')->where('id','!=' , 0);
        if($Request->key){
            $province->where('name','like',"%$Request->key%");
        }
        if($Request->ngay1 && $Request->ngay2){
            $product->whereBetween('ngayketthuc', array($Request->ngay1, $Request->ngay2));
        }
        $province = $province->paginate($Request->paginate);
        $count = count($province);
        return view('admin.province.list',[
            'province'=>$province,
            'key'=>$Request->name,
            'paginate'=>$Request->paginate,
            'count'=>$count,
        ]);
    }

    public function getedit($id)
    {
        $data = province::findOrFail($id);
        return view('admin.province.addedit',[
            'data'=>$data,
        ]);
    }

    public function postedit(Request $Request,$id)
    {
        $articles = articles::find($id);
        $articles->name = $Request->name;
        $articles->slug = $Request->slug;
        $articles->detail = $Request->detail;
        $articles->content = $Request->content;
        $articles->category_id = $Request->cat_id;
        $articles->style = $Request->style;
        if ($Request->hasFile('img')) {
            // xóa ảnh cũ
            if(File::exists('data/news/'.$articles->img)) { 
                File::delete('data/news/'.$articles->img); 
                File::delete('data/news/300/'.$articles->img); 
                File::delete('data/news/80/'.$articles->img); 
            }
            // xóa ảnh cũ
            // thêm ảnh mới
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/news/300/".$filename)){ $filename = str_random(4)."_".$filename; }
            $img = Image::make($file)->resize(1000, 800, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/news/'.$filename));
            $img = Image::make($file)->resize(300, 300, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/news/300/'.$filename));
            $img = Image::make($file)->resize(80, 80, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/news/80/'.$filename));
            $articles->img = $filename;
            // thêm ảnh mới
        }
        $articles->save();
        
        $seo = seo::find($articles->seo_id);
        if ($Request->title == "") {
            $seo->title = $Request->name;
        }else{
            $seo->title = $Request->title;
        }
        $seo->description = $Request->description;
        $seo->keywords = $Request->keywords;
        $seo->robot = $Request->robot;
        $seo->save();
        return redirect('admin/news/edit/'.$id)->with('Alerts','Thành công');
    }

    
}

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Image;
use File;
use App\news;
use App\section;
// use App\mausac;
// use App\form;
// use App\size;
use App\articles;
use App\articles_translations;
use App\category;
use App\category_translations;
use App\images;
// use App\investor;
// use App\province;
// use App\district;
// use App\ward;
// use App\street;

class c_news extends Controller
{
    public function getlist()
    {
        $articles = articles::where('sort_by',2)->orderBy('id','desc')->get();
        $articles_vi = articles_translations::where('locale','en')->where('sort_by',2)->orderBy('id','desc')->get();
        $articles_jp = articles_translations::where('locale','en')->where('sort_by',2)->orderBy('id','desc')->get();
        return view('admin.news.list',[
            'articles'=>$articles,
            'articles_vi'=>$articles_vi,
            'articles_jp'=>$articles_jp,
        ]);
    }

    // public function search(Request $Request)
    // {
    //     $datefilter[] = '';
    //     $articles = articles::where('sort_by',1)->orderBy('id','desc')->where('id','!=' , 0);
    //     if($Request->key){
    //         $articles->where('name','like',"%$Request->key%");
    //     }
    //     if($Request->category_id){
    //         $articles->where('category_id',$Request->category_id);
    //     }
    //     if(isset($Request->datefilter)){
    //         $datefilter = explode(" - ", $Request->datefilter);
    //         $day1 = date('Y-m-d',strtotime($datefilter[0]));
    //         $day2 = date('Y-m-d',strtotime($datefilter[1]));
    //         $articles->whereDate('created_at','>=', $day1)->whereDate('created_at','<=', $day2);
    //     }
    //     $articles = $articles->paginate($Request->paginate);
    //     $category = category::where('sort_by',1)->orderBy('id','desc')->get();
    //     return view('admin.news.list',[
    //         'news'=>$articles,
    //         'key'=>$Request->key,
    //         'datefilter'=>$Request->datefilter,
    //         'paginate'=>$Request->paginate,
    //         'category'=>$category,
    //         'category_id'=>$Request->category_id,
    //     ]);
    // }

    public function getadd()
    {
        $category_translations = category_translations::where('locale','vi')->where('sort_by',2)->orderBy('id','desc')->get();
        return view('admin.news.add',[
            'category_translations'=>$category_translations,
        ]);
    }

    public function postadd(Request $Request)
    {
        // articles
        $articles = new articles;
        $articles->user_id = Auth::User()->id;
        $articles->sku = str_random(8);
        $articles->hits = '50';
        $articles->sort_by = '2';
        $articles->status = 'true';
        $articles->dvi = $Request->dvi;
        if ($Request->hasFile('img')) {
            $file = $Request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/news/300/".$filename)){ $filename = str_random(4)."_".$filename; }
            $img = Image::make($file)->resize(1000, 600, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/news/'.$filename));
            $img = Image::make($file)->resize(300, 300, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/news/300/'.$filename));
            $img = Image::make($file)->resize(80, 80, function ($constraint) {$constraint->aspectRatio();})->save(public_path('data/news/80/'.$filename));
            $articles->img = $filename;
        }
        $articles->save();
        
        // articles_translations
        if ($Request->locale) {
            foreach ($Request->locale as $key => $loca) {
                $category_translations_id = category_translations::where('category_id', $Request->category_id)->where('locale', $loca)->first();
                $articles_translations = new articles_translations;
                $articles_translations->locale = $loca;
                $articles_translations->articles_id = $articles->id;
                $articles_translations->category_id = $Request->category_id;
                $articles_translations->category_translations_id = $category_translations_id->id;
                $articles_translations->sort_by = '2';
                $articles_translations->slug = changeTitle($Request->name[0]);
                $articles_translations->name = $Request->name[$key];
                $articles_translations->detail = $Request->detail[$key];
                $articles_translations->content = $Request->content[$key];
                $articles_translations->title = $Request->title[$key];
                $articles_translations->description = $Request->description[$key];
                $articles_translations->save();
            }
        }
        return redirect('admin/news/list')->with('Alerts','Thành công');
    }

    public function getedit($id)
    {
        $data = articles_translations::findOrFail($id);
        $category_translations = category_translations::where('locale',$data->locale)->where('sort_by',2)->orderBy('id','desc')->get();
        return view('admin.news.edit',[
            'data'=>$data,
            'category_translations'=>$category_translations,
        ]);
    }

    public function postedit(Request $Request,$id)
    {
        $articles_translations = articles_translations::find($id);
        $articles_translations->name = $Request->name;
        $articles_translations->detail = $Request->detail;
        $articles_translations->content = $Request->content;
        $articles_translations->title = $Request->title;
        $articles_translations->description = $Request->description;
        $articles_translations->save();
        
        $articles_translations_list = articles_translations::where('category_id', $articles_translations->category_id)->get();
        foreach ($articles_translations_list as $key => $value) {
            $category_translations_id = category_translations::where('category_id', $Request->category_id)->where('locale', $value->locale)->first();
            $articles_translations_save = articles_translations::find($value->id);
            $articles_translations_save->category_id = $Request->category_id;
            $articles_translations_save->category_translations_id = $category_translations_id->id;
            $articles_translations_save->save();
        }

        $articles = articles::find($articles_translations->articles_id);
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
       
        return redirect()->back()->with('Success','Thành công');
    }

    public function getdelete($id)
    {
        // articles_translations
        $articles = articles::find($id);
        // dell news
        $news = news::find($articles->news->id);
        $news->delete();
        // xóa ảnh
        if(File::exists('data/news/'.$articles->img)) {
            File::delete('data/news/'.$articles->img);
            File::delete('data/news/300/'.$articles->img);
            File::delete('data/news/80/'.$articles->img);
        }
        // del images
        if (isset($articles->images)) {
            foreach ($articles->images as $key => $value) {
                $images = images::find($value->id);
                if(File::exists('data/news/'.$images->img)) {
                    File::delete('data/news/'.$images->img);
                    File::delete('data/news/300/'.$images->img);
                    File::delete('data/news/80/'.$images->img);
                }
                $images->delete();
            }
        }
        foreach ($articles->articles_translations as $key => $val) {
            $articles_translations = articles_translations::find($val->id);
            $articles_translations->delete();
        }
        $articles->delete();
        return redirect('admin/news/list')->with('Alerts','Thành công');
    }
}

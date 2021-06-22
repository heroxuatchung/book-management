<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index(Request $request){
        $bookList = Book::orderBy('Id','asc')
            ->paginate(8);
        return view('index',$bookList) ->with([
            'index'=>1,
            'bookList'=> $bookList
        ]);
    }

    public function viewAdd(Request $request){
         return view('addbook');
    }

    public function postAdd(Request $request){
        $tensach = $request->tensach;
        $bookList = Book::where('tensach', $tensach)
            ->get();
        if($bookList != null && count($bookList) >0) {
            return back()->with('error_exist', 'Tên sách đã tồn tại');
        }

        Book::insert([
            'tensach' => $request->tensach,
            'tacgia' => $request->tacgia,
            'nhaxb' => $request->nhaxb,
            'namxb' => $request->namxb,
            'sotrang' => $request->sotrang
        ]);

        return redirect()->route('view_book')->with('success', 'Thêm sách mới thành công');
    }

    public function viewEdit($id){
        $bookList = Book::find($id);
        return view('editbook',compact('id'))->with('bookList', $bookList);
    }

    public function postEdit(Request $request){
        

        $bookList = Book::find($request->id);
        $bookList->tensach = $request->tensach;
        $bookList->tacgia = $request->tacgia;
        $bookList->nhaxb = $request->nhaxb;
        $bookList->namxb = $request->namxb;
        $bookList->sotrang = $request->sotrang;
        $bookList->save();
        
        return redirect()->route('view_book')->with('edit', 'Chỉnh sửa thông tin sách thành công');
    }

    public function delete($id){
        $bookList= Book::find($id);
        $bookList->delete();
        return redirect()->route('view_book')->with('delete', 'Xoá sách thành công');
    }

    public function search(){
        $search_text = $_GET['query'];
        $bookList = Book::where('tacgia','LIKE', $search_text)->get();

        return view('search')->with('bookList', $bookList);
    }
}



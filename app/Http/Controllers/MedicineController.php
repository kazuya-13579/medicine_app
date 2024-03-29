<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Category;
use App\Http\Requests\MedicineRequest;



class MedicineController extends Controller
{
    // public function show_customer_view(Medicine $medicine)
    // {
    //     return view('medicines.customer')->with(['medicines'=>$medicine->getMedicine()]);
    //     return view('medicines.index')->with(['medicine'=>$medicine->getMedicine()]);
        
    // }
    
    public function show_customer_view(Category $category)
    {
        return view('medicines.customer')->with(['categories'=>$category->get()]);
    }
    
    
    public function show_register(Category $category)
    {
        return view('medicines.register')->with(['categories'=>$category->get()]);
    }
    
    public function register(MedicineRequest $request, Medicine $medicine)
    {
        $input = $request['medicine'];
        $medicine -> fill($input) -> save();
        return redirect("/medicines/" . $medicine -> id);
        // dd($input);
    }
    
    public function show_medicine(Medicine $medicine)
    {
        return view('medicines.medicine_search') -> with(['medicines' => $medicine -> get()]);
    }
    
    public function show_medicine_detail(Medicine $medicine)
    {
        return view('medicines.show_medicine') -> with(['medicine' => $medicine]);
    }
    
    public function delete_medicine(Medicine $medicine)
    {

        $medicine -> delete();
        return redirect('/medicines/register');
    }
    
    //検索機能の実装
    public function search_jancode(Medicine $medicine, Request $request)
    {
        //テーブルからすべてのレコードを取得する
        // $medicine = Medicine::query();
        //キーワードから検索処理
        $jancode = $request->input('jancode');
        $result="";
        
        if(!empty($jancode)) {
            $result=$medicine->where('jancode', 'like', "%{$jancode}%")->first();
            //$medicine->first();だけだと$medicineの値自体は変わらないから変数に取得結果を保存してあげる。重要！！
            // $medicine=Medicine::first();インスタンス化しながらfirst()で値を取得している。
        }
        
        return view('medicines.search_jancode') -> with(['medicine' => $result]);
        
    }
    
    public function search_medicine(Medicine $medicine, Request $request)
    {
        $search = $request->input('search');
        $result="";
        
        if(!empty($search)) {
            $result=$medicine->where('name', 'like', "%{$search}%")->get();
        } 
        return view('medicines.search_medicines') -> with(['medicines' => $result]);
    }
}

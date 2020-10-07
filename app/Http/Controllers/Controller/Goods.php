<?php
namespace App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Goods as GoodsModel;
class Goods extends Controller
{
    public function index(){
        return view('goods.goods');
    }
    public function add(Request $request){
        $data = $request->except("_token");
        $good_smodel = new GoodsModel();
        $res = $good_smodel->insert($data);
        if($res){
            return redirect('goods/list');
        }else{
            return redirect('goods/goods');
        }
    }
    public function list(){
        $good_smodel = new GoodsModel();
        $res = $good_smodel->all();
        return view('goods.list',['res'=>$res]);
    }
    public function del($id){
        $good_smodel = new GoodsModel();
        $res = $good_smodel->destroy($id);
        if($res){
            return redirect('goods/list');
        }else{
            return redirect('goods/list');
        }
    }
    public function upd($id){
        $good_smodel = new GoodsModel();
        $res = $good_smodel->find($id);
        return view('goods.upd',['res'=>$res]);
    }
    public function update(Request $request,$id){
        $data = $request->except("_token");
        // dd($data);exit;
        $good_smodel = new GoodsModel();
        $where = [
            ['id','=',$id]
        ];
        // dd($where);exit;
        $res = $good_smodel->where($where)->update($data);
        // dd($res);exit;
        if($res){
            return redirect('goods/list');
        }else{
            return redirect('goods/list');
        }
    }
}

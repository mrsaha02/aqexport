<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_role;
use App\Models\user_info;
use App\Models\buyer_info;
use App\Models\product_info;
use App\Models\product_lab_info;
use App\Models\product_sampling_info;
use App\Models\product_accessories_info;
use App\Models\product_fabric_info;
use App\Models\product_production_info;
use LDAP\Result;

class AdminController extends Controller
{

    public function user_list(){
        $contacts = user_info::where('role_id','=',"2")->get(); 
        $buyers = user_info::leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->where('user_infos.role_id','=',"5")->get(['user_infos.*','buyer_infos.buyer_contact_name','buyer_infos.buyer_country']);
        // dd($buyers);
        $users = user_info::leftJoin('user_roles','user_infos.role_id','=','user_roles.id')->where('user_infos.emp_id','!=','null')->get(['user_infos.*','user_roles.role']);
        // dd($users);
        $roles = user_role::all();
        return view('user.user_list',compact('roles','contacts','buyers','users'));
    }

    public function add_buyer(Request $request){
        // dd($request->all());

        $user_info = new user_info();
        $user_info->name = $request->buyer_name;
        $user_info->email = $request->buyer_email;
        $user_info->password = $request->buyer_password;
        $user_info->role_id = $request->buyer_role;
        $user_info->save();

        $buyer_id = user_info::where('email','=',$request->buyer_email)->first()->id;
        $buyer_info = new buyer_info();
        $buyer_info->user_id = $buyer_id;
        $buyer_info->buyer_contact_name = $request->contact_person;
        $buyer_info->buyer_country = $request->buyer_country;
        $buyer_info->save();
        
        return back(); 
    }

    public function buyer_edit($id){
        $buyer_info = user_info::leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->where('user_infos.id','=',$id)->first();
        return response()->json([
            'status'=>200,
            'bi' => $buyer_info,
        ]);
    }

    public function update_buyer(Request $request){
        // dd($request->all());
        $buyer_id = $request->buyer_id;

        $user_info = user_info::find($buyer_id);
        $user_info->name = $request->buyer_name_edit;
        $user_info->email = $request->buyer_email_edit;
        $user_info->role_id = $request->buyer_role;
        $user_info->update();

        $buyer_info = buyer_info::find($buyer_id);
        $buyer_info->buyer_contact_name = $request->contact_person_edit;
        $buyer_info->buyer_country = $request->buyer_country_edit;
        $buyer_info->update();

        return back();
    }

    public function add_employee(Request $request){

        $user_info = new user_info();
        $user_info->name = $request->emp_name;
        $user_info->email = $request->emp_email;
        $user_info->password = $request->emp_password;
        $user_info->role_id = $request->role;
        $user_info->emp_id = $request->employee_id;
        $user_info->save();
        
        return back(); 
    }
    public function employee_edit($id){
        $employee_info = user_info::find($id);
        return response()->json([
            'status'=>200,
            'ei' => $employee_info,
        ]);
    }
    public function update_employee(Request $request){
        // dd($request->all());
        $user_id = $request->c_employee_id;

        $user_info = user_info::find($user_id);
        $user_info->name = $request->employee_name_edit;
        $user_info->email = $request->employee_email_edit;
        $user_info->role_id = $request->role_edit;
        $user_info->emp_id = $request->employee_id_edit;
        $user_info->update();
        
        return back(); 
    }


    public function product_details(){

        $products = product_info::leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->leftJoin('product_production_infos','product_infos.id','=','product_production_infos.proid')->get(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_production_infos.*']);
        // dd($products);

        return view('product_info_for_user',compact('products'));

    }
    public function product_all_details($id){

        $product_infos = product_info::where('product_infos.id','=',$id)
                ->leftJoin('user_infos','product_infos.buyer_id','=','user_infos.id')
                ->leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')
                ->leftJoin('product_lab_infos','product_infos.id','=','product_lab_infos.proid')
                ->leftJoin('product_sampling_infos','product_infos.id','=','product_sampling_infos.proid')
                ->leftJoin('product_accessories_infos','product_infos.id','=','product_accessories_infos.proid')
                ->leftJoin('product_fabric_infos','product_infos.id','=','product_fabric_infos.proid')
                ->leftJoin('product_production_infos','product_infos.id','=','product_production_infos.proid')
            ->first(['product_infos.*','user_infos.name','buyer_infos.buyer_contact_name','buyer_infos.buyer_country','product_lab_infos.*','product_sampling_infos.*','product_accessories_infos.*','product_fabric_infos.*','product_production_infos.*']);
            dd($product_infos);

        return view('product_details');

    }
    public function product_add_form(){

        $buyers = user_info::where('user_infos.role_id','=',"5")->get();

        return view('add_product_info',compact('buyers'));

    }
    public function product_add(Request $request){
        // dd($request->all());

        $product_info = new product_info();

            $product_info->buyer_id = $request->buyer_id;
            $product_info->order_no = $request->order_no;
            $product_info->style = $request->style;
            $product_info->product_name = $request->product_name;
            $product_info->po_issue_date = $request->po_issue_date;
            $product_info->shipment_date = $request->shipment_date;
            $product_info->febric_details = $request->febric_details;
            $product_info->gsm = $request->gsm;
            $product_info->description = $request->description;
            $product_info->size = $request->size;
            $product_info->quantity = $request->quantity;
            $product_info->factory_name = $request->factory_name;
            $product_info->save();

            $pro_id = product_info::where('buyer_id','=',$request->buyer_id)->first()->id;
            // dd($pro_id);
            
        $product_lab_info = new product_lab_info();

            // lab
            $product_lab_info->proid = $pro_id;
            $product_lab_info->plannig_lab = $request->plannig_lab;
            $product_lab_info->lab_received = $request->lab_received;
            $product_lab_info->color_way = $request->color_way;
            $product_lab_info->print_stricke_offs = $request->print_stricke_offs;
            $product_lab_info->comments_received = $request->comments_received;
            $product_lab_info->save();

            // smaple
            
        $product_sampling_info = new product_sampling_info();
            $product_sampling_info->proid = $pro_id;
            $product_sampling_info->style_approval = $request->style_approval;
            $product_sampling_info->style_comments = $request->style_comments;
            $product_sampling_info->plannig_sample = $request->plannig_sample;
            $product_sampling_info->sample_received = $request->sample_received;
            $product_sampling_info->pp_sample = $request->pp_sample;
            $product_sampling_info->pp_comments = $request->pp_comments;
            $product_sampling_info->production_sample = $request->production_sample;
            $product_sampling_info->production_comments = $request->production_comments;
            $product_sampling_info->save();

            // acc
            
        $product_accessories_info = new product_accessories_info();
            $product_accessories_info->proid = $pro_id;
            $product_accessories_info->main_label = $request->main_label;
            $product_accessories_info->care_label = $request->care_label;
            $product_accessories_info->size_label = $request->size_label;
            $product_accessories_info->flag_label = $request->flag_label;
            $product_accessories_info->patch_label = $request->patch_label;
            $product_accessories_info->hang_tag = $request->hang_tag;
            $product_accessories_info->hang_tag_string = $request->hang_tag_string;
            $product_accessories_info->eyelet = $request->eyelet;
            $product_accessories_info->elastic = $request->elastic;
            $product_accessories_info->zipper = $request->zipper;
            $product_accessories_info->poly = $request->poly;
            $product_accessories_info->gum_tape = $request->gum_tape;
            $product_accessories_info->carton = $request->carton;
            $product_accessories_info->others = $request->others;
            $product_accessories_info->save();

            //fabric
            
        $product_fabric_info = new product_fabric_info();
            $product_fabric_info->proid = $pro_id;
            $product_fabric_info->yarn_planning = $request->yarn_planning;
            $product_fabric_info->yarn_start = $request->yarn_start;
            $product_fabric_info->yarn_finish = $request->yarn_finish;
            $product_fabric_info->knitting_planning = $request->knitting_planning;
            $product_fabric_info->knitting_start = $request->knitting_start;
            $product_fabric_info->knitting_finish = $request->knitting_finish;
            $product_fabric_info->dyeing_planning = $request->dyeing_planning;
            $product_fabric_info->dyeing_start = $request->dyeing_start;
            $product_fabric_info->dyeing_finish = $request->dyeing_finish;
            $product_fabric_info->deliver_cutting_planning = $request->deliver_cutting_planning;
            $product_fabric_info->deliver_cutting_received = $request->deliver_cutting_received;
            $product_fabric_info->save();

            //production
        $product_production_info = new product_production_info();

            $product_production_info->proid = $pro_id;
            $product_production_info->cutting_planning = $request->cutting_planning;
            $product_production_info->cutting_start = $request->cutting_start;
            $product_production_info->cutting_finish = $request->cutting_finish;
            $product_production_info->printing_start = $request->printing_start;
            $product_production_info->printing_finish = $request->printing_finish;
            $product_production_info->sewing_planning = $request->sewing_planning;
            $product_production_info->sewing_start = $request->sewing_start;
            $product_production_info->sewing_finish = $request->sewing_finish;
            $product_production_info->finishing_start = $request->finishing_start;
            $product_production_info->finishing_finish = $request->finishing_finish;
            $product_production_info->shipment_planning = $request->shipment_planning;
            $product_production_info->shipment_start = $request->shipment_start;
            $product_production_info->shipment_finish = $request->shipment_finish;
            $product_production_info->remarks = $request->remarks;
            $product_production_info->save();

            return back();

    }
}

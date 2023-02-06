<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Project;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
class StaffController extends Controller
{
    public function index()
    {
        return view('index');

    }
    public function project()
    {
        return view('project');

    }
    public function form()
    {
        return view('form');

    }
    public function datatablereg(){
        // return view('index');
        $project=Project::all();
        // dd($project);
        // echo $project;
        // print_r($project);die;
        return view('datatablereg');
    

    }
    public function get_project(){

    $project = DB::table('project')->get();
    return datatables()->of($project)
    ->addIndexColumn()
        // ->addColumn('action', '<a class="btn btn-primary btn-sm editstudent" >Edit</a>
        // <a href="javascript:void(0)"  class="btn btn-danger btn-sm deletestudent" >DELETE</a>'
        // )
        ->addColumn('file',  function ($f)
        {
            // $detail = '<a class="fa-solid fa-file-pdf"   href="'.url('/public/uploads').'/'.$f->id.'" ></a>';
            $detail = '<a class="fas fa-file-pdf"    href="" ></a>';
            // $details= '<a class="fas fa-file-pdf"   href="'.url('/public/uploads').'/'.$d->id.'" ></a>';

            return $detail;
           
        })
      
        ->rawColumns(['file'])
       




        ->addColumn('action',  function ($d)
            {
                
                // $details = '<a href="javascript:void(0)" data-toggle="modal" onclick="show_large_model('.$d->id.','."'/admin/msg_to_user'".')" data-target="#largemodel" class="btn btn-primary btn-sm fa fa-handshake-o" title="Status Approval"><i class="fas fa-trash-alt"></i></a>';
                $details = '<a class="bi bi-pencil-square"    href="'.url('/stores').'/'.$d->id.'" ></a>';
                $details.= '<a href="javascript:void(0)"  data-toggle="modal" data-target="#deleteModal" onclick="data_modal('.$d->id.')" class="bi bi-trash-fill danger"></a>';
            $details.= '<a class="fas fa-file-pdf"   href="'.url('/public/uploads').'/'.$d->id.'" ></a>';

                return $details;
                
            })
           
        ->rawColumns(['action'])
        ->make(true);
        
    }



    public function show($id)
    {
        $project = DB::table('project')->where('id', $id)->first();
    return response()->json($project);
    }
//     public function ViewFile($id)
// {
//     $file = Project::findOrFail($id);
//     return response()->success($file->public_path);
// }
    
    public function store(Request $req,$id='')
    {
        if($_POST)
        {
            if($req->post('id'))
        {
            $data=Project::find($req->post('id'));
        }else{
            $data=new project;
        {
            $data->title=$req->post('title');
            $data->description=$req->post('desc');

            
            $data->status=$req->post('status');
            $data->startdate=$req->post('startdate');
            // $data->date=date('Y-m-d');
            $data->enddate=$req->post('enddate');
            // $data->teammember=$req->post('teammember');
            $data->projectmanager=$req->post('projectman');
            $data->category=$req->post('cat');
            // $fileupload = time().'.'.$req->file->extension();  
        }
        $req->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $extension=request('file')->extension();
        $filename_check='ff_'.time().'.'.$extension;
        // print_r( $filename);die;
        $data->file=$filename_check;
        $fileName = time().'.'.$req->file->extension();  
   
        $req->file->move(public_path('uploads'), $fileName);
            // if(request()->hasFile('file')){
            //     $extension=request('file')->extension();
            //     $filename='ff_'.time().'.'.$extension;
            //     $request->file->move(public_path('uploads'), $fileName);
            //     $input['file']=$filename;
            // }

            }
            
            $data->save();
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
    
            }
        
            if($req->post('id'))
            {
                return redirect ()->route('form')->with('success','project has been edited');
   
            }else{
                return redirect ()->route('index')->with('success','form submitted');

            }
        }




        public function delete_modal(Request $request)
    {
        $project=Project::find($request->post('delete'));
        // echo "<pre>";
        // print_r($project);die;
    
        if($project)
        {
        // $project->delete();
        $project->delete();
        return redirect::to('/datatablereg')->with('success','deleted');
        }
}
public function stores(Request $req,$id='')
    {
        if($_POST)
        {
            if($req->post('id'))
        {
            $project=Project::find($req->post('id'));
        }else{
            $project=new project;
        }
        
                
           
        $project->title=$req->post('title');
        $project->description=$req->post('desc');

        
        $project->status=$req->post('status');
        $project->startdate=$req->post('startdate');
        // $data->date=date('Y-m-d');
        $project->enddate=$req->post('enddate');
        // $data->teammember=$req->post('teammember');
        $project->projectmanager=$req->post('projectman');
        $project->category=$req->post('cat');
            $project->save();
            if($req->post('id'))
            {
                return redirect ()->route('stores')->with('success','student has been edited');
   
            }else{
                return redirect ()->route('datatablereg')->with('success','form submitted');

            }
        }
        if($id)
        {
            $project['row']=DB::table('project')->where('id',$id)->first();
    
            return view('stores')->with($project);
        }else{
            return view('datatablereg');
        }
    
    }
   
   
      
    }

        
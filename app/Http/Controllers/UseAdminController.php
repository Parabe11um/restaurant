<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\CreateUseadminRequest; 
use Auth;

class UseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
             //Вывод формы
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateUseadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          //


//$post->save();

 

        //dd($request->all());
     /*   $useadmin=DB::table('use_admins')->insert(
         [
       'admin_name'=>$request->get('admin_name'),
         'patronymic'=>$request->get('patronymic'),
          'family'=>$request->get('family'),
          'admin_email'=>$request->get('admin_email'),
         'phone'=>$request->get('phone'),
         'Photo_file'=>$request->get('Photo_file')
        
         //'id'=>Auth::user()->userId
          ]);
           $UseRestoran=DB::table('use_restorans')->insert(
         [
        'title'=>$request->get('title'),
        'description'  =>$request->get('description'),
        'inn'=>$request->get('inn'),
        'useRest_phone'=>$request->get('useRest_phone'),
        'address'=>$request->get('address'),
        'site'=>$request->get('site'),
        'useRest_email'=>$request->get('useRest_email'),
         'col_board'=>$request->get('col_board'),
         'kitchen'=>$request->get('kitchen')
         ]);
        if($useadmin){
            return redirect()->back();
        }else{
        $request->session()->flash('flash_message','Post saved');
    }
       if($UseRestoran){
            return redirect()->back();
        }
        $request->session()->flash('flash_message','Post saved');

          //  $id=$request->input('id');
          $name = $request->input('admin_name');
          $patronymic=$request->input('patronymic');
           $family= $request->input('family');
           $admin_email=$request->input('admin_email');
         $phone= $request->input('phone');
         $Photo_file=$request->input('Photo_file');



     DB::update('update use_admins set name = ? where id = ?', [$name, $patronymic, $family, $admin_email, $Photo_file]);
     echo "Record updated successfully.<br/>";
     echo '<a href = "/edit-records">Click Here</a> to go back.';
*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //$users=User::findOrFail($id);
   $useadmin = Post::findOrFail($id);
        return view('public.UsePRofil.edit', ['users'=>$users]);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->fill($request->all());
        if(!$users->save()){
            return redirect()->back()->withErrors('Update error');
        }
         $request->session()->flash('flash_message','UseAdmin updated');
                   
    
    


        /* $newUser = \App\User::updateOrCreate([
    //Add unique field combo to match here
    //For example, perhaps you only want one entry per user:
            'id'   => Auth::user()->id,
], [
    'name'     => $request->get('name'),
    'family' => $request->get('family'),
    'email'    => $request->get("email"),
    'password'   => $request->get('password'),
    'phone'       => $request->get('phone'),

]);*/
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\Models\Education;
use App\Models\Image;
use App\Models\Info;
use App\Models\Language;
use App\Models\Level;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Session\Session;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class BackendController extends Controller
{
  

    public function UserCv(){
        return view('backend.basicinfo');
    }
    public function UserProfile(){
        return view('backend.profile');
    }
    public function UserSkills(){
        return view('backend.skills');
    }
    public function UserLang(){
        $lang = Language::get();
        return view('backend.language',compact('lang'));
    }
    public function UserEdu(){
        $levels = Level::get();
        return view('backend.education',compact('levels'));
    }
    public function UserImage(){
        // $image = Level::get();
        return view('backend.image');
    }
    public function Cv(){
      // $image = Level::get();
      return view('backend.cv');
  }
  public function downloadCv(){
    $pdf = Pdf::loadView('backend.getcv')->setOption([
      'temp_dir' => public_path(),
      'chroot' =>public_path(),
      'defaultFont' =>'sans-serif',
    ]);
    return $pdf->download('cv.pdf');
  }
  public function admin(){
    return view('admin.admin_page');
  }
  public function sendEmail(){
    // Mail::to('ayoon-almha2012@hotmail.com')->send(new Welcome($uname));
  }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function SaveInfo(Request $request){
        Info::insert([
           'user_id'=>Auth::user()->id,
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'address'=>$request->address,
           'city'=>$request->city,

        ]);
        // session()->flash('success','Item created successfully.');
        return redirect()->route('user.profile')
         ->with('success', 'basic info inserted successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function EditInfo(){

      $info = Info::where('user_id',Auth::user()->id)->first();
      return view('backend.editinfo',compact('info'));
    }
    public function UpdateInfo(Request $request){
        $id = $request->id;
        Info::findOrFail($id)->update([
           'user_id'=>Auth::user()->id,
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'address'=>$request->address,
           'city'=>$request->city,

        ]);
        $notification = array(
          'message' =>'basic info Updated successfully',
          'alert-type' =>'info',
        );
        return redirect()->back()->with('success', 'basic info updated successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function SaveProfile(Request $request){
        Profile::insert([
           'user_id'=>Auth::user()->id,
           'desc'=>$request->desc,
        ]);
        $notification = array(
          'message' =>'profile inserted successfully',
          'alert-type' =>'info',
        );
        return redirect()->route('user.skills')->with('success', 'profile inserted successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function EditProfile(){

        $profile = Profile::where('user_id',Auth::user()->id)->first();
        return view('backend.editprofile',compact('profile'));
      }
      public function UpdateProfile(Request $request){
        $id = $request->id;
        Profile::findOrFail($id)->update([
           'user_id'=>Auth::user()->id,
           'desc'=>$request->desc,
          

        ]);
        $notification = array(
          'message' =>'profile info  Updated successfully',
          'alert-type' =>'info',
        );
        return redirect()->back()->with('success', 'profile updated successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function SaveSkills(Request $request){
        Skill::insert([
           'user_id'=>Auth::user()->id,
           'skill'=>$request->skills,
        ]);
        $notification = array(
          'message' =>'Skills inserted successfully',
          'alert-type' =>'info',
        );
        return redirect()->route('user.edu')->with('success', 'Skills inserted successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function EditSkills(){

        $skill = Skill::where('user_id',Auth::user()->id)->first();
        $skillname = $skill->skill;
        $skills = explode(',',$skillname);
        return view('backend.editskills',compact('skillname','skill'));
      }
      public function UpdateSkills(Request $request){
        $id = $request->id;
        Skill::findOrFail($id)->update([
           'user_id'=>Auth::user()->id,
           'skill'=>$request->skills,
          

        ]);
        $notification = array(
          'message' =>'skills info  Updated successfully',
          'alert-type' =>'info',
        );
        return redirect()->back()->with('success', 'Skills updated successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function SaveEdu(Request $request){
        Education::insert([
           'user_id'=>Auth::user()->id,
           'edu_name'=>$request->edu_name,
           'level_id'=>$request->edu_type,
           'desc'=>$request->desc,
           'field'=>$request->field,
           'startdate'=>$request->start_date,
           'enddate'=>$request->end_date

        ]);
        $notification = array(
          'message' =>'Education inserted successfully',
          'alert-type' =>'info',
        );
        return redirect()->route('user.profile')->with('success', 'education inserted successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function EditEdu(){

        $edus = Education::where('user_id',Auth::user()->id)->get();
        // $levels = Level::where('id',$edu->level_id)->first();
        return view('backend.editedu',compact('edus'));
      }
      public function EditEducation($id){

        $edus = Education::where('id',$id)->first();
        $levels = Level::get();
        return view('backend.editeducation',compact('edus','levels'));
      }
      public function UpdateEdu(Request $request){
        $id = $request->id;
        Education::findOrFail($id)->update([
           'edu_name'=>$request->edu_name,
           'level_id'=>$request->edu_type,
           'desc'=>$request->desc,
           'field'=>$request->field,
           'startdate'=>$request->start_date,
           'enddate'=>$request->end_date

        ]);
        $notification = array(
          'message' =>'Education updated successfully',
          'alert-type' =>'info',
        );
        return redirect()->route('edit.edu')->with('success', 'education updated successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function DeleteEducation($id){
      Education::findOrFail($id)->delete();
      $notification = array(
        'message' =>'Education Deleted successfully',
        'alert-type' =>'info',
      );
      return redirect()->route('edit.edu')->with('success', 'Education deleted successfully');;
    
    }
    public function SaveLang(Request $request){
        Language::insert([
           'user_id'=>Auth::user()->id,
           'lang'=>$request->lang,
          

        ]);
       
        return redirect()->route('user.image')->with('success', 'language inserted successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function EditLang(){

        $langs = Language::where('user_id',Auth::user()->id)->first();
      
        return view('backend.editlang',compact('langs'));
      }
      public function UpdateLang(Request $request){
        $id = $request->id;
        Language::findOrFail($id)->update([
           'user_id'=>Auth::user()->id,
           'lang'=>$request->lang,
          

        ]);
        $notification = array(
          'message' =>'Language  Updated successfully',
          'alert-type' =>'info',
        );
        return redirect()->back()->with('success', 'language updated successfully');
        // return redirect()->back()->with("info", "User updated successfully.");
    }
    public function saveImage(Request $request){
        if($request->file('img')){
        $manager = new ImageManager(new Driver());
        $imagename = hexdec(uniqid()).'.'.$request->file('img')->getClientOriginalExtension();
        $img = $manager->read($request->file('img'));
        $img->resize(480,480);
        $img->toJpeg(80)->save(base_path('public/upload/'.$imagename));
        $url = 'upload/'.$imagename;
         Image::insert([
            'user_id'=>Auth::user()->id,
            'img'=>$url,
           
 
         ]);
         $notification = array(
           'message' =>'image inserted successfully',
           'alert-type' =>'info',
         );
         return redirect()->back()->with('success', 'image inserted successfully');
         

    }}
    public function EditImage(){

      $image = Image::where('user_id',Auth::user()->id)->first();
    
      return view('backend.editimage',compact('image'));
    }
    public function UpdateImage(Request $request){
      $id = $request->id;
      $old_img=$request->old_image;
      if($request->file('img')){
      $manager = new ImageManager(new Driver());
      $imagename = hexdec(uniqid()).'.'.$request->file('img')->getClientOriginalExtension();
      $img = $manager->read($request->file('img'));
      $img->resize(480,480);
      $img->toJpeg(80)->save(base_path('public/upload/'.$imagename));
      $url = 'upload/'.$imagename;
      if(file_exists($old_img)){
        unlink($old_img);
      }
       Image::findOrFail($id)->update([
          'img'=>$url,
         

       ]);
       $notification = array(
         'message' =>'image updated successfully',
         'alert-type' =>'info',
       );
       return redirect()->back()->with('success', 'image iupdated successfully');
       

  }}
  public function SaveAdmin(Request $request){
    $request->validate([
      'name' => 'required|max:255',
      'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
      'password' => 'required|min:8|same:confirm',
    ],[
      'name.required' => 'name must not be empty',    ]
);
    $user=User::insert([
       'name' => $request->name,
       'email' => $request->email,
       'password' => Hash::make($request->password),
       'role' => 'admin',
       
    ]);
    dd($user);
    $notification = array(
      'message' =>'User inserted successfully',
      'alert-type' =>'info',
    );
    return redirect()->back()->with('success', 'user inserted successfully');
    // return redirect()->back()->with("info", "User updated successfully.");
}
}

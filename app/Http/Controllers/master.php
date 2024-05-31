<?php

namespace App\Http\Controllers;

use App\Models\Causes;
use App\Models\Event;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class master extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function causes()
    {
        $allCauses = Causes::all();

        return view('causes', compact(['allCauses']));
    }

    public function events()
    {
        $allEvents = Event::all();

        return view('event', compact(['allEvents']));
    }

    public function Blog()
    {
        $allCauses = Causes::all();
        return view('blog', compact(['allCauses']));
    }

    public function contact()
    {
        return view('contact');
    }

    // CAUSES

    public function Agriculture()
    {
        return view('Causes.Agriculture');
    }

    public function Health()
    {
        return view('Causes.Health');
    }

    public function Relief()
    {
        return view('Causes.ReliefProgram');
    }

    public function ReligiousEducation()
    {
        return view('Causes.ReligiousEducation');
    }

    public function BuildingMosques()
    {
        return view('Causes.BuildingMosques');
    }

    public function DAAWAH_RAMADAN_AND_QURBAN()
    {
        return view('Causes.DAAWAHRAMADANANDQURBAN');
    }

    public function EconomicEmpowerment()
    {
        return view('Causes.EconomicEmpowerment');
    }

    public function addDashboard()
    {
        $eventCount = Event::all()->count();
        $causesCount = Causes::all()->count();
        $usersCount = UserAuth::all()->count();

        return view('Admin.dashboard', compact(['eventCount', 'causesCount','usersCount']));
    }

    public function addCause()
    {
        return view('Admin.add-cause');
    }

    public function addEvent()
    {
        return view('Admin.add-event');
    }

    public function storeCause(Request $request)
    {

        $post = new Causes();

        $post->title = $request->title;
        $post->goal = $request->goal;
        $post->raised = $request->raised;
        $post->introduction = $request->introduction;
        $post->editorContent = $request->editorContent;
        $post->imageUpload = $request->imageUpload;

        if ($request->file('imageUpload')) {
            $file = $request->file('imageUpload');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/imageUpload'), $filename);
            $post['imageUpload'] = $filename;
        }

        $post->save();

        return redirect('all-causes')->with('success', 'Cause has been Added successfully');

    }

    public function storeEvent(Request $request)
    {

        $post = new Event();

        $post->title = $request->title;
        $post->goal = $request->goal;
        $post->raised = $request->raised;
        $post->introduction = $request->introduction;
        $post->editorContent = $request->editorContent;
        $post->imageUpload = $request->imageUpload;

        if ($request->file('imageUpload')) {
            $file = $request->file('imageUpload');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/imageUpload'), $filename);
            $post['imageUpload'] = $filename;
        }

        $post->save();

        return redirect('all-events')->with('success', 'Event has been Added successfully');
    }

    public function allEvent()
    {

        $allEvents = Event::all();
        return view('Admin.all-events', compact(['allEvents']));
    }

    public function allCauses()
    {

        $allCauses = Causes::all();
        return view('Admin.all-causes', compact(['allCauses']));
    }

    public function deleteEvent($id)
    {

        $data = Event::find($id);
        $data->delete();

        return redirect('all-events')->with('success', 'Event has been deleted successfully');
    }

    public function deleteCause($id)
    {

        $data = Causes::find($id);
        $data->delete();

        return redirect('all-causes')->with('success', 'Cause has been deleted successfully');
    }

    public function eventDetails($id)
    {

        $record = Event::find($id);
        return view('Causes.event-details', compact(['record']));
    }

    public function causeDetails($id)
    {

        $record = Causes::find($id);
        return view('Causes.cause-details', compact(['record']));
    }

    public function login()
    {
        return view('login');
    }

    public function adminRegister()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {

        $request->validate([
            'fname' => 'required',
            'email' => 'required|unique:user_auths',
            'phonenumber' => 'required|unique:user_auths',
            'password' => 'required|min:5',
            'confirm_password' => 'required',
        ]);

        $password1 = $request->input('password');
        $password2 = $request->input('confirm_password');

        if (strcmp($password1, $password2) != 0) {
            return back()->withInput()->with('fail', 'Password entered do not match');
        }

        $post = new UserAuth();

        $post->username = $request->fname;
        $post->email = $request->email;
        $post->phonenumber = $request->phonenumber;
        $post->password = Hash::make($request->password);

        $save = $post->save();

        if ($save) {
            return back()->with('success', 'User account been created Successfully');
        } else {
            return back()->with('fail', 'Failed to create account');
        }
    }

    public function loginUser(Request $request)
    {

        $request->validate([
            'phonenumber' => 'required',
            'password' => 'required|min:5',
        ]);

        $userInfo = UserAuth::where('phonenumber', '=', $request->phonenumber)->first();

        if (!$userInfo) {
            return back()->with('fail', 'incorrect phonenumber or password');
        } 
        else
         {
            if (Hash::check($request->password, $userInfo->password)) 
            {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin-dashboard');

            } else {
                return back()->with('fail', 'incorrect phonenumber or password');
            }
        }
    }

    public function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('admin-login');
        }
    }
}

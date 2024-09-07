<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use App\Models\Logo;
use App\Models\Partners;
use App\Models\Portfolio;
use App\Models\Rate;
use App\Models\Rooms;
use App\Models\Subscriber;
use App\Models\TeamModel;
use App\Models\University;
use App\Models\User;
use App\Models\Vcall;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy as FlashyFlashy;

class FrontendController extends Controller
{
    //
    public function index(){
        $email = BasicInfo::take(1)->first();
        $phone = BasicInfo::where('id', 2)->first();
        $rooms = Rooms::where('IsOnline', 1)->take(8)->get();
        $logo = Logo::take(1)->first();
        $portfolios = Portfolio::all();
        $total_rooms_available = Rooms::where('IsAvailable', 0)->count(); 
        $total_rooms_booked = Rooms::where('IsAvailable', 1)->count(); 
        $total_users_student = User::where('role_id','!=', 1)->count(); 
        $partners = Partners::all();
        $rates = Rate::all();
        $rooms_available = Rooms::where('IsAvailable', 0)->get(); 
        return view('frontend.index', compact('email',
        'phone', 
        'rooms', 
        'logo', 
        'portfolios', 
        'total_rooms_available',
        'total_rooms_booked',
        'total_users_student',
        'partners',
        'rates',
        'rooms_available'
    ));
    }

    function roomDetail(string $id) {
        $room = Rooms::where('id', $id)->first();
        $portfolios = Portfolio::where('room_id', $id)->get();
        $rooms = Rooms::where('IsOnline', 1)->take(8)->get();
        $universities = University::all();
        $universityIds = json_decode($room->univ_around_available);
        $universities_avs = University::whereIn('id', $universityIds)->get();
        // $universityIdsArray = json_decode($universityIds);
        $roomsAround = Rooms::where('IsOnline', 1)
                                  ->whereIn('university_id', $universityIds)
                                  ->get();
        return view('frontend.show', compact('room','rooms', 'portfolios', 'universities','universities_avs', 'roomsAround' ));
    }

    // return about page
    function about(){
        
        $teams = TeamModel::all(); 
        return view('frontend.about', compact('teams'));
    }
    // return contact page
    function contact() {

        $email = BasicInfo::take(1)->first();
        $phone = BasicInfo::where('id', 2)->first();
        $logo = Logo::take(1)->first();
        return view('frontend.contact', compact('logo','email', 'phone' ));
    }
   
    // return partners
    function partners() {
        $logo = Logo::take(1)->first();
        $partners = Partners::all();
        $partners = Partners::latest()->paginate(12)->onEachSide(12); // Fetch the first 12 partners
        $partners_count = $partners->count();
        $rates = Rate::all();
        return view('frontend.partners', compact(
            'logo', 'partners', 'partners_count',
            'rates'
        ));
    }


    // return all rooms page
    function room_page() {
        $rooms = Rooms::where('IsOnline', 1)->paginate(12)->onEachSide(5);
        $partners = Partners::all();
        return view('frontend.rooms', compact('rooms', 'partners'));
    }

    // function call video 
    function saveUserVideoCall(Request $request){

        Vcall::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'datecall' => $request->datecall,
            'datemove' => $request->datemove,
            'room_id' => $request->room_id,
            'is_validated' => false, // Initially not validated
        ]);
        FlashyFlashy::success('Thank your for your schedule, we will contact you soon ');
        return redirect()->back();
        
    }

    function emailSubscribe(Request $request){
        Subscriber::create([
            'email' => $request->email,
        ]);
        FlashyFlashy::success('Thank your for subscribing to our newsletter, you will receive news for new rooms ');
        return redirect()->back();
    }
}

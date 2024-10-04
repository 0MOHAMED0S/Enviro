<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function index(){
        $events=Event::get();
        return view('Dashboard.events.AllEvents',compact('events'));
    }
    public function main(){
        $events=Event::orderBy('created_at', 'desc')->get();
        return view('main.events',compact('events'));
    }
    public function create(){
        return view('Dashboard.events.CreateEvent');
    }
    public function store(EventRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $request->file('image')->store('EventImages', 'public');
        $data['user_id'] = Auth::user()->id;
        $event = Event::create($data);
        return redirect()->back()->with('success', 'Data Stored successfully!');
    }
    public function delete(string $id)
    {
            $event = Event::findOrFail($id);
            $event->delete();
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            return redirect()->back()->with('success', 'Data Deleted successfully!');
    }
}

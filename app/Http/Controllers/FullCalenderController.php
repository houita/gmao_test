<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        // on page load this ajax code block will be run
        if ($request->ajax()) {

            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
        }

        return view('fullcalendar');
    }

    /**
     * This method is to handle event ajax operation
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
        switch ($request->type) {

            // For add event
            case 'add':
                $data = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($data);
                break;

            // For update event        
            case 'update':
                $data = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($data);
                break;

            // For delete event    
            case 'delete':
                $data = Event::find($request->id)->delete();

                return response()->json($data);
                break;

            default:
                break;
        }
     
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Invite;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class InvitesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $invites = Invite::paginate(15);

        return view('invites.index', compact('invites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('invites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'phone' => 'required']);

        Invite::create($request->all());

        Session::flash('flash_message', 'Invite added!');
        if ($request->ajax()) {
            return ["status"=>true];
        } else {
            return redirect('invites');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invite = Invite::findOrFail($id);

        return view('invites.show', compact('invite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invite = Invite::findOrFail($id);

        return view('invites.edit', compact('invite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required',]);

        $invite = Invite::findOrFail($id);
        $invite->update($request->all());

        Session::flash('flash_message', 'Invite updated!');

        return redirect('invites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Invite::destroy($id);

        Session::flash('flash_message', 'Invite deleted!');

        return redirect('invites');
    }

}

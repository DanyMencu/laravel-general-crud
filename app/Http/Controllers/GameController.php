<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Games list
        $games = Game::paginate(10);

        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new game
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store data from create
        $new_data = $request->all();
        $new_data['slug'] = Str::slug($new_data['title']);

        $new_game = new Game();
        $new_game->fill($new_data);

        $new_game->save();

        return redirect()->route('games.show', $new_game->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //Game details
        /* $game = Game::where('slug', '=', $slug)->first(); */

        if($game) {
            return view('games.show', compact('game'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //Change game details
        /* $game = Game::where('slug', '=', $slug)->first(); */

        if ($game) {
            return view('games.edit', compact('game'));
        }
        abort(404);
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
        //Update game data
        $new_data = $request->all();

        $game = Game::find($id);

        $game->update($new_data);

        return redirect()->route('games.show', $game->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete game
        $game = Game::find($id);

        $game->delete();

        return redirect()->route('games.index')->with('deleted', $game->title);
    }
}

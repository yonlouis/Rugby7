<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function index()
    {
      $teams = Team::all(); // Ca fetch toutes les datas dans team    
        return view('front.teams')->with('teams', $teams);
    }

    public function players($team_id)
    {
        $team = Team::find($team_id);
        $players = Player::where('team_id', $team_id)->get();
        return view('front.players', compact('players', 'team'));
    }

}

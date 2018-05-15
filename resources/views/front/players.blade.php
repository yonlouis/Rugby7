@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $team->name }}: Joueurs</h1>

                <table class="table">
                    <tr>
                        <th>Nom</th>
                        <th>Date de naissance</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Tries</th>



                    </tr>
                    @forelse($players as $player)
                        <tr>
                            <td>{{ $player->name . ' ' . $player->surname }}</td>
                            <td>{{ $player->birth_date }}</td>
                            <td>{{ $player->age }}</td>
                            <td>{{ $player->position }}</td>
                            <td>{{ $player->tries }}</td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No joueurs.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection

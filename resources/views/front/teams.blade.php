@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Equipes</h1>

                <table class="table">
                    <tr>
                        <th>Equipe</th>
                        <th>Joueurs</th>
                    </tr>
                    @forelse($teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td><a href="/players/{{ $team->id }}">{{ $team->players->count() }}</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Pas d'équipes.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection

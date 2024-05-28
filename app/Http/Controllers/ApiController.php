<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\GameTest;
use App\Models\GameTestStudent;
use App\Models\Student;
use App\Models\GamesParameters;

class ApiController extends Controller
{
    public function index()
    {
        $games = GameTest::with(['game'])->get();
    
        $response = [
            'games' => $games,
        ];
    
        return response()->json($response);
    }
    

    public function store(Request $request)
    {
        try {
            $request->validate([
                'student_id' => 'required|integer',
                'game_test_id' => 'required|integer',
                'test_id' => 'required|integer',
                'game_id' => 'required|integer',
                'time' => 'integer',
                'score' => 'integer',
                'errors' => 'integer',
                'played' => 'required|string'
            ]);

            $gameTestScore = new GameTestStudent();
            $gameTestScore->student_id = $request->input('student_id');
            $gameTestScore->game_test_id = $request->input('game_test_id');
            $gameTestScore->test_id = $request->input('test_id');
            $gameTestScore->game_id = $request->input('game_id');
            $gameTestScore->time = $request->input('time');
            $gameTestScore->score = $request->input('score');
            $gameTestScore->errors = $request->input('errors');
            $gameTestScore->played = $request->input('played');

            $user = Student::where('id', $request->input('student_id'))
                ->value('user_id');
            $gameTestScore->creation_user = $user;
            $gameTestScore->update_user = $user;
            $gameTestScore->save();

            return response()->json($gameTestScore, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }

    }


    public function update(Request $request)
    {
        try {
            $request->validate([
                'student_id' => 'required|integer',
                'game_test_id' => 'required|integer',
                'test_id' => 'required|integer',
                'game_id' => 'required|integer',
                'time' => 'integer',
                'score' => 'integer',
                'errors' => 'integer',
                'played' => 'required|string'
            ]);
    
            $gameTestScore = GameTestStudent::where('student_id', $request->input('student_id'))
                ->where('game_test_id', $request->input('game_test_id'))
                ->where('test_id', $request->input('test_id'))
                ->where('game_id', $request->input('game_id'))
                ->first();
    
            if (!$gameTestScore) {
                return response()->json([
                    'message' => 'Registro no encontrado.'
                ], 404);
            }
    
            $gameTestScore->time = $request->input('time');
            $gameTestScore->score = $request->input('score');
            $gameTestScore->errors = $request->input('errors');
            $gameTestScore->played = $request->input('played');
    
            $user = Student::where('id', $request->input('student_id'))->value('user_id');
            $gameTestScore->update_user = $user;
            $gameTestScore->save();
    
            return response()->json($gameTestScore, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
    


    public function getGamesParameters()
    {
        $gameParameters = GamesParameters::all();
        return response()->json($gameParameters);
    }

    public function getGamesParametersByIdLevel($game_id, $level)
    {
        $gameParameters = GamesParameters::where('game_id', $game_id)
            ->where('level', $level)
            ->get();
        return response()->json($gameParameters);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Repositories\TaskRepository;

class InfoController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
        $users = User::all();
        $userTasks = [];
        foreach ($users as $user) {
            $userTasks[$user->id] = count($this->tasks->forUser($user));
        }
        return view('info.index', ['users' => $users, 'userTasks' => $userTasks]);
    }
}

<?php

namespace App\Business\Task\Web;

use Illuminate\Support\Facades\Auth;
use App\Business\Task\Persistence\Entity\Task;
use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use \App\Business\Task\TaskService;

/**
 * This controller handles all api requests for the task entity.
 *
 * Class TaskApiController
 * @package App\Business\Task\Web
 */
class TaskApiController extends Controller
{
    private $taskService;

    function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * Return all persisted tasks.
     *
     * @return \App\Business\Task\Persistence\Entity\Task|static[]
     */
    public function findAll() {
        return $this->taskService->findAll();
    }

    /**
     * Return a single persisted task with given id.
     *
     * @param $id
     * @return \App\Business\Task\Persistence\Entity\Task
     */
    public function findById($id) {
        return $this->taskService->findById($id);
    }

    public function save(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $task = new Task();
        $task->fill($request->all());
        $task->creator = Auth::id();

        return $this->taskService->save($task);
    }

    /**
     * Return all tasks for a given project.
     *
     * @param $projectId
     * @return Task|static[]
     */
    public function findByProjectId($projectId) {
        return $this->taskService->findByProjectId($projectId);
    }

}
<?php

namespace App\Business\Project\Web;

use Illuminate\Support\Facades\Auth;
use App\Business\Project\Persistence\Entity\Project;
use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use \App\Business\Project\ProjectService;

/**
 * This controller handles all api requests for the project entity.
 *
 * Class ProjectApiController
 * @package App\Business\Project\Web
 */
class ProjectApiController extends Controller
{
    private $projectService;

    function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * Return all persisted projects.
     *
     * @return \App\Business\Project\Persistence\Entity\Project|static[]
     */
    public function findAll() {
        return $this->projectService->findAll();
    }

    /**
     * Return a single persisted project with given id.
     *
     * @param $id
     * @return \App\Business\Project\Persistence\Entity\Project
     */
    public function findById($id) {
        return $this->projectService->findById($id);
    }

    public function save(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $project = new Project();
        $project->fill($request->all());
        $project->creator = Auth::id();

        return $this->projectService->save($project);
    }

}
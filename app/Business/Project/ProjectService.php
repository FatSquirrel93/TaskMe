<?php

namespace App\Business\Project;

use App\Business\Project\Persistence\ProjectRepository;

/**
 * This service handles all logic and repository calls for the project entity.
 */
class ProjectService
{
    private $projectRepository;

    function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * Return all persisted projects.
     *
     * @return \App\Business\Project\Persistence\Entity\Project|static[]
     */
    public function findAll()
    {
        return $this->projectRepository->findAll();
    }

    /**
     * Return a persisted project with given id.
     *
     * @param $id
     * @return \App\Business\Project\Persistence\Entity\Project
     */
    public function findById($id)
    {
        return $this->projectRepository->findOne($id);
    }

    /**
     * Persist given project.
     *
     * @param $project
     * @return \App\Business\Project\Persistence\Entity\Project
     */
    public function save($project)
    {
        // check for update
        if ($project->id) {
            return $this->update($project);
        }
        return $this->projectRepository->save($project);
    }

    /**
     * Update a persisted project with given values.
     *
     * @param $project
     * @return Persistence\Entity\Project
     */
    public function update($project)
    {
        $persisted = $this->projectRepository->findOne($project->id);
        $persisted->name = $project->name;
        $persisted->description = $project->description;

        return $this->projectRepository->save($persisted);
    }
}
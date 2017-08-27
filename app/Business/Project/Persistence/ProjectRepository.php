<?php

namespace App\Business\Project\Persistence;

use App\Business\Project\Persistence\Entity\Project;

/**
 * This repository handles all database operations for the project entity.
 *
 * Class ProjectRepository
 * @package App\Business\Project\Persistence
 */
class ProjectRepository
{

    /**
     * Return all persisted projects.
     *
     * @return \App\Business\Project\Persistence\Entity\Project|static[]
     */
    public function findAll(){
        return Project::with('creator')->get();
    }

    /**
     * Query all persisted users where 'name' equals given username.
     *
     * @param $id
     * @return \App\Business\Project\Persistence\Entity\Project|null
     */
    public function findOne($id) {
        return Project::find($id);
    }

    /**
     * Persist given project.
     *
     * @param Project $project
     * @return \App\Business\Project\Persistence\Entity\Project
     */
    public function save(Project $project) {
        $project->save();
        return $project;
    }
}
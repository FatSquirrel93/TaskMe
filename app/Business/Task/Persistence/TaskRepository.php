<?php

namespace App\Business\Task\Persistence;

use App\Business\Task\Persistence\Entity\Task;

/**
 * This repository handles all database operations for the task entity.
 *
 * Class TaskRepository
 * @package App\Business\Task\Persistence
 */
class TaskRepository
{

    /**
     * Return all persisted tasks.
     *
     * @return \App\Business\Task\Persistence\Entity\Task|static[]
     */
    public function findAll(){
        return Task::with(['creator', 'assignee', 'project', 'status'])->get();
    }

    /**
     * Query all persisted users where 'name' equals given username.
     *
     * @param $id
     * @return \App\Business\Task\Persistence\Entity\Task|null
     */
    public function findOne($id) {
        return Task::with(['creator', 'assignee', 'project', 'status'])->where('id', $id)->first();
    }

    /**
     * Persist given task.
     *
     * @param Task $task
     * @return \App\Business\Task\Persistence\Entity\Task
     */
    public function save(Task $task) {
        $task->save();
        return $task;
    }

    /**
     * Return all persisted tasks for given project.
     *
     * @param $projectId
     * @return \App\Business\Task\Persistence\Entity\Task|static[]
     */
    public function findByProjectId($projectId) {
        return Task::with(['creator', 'assignee', 'project', 'status'])->where('project', $projectId)->get();
    }
}
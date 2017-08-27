<?php

namespace App\Business\Task;

use App\Business\Task\Persistence\TaskRepository;

/**
 * This service handles all logic and repository calls for the task entity.
 */
class TaskService
{
    private $taskRepository;

    function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Return all persisted tasks.
     *
     * @return \App\Business\Task\Persistence\Entity\Task|static[]
     */
    public function findAll()
    {
        return $this->taskRepository->findAll();
    }

    /**
     * Return a persisted task with given id.
     *
     * @param $id
     * @return \App\Business\Task\Persistence\Entity\Task
     */
    public function findById($id)
    {
        return $this->taskRepository->findOne($id);
    }

    /**
     * Persist given task.
     *
     * @param $task
     * @return \App\Business\Task\Persistence\Entity\Task
     */
    public function save($task)
    {
        // check for update
        if ($task->id) {
            return $this->update($task);
        }
        return $this->taskRepository->save($task);
    }

    /**
     * Update a persisted task with given values.
     *
     * @param $task
     * @return Persistence\Entity\Task
     */
    public function update($task)
    {
        $persisted = $this->taskRepository->findOne($task->id);
        $persisted->name = $task->name;
        $persisted->description = $task->description;

        return $this->taskRepository->save($persisted);
    }

    /**
     * Return all persisted tasks for given project.
     *
     * @param $projectId
     * @return Persistence\Entity\Task|static[]
     */
    public function findByProjectId($projectId) {
        return $this->taskRepository->findByProjectId($projectId);
    }
}
app.config(function ($translateProvider) {
    $translateProvider.translations('en_EN', {
        /* General */
        CLOSE: 'Close',
        SAVE: 'Save',
        LOGOUT: 'Logout',

        /* Sidebar */
        DASHBOARD: 'Dashboard',
        ADMINISTRATION: 'Administration',
        USERS: 'Users',

        /* User */
        USERNAME: 'Username',
        EMAIL: 'Email',
        CREATED: 'Created',
        UPDATED: 'Updated',

        /* Project */
        PROJECT: 'Project',
        PROJECTS: 'Projects',
        NAME: 'Name',
        DESCRIPTION: 'Description',
        CREATOR: 'Creator',
        PROJECT_NEW: 'Create new project',
        PROJECT_EDIT: 'Edit project',
        PROJECT_UPDATE_SUCCESS: 'Task created successfully',
        PROJECT_UPDATE_ERROR: 'Task could not be created',

        /* Task */
        TASK_CREATE_SUCCESS: 'Task created successfully',
        TASK_CREATE_ERROR: 'Task could not be created',
        TASK_CREATE: 'Create task',
        TASK_EDIT: 'Edit task'
    });

});
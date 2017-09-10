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

        /* Task */
        TASK_CREATED_SUCCESS: 'Task created successfully',
        TASK_CREATED_ERROR: 'Task could not be created'
    });

});
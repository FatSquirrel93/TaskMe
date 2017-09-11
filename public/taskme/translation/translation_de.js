app.config(function ($translateProvider) {
    $translateProvider.translations('de_DE', {
        /* General */
        CLOSE: 'Abbrechen',
        SAVE: 'Speichern',
        LOGOUT: 'Abmelden',

        /* Sidebar */
        DASHBOARD: 'Übersicht',
        ADMINISTRATION: 'Verwaltung',
        USERS: 'Benutzer',

        /* User */
        USERNAME: 'Benutzername',
        EMAIL: 'E-Mail',
        CREATED: 'Erstellt',
        UPDATED: 'Geändert',

        /* Project */
        PROJECT: 'Projekt',
        PROJECTS: 'Projekte',
        NAME: 'Name',
        DESCRIPTION: 'Beschreibung',
        CREATOR: 'Ersteller',
        PROJECT_NEW: 'Neues Project anlegen',
        PROJECT_EDIT: 'Projekt bearbeiten',
        PROJECT_UPDATE_SUCCESS: 'Änderungen des Projektes gespeichert',
        PROJECT_UPDATE_ERROR: 'Änderungen des Projektes konnten nicht gespeichert werden',

        /* Task */
        TASK_CREATE_SUCCESS: 'Aufgabe erfolgreich angelegt',
        TASK_CREATE_ERROR: 'Aufgabe konnte nicht erstellt werden',
        TASK_CREATE: 'Aufgabe erstellen',
        TASK_EDIT: 'Aufgabe bearbeiten'

    });
    $translateProvider.preferredLanguage('de_DE');
});
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

    });
    $translateProvider.preferredLanguage('de_DE');
});
app.config(function ($translateProvider) {
    $translateProvider.translations('de_DE', {
        /* General */
        CLOSE: 'Abbrechen',
        SAVE: 'Speichern',

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
        PROJECT_NEW: 'Neues Project anlegen'

    });
    $translateProvider.preferredLanguage('de_DE');
});
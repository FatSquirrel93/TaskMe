app.config(function ($translateProvider) {
    $translateProvider.translations('de_DE', {
        /* Sidebar */
        DASHBOARD: 'Übersicht',
        ADMINISTRATION: 'Verwaltung',
        USERS: 'Benutzer',

        /* User */
        USERNAME: 'Benutzername',
        EMAIL: 'E-Mail',
        CREATED: 'Erstellt',
        UPDATED: 'Geändert'

    });
    $translateProvider.preferredLanguage('de_DE');
});
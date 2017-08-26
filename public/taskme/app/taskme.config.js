app.value("$api", '/api');
app.value("$result", function (response) {
    return response.data;
});

app.run(function ($http) {
    var token = $("meta[name='_csrf']").attr("content");
    $http.defaults.headers.common['X-CSRF-TOKEN'] = token;
});

/**
 * Define all custom templates for use with ng-include
 */
app.value('$template', {
    project: {
        projectEditModal: '/taskme/views/project/project-edit-modal.html'
    }
});
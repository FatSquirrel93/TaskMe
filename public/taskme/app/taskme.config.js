app.value("$api", '/api');
app.value("$result", function (response) {
    return response.data;
});

app.run(function ($http) {
    var token = $("meta[name='_csrf']").attr("content");
    $http.defaults.headers.common['X-CSRF-TOKEN'] = token;
});
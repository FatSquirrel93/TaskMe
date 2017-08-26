## TaskMe

This is a basic project and tasks management tool.

## Database

A basic diagram can be viewed using [draw.io](https://www.draw.io/). Simply load included [Database-drawio.xml](Database-drawio.xml)

## API

| Entity        |Method|Path          |Description| Example response|
| ------------- |------|--------------|-----------|-----------------|
|User   |GET    |`/api/users`           |Return all persisted users|`[{"id":1,"name":"bob","email":"bob@test.com","created_at":"2017-08-25 14:26:57","updated_at":"2017-08-25 22:57:22"}, {"id":2,"name":"john","email":"john@test.com","created_at":"2017-08-25 17:17:02","updated_at":"2017-08-25 17:17:02"}]`|
|       |GET    |`/api/users/{username}`|Find a single persisted user with given username|`{"id":1,"name":"bob","email":"bob@test.com","created_at":"2017-08-25 14:26:57","updated_at":"2017-08-25 22:57:22"}`|
|Project|GET    |`/api/projects`        |Return all persisted projects|`[{"id":1,"name":"Project A","description":"Sample description for project A.","creator":2,"created_at":"2017-08-26 15:54:42","updated_at":"2017-08-26 15:54:42"},{"id":2,"name":"Project B","description":"Sample description for project B.","creator":2,"created_at":"2017-08-26 15:56:36","updated_at":"2017-08-26 15:56:36"}]`|
|       |GET    |`/api/projects/{id}`   |Return a single persisted project with given id|`{"id":1,"name":"Project A","description":"Sample description for project A.","creator":2,"created_at":"2017-08-26 15:54:42","updated_at":"2017-08-26 15:54:42"}`|
|       |POST   |`/api/projects`        |Persist new project|
# Task Management API

This is a simple Task Management API built with Laravel. It allows users to create, read, update, delete, and filter tasks by status. The tasks can have one of three statuses: `pending`, `in_progress`, or `completed`.

---

## Features

- **List all tasks** - Retrieve all tasks in the system.
- **Create a task** - Add a new task with a title, description, and status.
- **View a single task** - Retrieve the details of a specific task.
- **Update a task** - Update the title, description, or status of a task.
- **Delete a task** - Delete a task from the system.
- **Filter tasks by status** - Retrieve tasks filtered by their status (`pending`, `in_progress`, `completed`).

---

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10.0
- MySQL (or SQLite for testing)

---

## Installation

### Clone the repository


git clone https://github.com/DavyL0/desafio-backend-laravel.git
cd task-management-api


### Install dependecies

Run the following command to install all required dependencies:

composer install

## Set up .env

Copy the .env.example file to .env

## Generate application key
Run the following command to generate the application key:

bash```
php artisan key:generate

## Run migrations
Create the necessary database tables by running:

bash```
php artisan migrate

## API Endpoints

### GET /api/tasks
Retrieve all tasks.

Response
json
Copy code
[
    {
        "id": "uuid",
        "title": "Task Title",
        "description": "Task description",
        "status": "pending",
        "created_at": "2024-12-04T12:00:00.000000Z",
        "updated_at": "2024-12-04T12:00:00.000000Z"
    },
    ...
]

### POST /api/tasks
Create a new task.


{
    "title": "New Task",
    "description": "Task description",
    "status": "pending"
}


{
    "id": "uuid",
    "title": "New Task",
    "description": "Task description",
    "status": "pending",
    "created_at": "2024-12-04T12:00:00.000000Z",
    "updated_at": "2024-12-04T12:00:00.000000Z"
}

### GET /api/tasks/{id}
Retrieve a specific task by ID.

{
    "id": "uuid",
    "title": "Task Title",
    "description": "Task description",
    "status": "pending",
    "created_at": "2024-12-04T12:00:00.000000Z",
    "updated_at": "2024-12-04T12:00:00.000000Z"
}

### PUT /api/tasks/{id}
Update an existing task.

{
    "title": "Updated Task Title",
    "description": "Updated task description",
    "status": "completed"
}

{
    "id": "uuid",
    "title": "Updated Task Title",
    "description": "Updated task description",
    "status": "completed",
    "created_at": "2024-12-04T12:00:00.000000Z",
    "updated_at": "2024-12-04T12:00:00.000000Z"
}

### DELETE /api/tasks/{id}
Delete a task by ID.

{}
Status code: 204 (No Content)

GET /api/tasks/filter?status={status}
Filter tasks by status (pending, in_progress, completed).

bash
GET /api/tasks/filter?status=pending

[
    {
        "id": "uuid",
        "title": "Pending Task",
        "description": "This task is pending",
        "status": "pending",
        "created_at": "2024-12-04T12:00:00.000000Z",
        "updated_at": "2024-12-04T12:00:00.000000Z"
    }
]

## Testing
To run the automated tests for the application, you can use the following command:

php artisan test


## Contributing
Feel free to fork the repository, create issues, or submit pull requests to enhance the functionality of this project. Please ensure that your changes include tests and that all tests pass before submitting a pull request.

## License
This project is licensed under the MIT License – see the LICENSE file for details.
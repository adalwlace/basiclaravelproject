<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EventController;




use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', [BlogController::class, 'index'])->name('admin.blogs.index');
Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
Route::get('/admin/blogs/{blog}', [BlogController::class, 'show'])->name('admin.blogs.show');
Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
Route::put('/admin/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');

Route::get('/admin/employees', [EmpController::class, 'index'])->name('admin.employees.index');
Route::get('/admin/employees/create', [EmpController::class, 'create'])->name('admin.employees.create');
Route::post('/admin/employees', [EmpController::class, 'store'])->name('admin.employees.store');
Route::get('/admin/employees/{employee}', [EmpController::class, 'show'])->name('admin.employees.show');
Route::get('/admin/employees/{employee}/edit', [EmpController::class, 'edit'])->name('admin.employees.edit');
Route::put('/admin/employees/{employee}', [EmpController::class, 'update'])->name('admin.employees.update');
Route::delete('/admin/employees/{employee}', [EmpController::class, 'destroy'])->name('admin.employees.destroy');

Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/posts/{post}', [BlogController::class, 'show'])->name('admin.posts.show');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/admin/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

Route::get('/admin/tasks', [TaskController::class, 'index'])->name('admin.tasks.index');
Route::get('/admin/tasks/create', [TaskController::class, 'create'])->name('admin.tasks.create');
Route::post('/admin/tasks', [TaskController::class, 'store'])->name('admin.tasks.store');
Route::get('/admin/tasks/{task}', [TaskController::class, 'show'])->name('admin.tasks.show');
Route::get('/admin/tasks/{task}/edit', [TaskController::class, 'edit'])->name('admin.tasks.edit');
Route::get('/admin/tasks/{task}/edit', [TaskController::class, 'edit'])->name('admin.tasks.edit');
Route::put('/admin/tasks/{task}', [TaskController::class, 'update'])->name('admin.tasks.update');
Route::delete('/admin/tasks/{task}', [TaskController::class, 'destroy'])->name('admin.tasks.destroy');

Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.students.index');
Route::get('/admin/students/create', [StudentController::class, 'create'])->name('admin.students.create');
Route::post('/admin/students', [StudentController::class, 'store'])->name('admin.students.store');
Route::get('/admin/students/{student}', [StudentController::class, 'show'])->name('admin.students.show');
Route::get('/admin/students/{student}/edit', [StudentController::class, 'edit'])->name('admin.students.edit');
Route::get('/admin/students/{student}/edit', [StudentController::class, 'edit'])->name('admin.students.edit');
Route::put('/admin/students/{student}', [StudentController::class, 'update'])->name('admin.students.update');
Route::delete('/admin/students/{student}', [StudentController::class, 'destroy'])->name('admin.students.destroy');

Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books.index');
Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store');
Route::get('/admin/books/{book}', [BookController::class, 'show'])->name('admin.books.show');
Route::get('/admin/books/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
Route::get('/admin/books/{book}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
Route::put('/admin/books/{book}', [BookController::class, 'update'])->name('admin.books.update');
Route::delete('/admin/books/{book}', [BookController::class, 'destroy'])->name('admin.books.destroy');

Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
Route::get('/admin/contacts/create', [ContactController::class, 'create'])->name('admin.contacts.create');
Route::post('/admin/contacts', [ContactController::class, 'store'])->name('admin.contacts.store');
Route::get('/admin/contacts/{contact}', [ContactController::class, 'show'])->name('admin.contacts.show');
Route::get('/admin/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('admin.contacts.edit');
Route::get('/admin/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('admin.contacts.edit');
Route::put('/admin/contacts/{contact}', [ContactController::class, 'update'])->name('admin.contacts.update');
Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');


Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses.index');
Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
Route::post('/admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');
Route::get('/admin/courses/{course}', [CourseController::class, 'show'])->name('admin.courses.show');
Route::get('/admin/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
Route::get('/admin/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
Route::put('/admin/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

Route::get('/admin/movies', [MovieController::class, 'index'])->name('admin.movies.index');
Route::get('/admin/movies/create', [MovieController::class, 'create'])->name('admin.movies.create');
Route::post('/admin/movies', [MovieController::class, 'store'])->name('admin.movies.store');
Route::get('/admin/movies/{movie}', [MovieController::class, 'show'])->name('admin.movies.show');
Route::get('/admin/movies/{movie}/edit', [MovieController::class, 'edit'])->name('admin.movies.edit');
Route::get('/admin/movies/{movie}/edit', [MovieController::class, 'edit'])->name('admin.movies.edit');
Route::put('/admin/movies/{movie}', [MovieController::class, 'update'])->name('admin.movies.update');
Route::delete('/admin/movies/{movie}', [MovieController::class, 'destroy'])->name('admin.movies.destroy');

Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/admin/events', [EventController::class, 'index'])->name('admin.events.index');
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');
Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('admin.events.show');
Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');

Route::get('/admin/todos', [TodoController::class, 'index'])->name('admin.todos.index');
Route::get('/admin/todos/create', [TodoController::class, 'create'])->name('admin.todos.create');
Route::post('/admin/todos', [TodoController::class, 'store'])->name('admin.todos.store');
Route::get('/admin/todos/{todo}', [TodoController::class, 'show'])->name('admin.todos.show');
Route::get('/admin/todos/{todo}/edit', [TodoController::class, 'edit'])->name('admin.todos.edit');
Route::get('/admin/todos/{todo}/edit', [TodoController::class, 'edit'])->name('admin.todos.edit');
Route::put('/admin/todos/{todo}', [TodoController::class, 'update'])->name('admin.todos.update');
Route::delete('/admin/todos/{todo}', [TodoController::class, 'destroy'])->name('admin.todos.destroy');

require __DIR__.'/auth.php';

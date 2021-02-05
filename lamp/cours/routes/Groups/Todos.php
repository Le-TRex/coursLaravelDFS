<?php



Route::prefix('todos')->group(function(){
Route::get('/', [ TodoController::class, 'Home'])->name('homeTodos');
Route::get('/create', [TodoController::class, 'CreateTodo'])->name('CreateTodo');
Route::post('/create', [TodoController::class, 'CreateTodoPost'])->name('CreateTodoPost');
Route::get('/{todo:id}', [ TodoController::class, 'UpdateTodo' ])->name('TodoEdit');
Route::patch('/{todo:id}', [ TodoController::class, 'UpdateTodoPost' ])->name('UpdateTodo');
Route::delete('/{todo:id}', [TodoController::class, 'DeleteTodo'])->name('DeleteTodo');
});

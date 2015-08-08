<?php namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * View ToDos listing
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $todoList = Todo::where('user_id', Auth::user()->id)->paginate(7);
        return view('todo.list', compact('todoList'));
    }

    /**
     * View Create Form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Categories::lists('name', 'id');

        return view('todo.create', compact('categories'));

    }

    /**
     * Create new Todo
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        Todo::create([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'user_id' => Auth::user()->id
        ]);
        message()->success('Success!', 'Your ToDo has been created.');
        return redirect('/todo');

    }

    /**
     * Toggle Status
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->complete = !$todo->complete;
        $todo->save();

        message()->success('Success', 'Status updated');

        return redirect()
            ->route('todo.index');

    }

    /**
     * Delete Todo
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        message()->error('Destroyed', 'Your ToDo has been destroyed !');
        return redirect()
            ->route('todo.index');

    }
}

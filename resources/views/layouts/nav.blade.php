<div><a href="/">Post</a></div>
<div><a href="/tasks">Task</a></div>
<ul>
    @if (Auth::check())
        <li>{{ Auth::user()->name }}</li>
        <li><a href="/logout">Logout</a></li>
        <li><a href="/posts/create">Post新規</a></li>
        <li><a href="/tasks/create">Task新規</a></li>
    @else
        <li><a href="/register">Register</a></li>
        <li><a href="/login">Login</a></li>
    @endif
</ul>

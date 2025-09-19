<h1>hello world</h1>
<h1>hello {{ Auth::user()->name }}</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
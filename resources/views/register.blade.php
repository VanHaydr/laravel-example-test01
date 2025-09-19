<form method="POST" action=" {{ route('register.store') }} ">
    @csrf
    @if ($errors->any())
     <div>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
        
    @endif
    <input type="text" name="name" placeholder="Name" required />
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required/>
    <button type="submit">Register</button>

</form>
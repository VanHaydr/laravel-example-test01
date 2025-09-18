<form method="POST" action=" {{ route('login.attempt') }} ">
    <input type="email" placeholder="Email" required />
    <input type="password" placeholder="Password" required/>
    <button type="submit">Submit</button>

</form>
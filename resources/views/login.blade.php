<form action="{{ route('login.submit') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username kamu">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password kamu">
    </div>
    <p>Belum punya akun? <a href="{{ route('register')}}">Daftar Sekarang</a></p>
    <button type="submit">Submit</button>
</form>

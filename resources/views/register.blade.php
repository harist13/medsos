<form action="{{ route('register.submit') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
        @error('username')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" class="form-control" id="nama" name="nama">
        @error('nama')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        @error('email')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        @error('password_confirmation')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Register</button>
</form>

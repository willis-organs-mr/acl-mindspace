@extends ('layouts.app')

@section('content')
    
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>User</th>
                <th>Author</th>
                <th>Admin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <form action="{{ route('admin.assign') }}" method="post">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                        <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                        <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                        <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                        <td><button type="submit">Assign Roles</button></td>
                        {{ csrf_field() }}
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
@if(Auth::guard('web')->check())
    <p class="text-success">
        You are logged in as <strong>User</strong>
    </p>
@else
    <p class="text-danger">
        You are logged out as a <strong>User</strong>
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        You are logged in as <strong>Admin</strong>
    </p>
@else
    <p class="text-danger">
        You are logged out as a <strong>Admin</strong>
    </p>
@endif

@if(Auth::guard('teacher')->check())
    <p class="text-success">
        You are logged in as <strong>Teacher</strong>
    </p>
@else
    <p class="text-danger">
        You are logged out as a <strong>Teacher</strong>
    </p>
@endif

@if(Auth::guard('student')->check())
    <p class="text-success">
        You are logged in as <strong>Student</strong>
    </p>
@else
    <p class="text-danger">
        You are logged out as a <strong>Student</strong>
    </p>
@endif
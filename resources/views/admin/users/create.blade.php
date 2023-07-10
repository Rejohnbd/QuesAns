@extends('layouts.app')

@section('title', 'User Create')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'admin-dashboard',
'activePage' => 'User Create'
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Create User
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="userRole">Select User Role <span class="text-danger">*</span></label>
                                <select id="userRole" name="role_id" class="form-control" required>
                                    @foreach($userRoles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <div class="invalid-feedback disblock">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="userName">User Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="userName" name="name" placeholder="Enter User Name" required>
                                @error('name')
                                <div class="invalid-feedback disblock">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="userEmail">Email address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter User Email" required>
                                @error('email')
                                <div class="invalid-feedback disblock">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter Password" required value="password">
                                    <div class="input-group-append showPassword" style="cursor: pointer;">
                                        <span class="input-group-text"><i class="fas fa-eye"></i></span>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback disblock">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Create User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-default float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        let showPaasword = false;
        $('.showPassword').on('click', function() {
            showPaasword = !showPaasword;
            if (showPaasword) {
                $('#userPassword').attr('type', 'text');
            } else {
                $('#userPassword').attr('type', 'password');
            }
        })
    })
</script>
@endsection
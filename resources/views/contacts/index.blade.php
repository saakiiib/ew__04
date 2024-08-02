@extends('layout')

@section('title', 'Contacts')

@section('content')

    <h1 class="mb-4">Contacts</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="{{ route('contacts.create') }}" class="btn btn-primary">Create New Contact</a>
        <div class="btn-group" role="group" aria-label="Sort Buttons">
            @php
                $newSortOrder = ($sortField == 'name' && $sortOrder == 'asc') ? 'desc' : 'asc';
            @endphp
            <a href="{{ route('contacts.index', ['sort_field' => 'name', 'sort_order' => $newSortOrder]) }}" class="btn btn-secondary">
                Sort by Name {{ $sortField == 'name' ? ($sortOrder == 'asc' ? '▲' : '▼') : '' }}
            </a>
            @php
                $newSortOrder = ($sortField == 'created_at' && $sortOrder == 'asc') ? 'desc' : 'asc';
            @endphp
            <a href="{{ route('contacts.index', ['sort_field' => 'created_at', 'sort_order' => $newSortOrder]) }}" class="btn btn-secondary">
                Sort by Date {{ $sortField == 'created_at' ? ($sortOrder == 'asc' ? '▲' : '▼') : '' }}
            </a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
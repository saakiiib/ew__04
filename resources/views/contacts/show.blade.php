@extends('layout')

@section('title', 'Contact Details')

@section('content')

    <h1 class="mb-4">Contact Details</h1>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Contact Information</h5>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $contact->id }}</dd>

                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $contact->name }}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $contact->email }}</dd>

                <dt class="col-sm-3">Phone</dt>
                <dd class="col-sm-9">{{ $contact->phone }}</dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">{{ $contact->address }}</dd>
            </dl>
        </div>
        <div class="card-footer">
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

@endsection

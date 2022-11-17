@include('components.header', ['title' => 'Todos'])

<div class="container">
    <h1 class="text-center my-5">
        TODOS PAGE
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-8 d-flex flex-column">
            <div class="card card-default bg-dark border-white">
                <div class="card-header border-bottom border-white {{ $todos->completed ? 'text-secondary' : 'text-white' }}"
                    style="{{ $todos->completed ? 'text-decoration: line-through' : '' }}">
                    {{ $todos->name }}

                    <div class="btn-group float-end" role="group">
                        <a class="btn btn-outline-success btn-sm"
                            href="{{ route('todos.complete', [$todos->id, true]) }}">
                            <i class="bi bi-check2-square"></i>
                        </a>
                        <a class="btn btn-outline-danger btn-sm"
                            href="{{ route('todos.incomplete', [$todos->id, true]) }}">
                            <i class="bi bi-x-square"></i>
                        </a>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('todos.edit', $todos->id) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a class="btn btn-outline-danger btn-sm" href="{{ route('todos.delete', $todos->id) }}">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>

                    @if ($todos->completed)
                        <span class="badge bg-success">Completed</span>
                        <span class="badge bg-danger" hidden>Incomplete</span>
                    @else
                        <span class="badge bg-success" hidden>Completed</span>
                        <span class="badge bg-danger">Incomplete</span>
                    @endif
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item bg-dark border-white {{ $todos->completed ? 'text-secondary' : 'text-white' }}"
                            style="{{ $todos->completed ? 'text-decoration: line-through' : '' }}">
                            {{ $todos->description }}
                        </li>
                    </ul>
                </div>
            </div>

            <a href="{{ route('todos.index') }}" class="btn btn-primary mt-3 btn-sm float-end">
                <i class="bi bi-arrow-left-square"></i>
                Back
            </a>
        </div>
    </div>
</div>

@include('components.footer')

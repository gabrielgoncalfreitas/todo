@include('components.header', ['title' => 'Todos page'])

<div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default bg-dark border-white">
                <div class="card-header border-bottom border-white text-center">
                    Todos

                    <a class="btn btn-success btn-sm float-end" href="{{ route('todos.create') }}">
                        <i class="bi bi-plus-square"></i>
                    </a>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @if ($todos->isEmpty())
                            <li class="list-group-item text-truncate bg-dark text-center text-white border-white">
                                Todos is empty
                            </li>
                        @else
                            @foreach ($todos as $todo)
                                <li class="list-group-item text-truncate bg-dark {{ $todo->completed ? 'text-secondary' : 'text-white' }} border-white"
                                    style="{{ $todo->completed ? 'text-decoration: line-through' : '' }}"
                                    id="{{ $todo->id }}">
                                    {{ $todo->name }}

                                    <div class="btn-group float-end" role="group">
                                        <a class="btn btn-outline-success btn-sm"
                                            href="{{ route('todos.complete', [$todo->id, 0]) }}">
                                            <i class="bi bi-check2-square"></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm"
                                            href="{{ route('todos.incomplete', [$todo->id, 0]) }}">
                                            <i class="bi bi-x-square"></i>
                                        </a>
                                        <a class="btn btn-outline-primary btn-sm"
                                            href="{{ route('todos.edit', $todo->id) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm"
                                            href="{{ route('todos.view', $todo->id) }}">
                                            <i class="bi bi-binoculars"></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm"
                                            href="{{ route('todos.delete', $todo->id) }}">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

@include('components.header', ['title' => 'Todos'])

<div class="container text-white">
    <h1 class="text-center my-5">
        TODOS PAGE
    </h1>

    @if (isset($errors))
        @foreach ($errors as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8 d-flex flex-column">
            <form action="{{ route('todos.store') }}" method="POST">
                @csrf

                <div class="card card-default bg-dark border-white">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item bg-dark text-white border-white">
                                <div class="form-floating text-dark">
                                    <input type="text" class="form-control" id="input" name="name"
                                        placeholder="Name" maxlength="255" value="{{ $oldName ?? '' }}">
                                    <label for="input">Name <b class="text-danger">*</b></label>
                                </div>
                            </li>
                            <li class="list-group-item bg-dark text-white border-white">
                                <div class="form-floating text-dark">
                                    <textarea class="form-control" placeholder="Description" id="textarea" name="description" style="height: 100px">{{ $oldDescription ?? '' }}</textarea>
                                    <label for="textarea">Description <b class="text-danger">*</b></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-success mt-3 btn-sm float-end">
                        <i class="bi bi-journal-check"></i>
                        Create
                    </button>

                    <a href="{{ route('todos.index') }}" class="btn btn-primary mt-3 btn-sm float-end">
                        <i class="bi bi-arrow-left-square"></i>
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@include('components.footer')

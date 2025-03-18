<x-main>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>loggati</h1>
            </div>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">accedi</button>
            </form>
        </div>
    </div>


</x-main>

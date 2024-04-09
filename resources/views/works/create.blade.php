<form class="form p-4 rounded-lg border border-light shadow-sm" method="post" action="{{ route('admin.works.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image" class="font-weight-bold">Image:</label>
        <input type="file" class="form-control-file bg-light border border-info text-info" name="image" required>
    </div>

    <div class="form-group">
        <label for="title" class="font-weight-bold">Title:</label>
        <input type="text" class="form-control bg-light border border-success text-success" name="title" required>
    </div>

    <div class="form-group">
        <label for="category" class="font-weight-bold">Category:</label>
        <input type="text" class="form-control bg-light border border-primary text-primary" name="category" required>
    </div>

    <div class="form-group">
        <label for="date" class="font-weight-bold">Date:</label>
        <input type="date" class="form-control bg-light border border-warning text-warning" name="date" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
</form>

<table class="table table-hover table-bordered mt-4">
    <thead class="thead-dark">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach(App\Models\Work::all() as $work)
        <tr>
            <td><img src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->title }}" class="img-thumbnail" width="100"></td>
            <td>{{ $work->title }}</td>
            <td>{{ $work->category }}</td>
            <td>{{ $work->date }}</td>
            <td>
                <a href="{{ route('admin.works.edit', ['id' => $work->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                <form method="post" action="{{ route('admin.works.destroy', ['id' => $work->id]) }}" style="display:inline;">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this work?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

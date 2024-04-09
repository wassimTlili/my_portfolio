
 
    <h2>Edit Work</h2>

    <form method="post" action="{{ route('admin.works.update', ['id' => $work->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="image">Image:</label>
        <input type="file" name="image">
        
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $work->title }}" required>

        <label for="category">Category:</label>
        <input type="text" name="category" value="{{ $work->category }}" required>

        <label for="date">Date:</label>
        <input type="date" name="date" value="{{ $work->date }}" required>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('admin.works.index') }}">Back to Works</a>
 

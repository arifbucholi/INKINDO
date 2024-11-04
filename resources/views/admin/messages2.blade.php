<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Messages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Messages</h1>

        <a href="
        {{-- {{ route('admin.messages.create') }} --}}
         " class="btn btn-primary mb-3">Add New Message</a>

        @if ($messages->isEmpty())
            <div class="alert alert-info" role="alert">
                No messages found.
            </div>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->guest_name }}</td>
                        <td>{{ $message->message }}</td>
                        <td>
                            <a href="
                            {{-- {{ route('admin.messages.edit', $message->id) }} --}}
                             " class="btn btn-warning">Edit</a>
                            <form action="
                            {{-- {{ route('admin.messages.destroy', $message->id) }} --}}
                             "
                              method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

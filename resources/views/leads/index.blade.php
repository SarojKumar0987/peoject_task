<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Management</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="pdfdata">
            <h1>Leads Management</h1>

            <a href="{{ route('leads.export.pdf', ['status' => request('status')]) }}" class="btn btn-primary mb-3">Export as PDF</a>
        </div>

        <table id="leadsTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <td>{{ $lead->id }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>{{ $lead->status }}</td>
                        <td>{{ $lead->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#leadsTable').DataTable();
        });
    </script>
</body>
</html>

<style>
    .pdfdata {
    display: flex;
    justify-content: space-between;
}
.pdfdata a.btn.btn-primary.mb-3 {
    padding: 8px 10px;
    border-width: 2px;
    border-style: solid;
    margin: 21px 7px;
    background-color: red;
    color: white;
    text-decoration: auto;
}

tbody tr {
    text-align: center;
}
</style>

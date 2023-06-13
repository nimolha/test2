<!DOCTYPE html>
<html>
<head>
  <title>HTML Table with Borders</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 5px solid black;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: seagreen;
    }
    td{
        background-color: thistle;
    }

  </style>
</head>
<body>
    <button type="button">
    <a href="/create_role_index">
    create </a></button>
    <button type="button">
    <a href="/get_role_list/Status/NA/Active">
    List Active role</a></button>
    <button type="button">
    <a href="/get_role_list/Status/NA/Inactive">
    List Inactive role</a></button>
    <button type="button">
    <a href="/get_role_list/ALL/NA/ALL">
    List all role</a></button>
  <table>
    <thead >
      <tr>
        <th>sl no</th>
        <th>role name</th>
        <th>Staus</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($response_data as $i=> $data)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <button type="button">
                        <a href="/edit_role/{{$data->id}}">
                        Edit</a></button>
                    <button type="button">
                        <a href="/delete_role/{{$data->id}}">
                        Delete </a></button>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>

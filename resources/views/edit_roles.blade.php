<!DOCTYPE html>
<html>
<head>
  <title>role management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: salmon;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      width: 400px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      padding: 40px;
      text-align: center;
      background-color: #4CAF50;
      color: white;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-body {
      padding: 40px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
    p {
  background-image: url('login.jpg');
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2>Edit Role</h2>
      </div>
      <div class="card-body">
        <form action="/update_role" method="post">
          @csrf 
          <div class="form-group">
            <label for="username">Role Name:</label>
            <input type="text" value="{{$data->name}}"id="role_name" name="role_name" >
            <input type="hidden" value="{{$data->id}}"id="role_name" name="record_id" >
          </div>
          <div class="form-group">
            <label for="password">status</label>
            <label for="password">Active</label>
            <input type="radio" value="Active" id="status2" name="status" >
            <input type="hidden" value="{{$data->status}}"id="role_name" name="status_id" >
            <label for="password">Inactive</label>
            <script>
              let status_value=document.getElementById('status_id').value;
               // alert(status_value);
               if(status_value=="Active"){
                document.getElementById('status1').checked = true;
               }else{
                document.getElementById('status2').checked = true;
               }
               
              </script>
            <input type="radio" value="Inactive" id="status3" name="status" >
          </div>
          <div class="form-group">
            <input type="submit" value="update">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

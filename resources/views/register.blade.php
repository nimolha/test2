<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  @include('common.css')
</head>
<body style="background-color: tomato;">
<section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Now For Work
              </h2>
            </div>
            <form action="/login" method="POST">
             
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2>Register</h2>
        
        <p>
          {{$registration_txt}}
        </p>
       
      </div>
      <div class="card-body">
        <form action="/register_new_user" method="POST">
              @csrf
          <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="fullname" id="fullname" name="fullname" required>
          </div>
          <div class="form-group">
            <label for="contact">Contact No:</label>
            <input type="contact" id="contact" name="contact" required>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <label for="role">Role:</label>
          <select name="role" id="role"style="margin-bottom:10px;">
            <option value="">select</option>
            @foreach ($response_data as $data)
              <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
          </select>
          <div class="form-group">
            <input type="submit" value="Register">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

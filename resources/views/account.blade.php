@extends("layout")

@section("page_title", "Account")

@section("main_content")
<div class="product-container">
<form>
    <h3>Create your account</h3>
    <div class="form-group" action="register-controller.php" method="POST">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username"  placeholder="Username">
      </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @stop
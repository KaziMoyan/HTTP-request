<h1> User Login</h1>
<form action = "users" method = "POST">
@csrf
<input type ="text" name = "user" placeholder="Enter Your name :"> <br>
<input type ="password" name = "password" placeholder="Enter Your password:"> <br>

<button type = " submit"> Login </button>
</from>
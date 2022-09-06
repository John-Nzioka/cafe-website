<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
    <style>
        body{
    background: #cf9f77;
    font-family: sans-serif;
}
.cakeupload-box{
    width: 360px;
    height: 470px;
    margin: auto;
    background-color: white;
    border-radius: 3px;
}
.login-box{
    width: 360px; 
    height: 600px; 
    margin: auto ;
    background-color:white ;
    border-radius: 3px;
}
h1{
    text-align: center;
    padding-top: 15px;
}
h4{
    text-align: center;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
}
.signup-box button{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #fb5849;;
    color: white;
    font-size: 18px
}
.login-box button{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #fb5849;;
    color: white;
    font-size: 18px

p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;
    margin-top: -10px;
}
.para-2 a{
    color: #49c1a2;
}
.signup-box button:hover{
    color: yellow;
}
.header{
    background-color: #fb5849;
    height: 50px;
}


    </style>
   <div class="cakeupload-box">
    <div class="header">
      <h1>Upload Cake</h1>
      <h4>Here is my table</h4>
    </div>
      <form id="signup" action="signup1.php" method="post" >
          <label for="title">Title:</label>
          <input type="text" name="fname" id="title" placeholder=""/>
          <label for="description">Description:</label>
          <input type="text" name="description" id="description" placeholder=""/>
          <label for="price">Price:</label>
          <input type="email" name="price" id="price" placeholder=""/>
          <label for="county">Image:</label>
          <input type="text" name="image" id="image" placeholder=""/>
          <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            <input type="submit">
          </form>
         
      </form>
     
 </div>
 
</body>
</html>













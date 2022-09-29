<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social network</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}
    body{
        background-image: url("background.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        
    }
    h1{
      color:aqua;
    }
    .subscribe-box {
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 60px 40px;
    width: 400px;
    text-align: center;
}
.subscribe-box h1 {
    font-size: 36px;
    color: #20D389;
    margin-bottom: 15px;
    font-weight: 700;
}
.subscribe-box span {
    color: #999;
    font-size: 16px;
    text-transform: capitalize;
}
.subscribe-box hr {
    width: 70px;
    color: #999;
    margin: 25px auto;
}
.subscribe-box input {
    width: 100%;
    font-size: 16px;
    box-sizing: border-box;
    padding: 20px;
    border: 1px solid #999;
    border-radius: 5px;
    margin-bottom: 25px;
}
.subscribe-box input:focus-visible {
    border: 1px solid #20D389;
    outline: #20D389;
}
.subscribe-box button {
    width: 100%;
    padding: 15px 20px;
    border: 0;
    border-radius: 5px;
    background: #20D389;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    transition: .3s;
}
.subscribe-box button:hover {
    background: #196b49;
}

</style>
<body>
    <div class="subscribe-box">
        <h1>Join Now</h1>
        <span>Contact with your friends from your own home!</span>
        <hr>
        <form action="index.php">
          <button type="submit">Join us now</button>
        </form>
    </div>
    
</body>
</html>
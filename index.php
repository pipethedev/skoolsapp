<?PHP 

if($_COOKIE['fetcher'] !== ""){
  header('refresh:5;url=t-home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Loader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style type="text/css">

        body {
      animation: colorchange 50s; /* animation-name followed by duration in seconds*/
         /* you could also use milliseconds (ms) or something like 2.5s */
      -webkit-animation: colorchange 50s; /* Chrome and Safari */
    }

    @keyframes colorchange
    {
      0%   {background: #00b894;}
      25%  {background: #d63031;}
      50%  {background: #636e72;}
      75%  {background: #0984e3;}
      100% {background: #00b894;}
    }

    @-webkit-keyframes colorchange 
    {
      0%   {background: #00b894;}
      25%  {background: #d63031;}
      50%  {background: #636e72;}
      75%  {background: #0984e3;}
      100% {background: #00b894;}
    }
    .load{
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .lds-ellipsis {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: #fff;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}

</style>
<div class="load">
    <img src="img/person.png" height="70" width="70">
    <br>
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>
</body>
</html>
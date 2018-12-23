<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Encryption-Decryption System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>


* {
    box-sizing: border-box;
}

input, select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	margin: 10px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


.heading-alignment{
	padding-bottom: 60px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}






        </style>


<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Main JavaScript -->
<script src="js/main.js"></script>

<!-- Crypto Libraries -->
<script src="../js/mainscript.js"></script>
<script src="../js/enc-utf8.js"></script>
<script src="../js/crypto-js.js"></script>
<script src="../js/aes.js"></script>
<script src="../js/tripledes.js"></script>
<script src="../js/rc4.js"></script>
<script src="./js/rabbit.js"></script>
<script src="../js/sha1.js"></script>
<script src="../js/sha3.js"></script>
<script src="../js/sha3.js"></script>
<script src="../js/md5.js"></script>
<script src="../js/Blowfish.js"></script>
<script src="../js/enc-base64.js"> </script>
<script src="../js/down.js"></script>


    </head>



    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>


<div style="max-width:800px; margin:0 auto; " class="container">
  <h1 align="center" class="heading-alignment">Online Encryption and Decryption</h1>
  <div class="row">
    <div class="col-25">
      <label for="algo">Choose Algorithm</label>
    </div>
    <div class="col-75">
      <select id="method">
        <option value="def">Select encryption method</option>
		<option value="aes">Blowfish</option>
        <option value="aes">AES</option>
        <option value="des">3DES</option>
        <option value="rc4">RC4 Stream</option>
        <option value="rb">Rabbit Stream</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="key">Enter Key</label>
    </div>
    <div class="col-75">
      <input type="password" id="key" name="key" placeholder="Enter key ..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="plaintext">Enter Text</label>
    </div>
    <div class="col-75">
      <textarea id="plain" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <button onclick="dec();">Decrypt</button>
    <button onclick="enc();">Encrypt</button>
    <button onclick="sha1();">SHA1</button>
    <button onclick="sha3();">SHA3</button>
    <button onclick="md();">MD5</button>
  </div>
  <div class="row">
    <div class="col-25"> </div>
    <div class="col-75">
      <textarea readonly id="chipher" name="subject" placeholder="Result will appear here.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <button onclick="doDL();">Download</button>
  </div>
</div>

                
            </div>
        </div>
    </body>
</html>

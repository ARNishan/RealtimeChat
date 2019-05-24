 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Doccument</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<style>
	 .list-group{
	 	overflow-y: scroll;
	 	height: 200px;

	 }
	</style>
</head>
<body>
	<div class="container">
	  <div class="row" id="app">
		<div class="offset-4 col-4 offset-sm-1 col-sm-10">
	<li class="list-group-item active">Chat Room <span class="badge badge-pill badge-danger">@{{ numOfUsers }}</span></li>
	<div class="badge badge-pill badge-primary">@{{ typing }}</div>
		  <ul class="list-group" v-chat-scroll>
	  <message
	  v-for="value,index in chat.message"
	  :key=value.index
	  :color=chat.color[index]
	  :user = chat.user[index]
	  :time = chat.time[index]
	  >
	  @{{ value }}
	  </message>
           </ul>
           {{-- <a href="{{ url('/send') }}">send</a> --}}
        <input type="text" class="form-control" placeholder="Type your message" v-model='message' @keyup.enter='send'><br>
        <a href='' class="btn btn-danger btn-sm" @click.prevent='deleteSession'>Delete All Chat</a>
         </div>
	   </div>
	</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
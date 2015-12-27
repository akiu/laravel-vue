@extends('layouts.main')

@section('title')
	Laravel Vue JS
@stop

@section('script-head')

@endsection

@section('content')
<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
			<input v-model="book" id="book" type="text" />
		</div>
		<div class="col-md-12">
			<input v-model="test" id="book" type="text" />
		</div>
		<div class="col-md-12">
			@{{ book }}
		</div>
		<div class="col-md-12">
			@{{ name }}
		</div>
		<div class="col-md-12">
			<button v-on:click="req">req</button>
		</div>
		<div class="col-md-12">
			<button v-on:click="send">req</button>
		</div>
	</div>
</div>
@endsection

@section('script-bottom')
<script>
	
	new Vue({

		http: {
		    headers: {
		    	"X-CSRF-TOKEN" : "{{ csrf_token() }}"
		    }
		},
		el: "#app",
		data : {
			name : ''
		},
		methods : {
			req : function() {
				this.$http.get('/data').then(function(res) {
					//console.log(res.data.name);
					this.name = res.data.name;
				});
			},
			send : function() {
				this.$http.post('/post', { name : this.test }).then(function(res) {
					this.name = res.data.name
				});
			}
		}
	});

</script>
@endsection
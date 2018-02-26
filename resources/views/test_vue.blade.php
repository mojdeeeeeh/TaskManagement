<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <div id="app">
        Users List
        <div>
        	<ul>
        		<li v-for="user in users">
        			@{{ user.id }} : @{{ user.name }}
        		</li>
        	</ul>
        </div>
    </div>

    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <script type="text/javascript">
	    new Vue({
	        el: '#app',

	        created(){
	        	this.loadData();
	        },

	        data: {
	            users: []
	        },

	        methods: {
	        	loadData(){
	        		axios.get('{{ url('/test/data') }}')
	        			.then(res => {
	        				this.users = res.data;
	        			})
	        			.catch(err => {
	        				alert(err.message);
	        			});
	        	}
	        }
	    });
    </script>
</body>

</html>

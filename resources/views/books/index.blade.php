<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <div id="app">
        Book List
        <div>
        	<ul>
        		<li v-for="book in books">
        			@{{ book.title }} : @{{ book.author }}
        		</li>
        	</ul>
        </div>
    </div>

    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <script type="text/javascript">
	    new Vue({
	        el: '#app',

	        mounted(){
	        	this.loadData();
	        },

	        data: {
	            books: []
	        },

	        methods: {
	        	loadData(){
	        		axios.get('{{ url('/books/data') }}')
	        			.then(res => {
	        				this.books = res.data;
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

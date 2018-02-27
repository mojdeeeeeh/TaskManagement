<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
</head>

<body>

    <div id="app">
        Book List
        <div>
        	<ul>
        		<li v-for="book in booksList">
        			@{{ book.title }} : @{{ book.author }}
        		</li>
        	</ul>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
	    new Vue({
	        el: '#app',

	        data: {
	            booksList: []
	        },

            mounted(){
                this.loadData();
            },

	        methods: {
	        	loadData(){
	        		axios.get('{{ url('/books/') }}')
	        			.then(res => {
	        				this.booksList = res.data;
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

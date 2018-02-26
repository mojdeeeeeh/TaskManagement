<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <div id="app2">
        <div>
            <input type="text" name="" id="userModel.username">
        </div>
        <div>
            <input type="text" name="" id="userModel.password">
        </div>
    </div>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script type="text/javascript">
    new Vue({
        el: '#app2',
    
    data: {
        userModel: {
            username: '',
            password: ''
        }
    }
    methods:{
        
    }
    )};
    </script>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div>
			UserName : 
			<input type="text" id="usernameTextBox" onchange="updateModel()">
		</div>
		
		<div>
			Password : 
			<input type="text" id="passwordTextBox" onchange="updateModel()">
		</div>

		<hr />
		<input type="button" value="Refresh" onclick="updateUI()">
		<input type="button" value="Add !" onclick="addExclaminate()">
	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	
	<script type="text/javascript">
		let userModel = {
			username: 'U1',
			password: 'P1'
		};

		function updateUI(){
			let usernameTextBox = document.getElementById('usernameTextBox');
			let passwordTextBox = document.getElementById('passwordTextBox');

			usernameTextBox.value = userModel.username;
			passwordTextBox.value = userModel.password;
		}

		function updateModel(){
			let usernameTextBox = document.getElementById('usernameTextBox');
			let passwordTextBox = document.getElementById('passwordTextBox');

			userModel.username = usernameTextBox.value;
			userModel.password = passwordTextBox.value;
		}

		function addExclaminate(){
			userModel.username += "!";

			updateUI();
		}
	</script>
</body>
</html>

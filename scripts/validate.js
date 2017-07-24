Dropzone.options.uploads = {
	maxFilesize: 2,
	acceptedFiles:".png, .jpg, .jpeg, .bmp",
	success: function (file, response){
		if(file.status === "success"){
			// do this
			handleResponse.handelSuccess(response);
		}
		else{
			handleResponse.handelError(response);
			//do this
		}
	}
};

var handleResponse = {
	handleError: function (response){
		console.log(response);
	},
	handelSuccess : function (resopnse){
		msg = document.getElementById("msg");
		msg.innerHTML = "uploaded successfully.";
	}
}
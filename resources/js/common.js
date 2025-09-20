'use strict';

// common CSRF and req for all functions
window.CSRF_TOKEN = "";
if (typeof document.getElementsByName("csrf-token")[0] !== 'undefined') {
	CSRF_TOKEN = document.getElementsByName("csrf-token")[0].content;
}

window.defaultHeader = {
    "X-CSRF-TOKEN": CSRF_TOKEN,
	'Accept': 'application/json'
};

toastr.options = {
	showMethod: 'slideDown',
	hideMethod: 'slideUp',
	showDuration: 300,
	hideDuration: 300,
	timeOut: 5000
};

window.showErrors = async (responseJson) => {
	if (responseJson.errors) {
		let errors = Object.values(responseJson.errors);
		errors.forEach(error_types => {
			error_types.forEach(error => {
				toastr.error(error, 'Error');
			});
		});
	} else {
		toastr.error(responseJson.message || "Something went wrong", "Error");
	}
};

window.hideNotification = () => {
	document.getElementById("notification").innerHTML="";
}

window.reloadPage = () => {
	location.reload();
}

window.createUserImage = (url) => {
	document.getElementById("notification").innerHTML="<div style='margin-top: 30px; margin-bottom: 30px;'><center><p style='padding-bottom: 30px;'>Upload new photo</p><input type='file' id='fileselectInput' class='btn btn-warning' style='margin-bottom: 10px;'><button type='button' class='btn btn-success' onclick=\"storeUserImage('" + url + "')\" style='margin-right: 5px;'>Submit</button><button type='button' class='btn btn-info' onclick='hideNotification()'>Cancel</button>	</center></div>";
}

window.storeUserImage = (url) => {
	let formData = new FormData();
    formData.append("image", $("#fileselectInput")[0].files[0]);

	fetch(url, {
        method: "POST",
        headers: defaultHeader,
        body: formData
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            location.reload();
        } else {
            showErrors(responseJson);
        }
    });
}

window.cancelOrder = (orderId, url) => {
	let formData = new FormData();
	formData.append("_method", 'PUT');
    formData.append("orderId", orderId);

	fetch(url, {
        method: "POST",
        headers: defaultHeader,
        body: formData
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            location.reload();
        } else {
            showErrors(responseJson);
        }
    });
}

window.scrollLeft200 = (value1) => {
	let obj = document.getElementById("i"+value1);
	obj.scrollLeft = obj.scrollLeft-200;
}

window.scrollRight200 = (value1) => {
	let obj = document.getElementById("i"+value1);
	obj.scrollLeft = obj.scrollLeft+200;
}

window.showScroll = (value1) => {
	document.getElementById("i"+value1).style="overflow: auto;";
}

window.hideScroll = (value1) => {
	document.getElementById("i"+value1).style="overflow: hidden;";
}
'use strict';

window.insertAddItemButton = (documentId, comparingSlot, url) => {
	document.getElementById(documentId).innerHTML="<center><button type='button' class='btn btn-primary b78' onclick=\"getComparingProducts('"+url+"', "+comparingSlot+")\"><span class='glyphicon glyphicon-plus-sign'></span> Add Item</button></center>";
}

window.getComparingProducts = (url, comparingSlot) => {
	let documentId = "";

	if (comparingSlot == 1) {
		documentId = "i19";
	}

	if (comparingSlot == 2) {
		documentId = "i20";
	}

	if (comparingSlot == 3) {
		documentId = "i21";
	}

	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById(documentId).innerHTML = responseJson.content;
        } else {
            showErrors(responseJson);
        }
    });
}

window.showComparingProduct = (url, comparingSlot) => {
	let documentId = "";

	if (comparingSlot == 1) {
		documentId = "i19";
	}

	if (comparingSlot == 2) {
		documentId = "i20";
	}

	if (comparingSlot == 3) {
		documentId = "i21";
	}

	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById(documentId).innerHTML = responseJson.content;
        } else {
            showErrors(responseJson);
        }
    });
}

window.updateComparingProduct = (url, productId, showUrl, comparingSlot) => {
	let formData = new FormData();
	formData.append("_method", 'PUT');
	formData.append("productId", productId);

	fetch(url, {
        method: "POST",
        headers: defaultHeader,
        body: formData
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
			showComparingProduct(showUrl, comparingSlot);
            toastr.success(responseJson.message, 'Success');
        } else {
            showErrors(responseJson);
        }
    });
}

window.destroyComparingProduct = (comparingSlot, page, url, dropdownUrl) => {
	let documentId = "";

	if (comparingSlot == 1) {
		documentId = "i19";
	}

	if (comparingSlot == 2) {
		documentId = "i20";
	}

	if (page == 'edit') {
		fetch(url, {
			method: "DELETE",
			headers: defaultHeader,
		})
		.then(async response => {
			const responseJson = await response.json().catch(() => null);
	
			if (response.ok) {
				insertAddItemButton(documentId, comparingSlot, dropdownUrl);

				toastr.success(responseJson.message, 'Success');
			} else {
				showErrors(responseJson);
			}
		});
	} else {
		insertAddItemButton(documentId, comparingSlot, dropdownUrl);
	}
}
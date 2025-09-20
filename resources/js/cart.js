'use strict';

window.storeCartItem = (productSellerID, quantity, url) => {
	let formData = new FormData();
    formData.append("productSellerID", productSellerID);
	formData.append("quantity", quantity);

	fetch(url, {
        method: "POST",
        headers: defaultHeader,
        body: formData
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            toastr.success(responseJson.message, "Success");
        } else {
            showErrors(responseJson);
        }
    });
}

window.updateArgumentForStoringCartItemInSellersPage = (id1, quantity, url) => {
	document.getElementById("i8_"+id1).innerHTML="<button type='button' class='btn btn-primary b97' onclick=\"storeCartItem("+id1+", "+quantity+", '"+url+"')\">Add to Cart</button>";
	document.getElementById("i9_"+id1).innerHTML="Qty: "+quantity+"<span class='caret'></span>";
}

window.updateArgumentForStoringCartItemInProductPage = (id1, quantity, cartItemsUrl, orderUrl) => {
	document.getElementById("i10").innerHTML="<button type='button' class='btn btn-primary b55' onclick=\"storeCartItem("+id1+", "+quantity+", '"+cartItemsUrl+"')\">Add to Cart</button>";
	document.getElementById("i12").innerHTML="<button type='button' class='btn btn-primary b56' onclick=\"storeOrder("+id1+", "+quantity+", '"+orderUrl+"')\">Buy Now</button>";
	document.getElementById("i11").innerHTML="Qty: "+quantity+"<span class='caret'></span>";
}

window.storeOrder = (productId, quantity, url) => {
	let formData = new FormData();
    formData.append("productId", productId);
	formData.append("quantity", quantity);

	fetch(url, {
        method: "POST",
        headers: defaultHeader,
        body: formData
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            toastr.success(responseJson.message, "Success");
        } else {
            showErrors(responseJson);
        }
    });
}

window.storeFromCart = (url) => {
	fetch(url, {
        method: "POST",
        headers: defaultHeader,
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

window.destroyFromCart = (url) => {
	fetch(url, {
        method: "DELETE",
        headers: defaultHeader,
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
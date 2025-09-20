'use strict';

window.storeProduct = (url) => {
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

window.createProductImage = (productId, url) => {
	document.getElementById("notification").innerHTML="<div style='margin-top: 30px; margin-bottom: 30px;'><center><p style='padding-bottom: 30px;'>Upload new photo</p><input type='file' id='fileselectInput' class='btn btn-warning' style='margin-bottom: 10px;'><button type='button' class='btn btn-success' onclick=\"storeProductImage(" + productId + ", '" + url + "')\" style='margin-right: 5px;'>Submit</button><button type='button' class='btn btn-info' onclick='hideNotification()'>Cancel</button>	</center></div>";
}

window.storeProductImage = (productId, url) => {
	let formData = new FormData();
	formData.append("productId", productId);
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

window.destroyProductImage = (url) => {
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

window.updateProductBrand = (productId, brandId, url) => {
	let formData = new FormData();
    formData.append("_method", 'PUT');
    formData.append("productId", productId);
	formData.append("brandId", brandId);

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

window.updateProductWithNewBrand = (productId, url) => {
	document.getElementById("i18").innerHTML="<form action='"+url+"' method='post'><input type='hidden' name='_token' value='"+CSRF_TOKEN+"'><input type='hidden' name='product_id' value="+productId+"><input type='text' name='name' class='form-control b79' placeholder='Brand Name' aria-describedby='basic-addon1' style='width: 50%;'><center><button type='submit' class='btn btn-success'>Save Brand</button></center></form>";
}

window.storeProductSummary = (url) => {
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

window.destroyProductSummary = (url) => {
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

window.updateProductDepartment = (productId, departmentId, url) => {
	let formData = new FormData();
    formData.append("_method", 'PUT');
    formData.append("productId", productId);
	formData.append("departmentId", departmentId);

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

window.createProductManufacturerImage = (productId, url) => {
	document.getElementById("notification").innerHTML="<div style='margin-top: 30px; margin-bottom: 30px;'><center><p style='padding-bottom: 30px;'>Upload new photo</p><input type='file' id='fileselectInput' class='btn btn-warning' style='margin-bottom: 10px;'><button type='button' class='btn btn-success' onclick=\"storeProductManufacturerImage(" + productId + ", '" + url + "')\" style='margin-right: 5px;'>Submit</button><button type='button' class='btn btn-info' onclick='hideNotification()'>Cancel</button>	</center></div>";
}

window.storeProductManufacturerImage = (productId, url) => {
	let formData = new FormData();
	formData.append("productId", productId);
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

window.destroyProductManufacturerImage = (url) => {
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

window.editProductSeller = (url) => {
	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById("notification").innerHTML = responseJson.content;
        } else {
            showErrors(responseJson);
        }
    });
}

window.destroyProductFaq = (url) => {
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
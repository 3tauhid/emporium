'use strict';

window.deactivateUser = (userId, url) => {
	let formData = new FormData();
    formData.append("_method", 'PUT');
    formData.append("userId", userId);

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

window.activateUser = (userId, url) => {
	let formData = new FormData();
    formData.append("_method", 'PUT');
    formData.append("userId", userId);

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
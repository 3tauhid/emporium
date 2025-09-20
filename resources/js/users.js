'use strict';

window.searchUser = (search, url) => {
    url += "?search=" + search;

	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById("user_search").innerHTML = responseJson.content;
        } else {
            showErrors(responseJson);
        }
    });
}

window.destroyUser = (url) => {
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
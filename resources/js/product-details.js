'use strict';

window.showProductImage = (url) => {
	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById("i4").innerHTML = responseJson.content;
        } else {
            showErrors(responseJson);
        }
    });
}

window.searchProductFaq = (url) => {
    url += "?search=" + document.getElementById("i22").value;

	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById("i23").innerHTML = responseJson.content;
        } else {
            showErrors(responseJson);
        }
    });
}

window.setRating = (rating) => {
	const stars = document.querySelectorAll('.review-input-star');

	for (let i = 0; i < stars.length; i++) {
		stars[i].classList.remove('glyphicon-star');
		stars[i].classList.add('glyphicon-star-empty');
	}
  
	for (let i = 0; i < rating; i++) {
		stars[i].classList.remove('glyphicon-star-empty');
		stars[i].classList.add('glyphicon-star');
	}

	document.getElementsByName("rating")[0].value = rating;
}

window.getSortedProductReviews = (sortingType, url) => {
	url += "?sortingType=" + sortingType;

	fetch(url, {
        method: "GET",
        headers: defaultHeader,
    })
    .then(async response => {
        const responseJson = await response.json().catch(() => null);

        if (response.ok) {
            document.getElementById("i32").innerHTML = responseJson.content;
			document.getElementById("i33").innerHTML = sortingType + " Reviews<span class='caret'></span>";
        } else {
            showErrors(responseJson);
        }
    });
}

window.createProductSeller = (url) => {
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
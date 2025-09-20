'use strict';

const convertAllUtcToLocal = () => {
    document.querySelectorAll(".utc-datetime").forEach((element) => {
        const utcTime = element.textContent.trim();

        const localTime = moment.utc(utcTime).local();

        element.textContent = localTime.format("YYYY-MM-DD h:mm A");

        element.classList.remove("utc-datetime");
    });
};

convertAllUtcToLocal();
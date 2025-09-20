'use strict';

window.resizeHeaderSearchInput = (selectInputName, textInputName) => {
	const select = document.getElementById(selectInputName);
	const input = document.getElementById(textInputName);
	
	function resizeSelect() {
		// measure text width
		const tempSpan = document.createElement("span");
		tempSpan.style.visibility = "hidden";
		tempSpan.style.whiteSpace = "nowrap";
		tempSpan.style.font = window.getComputedStyle(select).font;
		tempSpan.textContent = select.options[select.selectedIndex].text;
		document.body.appendChild(tempSpan);
	
		const extraSpace = 40; 
		const newSelectWidth = tempSpan.offsetWidth + extraSpace;
		tempSpan.remove();
	
		// Set select width
		select.style.width = newSelectWidth + "px";
	
		// Set input width as "100% minus select px"
		input.style.width = `calc(84% - ${newSelectWidth}px)`;
	}
	
	resizeSelect();
	select.addEventListener("change", resizeSelect);
	window.addEventListener("resize", resizeSelect); // keep it responsive
}

function copyText() {
	// Get the text field
	var copyText = document.querySelector("a.newlink");

	// Copy the text inside the text field
	navigator.clipboard.writeText(copyText.textContent);

	// Alert the copied text
	alert("Copied the text: " + copyText.textContent);

}

var inputText = document.getElementById("linkin");
var newlink = document.querySelector("a.newlink")
inputText.oninput = function () {
	let mainUrl ="http://localhost/locator/?link="
	newlink.textContent=mainUrl+inputText.value
	newlink.setAttribute("href",newlink.textContent)
}


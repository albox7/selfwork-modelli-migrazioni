
function randomColor() {
	const r = ('0' + Math.floor(Math.random() * 128).toString(16)).slice(-2);
	const g = ('0' + Math.floor(Math.random() * 128).toString(16)).slice(-2);
	const b = ('0' + Math.floor(Math.random() * 128).toString(16)).slice(-2);
	return `#${r}${g}${b}`;
}

document.addEventListener('DOMContentLoaded', function () {
	const homeCite = document.querySelector('blockquote.cite p');
	const quotes = document.querySelectorAll('.card h4');
	const divBG = document.querySelectorAll('.avatar');

	if (homeCite) {
		homeCite.style.color = randomColor();
	}
	if (quotes.length > 0) {
		quotes.forEach((quote, index) => {
			const color = randomColor();
			quote.style.color = color;
			if (divBG[index]) {
				divBG[index].style.backgroundColor = color;
			}
		});
	}
});
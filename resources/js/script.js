

function randomColor() {
	const r = ('0' + Math.floor(Math.random() * 128).toString(16)).slice(-2);
	const g = ('0' + Math.floor(Math.random() * 128).toString(16)).slice(-2);
	const b = ('0' + Math.floor(Math.random() * 128).toString(16)).slice(-2);
	return `#${r}${g}${b}`;
}

const homeCite = document.querySelector('blockquote.cite p');
const quotes = document.querySelectorAll('.card h4');

quotes.forEach(quote => {
	quote.style.color = randomColor();
});

homeCite.style.color = randomColor();


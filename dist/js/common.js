document.addEventListener('DOMContentLoaded', () => {

	// common toggle
	let toggleList = document.querySelectorAll('.toggle');
	toggleList.forEach(btnToggle => {
		btnToggle.addEventListener('click', () => {
			refers = event.target.dataset.refers;
			refers = refers.split(', ');
			refers.forEach(refer => {
				document.querySelector('.' + refer).classList.toggle('display-none');
				event.stopPropagation();
			});
		})
	});
});

document.addEventListener("DOMContentLoaded", function() {
	const modal = document.getElementById("loginModal");
	const openBtn = document.querySelector(".openModalBtn");
	const closeBtn = document.querySelector(".close");

	if(openBtn && modal && closeBtn) {
		openBtn.addEventListener("click", function() {
			modal.style.display = "block";
		});

		closeBtn.addEventListener("click", function () {
			modal.style.display = "none";
		});

		window.addEventListener("click", function(event) {
			if (event.target === modal) {
				modal.style.display = "none";
			}
		});

	}
});
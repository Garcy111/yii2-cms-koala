var options = {
	id: "top-progress-bar",
	color: "#f44336",
	height: "5px",
	duration: 0.2
};

var progressBar = new ToProgress(options);

var interval = setInterval(function(){
	progressBar.increase(10);
	var progress = progressBar.getProgress();
	if (progress === 90) {
		clearInterval(interval);
		progressBar.finish();
		var progElem = document.getElementById('top-progress-bar').style.display = 'none';
		document.querySelector('.hero.is-fullheight.hero-preload').style.display = 'none';
	}
}, 250);
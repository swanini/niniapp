// * hint: try clicking/tapping the `How to?`
// * anchor located at the top-right corner
window.addEventListener('load', () => {
	new Camera()
		.setOptimalPerspective()
		.with({
			debug: true,
			rotate: {
				speed: 1.2
			}
		})
		.init()
})
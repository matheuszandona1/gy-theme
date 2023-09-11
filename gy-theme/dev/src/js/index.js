$(".pr-operating__slider").slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	dots: true,
	prevArrow: $(".prev-arrow"),
	nextArrow: $(".next-arrow"),
	responsive: [
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1, //
			},
		},
	],
})
console.log("teste slisder")

$(document).ready(function () {
	// Verifica se a seção ".cases" está presente
	if ($(".cases").length) {
		$(".newsletter").css("margin-top", "-320px")
	} else {
		$(".newsletter").css("margin-top", "0")
	}
})

$(".hero-slider").slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	prevArrow: $(".prev-arrow"),
	nextArrow: $(".next-arrow"),
})

$(".clientes-slider").slick({
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 5,
	dots: true,
	prevArrow: $(".prev-arrow-clientes"),
	nextArrow: $(".next-arrow-clientes"),
	responsive: [
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: false,
			},
		},
	],
})

var isHovered = false

var paths = document.querySelectorAll("path[id]")
paths.forEach(function (path) {
	path.addEventListener("mouseenter", function () {
		if (path.id && !isHovered) {
			path.classList.add("st2", "st1")
			isHovered = true
		}
	})

	path.addEventListener("mouseleave", function () {
		if (path.id && isHovered) {
			path.classList.remove("st2")
			isHovered = false
		}
	})

	path.parentNode.parentNode.appendChild(image)

	image.addEventListener("click", function (event) {
		event.stopPropagation()
		var pathName = path.id
		var pathLink

		var tooltip = document.createElement("div")
		tooltip.className = "tooltipMap"

		var tooltipLink = document.createElement("a")
		tooltipLink.textContent = pathName
		tooltipLink.href = pathLink
		tooltip.appendChild(tooltipLink)

		document.body.appendChild(tooltip)

		var pathRect = path.getBoundingClientRect()
		tooltip.style.left = pathRect.left + pathRect.width / 2 - tooltip.offsetWidth / 2 + "px"
		tooltip.style.top = pathRect.top + pathRect.height / 2 - tooltip.offsetHeight / 2 + "px"
		tooltip.style.display = "block"
		tooltip.style.opacity = 1
		tooltip.style.position = "absolute"
		tooltip.style.color = "#fff"
	})
})

document.addEventListener("click", function (event) {
	var tooltip = document.querySelector(".tooltipMap")
	if (tooltip && !tooltip.contains(event.target)) {
		document.body.removeChild(tooltip)
	}
})

/* Fixed footer */
window.onload = function (e) {
	var offset = document.getElementsByClassName("header")[0].offsetTop
	var menu = document.getElementsByClassName("header")[0]

	document.addEventListener("scroll", function () {
		if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
			menu.style.position = "fixed"
			menu.style.background = "#fff"
		} else {
			menu.style.position = "relative"
			menu.style.background = "transparent"
		}
	})
}

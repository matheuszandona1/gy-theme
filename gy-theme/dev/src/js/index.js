$(".pr-operating__slider").slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	dots: true,
	prevArrow: $(".prev-arrow"),
	nextArrow: $(".next-arrow"),
})

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
})

var isHovered = false

var paths = document.querySelectorAll("path[id]")

paths.forEach(function (path) {
	path.addEventListener("mouseenter", function () {
		if (path.id && !isHovered) {
			path.classList.add("st2")
			isHovered = true
		}
	})

	path.addEventListener("mouseleave", function () {
		if (path.id && isHovered) {
			path.classList.remove("st2")
			isHovered = false
		}
	})

	var image = document.createElement("img")
	image.classList.add("pins")
	image.src = "http://greenyellow.local/wp-content/uploads/2023/07/PIN.png"
	image.style.position = "absolute"
	image.style.zIndex = "20"

	image.addEventListener(
		"load",
		function () {
			var pathRect = path.getBoundingClientRect()
			image.style.left = pathRect.left + pathRect.width / 2 - image.width / 2 + "px"
			image.style.top = pathRect.top + pathRect.height / 3 - image.height / 2 + "px"
		},
		false
	)

	path.parentNode.parentNode.appendChild(image)

	image.addEventListener("click", function (event) {
		event.stopPropagation()
		var pathName = path.id

		var pathLink
		if (path.id === "Brasil") {
			pathLink = "https://greenyellow.com.br/"
		} else if (path.id === "França") {
			pathLink = "https://fr.greenyellow.com/en"
		} else if (path.id === "Tailândia") {
			pathLink = "https://www.greenyellow.co.th/"
		} else if (path.id === "Colômbia") {
			pathLink = "https://www.greenyellow.co/"
		} else {
			pathLink = "https://exemplo.com/" + path.id
		}

		var tooltip = document.createElement("div")
		tooltip.className = "tooltipMap"

		var tooltipLink = document.createElement("a")
		tooltipLink.textContent = pathName
		tooltipLink.href = pathLink
		tooltip.appendChild(tooltipLink)

		document.body.appendChild(tooltip)

		tooltip.style.left = event.pageX + "px"
		tooltip.style.top = event.pageY - 15 - tooltip.offsetHeight + "px"
		tooltip.style.display = "block"
		tooltip.style.opacity = 1
		tooltip.style.position = "absolute"
		tooltip.style.color = "#fff"
	})

	document.addEventListener("click", function (event) {
		var tooltip = document.querySelector(".tooltip")
		if (tooltip && !tooltip.contains(event.target)) {
			document.body.removeChild(tooltip)
		}
	})
})

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
        var tooltip = document.createElement("div")
        tooltip.className = "tooltip"
        document.body.appendChild(tooltip)

        var tooltipText = document.createElement("div")
        tooltipText.id = "tooltipText"
        tooltip.appendChild(tooltipText)

        var tooltipLink = document.createElement("a")
        tooltipLink.id = "tooltipLink"
        tooltip.appendChild(tooltipLink)

        var image = document.createElement("img")
        image.src = "http://greenyellow.local/wp-content/uploads/2023/07/PIN.png"
        image.style.position = "absolute"
        image.style.zIndex = "20"

        image.addEventListener('load', function() {
            var pathRect = path.getBoundingClientRect()
            image.style.left = pathRect.left + pathRect.width / 2 - image.width / 2 + "px"
            image.style.top = pathRect.top + pathRect.height / 3 - image.height / 2 + "px"
        }, false);

        path.parentNode.appendChild(image)

        image.addEventListener("click", function (event) {
            event.stopPropagation()
            var pathName = path.id
            var pathLink = "https://exemplo.com/" + path.id

            document.getElementById("tooltipText").textContent = pathName
            document.getElementById("tooltipLink").textContent = "Ir para " + pathName
            document.getElementById("tooltipLink").href = pathLink

            tooltip.style.left = event.pageX + "px"
            tooltip.style.top = event.pageY - 15 - tooltip.offsetHeight + "px"
            tooltip.style.display = "block"
        });

        document.addEventListener("click", function (event) {
            if (!tooltip.contains(event.target)) {
                tooltip.style.display = "none"
            }
        });
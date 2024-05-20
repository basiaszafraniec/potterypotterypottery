<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zofia Bekisz Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .img1 {
            position: absolute;
        }

        .img1.active {
            transform: rotate(90);
        }
        section{
            min-height: 100vh;
            border-bottom: 2px solid black;
        }
    </style>
</head>

<body>
    <header></header>
    <section class="first_page"></section>
    <section class="my_story"></section>
    <section class="my_works"></section>
    <section class="contact"></section>
    <div class="basias_lil_test">
        <img class="img1" src="mug_left.png" alt="ink drawing of a hand holding a mug" id="mug_left">
        <img class="img1" src="mug_right.png" alt="ink drawing of a hand holding a mug" id="mug_right">

        <script>
            const cup = document.querySelector(".img1");

            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            // Create a new Intersection Observer
            const observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    // If element is in viewport, add the 'show' class to trigger the animation
                    if (entry.isIntersecting) {
                        cup.classList.add('active');
                    } else {
                        cup.classList.remove('active');
                    }
                });
            }, options);

            // Start observing the element
            observer.observe(cup);
        </script>
    </div>

</body>

</html>
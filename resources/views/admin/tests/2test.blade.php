<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightbox Example</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery img {
            width: 30%;
            margin: 5px;
            cursor: pointer;
        }

        .lightbox_container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .lightbox_container.show {
            display: flex;
        }

        .lightbox_item {
            max-width: 90%;
            max-height: 90%;
        }

        #close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .prev, .next {
            position: absolute;
            top: 50%;
            color: white;
            font-size: 30px;
            cursor: pointer;
            user-select: none;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    </style>
</head>
<body>

<div class="gallery">
    <img src="path/to/image1.jpg" class="lightbox-trigger" alt="Image 1">
    <img src="path/to/image2.jpg" class="lightbox-trigger" alt="Image 2">
    <img src="path/to/image3.jpg" class="lightbox-trigger" alt="Image 3">
</div>

<div class="lightbox_container">
    <span id="close">&times;</span>
    <img class="lightbox_item" src="" alt="">
    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
</div>

<script>
    const lightbox = document.querySelector('.lightbox_container');
    const btns = document.querySelectorAll('.lightbox-trigger');
    const close = document.getElementById('close');
    const lightboxImage = document.querySelector('.lightbox_item');

    btns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            lightboxImage.src = e.target.src;
            lightbox.classList.add('show');
        });
    });

    close.addEventListener('click', () => {
        lightbox.classList.remove('show');
    });
</script>

</body>
</html>
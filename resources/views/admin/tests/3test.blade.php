<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lightbox Example</title>
        <style>
            html, body {
                font-family: sans-serif;
                padding: 0 1em;
                font-size: 19px;
                background: #222;
                color: #aaa;
                text-align:center;
            }
            p {
                margin: 1.5em 0;
                color: #aaa;
            }
            img {
                max-height: 45vh;
            }
            a {
                color: inherit;
            }
            a:hover {
                color: #bbb;
            }
            .italic { font-style: italic; }
            .small { font-size: 0.8em; }
            .lightbox {
                display: none;
                position: fixed;
                z-index: 999;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 1em;
                background: #000000cc;
            }
            .lightbox:target {
                display: block;
            }
            .lightbox span {
                display: block;
                width: 100%;
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: contain;
            }
        </style>
    </head>
    <body>
        <p>Click the thumbnail below to activate the lightbox.</p>
        <a hrev="#img1">
            <img src ="https://picsum.photos/seed/9/500/300" alt="Thumbnail">
        </a>
        <a href="#" class="lightbox" id="img1">
            <span style="background-image: url('https://picsum.photos/seed/9/900/450')"></span>
        </a>
    </body>
</html>

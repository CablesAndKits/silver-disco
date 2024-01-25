<?php

// My pattern drawer class isn't working! Please help!

// 1. Fix the errors so the pattern will be displayed on the screen
// 2. If a width and height is passed it should not be random
// 3. If a no width and height is passed it should be random

class CoolPatternDrawer
{
    private function draw(?int $width, ?int $height): string
    {
        $canvasWidth = rand(300, 500);
        $canvasHeight = rand(300, 500);

        return <<<HTML
            <html>
            <head>
                <title>Cool Pattern</title>
            </head>
            <body>
                <canvas id='coolCanvas' width='$canvasWidth' height='$canvasHeight' style='border:1px solid #000;'></canvas>

                <script>
                    var canvas = document.getElementById('coolCanvas');
                    var ctx = canvas.getContext('2d');

                    // Draw a random geometric pattern
                    for (var i = 0; i < 100; i++) {
                        var x = Math.random() * $canvasWidth;
                        var y = Math.random() * $canvasHeight;
                        var size = Math.random() * 20;
                        var red = Math.floor(Math.random() * 256);
                        var green = Math.floor(Math.random() * 256);
                        var blue = Math.floor(Math.random() * 256);

                        ctx.fillStyle = 'rgb(' + red + ',' + green + ',' + blue + ')';
                        ctx.fillRect(x, y, size, size);
                    }
                </script>
            </body>
            </html>
        HTML;
    }
}

CoolPatternDrawer::draw(width: 300, height: 300);

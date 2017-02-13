<!DOCTYPE html>
<html>
<head>
    <title>Assignment 1</title>
    <meta charset="utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Coda" />
    <script src="js/bootstrap.min.js"></script>
</head>

<div class="container-fluid">
    <div id="helloworld">
        <div class="row">
            <div class="col-sm-8">
                <h1>John W. Lubinski</h1>
                <img class="img-responsive" src="images/IMG_3905.JPG" alt="me">
                <h1>About Me</h1>
                <p>I am a full time student taking this course following CSCI E-10 and CSCI E-50 (CS50) to solidify and build upon my knowledge of web application programming. I am hoping to apply and get into Harvard Extension School's ALB program following this semester.</p>
                <h1>Random Quote</h1>
                <blockquote>
                <?php
                    //array that serves as quote bank
                    $quotes =
                        [
                            'There is no such thing as inner peace. There is only nervousness or death. Any attempt to prove otherwise constitutes unacceptable behavior. -Fran Lebowitz',
                            'The first thing I do in the morning is brush my teeth and sharpen my tongue. -Dorothy Parker',
                            'If you want to know what God thinks of money, just look at the people he gave it to. -Dorothy Parker',
                            'Razors pain you,
                            Rivers are damp,
                            Acids stain you,
                            And drugs cause cramp.
                            Guns are not lawful,
                            Nooses give,
                            Gas smells awful.
                            You might as well live. -Dorothy Parker',
                            'In real life, I assure you, there is no such thing as algebra. -Fran Lebowitz',
                            'As a teenager you are at the last stage in your life when you will be happy to hear that the phone is for you. -Fran Lebowitz',
                            'There is always some madness in love. But there is also always some reason in madness. -Friedrich Nietzsche',
                            'The individual has always had to struggle to keep from being overwhelmed by the tribe. If you try it, you will be lonely often, and sometimes frightened. But no price is too high to pay for the privilege of owning yourself. -Friedrich Nietzsche',
                            'There are no facts, only interpretations. -Friedrich Nietzsche',
                            'I don\'t want to wait three years to get over something. -Justine Ly'
                        ];
                    //function to pull a single quote from quote bank
                    $rand_quote = array_rand($quotes, 1);
                    //returning random quote using array_rand function
                    echo $quotes[$rand_quote];
                ?>  
                </blockquote>
            </div>
        </div>
    </div>
</div>
</html>
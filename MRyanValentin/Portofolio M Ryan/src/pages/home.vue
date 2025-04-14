<template>
            <div class="container">
            <div class="layer layer1 active">
                <div class="home main">
                    <div class="canvas_container">
                        <canvas></canvas>
                    </div>
                    <div class="content-for-home">
                        <div class="img-container"></div>
                        <h1 align="center">M Ryan Bagus Valentin</h1>
                        <div class="social-icons">
                            <div class="s-icon">
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <div class="s-name">Facebook</div>
                            </div>
                            <div class="s-icon">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <div class="s-name">Tweeter</div>
                            </div>
                            <div class="s-icon">
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                                <div class="s-name">GitHub</div>
                            </div>
                            <div class="s-icon">
                                <a href="#">
                                    <i class="fab fa-codepen"></i>
                                </a>
                                <div class="s-name">CodePen</div>
                            </div>
                            <div class="s-icon">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <div class="s-name">Instagram</div>
                            </div>
                            <div class="s-icon">
                                <a href="#">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <div class="s-name">Email</div>
                            </div>
                        </div>

                        <div class="side-nav">
                            <button
                                onclick="about(); animate3.play(); animate4.play();">
                                <span class="w">W</span>
                                <span class="tooltip"> why you? </span>
                            </button>
                            <button onclick="services(); animate6.play();">
                                <span class="w">W</span>
                                <span class="tooltip"> what do you do? </span>
                            </button>
                            <button onclick="portfolio()">
                                <span class="w">W</span>
                                <span class="tooltip">
                                    what have you done?
                                </span>
                            </button>
                            <button onclick="comments()">
                                <span class="w">W</span>
                                <span class="tooltip"> what others say? </span>
                            </button>
                            <button onclick="contact(); animate5.play()">
                                <span class="w">W</span>
                                <span class="tooltip"> where are you? </span>
                            </button>
                        </div>

                        <div class="titles-for-side-nav">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>
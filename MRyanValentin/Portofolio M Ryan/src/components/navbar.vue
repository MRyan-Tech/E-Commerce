<template>
            <!-- THE REAL NAVIGATION -->
            <nav class="navigation">
            <h1>
                M Ryan
                <div></div>
                <div></div>
            </h1>
            <ul>
                <li><a href="#" onclick="home()">home</a></li>
                <li>
                    <a
                        href="#"
                        onclick="about(); animate3.play(); animate4.play();"
                        >about</a
                    >
                </li>
                <li>
                    <a href="#" onclick="services(); animate6.play();"
                        >services</a
                    >
                </li>
                <li><a href="#" onclick="portfolio()">portfolio</a></li>
                <li><a href="#" onclick="comments()">comments</a></li>
                <li>
                    <a href="#" onclick="contact(); animate5.play()">contact</a>
                </li>
            </ul>
            <p>
                &copy; 2025
                <a
                    href="https://github.com/shu-vro"
                    target="_blank"
                    rel="noopener noreferrer"
                    >M Ryan Bagus V</a
                >.
            </p>
        </nav>
</template>

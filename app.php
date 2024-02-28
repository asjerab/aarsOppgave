<?php
session_start()
    ?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ced2e054c6.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="app-res-menu" id="res-menu">
        <div class="res-menu-nav">
            <h1>Settings</h1>
            <svg id="close-menu" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                fill="none">
                <path
                    d="M13.552 12.8232C13.6026 12.8704 13.6432 12.9273 13.6714 12.9906C13.6996 13.0538 13.7148 13.1221 13.716 13.1913C13.7172 13.2606 13.7045 13.3293 13.6785 13.3936C13.6526 13.4578 13.614 13.5161 13.565 13.565C13.5161 13.614 13.4578 13.6526 13.3936 13.6785C13.3293 13.7045 13.2606 13.7172 13.1913 13.716C13.1221 13.7148 13.0538 13.6996 12.9906 13.6714C12.9273 13.6432 12.8704 13.6026 12.8232 13.552L7.00008 7.72969L1.17695 13.552C1.07921 13.643 0.949925 13.6926 0.816343 13.6903C0.682761 13.6879 0.555309 13.6338 0.460837 13.5393C0.366366 13.4448 0.312252 13.3174 0.309895 13.1838C0.307538 13.0502 0.357122 12.9209 0.448202 12.8232L6.27047 7.00008L0.448202 1.17695C0.357122 1.07921 0.307538 0.949925 0.309895 0.816343C0.312252 0.682761 0.366366 0.555309 0.460837 0.460837C0.555309 0.366366 0.682761 0.312252 0.816343 0.309895C0.949925 0.307538 1.07921 0.357122 1.17695 0.448202L7.00008 6.27047L12.8232 0.448202C12.9209 0.357122 13.0502 0.307538 13.1838 0.309895C13.3174 0.312252 13.4448 0.366366 13.5393 0.460837C13.6338 0.555309 13.6879 0.682761 13.6903 0.816343C13.6926 0.949925 13.643 1.07921 13.552 1.17695L7.72969 7.00008L13.552 12.8232Z"
                    fill="white" />
            </svg>
        </div>
        <div class="app-res-menu-links">
            <a href="reset.php">Reset password <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_130_7)">
                        <path
                            d="M6.04598 11.6769C6.88355 10.262 8.16287 9.16148 9.68709 8.54481C11.2113 7.92813 12.8959 7.82943 14.4817 8.2639C16.0675 8.69836 17.4666 9.64191 18.4637 10.9493C19.4608 12.2568 20.0005 13.8556 20 15.4999C20 15.7651 20.1053 16.0195 20.2929 16.207C20.4804 16.3945 20.7348 16.4999 21 16.4999C21.2652 16.4999 21.5196 16.3945 21.7071 16.207C21.8946 16.0195 22 15.7651 22 15.4999C22.0001 13.4886 21.3619 11.5292 20.1773 9.90382C18.9927 8.27844 17.3227 7.07097 15.408 6.4553C13.4933 5.83963 11.4326 5.84754 9.52265 6.47788C7.61271 7.10822 5.9521 8.32846 4.77998 9.96288L4.24298 6.91788C4.19697 6.65664 4.04906 6.42438 3.8318 6.2722C3.61454 6.12001 3.34572 6.06036 3.08448 6.10638C2.82324 6.15239 2.59098 6.3003 2.4388 6.51756C2.28661 6.73482 2.22697 7.00364 2.27298 7.26488L3.31498 13.1739C3.36135 13.435 3.50955 13.667 3.72698 13.8189C3.86867 13.9139 4.03052 13.9747 4.19974 13.9963C4.36896 14.018 4.5409 14.0001 4.70198 13.9439L10.382 12.9429C10.6432 12.8969 10.8755 12.749 11.0277 12.5317C11.1798 12.3144 11.2395 12.0456 11.1935 11.7844C11.1475 11.5231 10.9996 11.2909 10.7823 11.1387C10.565 10.9865 10.2962 10.9269 10.035 10.9729L6.04598 11.6769Z"
                            fill="#F8F8F8" />
                    </g>
                    <defs>
                        <clipPath id="clip0_130_7">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg></a>
        </div>

        <?php
        if (isset($_POST['logout'])) {
            session_unset();
            session_destroy();
            header("Location: login.php"); // Redirect to the login page after logout
            exit();
        }
        ?>
        <div class="logout-button-div">
            <form method="post">
                <button class="logout-button" name="logout">Logout</button>
            </form>
        </div>
    </div>

    <div class="app-nav">
        <h1>
            Welcome,
            <?php echo $_SESSION['username']; ?>
        </h1>
        <svg id="open-menu" xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17" fill="none">
            <rect width="26" height="2" rx="1" fill="white" />
            <rect x="3" y="7" width="26" height="2" rx="1" fill="white" />
            <rect y="15" width="26" height="2" rx="1" fill="white" />
        </svg>
    </div>
    <div class="app-search-bar">
        <input type="text" placeholder="Search..." spellcheck="false">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>

    <div class="weather-container">
        <div class="weather">
            <h1 class="temp">22°C</h1>
            <h2 class="city">San Francisco</h2>
        </div>
    </div>

        <div class="details">
            <div class="col">
                <img src="images/humidity.png" alt="">
                <div class="col-info">
                    <p class="humidity">50 %</p>
                    <p>humidity</p>
                </div>
            </div>

            <div class="col">
                <img src="images/wind.png" alt="">
                <div class="col-info">
                    <p class="wind">15 km/h</p>
                    <p class="humidity">Wind Speed</p>
                </div>

            </div>
        </div>



    <script>
        const apiKey = "01237c1b51c19425bec2afb5828795da";
        const apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=";

        const searchBox = document.querySelector(".app-search-bar input");
        const searchBtn = document.querySelector(".app-search-bar i");

        async function checkWeather(city) {
            const response = await fetch(apiUrl + city + `&appid=${apiKey}`);
            var data = await response.json();

            console.log(data);

            document.querySelector(".city").innerHTML = data.name;
            document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°C";
            document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
            document.querySelector(".wind").innerHTML = data.wind.speed + " km/h";
        }

        searchBtn.addEventListener("click", () => {
            checkWeather(searchBox.value);
        });

        checkWeather();

    </script>


</body>

</html>
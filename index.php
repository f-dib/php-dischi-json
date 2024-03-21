<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    

    <div id="app">
        <div class="my_nav p-1">
            <div class="container-xxl h-100">
                <div class="d-flex align-items-center h-100">
                    <div class="my_logo">
                        <img class="img-fluid" src="./img/logo-spotify.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="my_list py-5">
            <div class="container-xxl h-100">
                <div class="row px-5">
                    <div v-for="(currentDisc, index) in discList" class="col-4 mb-4">
                        <div class="card my_card d-flex flex-column align-items-center text-white" @click="openPopup(index)">
                            <img class="card-img-top" :src="currentDisc.poster" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ currentDisc.title }}</h5>
                                <p class="card-text">{{ currentDisc.author }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="showPopup" class="popup d-flex justify-content-center align-items-center">
                <div class="my_bg d-flex flex-column align-items-center p-3 text-white">
                    <div class="align-self-end mb-3" @click="closePopup()"><i class="fa-solid fa-x"></i></div>
                    <div class="card my_card2 d-flex flex-column align-items-center text-white">
                            <img class="card-img-top my_img" :src="singleDisc.poster" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ singleDisc.title }}</h5>
                                <p class="card-text">{{ singleDisc.author }}</p>
                                <p class="card-text">{{ singleDisc.year }}</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
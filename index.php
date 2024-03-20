<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>

    
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
        <div class="my_list py-5 position-relative">
            <div class="container-xxl h-100">
                <div class="row">
                    <div v-for="(currentDisc, index) in discList" class="col-4">
                        <div class="card bg-primary d-flex flex-column align-items-center p-3 text-white" @click="openPopup(index)">
                            <div class="my_album mb-3">
                                <img class="img-fluid" :src="currentDisc.poster" alt="">
                            </div>
                            <h5>{{ currentDisc.title }}</h5>
                            <div>{{ currentDisc.author }}</div>
                            <div>{{ currentDisc.year }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="showPopup" class="popup d-flex justify-content-center align-items-center fixed-center bg-transparent" @click="closePopup()">
                <div class="card bg-black d-flex flex-column align-items-center p-5 text-white">
                    <div class="my_album mb-3">
                        <img class="img-fluid" :src="singleDisc.poster" alt="">
                    </div>
                    <h5>{{ singleDisc.title }}</h5>
                    <div>{{ singleDisc.author }}</div>
                    <div>{{ singleDisc.year }}</div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
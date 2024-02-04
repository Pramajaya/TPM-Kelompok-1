<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackthon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Fonts -->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
    <!-- CSS -->

</head>

<body>

    <main class="p-20">
            <div class="flex flex-col justify-center align-center ">
                <h1 class="text-4xl text-center text-white mb-10">Lorem Ipsum Dolor Sit</h1>
                <div class="flex gap-5">
                    <div class="h-fit border border-primary rounded-2xl bg-gray p-10 text-white">
                        <table cellpadding="7">
                            <tr>
                                <td>Full Name</td>
                                <td>:</td>
                                <td>John Doe</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>johndoe@mail.com</td>
                            </tr>
                            <tr>
                                <td>Birth Place</td>
                                <td>:</td>
                                <td>Jakarta, Indonesia</td>
                            </tr>
                            <tr>
                                <td>Birth Date</td>
                                <td>:</td>
                                <td>01-01-2000</td>
                            </tr>
                            <tr>
                                <td>LINE ID</td>
                                <td>:</td>
                                <td>johndoe123</td>
                            </tr>
                            <tr>
                                <td>Github/Gitlab ID</td>
                                <td>:</td>
                                <td>johndoe123</td>
                            </tr>
                            <tr>
                                <td>Whatsapp Number</td>
                                <td>:</td>
                                <td>081234567890</td>
                            </tr>
                            <tr>
                                <td>Curriculum vitae</td>
                                <td>:</td>
                                <td><button onclick="openCV()" class="btn-primary-outline">Click to view</button></td>
                            </tr>
                            <tr>
                                <td>ID Card/Flazz Card</td>
                                <td>:</td>
                                <td><button onclick="openCard()" class="btn-primary-outline">Click to view</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="hidden" id="cv">
                        <div class="flex justify-end align-center bg-primary p-2">
                            <button class="btn-none" onclick="closeCV()">
                                <ion-icon name="close" class="text-2xl text-white"></ion-icon>
                            </button>
                        </div>
                        <img src="./assets/img/cv.png" alt="">
                    </div>
                    <div class="hidden" id="card">
                        <div class="flex justify-end align-center bg-primary p-2">
                            <button class="btn-none" onclick="closeCard()">
                                <ion-icon name="close" class="text-2xl text-white"></ion-icon>
                            </button>
                        </div>
                        <img src="./assets/img/card.png" alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-start mt-10">
                <h3 class="text-white">Contact Person:</h3>
                <span class="text-white flex align-center gap-2">
                    <ion-icon name="logo-whatsapp" class="text-2xl"></ion-icon>
                    081234567890 - John Doe
                </span>
            </div>
    </main>

    <!-- JS -->

    <!-- IonIcon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- IonIcon -->

    <script src="assets/js/dashboard.js"></script>
    <!-- JS -->
</body>

</html>

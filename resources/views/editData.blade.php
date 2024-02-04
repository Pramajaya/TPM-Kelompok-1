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
    <header class="fixed w-full">
        <nav class="flex justify-between align-center bg-primary p-3">
            <div></div>
            <h1 class="uppercase text-white text-3xl">Registration</h1>
            <a href="#" class="flex align-center text-white"><ion-icon name="close" class="text-4xl"></ion-icon></a>
        </nav>
    </header>
    <form action="{{ route('update', $hack->id) }}" method="POST">>
    @csrf

    <main class="p-20">
        <div class="flex flex-col mb-20 mt-10">

            <h1 class="text-white text-3xl mb-5">1. Informasi Group</h1>
            <div class="grid grid-cols-2 gap-20 mt-5">
                <div>
                    <div class="flex flex-col gap-5">

                            <div class="flex flex-col gap-2">
                                <label for="" class="text-white font-semibold">Nama Group:</label>
                                <input value="{{old('username')}}" type="text" class="input" name="username">
                                @error('username')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="" class="text-white font-semibold">Password:</label>
                                <input value="{{old('password')}}" type="text" class="input" id="check-password" name="password">
                                @error('username')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="" class="text-white font-semibold">Confirm Password:</label>
                                <input type="text" class="input" id="match-password">
                                @if ($errors->has('password'))
                                    <i class="text-red" id="confirm-password-error"></i>
                                @endif

                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="" class="text-white font-semibold">Status:</label>
                                <select name="" id="" class="select" name="identity_name">
                                        <option value="" disabled selected></option>
                                    @foreach ($identity as $i)
                                        <option value="{{$i->id}}">{{$i->identity_name}}</option>
                                    @endforeach
                                </select>
                                @error('identity_name')
                                    <span class="text-red">{{ $message }}</span>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="rounded-xl bg-white p-2 w-fit h-fit mt-8">
                        <div class="flex flex-col gap-5 p-10">
                            <span class="flex gap-5 align-center" id="status-1">
                                <ion-icon name="close" class="text-2xl"></ion-icon>
                                Minimum 8 characters
                            </span>
                            <span class="flex gap-5 align-center" id="status-2">
                                <ion-icon name="close" class="text-2xl"></ion-icon>
                                Must have uppercase letters
                            </span>
                            <span class="flex gap-5 align-center" id="status-3">
                                <ion-icon name="close" class="text-2xl"></ion-icon>
                                Must have lowercase letters
                            </span>
                            <span class="flex gap-5 align-center" id="status-4">
                                <ion-icon name="close" class="text-2xl"></ion-icon>
                                Must have numbers
                            </span>
                            <span class="flex gap-5 align-center" id="status-5">
                                <ion-icon name="close" class="text-2xl"></ion-icon>
                                Must have special characters
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
            <h1 class="text-white text-3xl mb-5">2. Informasi Leader</h1>
            <div class="grid grid-cols-2 gap-20 mt-5">
                    <div>
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-col gap-2">
                                <label for="" class="text-white font-semibold">Full name:</label>
                                <input value="{{old('nama_ketua')}}" type="text" class="input" name="nama_ketua">
                                    @error('nama_ketua')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Email:</label>
                                    <input value="{{old('email')}}" type="email" class="input" name="email">
                                    @error('email')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Github/Gitlab ID:</label>
                                    <input value="{{old('id_github')}}" type="text" class="input" name="id_github">
                                    @error('id_github')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Birth Date:</label>
                                    <input value="{{old('tanggal_lahir_ketua')}}" type="date" class="input" name="tanggal_lahir_ketua">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Upload CV:</label>
                                    <button class="btn-white w-fit px-5 flex align-center gap-5 text-dark"
                                        onclick="showAlert(this)" id="btn-cv" name="cv">
                                        <img src="./assets/icon/upload.svg" alt="icon-upload" width="25" id="upload-icon">
                                        Upload File
                                    </button>
                                    @error('cv')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Upload Flazz Card(Binusian):</label>
                                    <button class="btn-white w-fit px-5 flex align-center gap-5 text-dark"
                                        onclick="showAlert(this)" id="btn-flazz" name="id_card">
                                        <img src="./assets/icon/upload.svg" alt="icon-upload" width="25" id="upload-icon">
                                        Upload File
                                    </button>
                                    @error('id_card')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Upload ID Card(Non-Binusian):</label>
                                    <button type="file" class="btn-white w-fit px-5 flex align-center gap-5 text-dark"
                                        onclick="showAlert(this)" id="btn-id" name="id_card">
                                        <img src="./assets/icon/upload.svg" alt="icon-upload" width="25" id="upload-icon">
                                        Upload File
                                    </button>
                                    @error('id_card')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>

                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col gap-5">


                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">LINE ID:</label>
                                    <input value="{{old('id_line')}}" type="text" class="input" name="id_line">
                                    @error('id_line')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Whatsapp Number:</label>
                                    <input value="{{old('nomor_whatsapp')}}" type="text" class="input" name="nomor_whatsapp">
                                    @error('nomor_whatsapp')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="" class="text-white font-semibold">Birth Place</label>
                                    <select name="" id="" class="select" name="birthplace_name">
                                            <option value="" selected disabled></option>
                                        @foreach ($birthplaces as $b)
                                            <option value="{{$b->id}}">{{$b->birthplace_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('birthplace_name')
                                        <span class="text-red">{{ $message }}</span>
                                    @enderror
                                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-20">
                <button type="submit" class="btn-primary">Submit</button>
        </div>
    </form>
    </main>

    <!-- JS -->

    <!-- IonIcon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- IonIcon -->

    <script src="assets/js/register.js"></script>
    <!-- JS -->
</body>

</html>

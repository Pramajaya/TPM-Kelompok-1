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
    <link rel="stylesheet" href="{{ asset('assets/css/global.css')}}">
    <!-- CSS -->

</head>

<body>
    <header class="w-full">
        <nav class="flex flex-wrap justify-between align-center py-4 px-20 gap-20">
            <select name="sort" id="sort" class="select-transparent text-white">
                <option value="" selected disabled>SORT BY</option>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
            <div class="w-full h-fit relative">
                <input type="search" id="search-key" class="w-full input pl-10">
                <ion-icon name="search-outline" class="absolute top-1/4 bottom-0 left-10 text-dark text-xl"></ion-icon>
            </div>
        </nav>
    </header>
    <main class="p-20">
        <div class="grid grid-cols-1 gap-5" id="data">
            <div id="item">
                <div class="bg-gray flex justify-between align-center p-5">
                    <h3 class="text-white" id="item-name">Lorem ipsum</h3>
                    <div class="flex align-center gap-5">
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-detail-1')">
                            <ion-icon name="eye-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-edit-1')">
                            <ion-icon name="create-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none">
                            <ion-icon name="trash-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                    </div>
                </div>

                <div class="hidden bg-white p-5" id="dropdown-detail-1">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hidden bg-white p-5" id="dropdown-edit-1">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 1
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 2
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item">
                <div class="bg-gray flex justify-between align-center p-5">
                    <h3 class="text-white" id="item-name">John</h3>
                    <div class="flex align-center gap-5">
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-detail-2')">
                            <ion-icon name="eye-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-edit-2')">
                            <ion-icon name="create-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none">
                            <ion-icon name="trash-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                    </div>
                </div>

                <div class="hidden bg-white p-5" id="dropdown-detail-2">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hidden bg-white p-5" id="dropdown-edit-2">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 1
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 2
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item">
                <div class="bg-gray flex justify-between align-center p-5">
                    <h3 class="text-white" id="item-name">Valentina</h3>
                    <div class="flex align-center gap-5">
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-detail-3')">
                            <ion-icon name="eye-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-edit-3')">
                            <ion-icon name="create-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none">
                            <ion-icon name="trash-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                    </div>
                </div>

                <div class="hidden bg-white p-5" id="dropdown-detail-3">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hidden bg-white p-5" id="dropdown-edit-3">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 1
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 2
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item">
                <div class="bg-gray flex justify-between align-center p-5">
                    <h3 class="text-white" id="item-name">Bruyne</h3>
                    <div class="flex align-center gap-5">
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-detail-4')">
                            <ion-icon name="eye-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none" onclick="toggleDropdown(this, 'dropdown-edit-4')">
                            <ion-icon name="create-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                        <button class="flex align-center btn-none">
                            <ion-icon name="trash-outline" class="text-white text-3xl"></ion-icon>
                        </button>
                    </div>
                </div>

                <div class="hidden bg-white p-5" id="dropdown-detail-4">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="w-full flex justify-between custom-button-dropdown"
                                onclick="toggleDropdown2(this)">
                                Member 1
                                <ion-icon name="chevron-down" class="text-2xl"></ion-icon>
                            </button>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hidden bg-white p-5" id="dropdown-edit-4">
                    <div class="grid grid-cols-2 gap-10 border-2 border-primary p-5">
                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 1
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="w-full flex justify-between custom-button-dropdown">
                                Member 2
                                <div class="flex align-center" id="edit-close">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="create" class="text-2xl"></ion-icon>
                                    </button>
                                    <button class="btn-none">
                                        <ion-icon name="trash" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                                <div class="hidden align-center" id="edit-open">
                                    <button class="btn-none" onclick="toggleDropdownEdit(this)">
                                        <ion-icon name="cloud-done" class="text-2xl"></ion-icon>
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-content border-2 border-dark-gray rounded-xl">
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- JS -->

    <!-- IonIcon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- IonIcon -->

    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- JS -->
</body>

</html>

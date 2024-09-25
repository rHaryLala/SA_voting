<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Association</title>
    <base href="{{asset('public')}}">
    <link rel="shortcut icon" href="Logo_SA.png">
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-gray-900">
<div class="relative w-full">
    <nav class="absolute w-full">
        <div class="container m-auto px-6 md:px-12 lg:px-7">
            <div class="flex flex-wrap items-center justify-between py-6 gap-6 md:py-4 md:gap-0 relative">
                <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                <div class="w-full flex justify-between md:w-max md:px-0">
                    <a href="{{route('acceuil')}}" aria-label="logo">
                        <img src="Logo_SA.png" class="w-36 grayscale dark:contrast-50 contrast-200" alt="SA logo" width="144" height="68">
                    </a>

                    <div class="flex items-center md:hidden max-h-10">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative z-40 px-2 py-3 sm:-mr-6">
                            <div id="line"
                                 class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                            <div id="line2"
                                 class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                            </div>
                        </label>
                    </div>
                </div>

                <label role="button" for="toggle_nav" class="fixed w-full z-30 h-full top-0 left-0 bg-gray-700 bg-opacity-40 hidden peer-checked:block md:peer-checked:hidden"></label>

                <div class="flex z-50 flex-col md:flex-row justify-between
                    items-center gap-y-4 p-6 bg-white dark:bg-gray-800 md:w-8/12
                    md:gap-y-4 md:p-0
                    md:bg-transparent lg:w-7/12 fixed top-0 -left-full transition-all duration-500 peer-checked:left-0 max-w-sm h-full
                    md:left-0 md:h-auto w-4/5 md:max-w-none md:relative lg:first-letter:top-0">
                    <div class="flex md:hidden w-full pb-5">
                        <a href="#" aria-label="logo">
                            <img src="Logo_SA.png" class="w-36 grayscale contrast-200" alt="SA logo" width="144" height="68">
                        </a>
                    </div>
                    <div class="block w-full h-full md:h-auto">
                        <ul class="space-y-8 tracking-wide font-medium md:flex md:space-y-0">
                            <li>
                                <a href="{{route('acceuil')}}" class="block md:px-3">
                                    <div class="relative text-yellow-800 dark:text-yellow-300
                                                    before:absolute before:-inset-2 before:w-full before:h-0.5 before:origin-left dark:before:bg-yelloe-500 before:mx-auto before:mt-auto before:rounded-full before:bg-yellow-800">
                                        <span>Acceuil</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-3 group">
                                    <div class="relative text-gray-600
                                                    before:absolute before:-inset-2 before:w-full before:h-0.5 before:origin-left dark:before:bg-yelloe-500 before:mx-auto before:mt-auto before:rounded-full before:bg-yellow-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                        <span class="transition group-hover:text-yellow-700 dark:text-gray-300 dark:group-hover:text-yellow-300">Résultat</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="block md:px-3 group">
                                    <div class="relative text-gray-600
                                                    before:absolute before:-inset-2 before:w-full before:h-0.5 before:origin-left dark:before:bg-yelloe-500 before:mx-auto before:mt-auto before:rounded-full before:bg-yellow-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                        <span class="transition group-hover:text-yellow-700 dark:text-gray-300 dark:group-hover:text-yellow-300">À propos</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full gap-y-4 md:w-max md:gap-y-0 md:gap-x-4 flex md:flex-row flex-col">
                        <button type="button" title="Viens voir ! 😁" class="group w-full py-3 px-6 text-center transition dark:active:bg-yellow-800 dark:focus:bg-yellow-900 active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                                <span class="block text-gray-700 dark:text-gray-300 font-semibold group-focus:text-yellow-700 dark:group-focus:text-yellow-100">
                                    Actualités
                                </span>
                        </button>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" title="Tu pars déjà ? ☹️" class="w-full py-3 px-6 text-center transition dark:bg-gray-700 bg-gray-900 hover:bg-gray-800 active:bg-gray-700 focus:bg-gray-800 md:w-max">
                                <span class="block text-white font-semibold">
                                    Déconnexion
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="min-h-screen flex">
        <div class="container m-auto px-6 py-40 md:px-12 lg:py-0 lg:px-7">
            <div class="flex items-center flex-wrap gap-12 lg:gap-0">
                <div class="lg:w-5/12 space-y-8">
                        <span class="flex space-x-2">
                            <span class="block w-14 mb-2 border-b-2 border-gray-600"></span>
                            <span class="font-medium text-gray-600 dark:text-gray-400">Université Adventiste Zurcher</span>
                        </span>
                    <h1 class="text-4xl font-bold md:text-6xl dark:text-white">S'unir <br> Pour Réussir</h1>
                    <p class="text-xl text-gray-700 dark:text-gray-300">Association des étudiants de l'UAZ</p>

                    <div class="flex space-x-4">
                        <button type="button" onclick="window.location='{{ route('vote') }}'" class="w-full py-3 px-6 text-center transition bg-gray-900 dark:bg-gray-700 hover:bg-gray-800 active:bg-gray-700 focus:bg-gray-800 sm:w-max">
                            <span class="block text-white font-semibold">Voter</span>
                        </button>

                        <button type="button" onclick="window.location='{{ route('candidat') }}'" class="group w-full py-3 px-6 text-center transition dark:active:bg-yellow-800 dark:focus:bg-yellow-400 active:bg-yellow-400 focus:bg-yellow-100 sm:w-max">
                                <span class="block text-gray-700 dark:text-white font-semibold group-focus:text-yellow-700 dark:group-focus:text-yellow-100">
                                    Voir Candidats
                                </span>
                        </button>
                    </div>
                </div>

                <div class="hidden relative md:block lg:w-7/12">
                    <div aria-hidden="true" class="absolute inset-0 m-auto w-[30rem] h-[30rem] rounded-full bg-yellow-200">

                    </div>
                    <img src="images/_INS5910.jpg" class="relative ml-auto rounded-full w-1/2" alt="hero photo">
                </div>
            </div>
        </div>
        <div class="absolute bottom-8 w-full">
            <div class="container m-auto px-6 flex items-end justify-between md:px-12 lg:px-7">
                <a href="https://www.facebook.com/hary.rabenamana/" class="hidden space-x-4 md:flex md:items-center">
                    <img class="w-14 h-14 rounded-full object-cover" src="images/qw.png" alt="">
                    <div class="text-gray-600 dark:text-gray-400">
                        <span class="text-sm">Question ?</span>
                        <p class="font-semibold text-gray-700 dark:text-gray-300">Contactez-nous</p>
                    </div>
                </a>
                <div>
                    <a href="https://www.facebook.com/uazsambaina" target="_blank" class="hover:text-yellow-700 dark:text-gray-300 dark:hover:text-red-400">Facebook /</a>
                    <a href="https://www.youtube.com/@uaz-universiteadventistezu6053" target="_blank" class="hover:text-yellow-700 dark:text-gray-300 dark:hover:text-red-400">Instagram / </a>
                    <a href="https://www.youtube.com/@uaz-universiteadventistezu6053" target="_blank" class="hover:text-yellow-700 dark:text-gray-300 dark:hover:text-red-400">Youtube</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

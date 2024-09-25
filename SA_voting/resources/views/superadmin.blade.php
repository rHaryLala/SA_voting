<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Association</title>
    <base href="{{asset('public')}}">
    <link rel="shortcut icon" href="Logo_SA.png">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-gray-900">
@extends('layouts.aside')
<div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="sticky top-0 h-16 border-b bg-white dark:bg-gray-800 dark:border-gray-700 lg:py-2.5">
        <div class="flex items-center justify-between space-x-4 px-6 2xl:container">
            <h5 hidden class="text-2xl font-medium text-gray-600 lg:block dark:text-white">Tableau de bord</h5>
            <button class="-mr-2 h-16 w-12 border-r lg:hidden dark:border-gray-700 dark:text-gray-300">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="my-auto h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>
            <div class="flex space-x-4">
                <!--search bar -->
                <div hidden class="md:block">
                    <div class="relative flex items-center text-gray-400 focus-within:text-cyan-400">
              <span class="absolute left-4 flex h-6 items-center border-r border-gray-300 pr-3 dark:border-gray-700">
                <svg
                    xmlns="http://ww50w3.org/2000/svg"
                    class="w-4 fill-current"
                    viewBox="0 0 35.997 36.004"
                >
                  <path
                      id="Icon_awesome-search"
                      data-name="search"
                      d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"
                  ></path>
                </svg>
              </span>
                        <input
                            type="search"
                            name="leadingIcon"
                            id="leadingIcon"
                            placeholder="Search here"
                            class="outline-none w-full rounded-xl border border-gray-300 py-2.5 pl-14 pr-4 text-sm text-gray-600 transition focus:border-cyan-300 dark:bg-gray-900 dark:border-gray-700"
                        />
                    </div>
                </div>
                <!--/search bar -->
                <button
                    aria-label="search"
                    class="h-10 w-10 rounded-xl border bg-gray-100 active:bg-gray-200 md:hidden dark:bg-gray-700 dark:border-gray-600 dark:active:bg-gray-800"
                >
                    <svg
                        xmlns="http://ww50w3.org/2000/svg"
                        class="mx-auto w-4 fill-current text-gray-600 dark:text-gray-300"
                        viewBox="0 0 35.997 36.004"
                    >
                        <path
                            id="Icon_awesome-search"
                            data-name="search"
                            d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"
                        ></path>
                    </svg>
                </button>
                <button
                    aria-label="chat"
                    class="h-10 w-10 rounded-xl border bg-gray-100 active:bg-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:active:bg-gray-800"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="m-auto h-5 w-5 text-gray-600 dark:text-gray-300"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
                        />
                    </svg>
                </button>
                <button
                    aria-label="notification"
                    class="h-10 w-10 rounded-xl border bg-gray-100 active:bg-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:active:bg-gray-800"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="m-auto h-5 w-5 text-gray-600 dark:text-gray-300"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="px-6 pt-6 2xl:container">
        <!-- Main Content -->
        <main class="flex-1 p-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

                <!-- Carte 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <!-- SVG Icon d'utilisateur -->
                        <svg class="w-24 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-4.418 0-8 3.582-8 8h16c0-4.418-3.582-8-8-8zm0-2a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                        <div class="ml-4">
                            <h2 class="text-xl font-semibold text-gray-800">Utilisateurs</h2>
                            <p class="mt-2 text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-blue-500">
                                {{ $userCount }}
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Carte 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <!-- SVG Icon de candidat -->
                        <svg class="w-24 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-4.418 0-8 3.582-8 8h16c0-4.418-3.582-8-8-8zm0-2a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                        <div class="ml-4">
                            <h2 class="text-xl font-semibold text-gray-800">Candidats</h2>
                            <p class="mt-2 text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-blue-500">
                                {{ $candidatCount }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800">Actions Rapides</h2>
                    <button class="mt-2 w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Modifier mon profil</button>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-bold text-white">Dernières Activités</h2>
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden mt-4">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-left">Date</th>
                        <th class="py-2 px-4 text-left">Activité</th>
                        <th class="py-2 px-4 text-left">Utilisateur</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4">22 Septembre 2024</td>
                        <td class="py-2 px-4">Mise à jour du projet</td>
                        <td class="py-2 px-4">Alice</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="py-2 px-4">21 Septembre 2024</td>
                        <td class="py-2 px-4">Nouveau membre ajouté</td>
                        <td class="py-2 px-4">Bob</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>

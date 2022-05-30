<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <title>Laravel CRUD</title>
    </head>
    <body>
    <h1>Listagem de Médicos Cadastrados</h1>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Médicos Cadastrados</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Confira aqui todos os médicos cadastrados.</p>
            </div>
            <div class="flex grid-cols-3 flex-wrap gap-5">
                <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <i class="fa-regular fa-user-doctor"></i>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Nome Médico</h2>
                    <p class="leading-relaxed text-base">Crm: </p>
                    <p class="leading-relaxed text-base">Especialidade: </p>
                    <p class="leading-relaxed text-base">Telefone: </p>
                    <div class="flex flex-row flex-wrap">
                        <button href="#" class="flex mx-auto text-white bg-indigo-500 text-sm p-1 border-0 focus:outline-none hover:bg-indigo-600 rounded text-lg">Editar</button>
                        <button href="#" class="flex mx-auto text-white bg-red-500 text-sm p-1 border-0 focus:outline-none hover:bg-red-600 rounded text-lg">Excluir</button>
                    </div>
                </div>
                <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <i class="fa-regular fa-user-doctor"></i>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Nome Médico</h2>
                    <p class="leading-relaxed text-base">Crm: </p>
                    <p class="leading-relaxed text-base">Especialidade: </p>
                    <p class="leading-relaxed text-base">Telefone: </p>
                    <div class="flex flex-row flex-wrap">
                        <button href="#" class="flex mx-auto text-white bg-indigo-500 text-sm p-1 border-0 focus:outline-none hover:bg-indigo-600 rounded text-lg">Editar</button>
                        <button href="#" class="flex mx-auto text-white bg-red-500 text-sm p-1 border-0 focus:outline-none hover:bg-red-600 rounded text-lg">Excluir</button>
                    </div>
                </div>
                <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <i class="fa-regular fa-user-doctor"></i>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Nome Médico</h2>
                    <p class="leading-relaxed text-base">Crm: </p>
                    <p class="leading-relaxed text-base">Especialidade: </p>
                    <p class="leading-relaxed text-base">Telefone: </p>
                    <div class="flex flex-row flex-wrap">
                        <button href="#" class="flex mx-auto text-white bg-indigo-500 text-sm p-1 border-0 focus:outline-none hover:bg-indigo-600 rounded text-lg">Editar</button>
                        <button href="#" class="flex mx-auto text-white bg-red-500 text-sm p-1 border-0 focus:outline-none hover:bg-red-600 rounded text-lg">Excluir</button>
                    </div>
                </div>
                <div class="border border-gray-200 p-6 rounded-lg">
                    <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <i class="fa-regular fa-user-doctor"></i>
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Nome Médico</h2>
                    <p class="leading-relaxed text-base">Crm: </p>
                    <p class="leading-relaxed text-base">Especialidade: </p>
                    <p class="leading-relaxed text-base">Telefone: </p>
                    <div class="flex flex-row flex-wrap">
                        <button href="#" class="flex mx-auto text-white bg-indigo-500 text-sm p-1 border-0 focus:outline-none hover:bg-indigo-600 rounded text-lg">Editar</button>
                        <button href="#" class="flex mx-auto text-white bg-red-500 text-sm p-1 border-0 focus:outline-none hover:bg-red-600 rounded text-lg">Excluir</button>
                    </div>
                </div>
            </div>
            <button href="#" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Adicionar Novo</button>
        </div>
    </section>
    </body>
</html>
